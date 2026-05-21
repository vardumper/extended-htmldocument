<?xml version="1.0" encoding="UTF-8"?>
<!--
    This file is auto-generated. Do not edit manually.
    @see src/TemplateGenerator/XSLTGenerator.php
-->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes" encoding="UTF-8"/>

    <xsl:template match="item[@type='hr']">
        <xsl:element name="hr">
            <xsl:if test="@id">
                <xsl:attribute name="id"><xsl:value-of select="@id"/></xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='class']">
                <xsl:attribute name="class">
                    <xsl:value-of select="fragment[@name='class']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='align']">
                <xsl:attribute name="align">
                    <xsl:value-of select="fragment[@name='align']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='color']">
                <xsl:attribute name="color">
                    <xsl:value-of select="fragment[@name='color']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='noshade']">
                <xsl:attribute name="noshade">
                    <xsl:value-of select="fragment[@name='noshade']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='size']">
                <xsl:attribute name="size">
                    <xsl:value-of select="fragment[@name='size']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='width']">
                <xsl:attribute name="width">
                    <xsl:value-of select="fragment[@name='width']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='dir']">
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
