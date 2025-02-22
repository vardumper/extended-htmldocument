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
      { text: 'Examples', link: '/markdown-examples' }
    ],

    sidebar: [
      {
        text: 'Examples',
        items: [
          { text: 'Markdown Examples', link: '/markdown-examples' },
          { text: 'Runtime API Examples', link: '/api-examples' }
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
