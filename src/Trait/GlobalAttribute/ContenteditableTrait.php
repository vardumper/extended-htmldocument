<?php

declare(strict_types=1);

namespace Html\Trait\GlobalAttribute;

use Html\Enum\ContentEditableEnum;
use InvalidArgumentException;

trait ContenteditableTrait
{
    /**
     * Indicates whether the element can be edited in place
     */
    protected ?ContentEditableEnum $contenteditable = null;

    /**
     * @description Defines whether the content is editable by the user.
     */
    public function setContentEditable(
        bool|string|ContentEditableEnum $contentEditable = ContentEditableEnum::TRUE
    ): static {
        if (is_string($contentEditable) && ! in_array(
            $contentEditable,
            array_map(fn ($e) => $e->value, ContentEditableEnum::cases())
        )) {
            throw new InvalidArgumentException('Invalid value for contenteditable');
        }
        $contentEditable = is_bool(
            $contentEditable
        ) ? ($contentEditable === true ? 'true' : 'false') : $contentEditable;
        $contentEditable = is_string($contentEditable) ? ContentEditableEnum::from($contentEditable) : $contentEditable;
        $this->contenteditable = $contentEditable;
        $this->delegated->setAttribute(ContentEditableEnum::getQualifiedName(), $contentEditable->value);
        return $this;
    }

    public function getContentEditable(): ?ContentEditableEnum
    {
        return $this->contenteditable;
    }
}
