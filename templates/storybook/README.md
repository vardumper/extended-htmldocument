# Storybook pre-set with all HTML5 elements as atoms

Schema-first auto-generated Storybook stories for all HTML5 elements with built-in validation for best consistency.

## Setup

```bash
yarn install
```

If you have an outdated Yarn version (1.22 or older), upgrade to Yarn Berry, prior to installing dependencies:
```bash
corepack enable
yarn set version berry
```
Run the development server:

```bash
yarn storybook
```

## Benefits and Features

1. Reliable, standards-accurate foundation
  Each atom reflects the true HTML5 specification, giving you a correct, consistent, and future-proof base for building higher-level components.
2. Built-in enum and attribute validation
  Attributes with restricted values (ARIA states, input modes, roles, etc.) are already validated, preventing invalid combinations and eliminating a whole class of subtle UI bugs.
3. Faster and safer component development
  When building larger components, you rely on atoms that already handle attribute mapping, boolean attribute rules, valid enum values, data- attribute handling. So you can focus purely on design and behavior, not mechanical HTML correctness.
4. Consistent structure across all components
  Generated atoms share the same patterns, naming, and attribute APIs, which keeps your component layer uniform and predictable.
5. Reduced duplication and boilerplate
  You don’t rewrite markup, attribute logic, or DOM rules for every new component—atoms encapsulate all that foundational behavior.
6. Easier testing and debugging
  Because atoms are deterministic and validated, bugs in composite components are easier to isolate—problems rarely originate in the atomic layer.
7. Strong accessibility baseline
  ARIA attributes are included, typed, and validated in every atom, giving all components a solid accessibility foundation automatically.
8. Clean scalability for design systems

Atoms form a stable, reusable building block set, making it easier to grow a design system from small primitives to complex UI patterns without markup drift.
