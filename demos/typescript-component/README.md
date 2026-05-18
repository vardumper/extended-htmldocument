# Typescript Component Demo
All component demos work in a similar way. This library comes with plenty of pre-made Code Generators (Typescript, Twig, Blade, Rect/NextJS and more).

## Component YAML file
A YAML file that describes the component is compiled into a Frontedn Technology, by running:

```bash
bin/ext-html watch typescript demos/typescript-compoent/src/teaser-example.yaml demos/typescript-component/dist/teaser-example.ts
```

## Build the demo
The package.json inside this demo has two commands. One to build the demo: 

```bash
yarn demo:build
```

and one to start the demo:

```bash
yarn demo:serve
```

## Explanation

The Typescript Demo makes use of `@typesafe-html5/typescript` (pre-made templates) inside templates/typescript for all HTML5 elements.
The component generator the utilizes these pre-made templates and exposes a `componenName(params)` method which utilizes an `componentNameParams` interface with all the params (HTML5 attributes and content) defined in the YAML file.