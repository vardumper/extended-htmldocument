import { defineConfig } from 'vitepress'

// https://vitepress.dev/reference/site-config
export default defineConfig({
  title: "Extended HTMLDocument",
  description: "Documentation",
  base: '/extended-htmldocument/',

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
          { text: 'Introduction', link: '/intro' },
          { text: 'Installation', link: '/install' },
          { text: 'Element Classes', link: '/elements' },
          { text: 'HTML5 Specification', link: '/html5' },
          { text: 'Code Generation', link: '/code-generation' } // adding 'Code Generation'
        ]
      },
      {
        text: 'Usage Examples',
        items: [
          { text: 'Basic Examples', link: '/usage-examples' },
          { text: 'Components in Design Systems', link: '/advanced-examples' },
          { text: 'Extend HTML5 Specification with CSS Framework', link: '/extending-html5-specifications' },
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
