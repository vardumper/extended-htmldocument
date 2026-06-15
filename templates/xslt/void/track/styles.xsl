<?xml version="1.0" encoding="UTF-8"?>
<!--
    This file is auto-generated. Do not edit manually.
    @see src/TemplateGenerator/XSLTGenerator.php
-->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes" encoding="UTF-8"/>

    <xsl:template match="item[@type='track']">
        <xsl:element name="track">
            <xsl:if test="@id">
                <xsl:attribute name="id"><xsl:value-of select="@id"/></xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='class']">
                <xsl:attribute name="class">
                    <xsl:value-of select="fragment[@name='class']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='default']">
                <xsl:attribute name="default">
                    <xsl:value-of select="fragment[@name='default']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='kind'] and contains('|captions|chapters|descriptions|metadata|subtitles|', concat('|', fragment[@name='kind'], '|'))">
                <xsl:attribute name="kind">
                    <xsl:value-of select="fragment[@name='kind']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='label']">
                <xsl:attribute name="label">
                    <xsl:value-of select="fragment[@name='label']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='src']">
                <xsl:attribute name="src">
                    <xsl:value-of select="fragment[@name='src']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='srclang']">
                <xsl:attribute name="srclang">
                    <xsl:value-of select="fragment[@name='srclang']"/>
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
        </xsl:element>
    </xsl:template>

</xsl:stylesheet>
