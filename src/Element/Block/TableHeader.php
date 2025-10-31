<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * TableHeader - The th element represents a header cell in a table.
 * 
 * @generated 2025-10-31 21:58:00
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/th
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\TableRow;
use Html\Trait\GlobalAttribute\AccesskeyTrait;
use Html\Trait\GlobalAttribute\AutocapitalizeTrait;
use Html\Trait\GlobalAttribute\AutofocusTrait;
use Html\Trait\GlobalAttribute\ClassTrait;
use Html\Trait\GlobalAttribute\ContenteditableTrait;
use Html\Trait\GlobalAttribute\DataTrait;
use Html\Trait\GlobalAttribute\DirTrait;
use Html\Trait\GlobalAttribute\DraggableTrait;
use Html\Trait\GlobalAttribute\HiddenTrait;
use Html\Trait\GlobalAttribute\IdTrait;
use Html\Trait\GlobalAttribute\InputmodeTrait;
use Html\Trait\GlobalAttribute\LangTrait;
use Html\Trait\GlobalAttribute\SpellcheckTrait;
use Html\Trait\GlobalAttribute\StyleTrait;
use Html\Trait\GlobalAttribute\TabindexTrait;
use Html\Trait\GlobalAttribute\TitleTrait;
use Html\Trait\GlobalAttribute\TranslateTrait;
use Html\Mapping\Element;

#[Element('th')]
class TableHeader extends BlockElement
{
        use AccesskeyTrait;

    use AutocapitalizeTrait;

    use AutofocusTrait;

    use ClassTrait;

    use ContenteditableTrait;

    use DataTrait;

    use DirTrait;

    use DraggableTrait;

    use HiddenTrait;

    use IdTrait;

    use InputmodeTrait;

    use LangTrait;

    use SpellcheckTrait;

    use StyleTrait;

    use TabindexTrait;

    use TitleTrait;

    use TranslateTrait;
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'th';

    /**
     * If an element is self closing
     */
    public const bool SELF_CLOSING = false;

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = false;

    /**
     * The list of allowed direct parents. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [
        TableRow::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
    ];


    /** Specifies the number of columns a table cell should span. */
    public ?int $colspan = null;

    /** Specifies a list of header cells that represent the header for the cell. */
    public ?string $headers = null;

    /** Specifies the number of rows a table cell should span. */
    public ?int $rowspan = null;

    /** Specifies the set of header cells a data cell belongs to. */
    public ?string $scope = null;


    public function setColspan(int $colspan): static
    {
        $this->colspan = $colspan;
        $this->delegated->setAttribute('colspan', (string) $colspan);
        return $this;
    }

    public function getColspan(): ?int
    {
        return $this->colspan;
    }

    public function setHeaders(string $headers): static
    {
        $this->headers = $headers;
        $this->delegated->setAttribute('headers', (string) $headers);
        return $this;
    }

    public function getHeaders(): ?string
    {
        return $this->headers;
    }

    public function setRowspan(int $rowspan): static
    {
        $this->rowspan = $rowspan;
        $this->delegated->setAttribute('rowspan', (string) $rowspan);
        return $this;
    }

    public function getRowspan(): ?int
    {
        return $this->rowspan;
    }

    public function setScope(string $scope): static
    {
        $this->scope = $scope;
        $this->delegated->setAttribute('scope', (string) $scope);
        return $this;
    }

    public function getScope(): ?string
    {
        return $this->scope;
    }


}
