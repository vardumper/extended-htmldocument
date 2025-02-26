
# Extending the HTML Specification

You could extend this YAML file to include custom attributes or classes that align with a specific CSS framework's guidelines, for example.
A common use case would be to add a specific `class` attribute to an anchor eg. `btn` to turn it into a button.
Other classes such as `primary`, `secondary`, `outline`, `contrast`, etc. are also commonly used add different color schemes to buttons.

## An imaginary CSS-Framework
Such an extension of the HTML Specification could look like this. Let's create a file `my-css-framework.yaml`:

```yaml
# Dark Mode
'*':
   attributes:
    data-theme:
      description: 'Choose between light and dark mode. Overrides the OS default if set.'
      type: enum|string
      choices:
        - light
        - dark
# Role Button
'/^(a|button|div|span)$/':
  attributes:
    role:
      description: 'The role attribute is used to define the purpose of an element.'
      type: enum|string
      choices:
        - button
    class:
      description: 'The class attribute is used to define equal styles for multiple elements.'
      required: true
      defaultValue: ''
      type: enum|string
      choices:
        - secondary
        - contrast
        - outline
        - secondary outline
        - contrast outline
```
Let's break it down:
- The first part of the file shall be a global attribute that might be used on any element. It adds a `data-theme` attribute to every element in order to switch between light and dark mode.
- The second part of the file adds a `role` attribute to the elements `a`, `button`, `div`, and `span`. Then we add a `class` attribute to the same elements, which shall be used for style variations of the button.
- Since role, data, and classes are common or global attributes, we define them as union types of `enum|string`, so one can use custom roles and classes, besides the ones we defined here.
- The careful reader also notices that, instead of repeating all elements and adding the attributes individually to each one of them, we use regular expressions to describe the target elements. We want our framework file to be compact, and write less YAML.

## Merging the two Specifications

By merging our Framework or Design System definitions into the HTML5 specifications, we can tie the two together.
Let's use PHP to enrich the HTML5 specifications with our imaginary CSS framework specifications.

```php
$frameworkSpecs = Yaml::parseFile('path/to/my-css-framework.yaml');
$htmlSpecs = Yaml::parseFile('path/to/html5.yaml');
$output = $htmlSpecs;

// Global CSS attributes that can be used on _ANY_ element
if (array_key_exists('*', $frameworkSpecs)) {
    foreach ($htmlSpecs as $element => $props) {
        if (!isset($output[$element]['attributes'])) {
            $output[$element]['attributes'] = $frameworkSpecs['*']['attributes'];

            continue;
        }
        $output[$element]['attributes'] = \array_merge_recursive($output[$element]['attributes'], $frameworkSpecs['*']['attributes']);
    }
}

// Regex matching
foreach (array_keys($frameworkSpecs) as $pattern) {
    if (@preg_match($pattern, '') !== false) {
        $keys = array_keys($output);
        $result = preg_grep($pattern, $keys);

        foreach ($result as $key) {
            if (!isset($htmlSpecs[$key]['attributes'])) {
                $output[$key]['attributes'] = $frameworkSpecs[$pattern]['attributes'];

                continue;
            }
            $output[$key]['attributes'] = \array_merge_recursive($output[$key]['attributes'], $frameworkSpecs[$pattern]['attributes']);
        }

        unset($picoSpecs[$pattern]); // Remove regex key from framework specs after processing (so we can deep merge all non-regex keys later)
    }
}

// Deep merge everything else
$output = \array_merge_recursive($output, $frameworkSpecs);
\file_put_contents('my-css-framework-html5-specification.yaml', Yaml::dump($output, 10, 2));
```

Et voila! You have now extended the HTML5 specifications with your custom CSS frameworks requirements. You have tied them together, or better: integrated it into HTML5.
You can now re-generate PHP classes and Enums with your custom specifications.

```bash
php vendor/bin/ext-html --specification path/to/my-css-framework-html5-specification.yaml
```

The file Html\Element\Inline\Anchor now has three new attributes: `data-theme` `role` and `class`.
Also you will fing DataThemeEnum, RoleEnum and ClassEnum now has the new classes `secondary`, `contrast`, `outline`, `secondary outline`, and so on.

## Benefits
* The real benefit of this can be found in automated code-generation, almost exclusively. For example, when automagically generating stories for Storybook, or when generating Twig templates that know about your design systems' attributes and their possible values. For Storybook, for example, you can now generate atom and molecule stories with the correct arguments and controls and auto-generate stories for each class your CSS framework provides, and so on.
* The designer can now focus on writing CSS, SCSS and composing complex components from the atoms and molecules that you generated.
* As mentioned on the introduction page, one goal of this library is to be very flexible towards frontend technologies. By being able to generate a Design Systems atoms, molecules, and so on for different use-cases, you can gain that flexibility. All it takes is a little bit of YAML, PHP and some templates (eg. twig.tpl.php, react.tpl.php, vue.tpl.php, stories.tpl.php, etc.)

## Considerations
Are classes combinable? In the example above they are not. But if you define a large set of possible class names, you might need more logic. For example, where you don't want someone to combine classes `primary` and `secondary`...
