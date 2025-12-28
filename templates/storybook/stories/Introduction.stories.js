/**
 * Introduction to Extended HTML Document
 *
 * Welcome page for the HTML5 Elements Storybook
 */

export default {
  title: "Introduction",
  tags: ["introduction", "docs"],
  parameters: {
    layout: "fullscreen",
    docs: {
      description: {
        component: "Welcome to the Extended HTML Document HTML5 Elements Storybook!",
      },
    },
  },
  argTypes: {},
  render: () => {
    const container = document.createElement('div');
    container.style.cssText = `
      max-width: 800px;
      margin: 0 auto;
      padding: 2rem;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      line-height: 1.6;
      color: #333;
    `;

    container.innerHTML = `
      <header style="text-align: center; margin-bottom: 3rem;">
        <h1 style="color: #2c3e50; margin-bottom: 0.5rem; font-size: 2.5rem;">
          HTML5 Elements Storybook
        </h1>
        <p style="color: #7f8c8d; font-size: 1.2rem; margin: 0;">
          Interactive Documentation for HTML5 Elements
        </p>
      </header>

      <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 2rem; border-radius: 8px; margin-bottom: 2rem;">
        <h2 style="margin-top: 0; font-size: 1.5rem;">Welcome!</h2>
        <p style="margin: 0; font-size: 1.1rem;">
          This Storybook provides interactive documentation for all HTML5 elements with live controls and examples.
        </p>
      </div>

      <section style="margin-bottom: 2rem;">
        <h2 style="color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 0.5rem;">About This Storybook</h2>
        <p>
          This is a <strong>pure JavaScript implementation</strong> of Storybook stories for HTML5 elements. Each story demonstrates how to use HTML5 elements with proper attributes, ARIA support, and interactive controls.
        </p>
        <p>
          These stories serve as <strong>boilerplates</strong> for building more complex components. Use them as starting points to understand HTML5 element APIs and create your own custom components.
        </p>
      </section>

      <section style="margin-bottom: 2rem;">
        <h2 style="color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 0.5rem;">HTML5 Element Categories</h2>
        <p>Explore the different types of HTML5 elements:</p>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem; margin-top: 1rem;">
          <div style="border: 1px solid #ddd; padding: 1rem; border-radius: 4px;">
            <h3 style="color: #e74c3c; margin-top: 0;">Block Elements</h3>
            <p style="margin: 0;">Structural elements that create document sections and layouts.</p>
          </div>
          <div style="border: 1px solid #ddd; padding: 1rem; border-radius: 4px;">
            <h3 style="color: #27ae60; margin-top: 0;">Inline Elements</h3>
            <p style="margin: 0;">Elements that flow within text content and don't break the flow.</p>
          </div>
          <div style="border: 1px solid #ddd; padding: 1rem; border-radius: 4px;">
            <h3 style="color: #f39c12; margin-top: 0;">Void Elements</h3>
            <p style="margin: 0;">Self-closing elements that don't have content.</p>
          </div>
          <div style="border: 1px solid #ddd; padding: 1rem; border-radius: 4px;">
            <h3 style="color: #9b59b6; margin-top: 0;">Composed Elements</h3>
            <p style="margin: 0;">Complex elements that combine multiple HTML5 features.</p>
          </div>
        </div>
      </section>

      <section style="margin-bottom: 2rem;">
        <h2 style="color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 0.5rem;">Features</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1rem;">
          <div>
            <strong>Interactive Documentation</strong><br/>
            <small>Live Storybook interface for all HTML5 elements</small>
          </div>
          <div>
            <strong>ARIA Compliant</strong><br/>
            <small>Complete ARIA attribute support with proper validation</small>
          </div>
          <div>
            <strong>Auto-Generated</strong><br/>
            <small>Consistent stories across all HTML5 elements via schema-first approach</small>
          </div>
          <div>
            <strong>JavaScript Stories</strong><br/>
            <small>Pure JavaScript implementation (no MDX dependencies)</small>
          </div>
          <div>
            <strong>Design System Ready</strong><br/>
            <small>Perfect for component library documentation</small>
          </div>
        </div>
      </section>

      <section style="margin-bottom: 2rem;">
        <h2 style="color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 0.5rem;">Getting Started</h2>
        <ol style="background: #f8f9fa; padding: 1rem; border-radius: 4px;">
          <li><strong>Choose an element category</strong> from the sidebar</li>
          <li><strong>Select an HTML5 element</strong> to explore its properties</li>
          <li><strong>Use the interactive controls</strong> to test different configurations</li>
          <li><strong>Study the generated code</strong> as a reference for your own components</li>
          <li><strong>Copy and adapt</strong> the patterns for your component library</li>
        </ol>
      </section>

      <section style="text-align: center; margin-bottom: 2rem;">
        <h2 style="color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 0.5rem; display: inline-block;">Demo Site</h2>
        <p>
          Visit our <a href="https://vardumper.github.io/extended-htmldocument/storybook-site/" target="_blank" rel="noopener noreferrer" style="color: #3498db; text-decoration: none; font-weight: bold;">live demo</a> to see this Storybook in action!
        </p>
      </section>

      <footer style="text-align: center; color: #7f8c8d; border-top: 1px solid #ddd; padding-top: 2rem; margin-top: 3rem;">
        <p style="font-style: italic;">
          Built with Storybook for interactive HTML5 element documentation.
        </p>
      </footer>
    `;

    return container;
  },
};

export const Welcome = {
  parameters: {
    docs: {
      description: {
        story: 'Welcome to Extended HTML Document - your comprehensive HTML5 elements library with full accessibility support.'
      },
    },
  },
  args: {},
};