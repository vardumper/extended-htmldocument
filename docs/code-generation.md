# Compile PHP Classes for HTML Elements
::: info
Please note that code generation is not necessary, if you haven't made any changes to the HTML5 specification or the *.tpl.php files.
:::

This repository uses the HTML5 specifications to auto-generate PHP Classes for HTML Elements and Attributes.
You can modify the file HTML specifications to your needs `src/Resources/definitions/html5.yaml` and then re-build the HTML Element classes.
You can also modify the class generation templates in the folder `src/Resources/templates` to change the class signature.

## Requirements
- PHP 8.4+ installed

## Basic use
To (re)generate all classes and enums from the HTML5 specification, run the following command.
```bash
php vendor/bin/ext-html
```
### Sub commands
There are more parameters available for code generation.

::: details
```bash
php vendor/bin/ext-html make:enums # only generates enums used in the YAML specification
php vendor/bin/ext-html make:classes a # only generates the class for the Anchor element, no enums
php vendor/bin/ext-html make:classes # generates all classes, no enums
```
:::

## Custom HTML Specification File
::: warning
Parameter isn't implemented yet.
:::

::: info
@todo allow parameter or config file...
:::
If you want to use your own HTML5 specification file, you can use the `--specification` option.
```bash
php vendor/bin/ext-html --specification path/to/my-html5-specification.yaml
```
This especially interesting if you:
- want to merge your own CSS framework specifications into the PHP classes.
- have different requirements (eg. want to compile the ARIA roles and properties) or the WCAG specifications directly into the HTML element classes.
- simply want to enrich the PHP classes with your own attributes, such as instructions for faker, or other meta information.
- just modified or added your own tpl.php files and want to re-generate the classes.

## Custom Templates for class generation
::: warning
Not implemented yet.
:::

This library can be extended with custom templates for class generation.
::: info
@todo Add a config file where one can specify paths.
:::
