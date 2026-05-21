<?xml version="1.0" encoding="UTF-8"?>
<!--
    This file is auto-generated. Do not edit manually.
    @see src/TemplateGenerator/XSLTGenerator.php
-->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes" encoding="UTF-8"/>

    <xsl:template match="item[@type='form']">
        <xsl:element name="form">
            <xsl:if test="@id">
                <xsl:attribute name="id"><xsl:value-of select="@id"/></xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='class']">
                <xsl:attribute name="class">
                    <xsl:value-of select="fragment[@name='class']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='acceptCharset']">
                <xsl:attribute name="accept-charset">
                    <xsl:value-of select="fragment[@name='acceptCharset']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='action']">
                <xsl:attribute name="action">
                    <xsl:value-of select="fragment[@name='action']"/>
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
            <xsl:if test="fragment[@name='enctype'] and contains('|application/x-www-form-urlencoded|multipart/form-data|text/plain|', concat('|', fragment[@name='enctype'], '|'))">
                <xsl:attribute name="enctype">
                    <xsl:value-of select="fragment[@name='enctype']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='method'] and contains('|get|post|', concat('|', fragment[@name='method'], '|'))">
                <xsl:attribute name="method">
                    <xsl:value-of select="fragment[@name='method']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='name']">
                <xsl:attribute name="name">
                    <xsl:value-of select="fragment[@name='name']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='novalidate']">
                <xsl:attribute name="novalidate">
                    <xsl:value-of select="fragment[@name='novalidate']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='target']">
                <xsl:attribute name="target">
                    <xsl:value-of select="fragment[@name='target']"/>
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
            <xsl:if test="fragment[@name='accesskey']">
                <xsl:attribute name="accesskey">
                    <xsl:value-of select="fragment[@name='accesskey']"/>
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
            <xsl:if test="fragment[@name='lang']">
                <xsl:attribute name="lang">
                    <xsl:value-of select="fragment[@name='lang']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='slot']">
                <xsl:attribute name="slot">
                    <xsl:value-of select="fragment[@name='slot']"/>
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
            <xsl:apply-templates select="item[@type='button' or @type='canvas' or @type='datalist' or @type='details' or @type='dialog' or @type='fieldset' or @type='input' or @type='label' or @type='legend' or @type='meter' or @type='noscript' or @type='output' or @type='progress' or @type='script' or @type='select' or @type='slot' or @type='summary' or @type='template' or @type='textarea']"/>
        </xsl:element>
    </xsl:template>

</xsl:stylesheet>
