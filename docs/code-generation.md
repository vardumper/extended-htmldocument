# Code Generation
This repository uses the HTML5 specifications to auto-generate PHP Classes for HTML Elements and Attributes.
You can modify the file HTML specifications to your needs `src/Resources/definitions/html5.yaml` and then re-build the HTML Element classes.
You can also modify the class generation templates in the folder `src/Resources/templates` to change the class signature.

## Requirements
- PHP 8.4+ installed

## Generate All
To (re)generate all classes and enums from the HTML5 specification, run the following command:
```bash
make
```
## Sub commands

### Enums

To re-generate all Enum classes, run
```bash
php vendor/bin/extended-htmldocument make:enum
```

### Single Element
To re-generate one Element class, eg. `Element\Inline\Anchor` class run
```bash
php vendor/bin/extended-htmldocument make:class a
```

### All Elements
To re-generate all classes, use the command without specifying an element name:
```bash
php vendor/bin/extended-htmldocument make:class
```
