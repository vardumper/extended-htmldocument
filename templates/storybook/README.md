# Storybook HTML5 Element Stories

**Compatible with Storybook v8+ (tested with v10)**

A comprehensive collection of auto-generated Storybook stories for all HTML5 elements, providing interactive documentation and testing capabilities for web components and HTML elements.

## 🚀 Quick Start - Drop-in Solution

Getting started is incredibly simple:

1. **Create or open your Storybook project**
   ```bash
   npx storybook@latest init
   ```

2. **Drop in the templates**
   - Copy the `storybook` folder to your storybook folder
   - Rename it to `stories` (or your configured stories directory)

3. **Done!**
   - Start Storybook: `npm run storybook`
   - All HTML5 elements are now available in your Storybook

That's it! No configuration needed. All stories are ready to use immediately.

## 📁 Structure

```
storybook/
├── inline/          # Inline elements (a, span, strong, etc.)
│   ├── a.stories.js
│   ├── abbr.stories.js
│   └── ...
├── block/           # Block elements (div, section, article, etc.)
│   ├── article.stories.js
│   ├── aside.stories.js
│   └── ...
├── void/            # Void/self-closing elements (img, input, meta, etc.)
│   ├── img.stories.js
│   ├── input.stories.js
│   └── ...
└── composed/        # Composed examples showing valid parent-child relationships
    ├── form.composed.stories.js
    ├── table.composed.stories.js
    └── ...
```

## ✨ Features

### Complete HTML5 Coverage
- **113 HTML5 elements** with full documentation
- All **global attributes** (id, class, data-*, aria-*, etc.)
- **Element-specific attributes** with proper types and validation
- **Enum attributes** with dropdown selectors showing all valid values
- **ARIA support** with all applicable ARIA attributes

### Interactive Controls
Every story includes Storybook controls for:
- **Text inputs** for string attributes
- **Number inputs** for numeric attributes
- **Boolean toggles** for true/false attributes
- **Select dropdowns** for enum values (with empty option)
- **Object editors** for data-* attributes

### Composed Examples
The `composed/` folder contains **17 sophisticated examples** demonstrating:
- **Valid parent-child relationships** based on HTML5 content model
- **Realistic usage patterns** (forms with inputs, tables with rows, lists with items)
- **Priority elements** showing the most common children
- **Proper nesting** respecting uniqueness constraints (`uniquePerParent`)

Examples include:
- `form.composed.stories.js` - Forms with fieldsets, inputs, buttons
- `table.composed.stories.js` - Tables with caption, colgroups, tbody, rows
- `head.composed.stories.js` - Head with title, meta, link, script elements
- `figure.composed.stories.js` - Figures with images and captions
- `ul.composed.stories.js`, `ol.composed.stories.js` - Lists with items
- And more...

## 🎯 Advantages

### For Developers
- **Zero Configuration** - Drop in and start using immediately
- **Type Safety** - All attributes properly typed and validated
- **Autocomplete** - Full IDE support through JSDoc comments
- **Reusable Components** - Import and use Default stories in your own components
- **Learning Tool** - Explore HTML5 elements and their attributes interactively

### For Teams
- **Single Source of Truth** - One place to see all HTML5 capabilities
- **Consistency** - Standardized documentation across all elements
- **Accessibility** - All ARIA attributes included and documented
- **Quality Assurance** - Test elements with different attribute combinations
- **Onboarding** - New team members can learn HTML5 quickly

### For Design Systems
- **Foundation** - Build your design system on top of semantic HTML
- **Customization** - Extend stories with your own variants
- **Documentation** - Use as base documentation for your components
- **Testing** - Validate your CSS against all HTML5 elements
- **Visual Regression** - Test styling across all element types

## 🔧 Customization

### Using Stories in Your Components

Import and use the Default stories to compose your own:

```javascript
import * as ButtonStories from './inline/button.stories.js';
import * as InputStories from './void/input.stories.js';

export const MyForm = {
  render: () => {
    const form = document.createElement('form');

    const input = InputStories.Default.render(InputStories.Default.args);
    const button = ButtonStories.Default.render(ButtonStories.Default.args);

    form.appendChild(input);
    form.appendChild(button);

    return form;
  }
};
```

### Extending Stories

Add your own variants by importing the element stories:

```javascript
import Anchor from './inline/a.stories.js';

export const InlineButton = {
  ...Anchor,
  args: {
    ...Anchor.args,
    role: 'button',
  }
};
```

## 🎨 Styling

All stories use semantic HTML without inline styles, making them perfect for:
- **CSS framework testing** (Bootstrap, Tailwind, PicoCSS, etc.)
- **Custom design systems**
- **Accessibility testing**
They are intended to form the basis of your own design system. You make them your own by creating organisms and molecules on top of these atomic elements - including custom styles as needed.

## 🔍 Content Model Validation

Some HTML elements need to be seen in their content model context to be meaningful. The `composed/` folder provides stories that demonstrate valid parent-child relationships according to HTML5 specifications.
Composed stories follow HTML5 content model rules:
- Only **valid children** are included (based on `$parentOf` metadata)
- **Unique elements** appear only once (title, base, etc.)

## 🚦 Compatibility

- **Storybook**: v8, v9, v10+
- **Browsers**: All modern browsers (ES6+)
- **Frameworks**: Framework-agnostic (vanilla JavaScript)
- **Build Tools**: Works with Webpack, Vite, etc.

## 📝 Generated Code

All stories are **auto-generated** from:
- HTML5 schema YAML files
- PHP Element classes with metadata
- Content model relationships (`$childOf`, `$parentOf`)
- Global and element-specific attributes

**Do not edit the generated files manually** - they will be overwritten. Instead:
1. Modify the source specifications
2. Regenerate using: `php bin/ext-html generate:composed storybook templates/storybook`

To regenerate stories:
```bash
# Generate all element stories
php bin/ext-html generate:all storybook templates/storybook

# Generate only composed examples
php bin/ext-html generate:composed storybook templates/storybook --overwrite-existing=true
```
