<?xml version="1.0" encoding="UTF-8"?>
<!--
    This file is auto-generated. Do not edit manually.
    @see src/TemplateGenerator/XSLTGenerator.php
-->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes" encoding="UTF-8"/>

    <xsl:template match="item[@type='select']">
        <xsl:element name="select">
            <xsl:if test="@id">
                <xsl:attribute name="id"><xsl:value-of select="@id"/></xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='class']">
                <xsl:attribute name="class">
                    <xsl:value-of select="fragment[@name='class']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='autocomplete'] and contains('|off|on|', concat('|', fragment[@name='autocomplete'], '|'))">
                <xsl:attribute name="autocomplete">
                    <xsl:value-of select="fragment[@name='autocomplete']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='autocorrect'] and contains('|off|on|', concat('|', fragment[@name='autocorrect'], '|'))">
                <xsl:attribute name="autocorrect">
                    <xsl:value-of select="fragment[@name='autocorrect']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='disabled']">
                <xsl:attribute name="disabled">
                    <xsl:value-of select="fragment[@name='disabled']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='multiple']">
                <xsl:attribute name="multiple">
                    <xsl:value-of select="fragment[@name='multiple']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='name']">
                <xsl:attribute name="name">
                    <xsl:value-of select="fragment[@name='name']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='required']">
                <xsl:attribute name="required">
                    <xsl:value-of select="fragment[@name='required']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='size']">
                <xsl:attribute name="size">
                    <xsl:value-of select="fragment[@name='size']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='form']">
                <xsl:attribute name="form">
                    <xsl:value-of select="fragment[@name='form']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='role'] and contains('|alert|application|article|banner|button|checkbox|complementary|contentinfo|dialog|form|grid|group|heading|img|link|list|listbox|listitem|main|menu|menubar|menuitem|navigation|none|presentation|radio|region|search|status|tab|tablist|tabpanel|textbox|toolbar|tooltip|', concat('|', fragment[@name='role'], '|'))">
                <xsl:attribute name="role">
                    <xsl:value-of select="fragment[@name='role']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaControls']">
                <xsl:attribute name="aria-controls">
                    <xsl:value-of select="fragment[@name='ariaControls']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaDescribedby']">
                <xsl:attribute name="aria-describedby">
                    <xsl:value-of select="fragment[@name='ariaDescribedby']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaLabelledby']">
                <xsl:attribute name="aria-labelledby">
                    <xsl:value-of select="fragment[@name='ariaLabelledby']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaInvalid'] and contains('|false|true|grammar|spelling|', concat('|', fragment[@name='ariaInvalid'], '|'))">
                <xsl:attribute name="aria-invalid">
                    <xsl:value-of select="fragment[@name='ariaInvalid']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaLabel']">
                <xsl:attribute name="aria-label">
                    <xsl:value-of select="fragment[@name='ariaLabel']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaDisabled'] and contains('|false|true|', concat('|', fragment[@name='ariaDisabled'], '|'))">
                <xsl:attribute name="aria-disabled">
                    <xsl:value-of select="fragment[@name='ariaDisabled']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaDetails']">
                <xsl:attribute name="aria-details">
                    <xsl:value-of select="fragment[@name='ariaDetails']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaKeyshortcuts']">
                <xsl:attribute name="aria-keyshortcuts">
                    <xsl:value-of select="fragment[@name='ariaKeyshortcuts']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaRoledescription']">
                <xsl:attribute name="aria-roledescription">
                    <xsl:value-of select="fragment[@name='ariaRoledescription']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaLive'] and contains('|off|polite|assertive|', concat('|', fragment[@name='ariaLive'], '|'))">
                <xsl:attribute name="aria-live">
                    <xsl:value-of select="fragment[@name='ariaLive']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaRelevant'] and contains('|additions|removals|text|all|additions text|', concat('|', fragment[@name='ariaRelevant'], '|'))">
                <xsl:attribute name="aria-relevant">
                    <xsl:value-of select="fragment[@name='ariaRelevant']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaAtomic'] and contains('|false|true|', concat('|', fragment[@name='ariaAtomic'], '|'))">
                <xsl:attribute name="aria-atomic">
                    <xsl:value-of select="fragment[@name='ariaAtomic']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaExpanded'] and contains('|false|true|undefined|', concat('|', fragment[@name='ariaExpanded'], '|'))">
                <xsl:attribute name="aria-expanded">
                    <xsl:value-of select="fragment[@name='ariaExpanded']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaHaspopup'] and contains('|false|true|menu|listbox|tree|grid|dialog|', concat('|', fragment[@name='ariaHaspopup'], '|'))">
                <xsl:attribute name="aria-haspopup">
                    <xsl:value-of select="fragment[@name='ariaHaspopup']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaPressed'] and contains('|false|true|mixed|undefined|', concat('|', fragment[@name='ariaPressed'], '|'))">
                <xsl:attribute name="aria-pressed">
                    <xsl:value-of select="fragment[@name='ariaPressed']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaAutocomplete'] and contains('|none|inline|list|both|', concat('|', fragment[@name='ariaAutocomplete'], '|'))">
                <xsl:attribute name="aria-autocomplete">
                    <xsl:value-of select="fragment[@name='ariaAutocomplete']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaPlaceholder']">
                <xsl:attribute name="aria-placeholder">
                    <xsl:value-of select="fragment[@name='ariaPlaceholder']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaReadonly'] and contains('|false|true|', concat('|', fragment[@name='ariaReadonly'], '|'))">
                <xsl:attribute name="aria-readonly">
                    <xsl:value-of select="fragment[@name='ariaReadonly']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaRequired'] and contains('|false|true|', concat('|', fragment[@name='ariaRequired'], '|'))">
                <xsl:attribute name="aria-required">
                    <xsl:value-of select="fragment[@name='ariaRequired']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaMultiselectable'] and contains('|false|true|', concat('|', fragment[@name='ariaMultiselectable'], '|'))">
                <xsl:attribute name="aria-multiselectable">
                    <xsl:value-of select="fragment[@name='ariaMultiselectable']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaActivedescendant']">
                <xsl:attribute name="aria-activedescendant">
                    <xsl:value-of select="fragment[@name='ariaActivedescendant']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaOrientation'] and contains('|horizontal|vertical|undefined|', concat('|', fragment[@name='ariaOrientation'], '|'))">
                <xsl:attribute name="aria-orientation">
                    <xsl:value-of select="fragment[@name='ariaOrientation']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='accesskey']">
                <xsl:attribute name="accesskey">
                    <xsl:value-of select="fragment[@name='accesskey']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='autocapitalize'] and contains('|none|sentences|words|characters|', concat('|', fragment[@name='autocapitalize'], '|'))">
                <xsl:attribute name="autocapitalize">
                    <xsl:value-of select="fragment[@name='autocapitalize']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='autofocus']">
                <xsl:attribute name="autofocus">
                    <xsl:value-of select="fragment[@name='autofocus']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='contenteditable'] and contains('|true|false|inherit|', concat('|', fragment[@name='contenteditable'], '|'))">
                <xsl:attribute name="contenteditable">
                    <xsl:value-of select="fragment[@name='contenteditable']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='dir'] and contains('|ltr|rtl|auto|', concat('|', fragment[@name='dir'], '|'))">
                <xsl:attribute name="dir">
                    <xsl:value-of select="fragment[@name='dir']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='draggable']">
                <xsl:attribute name="draggable">
                    <xsl:value-of select="fragment[@name='draggable']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='hidden']">
                <xsl:attribute name="hidden">
                    <xsl:value-of select="fragment[@name='hidden']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='inputmode'] and contains('|none|text|decimal|numeric|email|tel|url|search|', concat('|', fragment[@name='inputmode'], '|'))">
                <xsl:attribute name="inputmode">
                    <xsl:value-of select="fragment[@name='inputmode']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='lang']">
                <xsl:attribute name="lang">
                    <xsl:value-of select="fragment[@name='lang']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='popover'] and contains('|auto|hint|manual|', concat('|', fragment[@name='popover'], '|'))">
                <xsl:attribute name="popover">
                    <xsl:value-of select="fragment[@name='popover']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='slot']">
                <xsl:attribute name="slot">
                    <xsl:value-of select="fragment[@name='slot']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='spellcheck'] and contains('|true|false|', concat('|', fragment[@name='spellcheck'], '|'))">
                <xsl:attribute name="spellcheck">
                    <xsl:value-of select="fragment[@name='spellcheck']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='style']">
                <xsl:attribute name="style">
                    <xsl:value-of select="fragment[@name='style']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='tabindex']">
                <xsl:attribute name="tabindex">
                    <xsl:value-of select="fragment[@name='tabindex']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='title']">
                <xsl:attribute name="title">
                    <xsl:value-of select="fragment[@name='title']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='translate'] and contains('|yes|no|', concat('|', fragment[@name='translate'], '|'))">
                <xsl:attribute name="translate">
                    <xsl:value-of select="fragment[@name='translate']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:apply-templates select="item[@type='optgroup' or @type='option']"/>
        </xsl:element>
    </xsl:template>

</xsl:stylesheet>
