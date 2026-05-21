<?xml version="1.0" encoding="UTF-8"?>
<!--
    This file is auto-generated. Do not edit manually.
    @see src/TemplateGenerator/XSLTGenerator.php
-->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes" encoding="UTF-8"/>

    <xsl:template match="item[@type='link']">
        <xsl:element name="link">
            <xsl:if test="@id">
                <xsl:attribute name="id"><xsl:value-of select="@id"/></xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='class']">
                <xsl:attribute name="class">
                    <xsl:value-of select="fragment[@name='class']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='crossorigin'] and contains('|anonymous|use-credentials|', concat('|', fragment[@name='crossorigin'], '|'))">
                <xsl:attribute name="crossorigin">
                    <xsl:value-of select="fragment[@name='crossorigin']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='href']">
                <xsl:attribute name="href">
                    <xsl:value-of select="fragment[@name='href']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='hreflang']">
                <xsl:attribute name="hreflang">
                    <xsl:value-of select="fragment[@name='hreflang']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='integrity']">
                <xsl:attribute name="integrity">
                    <xsl:value-of select="fragment[@name='integrity']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='media']">
                <xsl:attribute name="media">
                    <xsl:value-of select="fragment[@name='media']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='referrerpolicy'] and contains('|no-referrer|no-referrer-when-downgrade|origin|origin-when-cross-origin|same-origin|strict-origin|strict-origin-when-cross-origin|unsafe-url|', concat('|', fragment[@name='referrerpolicy'], '|'))">
                <xsl:attribute name="referrerpolicy">
                    <xsl:value-of select="fragment[@name='referrerpolicy']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='rel'] and contains('|alternate|author|bookmark|canonical|help|icon|license|manifest|next|nofollow|noreferrer|prefetch|prev|search|stylesheet|tag|', concat('|', fragment[@name='rel'], '|'))">
                <xsl:attribute name="rel">
                    <xsl:value-of select="fragment[@name='rel']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='sizes']">
                <xsl:attribute name="sizes">
                    <xsl:value-of select="fragment[@name='sizes']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='type']">
                <xsl:attribute name="type">
                    <xsl:value-of select="fragment[@name='type']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='dir'] and contains('|ltr|rtl|auto|', concat('|', fragment[@name='dir'], '|'))">
                <xsl:attribute name="dir">
                    <xsl:value-of select="fragment[@name='dir']"/>
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
            <xsl:if test="fragment[@name='style']">
                <xsl:attribute name="style">
                    <xsl:value-of select="fragment[@name='style']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='title']">
                <xsl:attribute name="title">
                    <xsl:value-of select="fragment[@name='title']"/>
                </xsl:attribute>
            </xsl:if>
        </xsl:element>
    </xsl:template>

</xsl:stylesheet>
