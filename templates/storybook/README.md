# Storybook Templates

Auto-generated Storybook stories for HTML elements with built-in validation and best consistency.

## Setup

Install dependencies:

```bash
yarn install
```

If you have an outdated Yarn version (1.22 or older), upgrade to Yarn Berry, prior to installing dependencies:

```bash
corepack enable
yarn set version berry
```

## Usage

The HTML elements are intended to be used as a WCAG, ARIA and HTML5 standards conform basis for your own stories.
They serve as the atoms for your own molecules and organisms in a design system.

### Start Storybook

Run the development server:

```bash
yarn storybook
```

This will start Storybook on `http://localhost:6006`

### Build Storybook

Create a static build:

```bash
yarn build-storybook
```

The static site will be generated in the `storybook-static` directory.
