<?= "<?php\n" ?>
/**
 * This file is auto-generated. Do not edit manually.
 *
 * <?= $class_name ?> - <?= $description . PHP_EOL ?>
 * <?= PHP_EOL ?>
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage <?= $namespace . PHP_EOL ?>
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/<?= $element_name . PHP_EOL ?>
<?php if ($defaultValue): ?> * @tutorial an example value can be <?= $defaultValue . PHP_EOL ?><?php endif; ?>
 */
namespace <?= $namespace; ?>;

<?php foreach ($parents as $parent): ?>
use <?= ltrim($parent, '\\') ?>;
<?php endforeach; ?>
<?= $use_statements ?>

class <?= $class_name ?> extends <?= ucfirst($level) ?>Element
{
    /**
     * The HTML element name
     * @category HTML element property
     */
    public static string $qualifiedName = '<?= /** @phpstan-ignore variable.undefined */$element_name ?>';

    /**
     * If an element is unique per HTML document
     * @category HTML element property
     */
    public static bool $unique = <?= /** @phpstan-ignore variable.undefined */ $unique ? 'true' : 'false' ?>;

    /**
     * If an element is allowed once its allowed parents
     * @category HTML element property
     */
    public static bool $uniquePerParent = <?= /** @phpstan-ignore variable.undefined */ $unique_per_parent ? 'true' : 'false' ?>;

    /**
     * The list of allowed direct parents. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
<?php if (empty($parents)): ?>
    public static array $childOf = [];
<?php else: ?>
    /** Allowed parent elements of <?= $class_name ?> */
    public static array $childOf = [
<?php foreach ($parents as $parent): ?>
    <?php $parts = explode('\\', $parent);
    $parentClassName = end($parts); ?>
    <?= $parentClassName ?>::class,
    <?php endforeach; ?>
];
<?php endif; ?>

<?= $attributes ?>
}
