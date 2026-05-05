/**
 * algolia-pro-indexes — admin-next custom field for managing the list of
 * Algolia Pro indexes. Renders a card list with inline expand/edit and
 * full add/delete; the parent BlueprintForm receives the changed array via
 * a `change` event whose detail is the entire indexes list.
 *
 * Per-type schema differences (filters.items vs body_selectors) are handled
 * inline rather than by fetching resolved blueprints, since the diff is two
 * fields and not worth a network round-trip.
 */

const TAG = window.__GRAV_FIELD_TAG;

const DEFAULT_INDEX = (type) => {
    const base = {
        enabled: true,
        type,
        distinct_field: 'url',
        searchable_fields: ['title', 'url', 'content'],
        search_params: {
            hitsPerPage: 20,
            distinct: true,
            snippetEllipsisText: '…',
            attributesToSnippet: ['summary:50', 'content:50'],
        },
        interface: {
            css: true,
            debounce: false,
            accent: '#3B82F6',
            appearance: 'system',
            stats: true,
            subtitle: true,
            warm_connection: true,
            preview: { enabled: true, toc: true },
            footer: { enabled: true, pagination: true, algolia_copy: true, algolia_pro_copy: true },
            advanced: { expose_global: false },
        },
        content: {
            valid_headers: ['h1', 'h2', 'h3', 'h4'],
            split_length: 1000,
        },
    };

    if (type === 'algolia-grav-pages') {
        base.search_class = 'Grav\\Plugin\\AlgoliaPro\\GravPageSearch';
        base.filters = { items: ['root@.descendants'] };
    } else if (type === 'algolia-crawl-pages') {
        base.search_class = 'Grav\\Plugin\\AlgoliaPro\\CrawlPageSearch';
        base.body_selectors = ['#body-wrapper', '.magic-content'];
    }

    return base;
};

class AlgoliaProIndexesField extends HTMLElement {
    constructor() {
        super();
        this.attachShadow({ mode: 'open' });
        this._field = null;
        this._value = [];
        this._searchTypes = [];
        this._expanded = new Set();
        this._loadingTypes = false;
    }

    set field(v) { this._field = v; this._render(); }
    get field() { return this._field; }

    set value(v) {
        const next = Array.isArray(v) ? v : [];
        if (JSON.stringify(next) !== JSON.stringify(this._value)) {
            this._value = JSON.parse(JSON.stringify(next));
            this._render();
        }
    }
    get value() { return this._value; }

    connectedCallback() {
        this._fetchSearchTypes();
        this._render();
    }

    // ─── API helpers ─────────────────────────────────
    _apiUrl(path) {
        return (window.__GRAV_API_SERVER_URL || '') +
               (window.__GRAV_API_PREFIX || '/api/v1') + path;
    }

    _headers() {
        const h = {};
        const token = window.__GRAV_API_TOKEN;
        if (token) h['X-API-Token'] = token;
        return h;
    }

    async _fetchSearchTypes() {
        if (this._loadingTypes || this._searchTypes.length) return;
        this._loadingTypes = true;
        try {
            const resp = await fetch(this._apiUrl('/algolia-pro/search-types'), {
                headers: this._headers(),
            });
            const json = await resp.json();
            this._searchTypes = (json.data || json || []).filter(t => t && t.value);
        } catch (e) {
            console.warn('[algolia-pro] Failed to load search types:', e.message);
            this._searchTypes = [
                { value: 'algolia-grav-pages', label: 'Grav Pages Search' },
                { value: 'algolia-crawl-pages', label: 'Crawl Pages Search' },
            ];
        } finally {
            this._loadingTypes = false;
            this._render();
        }
    }

    // ─── Mutation ────────────────────────────────────
    _commit() {
        this.dispatchEvent(new CustomEvent('change', {
            detail: JSON.parse(JSON.stringify(this._value)),
            bubbles: true,
        }));
    }

    _addIndex() {
        const baseName = 'new-index';
        let name = baseName;
        let i = 1;
        const taken = new Set(this._value.map(idx => idx.name));
        while (taken.has(name)) {
            name = `${baseName}-${++i}`;
        }
        const type = this._searchTypes[0]?.value || 'algolia-grav-pages';
        this._value = [...this._value, { name, ...DEFAULT_INDEX(type) }];
        this._expanded.add(name);
        this._commit();
        this._render();
    }

