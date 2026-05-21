<?= "<?php\n" ?>
/**
 * This file is auto-generated. Do not edit manually.
 *
 * @generated <?= $generatedAt . \PHP_EOL ?>
 * @package vardumper/extended-htmldocument
 * @subpackage <?= /** @phpstan-ignore variable.undefined */ $namespace . \PHP_EOL ?>
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/<?= /** @phpstan-ignore variable.undefined */ $element_name . \PHP_EOL ?>
 */
namespace <?= /** @phpstan-ignore variable.undefined */ $namespace; ?>;

use DOM\ORM\Entity\AbstractEntity;
use DOM\ORM\Mapping as ORM;

/**
 * <?= /** @phpstan-ignore variable.undefined */ $element_name ?> entity — persists as XML via DOM-ORM.
 */
#[ORM\Item(entityType: '<?= $element_name ?>')]
class <?= /** @phpstan-ignore variable.undefined */ $entity_class_name ?> extends AbstractEntity
{
    /**
     * Allowed parent elements (HTML content model)
     * @var array<string>
     */
    public static array $childOf = [
<?php foreach (/** @phpstan-ignore variable.undefined */ $child_of_tags as $tag): ?>
        '<?= $tag ?>',
<?php endforeach; ?>
    ];

    /**
     * Allowed child elements (HTML content model)
     * @var array<string>
     */
    public static array $parentOf = [
<?php foreach (/** @phpstan-ignore variable.undefined */ $parent_of_tags as $tag): ?>
        '<?= $tag ?>',
<?php endforeach; ?>
    ];

    public function __construct(
<?php foreach (/** @phpstan-ignore variable.undefined */ $properties as $prop): ?>
        #[ORM\Fragment]
        protected ?string $<?= $prop ?> = null,
<?php endforeach; ?>
        ?string $entityId = null,
        ?\DateTimeInterface $createdAt = null,
    ) {
        parent::__construct($entityId, $createdAt);
    }

<?php foreach (/** @phpstan-ignore variable.undefined */ $properties as $prop): ?>
    public function set<?= ucfirst($prop) ?>(?string $value): static
    {
        $this-><?= $prop ?> = $value;
        return $this;
    }

    public function get<?= ucfirst($prop) ?>(): ?string
    {
        return $this-><?= $prop ?>;
    }

<?php endforeach; ?>
}
