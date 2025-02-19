<?= "<?php\n" ?>
/**
 * <?= $class_name ?> - <?= $description.PHP_EOL ?>
 * <?= PHP_EOL ?>
 * @package <?= $namespace.PHP_EOL ?>
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/<?= $element_name.PHP_EOL ?>
<?php if ($defaultValue): ?> * @tutorial an example value can be <?= $defaultValue.PHP_EOL ?><?php endif; ?>
 */
namespace <?= $namespace; ?>;

namespace Html\Enum;

enum TargetEnum: string {
    case SELF = '_self';
    case BLANK = '_blank';
    case PARENT = '_parent';
    case TOP = '_top';
    case UNFENCED_TOP = '_unfencedTop';
}