    _deleteIndex(name) {
        this._value = this._value.filter(idx => idx.name !== name);
        this._expanded.delete(name);
        this._commit();
        this._render();
    }

    _toggleExpand(name) {
        if (this._expanded.has(name)) this._expanded.delete(name);
        else this._expanded.add(name);
        this._render();
    }

    _updateField(indexName, path, val) {
        const next = JSON.parse(JSON.stringify(this._value));
        const idx = next.find(i => i.name === indexName);
        if (!idx) return;

        const parts = path.split('.');
        let cur = idx;
        for (let i = 0; i < parts.length - 1; i++) {
            const key = parts[i];
            if (typeof cur[key] !== 'object' || cur[key] === null) cur[key] = {};
            cur = cur[key];
        }
        cur[parts[parts.length - 1]] = val;

        // Renaming: track expansion state under new key
        if (path === 'name' && val !== indexName) {
            if (this._expanded.has(indexName)) {
                this._expanded.delete(indexName);
                this._expanded.add(val);
            }
        }

        this._value = next;
        this._commit();
        // Selective re-render: full render is fine here since list is small
        this._render();
    }

    // ─── Rendering ───────────────────────────────────
    _render() {
        const root = this.shadowRoot;
        root.innerHTML = `
            <style>${this._styles()}</style>
            <div class="wrap">
                ${this._value.length === 0 ? this._emptyState() : this._value.map(idx => this._renderCard(idx)).join('')}
                <button type="button" class="add-btn" data-action="add">
                    <span class="plus">+</span>
                    Add Index
                </button>
            </div>
        `;
        this._wireEvents();
    }

    _emptyState() {
        return `
            <div class="empty">
                <p>No indexes configured yet.</p>
                <p class="muted">Add an index to start syncing content with Algolia.</p>
            </div>
        `;
    }

    _renderCard(idx) {
        const expanded = this._expanded.has(idx.name);
        const typeLabel = this._searchTypes.find(t => t.value === idx.type)?.label || idx.type || 'Unknown';
        return `
            <div class="card ${expanded ? 'expanded' : ''}" data-name="${this._escape(idx.name)}">
                <div class="card-header" data-action="toggle" data-name="${this._escape(idx.name)}">
                    <label class="enabled-toggle" data-stop-toggle>
                        <input type="checkbox" ${idx.enabled ? 'checked' : ''} data-action="toggle-enabled" data-name="${this._escape(idx.name)}" />
                        <span class="switch"></span>
                    </label>
                    <div class="card-title">
                        <span class="card-name">${this._escape(idx.name)}</span>
                        <span class="card-type">${this._escape(typeLabel)}</span>
                    </div>
                    <button type="button" class="icon-btn danger" data-action="delete" data-name="${this._escape(idx.name)}" title="Delete index" data-stop-toggle>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                    </button>
                    <span class="chevron ${expanded ? 'open' : ''}">▸</span>
                </div>
                ${expanded ? this._renderEditor(idx) : ''}
            </div>
        `;
    }

