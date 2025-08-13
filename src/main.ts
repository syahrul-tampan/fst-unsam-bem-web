// Minimal TypeScript entry point for build system compatibility
// This file exists only to satisfy the build configuration
// The actual application runs on PHP

console.log('BEM FST UNSAM - PHP Application')

// Redirect to PHP if accessed directly
if (window.location.pathname.endsWith('.html')) {
  window.location.href = 'index.php'
}