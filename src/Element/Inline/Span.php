<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Span - The span element doesn't mean anything on its own, but can be useful when used together with the global attributes, e.g. class, lang, or dir. It represents its children.
 *
 * @generated 2025-10-19 14:41:30
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/span
 */

namespace Html\Element\Inline;

use Html\Element\Block\Article;
use Html\Element\Block\Aside;
use Html\Element\Block\Body;
use Html\Element\Block\DefinitionDescription;
use Html\Element\Block\Division;
use Html\Element\Block\Footer;
use Html\Element\Block\Header;
use Html\Element\Block\Main;
use Html\Element\Block\Paragraph;
use Html\Element\Block\Section;
use Html\Element\InlineElement;
use Html\Enum\ClassEnum;
use Html\Enum\RoleEnum;
use Html\Mapping\Element;

#[Element('span')]
class Span extends InlineElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'span';

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
        Article::class,
        Aside::class,
        Body::class,
        DefinitionDescription::class,
        Division::class,
        Footer::class,
        Header::class,
        Main::class,
        MarkedText::class,
        Paragraph::class,
        Section::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @var array<string>
     */
    public static array $parentOf = [];

    /** The role attribute is used to define the purpose of an element. */
    protected null|string|RoleEnum $role = null;

    /**
     * The class attribute is used to define equal styles for multiple elements.
     * @example

     * @required
     */
    protected null|string|ClassEnum $class = null;

    public function setRole(string|RoleEnum $role): static
    {
        $value = $role;
        if (is_string($role)) {
            $resolved = RoleEnum::tryFrom($role);
            if ($resolved !== null) {
                $role = $resolved;
            }
        }
        if ($role instanceof RoleEnum) {
            $value = $role->value;
        }
        $this->role = $role;
        $this->delegated->setAttribute('role', (string) $value);

        return $this;
    }

    public function getRole(): string|RoleEnum
    {
        return $this->role;
    }

    public function setClass(string|ClassEnum $class): static
    {
        $value = $class;
        if (is_string($class)) {
            $resolved = ClassEnum::tryFrom($class);
            if ($resolved !== null) {
                $class = $resolved;
            }
        }
        if ($class instanceof ClassEnum) {
            $value = $class->value;
        }
        $this->class = $class;
        $this->delegated->setAttribute('class', (string) $value);

        return $this;
    }

    public function getClass(): string|ClassEnum
    {
        return $this->class;
    }
}
