import { defineConfig } from 'vite'

export default defineConfig({
  // Basic configuration for PHP project
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
  }
})