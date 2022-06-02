import { defineConfig } from 'vite'
import { createVuePlugin } from 'vite-plugin-vue2'

export default defineConfig({
  plugins: [
    createVuePlugin()
  ],
  resolve: {
    alias: {
      vue: 'vue/dist/vue.js'
    },
  },
  build: {
    outDir: '../build/js',
    rollupOptions: {
      output: {
        entryFileNames: `algolia-pro.js`,
        chunkFileNames: `vendor.js`,
      }
    },
  },
  server: {
    port: 4050,
  },
})
