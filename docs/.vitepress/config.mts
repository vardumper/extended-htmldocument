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
        text: 'Usage',
        items: [
          { text: 'Examples', link: '/examples' },
          { text: 'Advanced Examples', link: '/advanced-examples' },
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