    _renderEditor(idx) {
        const i = idx;
        const sp = i.search_params || {};
        const ui = i.interface || {};
        const content = i.content || {};
        const isGrav = i.type === 'algolia-grav-pages';
        const isCrawl = i.type === 'algolia-crawl-pages';

        return `
            <div class="editor">
                <div class="grid">
                    <div class="row">
                        <label>Index Name</label>
                        <input type="text" value="${this._escape(i.name)}" data-name="${this._escape(i.name)}" data-path="name" />
                    </div>
                    <div class="row">
                        <label>Index Type</label>
                        <select data-name="${this._escape(i.name)}" data-path="type">
                            ${this._searchTypes.map(t => `
                                <option value="${this._escape(t.value)}" ${i.type === t.value ? 'selected' : ''}>${this._escape(t.label)}</option>
                            `).join('')}
                        </select>
                    </div>
                </div>

                <div class="section-title">Core</div>
                <div class="grid">
                    <div class="row">
                        <label>Distinct Field</label>
                        <input type="text" value="${this._escape(i.distinct_field || '')}" data-name="${this._escape(i.name)}" data-path="distinct_field" />
                    </div>
                    <div class="row">
                        <label>Hits Per Page</label>
                        <input type="number" min="1" max="100" value="${this._escape(sp.hitsPerPage ?? 20)}" data-name="${this._escape(i.name)}" data-path="search_params.hitsPerPage" data-numeric />
                    </div>
                </div>

                <div class="row">
                    <label>Searchable Fields</label>
                    ${this._renderArrayField(i.name, 'searchable_fields', i.searchable_fields || [])}
                </div>

                <div class="row">
                    <label>Attributes to Snippet</label>
                    ${this._renderArrayField(i.name, 'search_params.attributesToSnippet', sp.attributesToSnippet || [])}
                </div>

                ${isGrav ? `
                    <div class="section-title">Page Filters</div>
                    <div class="row">
                        <label>Filter Items</label>
                        ${this._renderArrayField(i.name, 'filters.items', i.filters?.items || [])}
                    </div>
                ` : ''}

                ${isCrawl ? `
                    <div class="section-title">Crawl Targets</div>
                    <div class="row">
                        <label>Body Selectors</label>
                        ${this._renderArrayField(i.name, 'body_selectors', i.body_selectors || [])}
                    </div>
                ` : ''}

                <div class="section-title">Interface</div>
                <div class="grid">
                    <div class="row">
                        <label>Accent Color</label>
                        <input type="color" value="${this._escape(ui.accent || '#3B82F6')}" data-name="${this._escape(i.name)}" data-path="interface.accent" />
                    </div>
                    <div class="row">
                        <label>Appearance</label>
                        <select data-name="${this._escape(i.name)}" data-path="interface.appearance">
                            <option value="system" ${ui.appearance === 'system' ? 'selected' : ''}>System Default</option>
                            <option value="light" ${ui.appearance === 'light' ? 'selected' : ''}>Light</option>
                            <option value="dark" ${ui.appearance === 'dark' ? 'selected' : ''}>Dark</option>
                        </select>
                    </div>
                </div>

                <div class="section-title">Content</div>
                <div class="grid">
                    <div class="row">
                        <label>Chunk Size (chars)</label>
                        <input type="number" min="100" value="${this._escape(content.split_length ?? 1000)}" data-name="${this._escape(i.name)}" data-path="content.split_length" data-numeric />
                    </div>
                </div>

                <p class="advanced-hint">
                    Advanced options (preview, footer toggles, etc.) live in <code>config/plugins/algolia-pro.yaml</code> and are preserved on save.
                </p>
            </div>
        `;
    }

    _renderArrayField(indexName, path, items) {
        return `
            <div class="array-field" data-name="${this._escape(indexName)}" data-path="${this._escape(path)}">
                ${items.map((item, i) => `
                    <div class="array-item">
                        <input type="text" value="${this._escape(item)}" data-array-index="${i}" />
                        <button type="button" class="icon-btn small" data-array-action="remove" data-array-index="${i}" title="Remove">×</button>
                    </div>
                `).join('')}
                <button type="button" class="array-add" data-array-action="add">+ Add</button>
            </div>
        `;
    }

