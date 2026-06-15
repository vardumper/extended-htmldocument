<?xml version="1.0" encoding="UTF-8"?>
<!--
    This file is auto-generated. Do not edit manually.
    @see src/TemplateGenerator/XSLTGenerator.php
-->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes" encoding="UTF-8"/>

    <xsl:template match="item[@type='meta']">
        <xsl:element name="meta">
            <xsl:if test="@id">
                <xsl:attribute name="id"><xsl:value-of select="@id"/></xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='class']">
                <xsl:attribute name="class">
                    <xsl:value-of select="fragment[@name='class']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='charset']">
                <xsl:attribute name="charset">
                    <xsl:value-of select="fragment[@name='charset']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='content']">
                <xsl:attribute name="content">
                    <xsl:value-of select="fragment[@name='content']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='httpEquiv'] and contains('|content-language|content-type|default-style|refresh|', concat('|', fragment[@name='httpEquiv'], '|'))">
                <xsl:attribute name="http-equiv">
                    <xsl:value-of select="fragment[@name='httpEquiv']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='name']">
                <xsl:attribute name="name">
                    <xsl:value-of select="fragment[@name='name']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='scheme']">
                <xsl:attribute name="scheme">
                    <xsl:value-of select="fragment[@name='scheme']"/>
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
            <xsl:if test="fragment[@name='title']">
                <xsl:attribute name="title">
                    <xsl:value-of select="fragment[@name='title']"/>
                </xsl:attribute>
            </xsl:if>
        </xsl:element>
    </xsl:template>

</xsl:stylesheet>
