<?= "<?php\n" ?>
/**
 * This file is auto-generated. Do not edit manually.
 *
 * <?= $class_name ?> - <?= $description . \PHP_EOL ?>
 * <?= \PHP_EOL ?>
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage <?= $namespace . \PHP_EOL ?>
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/<?= $element_name ?>/<?= \PHP_EOL ?>
<?php if ($defaultValue): ?> * @tutorial an example value can be <?= $defaultValue . \PHP_EOL ?><?php endif; ?>
 */

namespace Html\Enum;

enum <?= $class_name ?>: string {
<?= $cases . \PHP_EOL ?>

    public static function getQualifiedName(): string
    {
        return '<?= $element_name ?>';
    }
<?php if ($defaultValue): ?>

    public static function getDefault(): self
    {
        return self::<?= $defaultCase ?>;
    }
<?php endif; ?>
}
