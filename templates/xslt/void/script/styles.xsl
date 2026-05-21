<?xml version="1.0" encoding="UTF-8"?>
<!--
    This file is auto-generated. Do not edit manually.
    @see src/TemplateGenerator/XSLTGenerator.php
-->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes" encoding="UTF-8"/>

    <xsl:template match="item[@type='script']">
        <xsl:element name="script">
            <xsl:if test="@id">
                <xsl:attribute name="id"><xsl:value-of select="@id"/></xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='class']">
                <xsl:attribute name="class">
                    <xsl:value-of select="fragment[@name='class']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='async']">
                <xsl:attribute name="async">
                    <xsl:value-of select="fragment[@name='async']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='charset']">
                <xsl:attribute name="charset">
                    <xsl:value-of select="fragment[@name='charset']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='crossorigin']">
                <xsl:attribute name="crossorigin">
                    <xsl:value-of select="fragment[@name='crossorigin']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='defer']">
                <xsl:attribute name="defer">
                    <xsl:value-of select="fragment[@name='defer']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='integrity']">
                <xsl:attribute name="integrity">
                    <xsl:value-of select="fragment[@name='integrity']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='nonce']">
                <xsl:attribute name="nonce">
                    <xsl:value-of select="fragment[@name='nonce']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='referrerpolicy']">
                <xsl:attribute name="referrerpolicy">
                    <xsl:value-of select="fragment[@name='referrerpolicy']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='src']">
                <xsl:attribute name="src">
                    <xsl:value-of select="fragment[@name='src']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='type']">
                <xsl:attribute name="type">
                    <xsl:value-of select="fragment[@name='type']"/>
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
            <xsl:apply-templates select="item"/>
        </xsl:element>
    </xsl:template>

</xsl:stylesheet>
