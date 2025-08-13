import { defineConfig } from 'vite'

export default defineConfig({
  // Configuration for PHP-based project
  root: '.',
  build: {
    outDir: 'dist',
    rollupOptions: {
      input: {
        main: 'index.html'
      }
    }
  },
  server: {
    port: 3000,
    open: 'index.php'
  },
  // Allow PHP files to be served in development
  assetsInclude: ['**/*.php']
})