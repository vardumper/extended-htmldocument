<?xml version="1.0" encoding="UTF-8"?>
<!--
    This file is auto-generated. Do not edit manually.
    @see src/TemplateGenerator/XSLTGenerator.php
-->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes" encoding="UTF-8"/>

    <xsl:template match="item[@type='img']">
        <xsl:element name="img">
            <xsl:if test="@id">
                <xsl:attribute name="id"><xsl:value-of select="@id"/></xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='class']">
                <xsl:attribute name="class">
                    <xsl:value-of select="fragment[@name='class']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='alt']">
                <xsl:attribute name="alt">
                    <xsl:value-of select="fragment[@name='alt']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='crossorigin']">
                <xsl:attribute name="crossorigin">
                    <xsl:value-of select="fragment[@name='crossorigin']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='decoding']">
                <xsl:attribute name="decoding">
                    <xsl:value-of select="fragment[@name='decoding']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='height']">
                <xsl:attribute name="height">
                    <xsl:value-of select="fragment[@name='height']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ismap']">
                <xsl:attribute name="ismap">
                    <xsl:value-of select="fragment[@name='ismap']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='referrerpolicy']">
                <xsl:attribute name="referrerpolicy">
                    <xsl:value-of select="fragment[@name='referrerpolicy']"/>
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
            <xsl:if test="fragment[@name='usemap']">
                <xsl:attribute name="usemap">
                    <xsl:value-of select="fragment[@name='usemap']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='width']">
                <xsl:attribute name="width">
                    <xsl:value-of select="fragment[@name='width']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaHidden']">
                <xsl:attribute name="aria-hidden">
                    <xsl:value-of select="fragment[@name='ariaHidden']"/>
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
            <xsl:if test="fragment[@name='ariaLive']">
                <xsl:attribute name="aria-live">
                    <xsl:value-of select="fragment[@name='ariaLive']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaRelevant']">
                <xsl:attribute name="aria-relevant">
                    <xsl:value-of select="fragment[@name='ariaRelevant']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaAtomic']">
                <xsl:attribute name="aria-atomic">
                    <xsl:value-of select="fragment[@name='ariaAtomic']"/>
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
        </xsl:element>
    </xsl:template>

</xsl:stylesheet>
