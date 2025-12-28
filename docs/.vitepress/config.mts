import { defineConfig } from 'vitepress'

// https://vitepress.dev/reference/site-config
export default defineConfig({
  title: "Extended HTMLDocument",
  description: "Documentation",
  base: '/extended-htmldocument/',
  cleanUrls: false,
  mpa: true,

  vite: {
    build: {
      rollupOptions: {
        output: {
          manualChunks: undefined,
        }
      }
    },
    server: {
      fs: {
        allow: ['../../templates/storybook/storybook-static']
      }
    }
  },

  themeConfig: {
    // https://vitepress.dev/reference/default-theme-config
    nav: [
      { text: 'Home', link: '/' },
      { text: 'Examples', link: '/usage-examples' }
    ],

    sidebar: [
      {
        text: 'Getting Started',
        items: [
          { text: 'Introduction', link: '/introduction' },
          { text: 'Feature Overview', link: '/features' },
          { text: 'Getting Started', link: '/getting-started' },
          { text: 'Element Classes', link: '/elements' },
          { text: 'HTML5 Specification', link: '/html5' },
          { text: 'Code Generation', link: '/code-generation' },
        ]
      },
      {
        text: 'Usage Examples',
        items: [
          { text: 'Basic Examples', link: '/usage-examples' },
          { text: 'Components in Design Systems', link: '/advanced-examples' },
          { text: 'Extend HTML5 Specification with CSS Framework', link: '/extending-html5-specifications' },
        ]
      },
      {
        text: 'Development',
        items: [
          { text: 'Roadmap', link: '/roadmap' },
          { text: 'Unit Tests ', link: '/unit-tests' },
          { text: 'PHP Mess Detector', link: '/phpmd' },
          { text: 'Issues', link: 'https://github.com/vardumper/extended-htmldocument/issues' },
        ]
      }
    ],

    footer: {
      message: 'Thanks for visiting!',
      copyright: '© 2025-present Erik Poehler'
    },

    socialLinks: [
      { icon: 'github', link: 'https://github.com/vardumper/extended-htmldocument' }
    ]
  }
})
