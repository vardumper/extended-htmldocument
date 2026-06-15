<?xml version="1.0" encoding="UTF-8"?>
<!--
    This file is auto-generated. Do not edit manually.
    @see src/TemplateGenerator/XSLTGenerator.php
-->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes" encoding="UTF-8"/>

    <xsl:template match="item[@type='source']">
        <xsl:element name="source">
            <xsl:if test="@id">
                <xsl:attribute name="id"><xsl:value-of select="@id"/></xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='class']">
                <xsl:attribute name="class">
                    <xsl:value-of select="fragment[@name='class']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='media']">
                <xsl:attribute name="media">
                    <xsl:value-of select="fragment[@name='media']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='sizes']">
                <xsl:attribute name="sizes">
                    <xsl:value-of select="fragment[@name='sizes']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='src']">
                <xsl:attribute name="src">
                    <xsl:value-of select="fragment[@name='src']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='srcset']">
                <xsl:attribute name="srcset">
                    <xsl:value-of select="fragment[@name='srcset']"/>
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
        </xsl:element>
    </xsl:template>

</xsl:stylesheet>
