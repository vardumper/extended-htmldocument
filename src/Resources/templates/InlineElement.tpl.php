<?= "<?php\n" ?>
/**
 * This file is auto-generated. Do not edit manually.
 *
 * <?= $class_name ?> - <?= $description . \PHP_EOL ?>
 * <?= \PHP_EOL ?>
 * @generated <?= $generatedAt . \PHP_EOL ?>
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage <?= $namespace . \PHP_EOL ?>
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/<?= $element_name . \PHP_EOL ?>
<?php if ($defaultValue): ?> * @tutorial an example value can be <?= $defaultValue . \PHP_EOL ?><?php endif; ?>
 */
namespace <?= $namespace; ?>;

<?= $use_statements ?>
use Html\Mapping\Element;

#[Element('<?= $element_name ?>')]
class <?= $class_name ?> extends <?= ucfirst($level) ?>Element
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = '<?= /** @phpstan-ignore variable.undefined */ $element_name ?>';

<?php if ($self_closing): ?>
    /**
     * If an element is self closing
     */
    public const bool SELF_CLOSING = true;

<?php endif; ?>
<?php if (!$self_closing): ?>
    /**
     * If an element is self closing
     */
    public const bool SELF_CLOSING = false;

<?php endif; ?>
    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = <?= /** @phpstan-ignore variable.undefined */ $unique ? 'true' : 'false' ?>;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = <?= /** @phpstan-ignore variable.undefined */ $unique_per_parent ? 'true' : 'false' ?>;

    /**
     * The list of allowed direct parents. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [
<?php foreach ($parents as $parentClassName => $fqcn): ?>
        <?= $parentClassName ?>::class,
<?php endforeach; ?>
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [
<?php foreach ($children as $childClassName => $fqcn): ?>
        <?= $childClassName ?>::class,
<?php endforeach; ?>
    ];


<?= $attributes ?>

<?= /** @phpstan-ignore variable.undefined */ $methods ?>
}
