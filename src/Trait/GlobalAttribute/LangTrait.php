<?php

declare(strict_types=1);

namespace Html\Trait\GlobalAttribute;

trait LangTrait
{
    /**
     * Specifies the primary language for the element's content
     */
    public ?string $lang = null;

    /**
     * @description Defines the language of the content (e.g., en, fr).
     */
    public function setLang(string $lang): static
    {
        $this->lang = $lang;
        // $this->delegated->setAttribute('lang', $lang);
        return $this;
    }

    public function getLang(): ?string
    {
        return $this->lang;
    }
}
