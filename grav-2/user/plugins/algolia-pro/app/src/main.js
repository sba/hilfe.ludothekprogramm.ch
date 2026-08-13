import Vue from 'vue';
import InstantSearch from 'vue-instantsearch';
import algoliasearch from 'algoliasearch/lite';
import debounce from 'lodash/debounce';
import handleKeydown from './utils/handleKeydown.js';

Vue.use(InstantSearch);
Vue.config.productionTip = false;
Vue.config.devtools = false;

const elements = document.querySelectorAll('[data-algolia-pro]') || [];
const AlgoliaPro = [];
const AlgoliaProPublic = [];

elements.forEach((element, index) => {
  const data = JSON.parse(atob(element.dataset.algoliaPro) || '{}');
  const algoliaClient = algoliasearch(data.app_id, data.api_key);
  const debounceTime = data.debounce || 0;

  const instance = new Vue({
    el: element,
    name: `GravAlgoliaPro-${index}`,
    delimiters: ['[[', ']]'],
    mixins: [handleKeydown],
    data() {
      const system = window.matchMedia('(prefers-color-scheme: dark)');

      return {
        isOpen: false,
        selected: null,
        items: null,
        query: null,
        dataSet: data,
        activeAppearance: system.matches ? 'dark' : 'light',
        isDark: system.matches,
        mq: system,
        warmConnection: data.warmConnection,
        appearance: data.appearance,
        searchClient: {
          ...algoliaClient,
          search: (requests) => {
            if (!this.warmConnection) {
              this.warmConnection = true;
              return Promise.resolve({
                results: requests.map(() => ({
                  hits: [],
                  nbHits: 0,
                  nbPages: 0,
                  page: 0,
                  processingTimeMS: 0,
                })),
              });
            }

            return algoliaClient.search(requests);
          },
        },
      }
    },
    watch: {
      isOpen(value) {
        if (value) {
          document.activeElement.blur();
          this.$nextTick(() => {
            this.$refs.searchbox?.focus();
          });
        }
      }
    },
    computed: {
      algoliaProAppearance() {
        return {
          light: this.appearance === 'light' || (this.appearance === 'system' && !this.isDark),
          dark: this.appearance === 'dark' || (this.appearance === 'system' && this.isDark),
        };
      },
    },
    mounted() {
      document.addEventListener('keydown', this.$handleKeydown);
      this.mq.addEventListener('change', this.$mqHandler);
    },
    beforeDestroy() {
      document.removeEventListener('keydown', this.$handleKeydown);
      this.mq.removeEventListener('change', this.$mqHandler);
    },
    methods: {
      isSelected(item) {
        return this.selected
               ? this.selected.objectID === item.objectID
               : false;
      },
      setAppearance(appearance) {
        const systemTheme = this.mq.matches
                            ? 'dark'
                            : 'light';
        this.appearance = appearance;
        this.activeAppearance = appearance === 'system'
                                ? systemTheme
                                : appearance;
        this.isDark = (appearance === 'system'
                       ? systemTheme
                       : appearance) === 'dark';
      },
      refineWrapper: debounce(function(refine, value) {
        if (!value) {
          this.selected = '';
          this.items = null;
        }

        this.query = value;
        return refine(this.query);
      }, debounceTime),
      transformItems(items) {
        this.items = items;
        return items;
      },
      $mqHandler(event) {
        this.isDark = event.matches;
        this.activeAppearance = this.isDark ? 'dark' : 'light';
      },
    }
  });

  AlgoliaPro.push(instance);
  data.expose = true;
  AlgoliaProPublic.push(data.expose ? instance : 'protected');
});

document.addEventListener('click', (event) => {
  const trigger = event.target.closest('[data-algolia-pro-trigger]');
  if (!trigger) {
    return true;
  }

  const index = trigger.dataset.algoliaProTrigger || '0';

  if (AlgoliaPro[index] === 'protected') {
    return true;
  }

  if (!AlgoliaPro[index]) {
    // eslint-disable-next-line no-console
    console.error(`AlgolaPro: index "${index}" does not exist. (initialized by data-algolia-pro-trigger="${index}")`);
    return true;
  }

  event.preventDefault();
  event.stopPropagation();

  AlgoliaPro[index].isOpen = true;

  return false;
}, false);

window.AlgoliaPro = AlgoliaProPublic;