    // ─── Event wiring ────────────────────────────────
    _wireEvents() {
        const root = this.shadowRoot;

        root.querySelector('[data-action="add"]')?.addEventListener('click', (e) => {
            e.preventDefault();
            this._addIndex();
        });

        root.querySelectorAll('.card-header').forEach(h => {
            h.addEventListener('click', (e) => {
                if (e.target.closest('[data-stop-toggle]')) return;
                const name = h.getAttribute('data-name');
                this._toggleExpand(name);
            });
        });

        root.querySelectorAll('[data-action="toggle-enabled"]').forEach(input => {
            input.addEventListener('change', (e) => {
                const name = input.getAttribute('data-name');
                this._updateField(name, 'enabled', e.target.checked);
            });
        });

        root.querySelectorAll('[data-action="delete"]').forEach(btn => {
            btn.addEventListener('click', async (e) => {
                e.stopPropagation();
                const name = btn.getAttribute('data-name');
                const ok = await (window.__GRAV_DIALOGS?.confirm({
                    title: 'Delete index?',
                    message: `Remove the "${name}" index from this configuration? Data already pushed to Algolia is not affected.`,
                    confirmLabel: 'Delete',
                    variant: 'destructive',
                }) ?? Promise.resolve(true));
                if (ok) this._deleteIndex(name);
            });
        });

        // Editor inputs
        root.querySelectorAll('.editor input[data-path], .editor select[data-path]').forEach(el => {
            el.addEventListener('change', () => {
                const name = el.getAttribute('data-name');
                const path = el.getAttribute('data-path');
                let val = el.type === 'checkbox' ? el.checked : el.value;
                if (el.hasAttribute('data-numeric')) val = Number(val);
                if (path === 'type') {
                    // Switching type: merge in type-specific defaults so the right
                    // fields (filters.items / body_selectors) appear without
                    // wiping the user's other configuration.
                    const idx = this._value.find(x => x.name === name);
                    if (idx) {
                        const defaults = DEFAULT_INDEX(val);
                        if (val === 'algolia-grav-pages') {
                            idx.filters = idx.filters || defaults.filters;
                            idx.search_class = defaults.search_class;
                            delete idx.body_selectors;
                        } else if (val === 'algolia-crawl-pages') {
                            idx.body_selectors = idx.body_selectors || defaults.body_selectors;
                            idx.search_class = defaults.search_class;
                            delete idx.filters;
                        }
                    }
                }
                this._updateField(name, path, val);
            });
        });

        // Array-field inputs
        root.querySelectorAll('.array-field').forEach(group => {
            const indexName = group.getAttribute('data-name');
            const path = group.getAttribute('data-path');

            group.querySelectorAll('input[data-array-index]').forEach(input => {
                input.addEventListener('change', () => {
                    const i = Number(input.getAttribute('data-array-index'));
                    const arr = [...(this._readPath(indexName, path) || [])];
                    arr[i] = input.value;
                    this._updateField(indexName, path, arr);
                });
            });

            group.querySelectorAll('[data-array-action="remove"]').forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    const i = Number(btn.getAttribute('data-array-index'));
                    const arr = [...(this._readPath(indexName, path) || [])];
                    arr.splice(i, 1);
                    this._updateField(indexName, path, arr);
                });
            });

            group.querySelector('[data-array-action="add"]')?.addEventListener('click', (e) => {
                e.preventDefault();
                const arr = [...(this._readPath(indexName, path) || []), ''];
                this._updateField(indexName, path, arr);
            });
        });
    }

    _readPath(indexName, path) {
        const idx = this._value.find(i => i.name === indexName);
        if (!idx) return undefined;
        const parts = path.split('.');
        let cur = idx;
        for (const p of parts) {
            if (cur == null) return undefined;
            cur = cur[p];
        }
        return cur;
    }

    _escape(s) {
        return String(s ?? '')
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;');
    }

    _styles() {
        return `
            :host { display: block; font-family: inherit; color: var(--foreground); }
            * { box-sizing: border-box; }
            .wrap { display: flex; flex-direction: column; gap: 8px; }

            .empty {
                padding: 32px 16px;
                text-align: center;
                border: 1px dashed var(--border);
                border-radius: 8px;
                color: var(--muted-foreground);
            }
            .empty p { margin: 0 0 4px 0; }
            .empty .muted { font-size: 13px; opacity: 0.7; }

            .card {
                border: 1px solid var(--border);
                border-radius: 8px;
                background: var(--background);
                overflow: hidden;
                transition: border-color 0.15s;
            }
            .card.expanded { border-color: var(--primary); }

            .card-header {
                display: flex;
                align-items: center;
                gap: 12px;
                padding: 10px 12px;
                cursor: pointer;
                user-select: none;
            }
            .card-header:hover { background: var(--accent); }

            .card-title {
                flex: 1;
                display: flex;
                flex-direction: column;
                gap: 2px;
                min-width: 0;
            }
            .card-name {
                font-weight: 600;
                font-size: 14px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
            .card-type {
                font-size: 12px;
                color: var(--muted-foreground);
            }

            .chevron {
                display: inline-block;
                font-size: 11px;
                color: var(--muted-foreground);
                transition: transform 0.15s;
            }
            .chevron.open { transform: rotate(90deg); }

            /* Toggle switch */
            .enabled-toggle {
                position: relative;
                display: inline-block;
                width: 36px;
                height: 20px;
                flex-shrink: 0;
            }
            .enabled-toggle input { display: none; }
            .switch {
                position: absolute;
                inset: 0;
                background: var(--muted);
                border-radius: 20px;
                cursor: pointer;
                transition: background 0.15s;
            }
            .switch::before {
                content: '';
                position: absolute;
                top: 2px;
                left: 2px;
                width: 16px;
                height: 16px;
                background: white;
                border-radius: 50%;
                transition: transform 0.15s;
                box-shadow: 0 1px 2px rgba(0,0,0,0.2);
            }
            .enabled-toggle input:checked + .switch { background: var(--primary); }
            .enabled-toggle input:checked + .switch::before { transform: translateX(16px); }

            /* Buttons */
            .icon-btn {
                background: transparent;
                border: 1px solid transparent;
                color: var(--muted-foreground);
                padding: 6px;
                border-radius: 4px;
                cursor: pointer;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                transition: all 0.15s;
            }
            .icon-btn:hover { background: var(--accent); color: var(--foreground); }
            .icon-btn.danger:hover {
                background: rgba(239, 68, 68, 0.1);
                color: rgb(239, 68, 68);
            }
            .icon-btn.small { padding: 2px 8px; font-size: 18px; line-height: 1; }

            .add-btn {
                margin-top: 4px;
                padding: 8px 14px;
                background: var(--background);
                border: 1px dashed var(--border);
                border-radius: 6px;
                color: var(--muted-foreground);
                cursor: pointer;
                font-size: 13px;
                font-weight: 500;
                display: inline-flex;
                align-items: center;
                gap: 6px;
                align-self: flex-start;
                transition: all 0.15s;
            }
            .add-btn:hover {
                border-color: var(--primary);
                color: var(--primary);
                background: var(--accent);
            }
            .add-btn .plus { font-size: 16px; line-height: 1; }

            /* Editor */
            .editor {
                padding: 12px 16px 16px;
                border-top: 1px solid var(--border);
                background: color-mix(in srgb, var(--background) 96%, var(--foreground));
            }

            .section-title {
                margin: 16px 0 8px;
                font-size: 11px;
                font-weight: 700;
                letter-spacing: 0.05em;
                text-transform: uppercase;
                color: var(--muted-foreground);
            }
            .section-title:first-child { margin-top: 0; }

            .grid {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 10px 14px;
            }

            .row {
                display: flex;
                flex-direction: column;
                gap: 4px;
            }
            .row label {
                font-size: 12px;
                font-weight: 500;
                color: var(--muted-foreground);
            }
            .row input[type="text"], .row input[type="number"], .row input[type="color"], .row select {
                padding: 6px 8px;
                border: 1px solid var(--border);
                border-radius: 4px;
                background: var(--background);
                color: var(--foreground);
                font-family: inherit;
                font-size: 13px;
            }
            .row input[type="color"] {
                padding: 2px;
                height: 32px;
                width: 60px;
                cursor: pointer;
            }
            .row input:focus, .row select:focus {
                outline: 2px solid var(--primary);
                outline-offset: -1px;
                border-color: var(--primary);
            }

            /* Array field */
            .array-field {
                display: flex;
                flex-direction: column;
                gap: 4px;
                padding: 6px;
                border: 1px solid var(--border);
                border-radius: 4px;
                background: var(--background);
            }
            .array-item {
                display: flex;
                gap: 4px;
                align-items: center;
            }
            .array-item input {
                flex: 1;
                padding: 4px 8px;
                border: 1px solid var(--border);
                border-radius: 3px;
                background: var(--background);
                color: var(--foreground);
                font-size: 12px;
                font-family: inherit;
            }
            .array-add {
                background: transparent;
                border: 1px dashed var(--border);
                border-radius: 3px;
                color: var(--muted-foreground);
                padding: 4px 8px;
                cursor: pointer;
                font-size: 12px;
                align-self: flex-start;
            }
            .array-add:hover {
                border-color: var(--primary);
                color: var(--primary);
            }

            .advanced-hint {
                margin: 14px 0 0 0;
                padding: 8px 10px;
                font-size: 12px;
                color: var(--muted-foreground);
                background: var(--muted);
                border-radius: 4px;
            }
            .advanced-hint code {
                font-family: ui-monospace, monospace;
                font-size: 11px;
            }
        `;
    }
}

customElements.define(TAG, AlgoliaProIndexesField);
