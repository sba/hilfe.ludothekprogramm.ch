import findIndex from 'lodash/findIndex';

export default {
  methods: {
    $handleKeydown(event) {
      // 75 - k
      if ((event.ctrlKey || event.metaKey) && !event.shiftKey && !event.altKey && event.keyCode === 75) {
        event.preventDefault();
        this.isOpen = true;

        return true;
      }

      // 27 - escape
      if (event.keyCode === 27 && this.isOpen) {
        this.isOpen = false;

        return true;
      }

      if (this.items?.length) {
        // 38 - up
        if (event.keyCode === 38) {
          event.preventDefault();
          if (!this.selected) {
            this.selected = this.items[this.items.length - 1];
          } else {
            const previous =  findIndex(this.items, { objectID :this.selected.objectID }) - 1;
            this.selected = this.items[previous < 0 ? this.items.length - 1 : previous];
          }

          const element = (this.$refs[`search-item-${this.selected.objectID}`] || [])[0];
          element.scrollIntoView({ block: 'nearest' });

          return true;
        }

        // 40 - down
        if (event.keyCode === 40) {
          event.preventDefault();
          if (!this.selected) {
            this.selected = this.items[0];
          } else {
            const next = findIndex(this.items, { objectID :this.selected.objectID }) + 1;
            this.selected = this.items[next > this.items.length - 1 ? 0 : next];
          }

          const element = (this.$refs[`search-item-${this.selected.objectID}`] || [])[0];
          element.scrollIntoView({ block: 'nearest' });

          return true;
        }
      }

      // 37 - left / 39 - right
      if ((event.keyCode === 37 || event.keyCode === 39) && this.isOpen) {}

      // 13 - return
      if (event.keyCode === 13 && (this.selected || this.items?.length)) {
        event.preventDefault();
        window.location.href = `${this.dataSet.rootUrl}${this.selected?.url || this.items[0]?.url}`;
        this.isOpen = false;
        return true;
      }
    }
  },
}