<?= "<?php\n" ?>
/**
 * This file is auto-generated. Do not edit manually.
 *
 * <?= $class_name ?> - <?= $description.PHP_EOL ?>
 * <?= PHP_EOL ?>
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage <?= $namespace.PHP_EOL ?>
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/<?= $element_name.PHP_EOL ?>
<?php if ($defaultValue): ?> * @tutorial an example value can be <?= $defaultValue.PHP_EOL ?><?php endif; ?>
 */
namespace <?= $namespace; ?>;

<?= $use_statements ?>

class <?= $class_name ?> extends <?= ucfirst($level) ?>Element
{
    public static string $qualifiedName = '<?= $element_name ?>';

<?= $attributes ?>

}
