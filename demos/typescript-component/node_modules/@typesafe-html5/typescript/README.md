# TypeScript Classes for HTML5 Elements

Type-safe, auto-generated TypeScript classes for all HTML5 elements with full WCAG, ARIA support and validation. Part of Extended HTMLDocument - schema-first from HTML5 schema.

## Features

- **Type-Safe**: Full TypeScript support with comprehensive type definitions
- **Fluent API**: Chainable setter methods for all attributes
- **ARIA Compliant**: Complete ARIA attribute support with proper types
- **Auto-Generated**: Consistent API across all HTML5 elements via schema-first approach
- **Null/Undefined Handling**: Automatic attribute removal for null/undefined values
- **Framework Agnostic**: Works in any JavaScript/TypeScript environment

## Installation

This is a static NPM package, providing just the TypeScript classes.

```bash
npm install @typesafe-html5/typescript
# or
yarn add @typesafe-html5/typescript
# or
pnpm add @typesafe-html5/typescript
```

## Importing Elements

You can import individual elements from their specific files:

```typescript
import { Input } from './inline/input/input';
import { Button } from './inline/button/button';
```

Or import all elements from the main index file for convenience:

```typescript
import { Input, Button, Div, Form } from './index';
```

## Usage Examples

### Creating a Simple Input Element

```typescript
import { Input } from './inline/input/input';

const input = new Input();
document.body.appendChild(input.getElement());
```

### Setting Properties via Constructor

```typescript
import { Input } from './inline/input/input';

const input = new Input({
  type: 'email',
  placeholder: 'Enter your email',
  required: true,
  'aria-label': 'Email input'
});
document.body.appendChild(input.getElement());
```

### Using Chainable Setter Methods

```typescript
import { Input } from './inline/input/input';

const input = new Input();
input.setType('password')
     .setPlaceholder('Enter password')
     .setRequired(true)
     .setAriaLabel('Password input');
document.body.appendChild(input.getElement());
```

### Creating a Form with Multiple Elements

```typescript
import { Form } from './block/form/form';
import { Input } from './inline/input/input';
import { Button } from './inline/button/button';

const form = new Form({
  action: '/submit',
  method: 'post'
});

const usernameInput = new Input({
  name: 'username',
  type: 'text',
  placeholder: 'Username'
});

const submitButton = new Button({
  type: 'submit'
}).setChildren('Submit');

form.setChildren([usernameInput.getElement(), submitButton.getElement()]);
document.body.appendChild(form.getElement());
```

### Handling Events and Dynamic Updates

```typescript
import { Button } from './inline/button/button';
import { Div } from './block/div/div';

const button = new Button({ type: 'button' }).setChildren('Click me');
const counterDiv = new Div().setChildren('Clicks: 0');

let count = 0;
button.getElement().addEventListener('click', () => {
  count++;
  counterDiv.setChildren(`Clicks: ${count}`);
});

document.body.appendChild(button.getElement());
document.body.appendChild(counterDiv.getElement());
```

### Working with Attributes (Including Removal)

```typescript
import { Input } from './inline/input/input';

const input = new Input({
  disabled: true,
  value: 'Initial value'
});

// Later, enable the input and clear value
input.setDisabled(false)
     .setValue(null); // Removes the value attribute

document.body.appendChild(input.getElement());
```

### Creating Complex Nested Structures

```typescript
import { Div } from './block/div/div';
import { H1 } from './block/h1/h1';
import { P } from './block/p/p';
import { A } from './inline/a/a';

const container = new Div({ className: 'container' });

const header = new H1().setChildren('Welcome');

const paragraph = new P().setChildren([
  'Visit our ',
  new A({ href: 'https://example.com' }).setChildren('website'),
  ' for more information.'
]);

container.setChildren([header.getElement(), paragraph.getElement()]);
document.body.appendChild(container.getElement());
```

## API Reference

- **Constructor**: `new ElementClass(props?)` - Creates element with optional initial props
- **Setters**: `setPropertyName(value)` - Chainable methods for all properties
- **getElement()**: Returns the underlying HTMLElement for DOM manipulation
- **setChildren()**: For elements that can contain children (block elements)

All setter methods accept flexible types including `null`/`undefined` to remove attributes.