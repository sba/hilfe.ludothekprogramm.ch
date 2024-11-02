# v1.0.15
## 02/03/2024

2. [](#bugfix)
   * Fixed a long-standing bug when not having a `user/plugins/` already existing [getgrav/grav-plugin-admin#2395](https://github.com/getgrav/grav-plugin-admin/issues/2395)


# v1.0.14
## 08/02/2023

2. [](#bugfix)
   * Removed errant `onAlgoliaProPageSkip` listener


# v1.0.13
## 08/01/2023

2. [](#bugfix)
   * Fixed an issue with an unpublished page getting indexed
   
# v1.0.12
## 05/10/2023

2. [](#bugfix)
   * Fix issue when indexing via Admin and the browser's language is not set to the default language of the Grav site causing wrong pages in browser language to be indexed into the default language algolia index. 

# v1.0.11
## 05/03/2023

2. [](#bugfix)
    * Fixed a bug where reindexing multi-language setup with `flush = true` was not clearing language-based indexes
    * Only index page when it's a regular page `save`, not on `copy` where the page language is not fully resolved which resulted in pages being indexed in wrong language index.

# v1.0.10
## 04/28/2023

2. [](#bugfix)
    * Fixed a bug that caused old records not to be removed when updating an entry

# v1.0.9
## 04/20/2023

1. [](#improved)
   * Better check for `application/json` that works when gzipped [#351](https://github.com/getgrav/grav-premium-issues/issues/351)
2. [](#bugfix)
   * Fixed an issue with controller configuration based on `lang` [#350](https://github.com/getgrav/grav-premium-issues/issues/350)

# v1.0.8
## 01/13/2023

1. [](#improved)
   * Algolia-pro now initiates `attributesToSnippet` during indexing

# v1.0.7
## 01/11/2023

1. [](#improved)
   * Fix for languages reordering when specifying a single language
   * Added custom `onAlgoliaProPageSkip()` event to allow custom logic for skipping
   * Added `content.skip_empty` configuration option
   * Vendor library updates
2. [](#bugfix)
   * Support for bad UTF-8 characters in search record

# v1.0.6
## 05/11/2022

1. [](#improved)
   * Add a message for `--verbose` to notify you when a page was cached locally
   * Updated default `crawl` configuration to include `snippet` to show up in frontend UI
   * More useful CLI progress bar info with `Index Config:` and `Algolia Index:` values
2. [](#bugfix)
   * Fixed for `options['indexes']` throwing errors
   * Fixed `crawl` queries using wrong index from CLI
   * Fixed an issue with `index --verbose` option resulting in exceptions or bad output

# v1.0.5
## 04/25/2022

1. [](#improved)
   * Try all the configured CSS selectors in the when indexing with the `CrawlPageSearch` class [getgrav/grav-premium-issues#280](https://github.com/getgrav/grav-premium-issues/issues/280)
   * Scoped `base` and `components` CSS to prevent from taking over the parent theme. [getgrav/grav-premium-issues#277](https://github.com/getgrav/grav-premium-issues/issues/277)

# v1.0.4
## 03/14/2022

1. [](#new)
    * Added method `FlexSearch::checkObject()` which must be implemented in overriding classes

# v1.0.3
## 02/02/2022

1. [](#new)
   * cache the plugin's `getPluginMergedSettings()` method to save on API calls

# v1.0.2
## 01/31/2022

1. [](#new)
   * Added abstract `Grav\Plugin\AlgoliaPro\FlexSearch` class to help index Flex Objects

# v1.0.1
## 01/12/2022

1. [](#new)
   * Added keyboard navigation (`↑`/`↓`, `↵` and `esc`)
   * Added keyboard trigger `⌘ + k` [getgrav/grav-premium-issues#193](https://github.com/getgrav/grav-premium-issues/issues/193)
   * Added new debounce option to delay search inputs and reduce Algolia search operations. Disabled by default. [getgrav/grav-premium-issues#199](https://github.com/getgrav/grav-premium-issues/issues/199)
   * Added option to disable the TOC Anchor subtitle that shows next to tiles in parentheses [getgrav/grav-premium-issues#198](https://github.com/getgrav/grav-premium-issues/issues/198)
2. [](#improved)
   * Better style reset for the search input, previously inheriting default webkit styling [getgrav/grav-premium-issues#196](https://github.com/getgrav/grav-premium-issues/issues/196)
3. [](#bugfix)
   * Preview options were not set correctly by blueprint [getgrav/grav-premium-issues#197](https://github.com/getgrav/grav-premium-issues/issues/197)
   * Do not display Vue DevTools tip message in console [getgrav/grav-premium-issues#195](https://github.com/getgrav/grav-premium-issues/issues/195)

# v1.0.0
## 01/06/2022

1. [](#new)
   * Initial release
