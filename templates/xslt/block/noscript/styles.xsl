<?xml version="1.0" encoding="UTF-8"?>
<!--
    This file is auto-generated. Do not edit manually.
    @see src/TemplateGenerator/XSLTGenerator.php
-->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes" encoding="UTF-8"/>

    <xsl:template match="item[@type='noscript']">
        <xsl:element name="noscript">
            <xsl:if test="@id">
                <xsl:attribute name="id"><xsl:value-of select="@id"/></xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='class']">
                <xsl:attribute name="class">
                    <xsl:value-of select="fragment[@name='class']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='accesskey']">
                <xsl:attribute name="accesskey">
                    <xsl:value-of select="fragment[@name='accesskey']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='autocapitalize']">
                <xsl:attribute name="autocapitalize">
                    <xsl:value-of select="fragment[@name='autocapitalize']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='autofocus']">
                <xsl:attribute name="autofocus">
                    <xsl:value-of select="fragment[@name='autofocus']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='contenteditable']">
                <xsl:attribute name="contenteditable">
                    <xsl:value-of select="fragment[@name='contenteditable']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='dir']">
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
            <xsl:if test="fragment[@name='inputmode']">
                <xsl:attribute name="inputmode">
                    <xsl:value-of select="fragment[@name='inputmode']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='lang']">
                <xsl:attribute name="lang">
                    <xsl:value-of select="fragment[@name='lang']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='spellcheck']">
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
            <xsl:if test="fragment[@name='translate']">
                <xsl:attribute name="translate">
                    <xsl:value-of select="fragment[@name='translate']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:apply-templates select="item"/>
        </xsl:element>
    </xsl:template>

</xsl:stylesheet>
