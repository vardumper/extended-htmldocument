<?xml version="1.0" encoding="UTF-8"?>
<!--
    This file is auto-generated. Do not edit manually.
    @see src/TemplateGenerator/XSLTGenerator.php
-->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes" encoding="UTF-8"/>

    <xsl:template match="item[@type='iframe']">
        <xsl:element name="iframe">
            <xsl:if test="@id">
                <xsl:attribute name="id"><xsl:value-of select="@id"/></xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='class']">
                <xsl:attribute name="class">
                    <xsl:value-of select="fragment[@name='class']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='allowfullscreen']">
                <xsl:attribute name="allowfullscreen">
                    <xsl:value-of select="fragment[@name='allowfullscreen']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='height']">
                <xsl:attribute name="height">
                    <xsl:value-of select="fragment[@name='height']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='name']">
                <xsl:attribute name="name">
                    <xsl:value-of select="fragment[@name='name']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='referrerpolicy']">
                <xsl:attribute name="referrerpolicy">
                    <xsl:value-of select="fragment[@name='referrerpolicy']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='sandbox']">
                <xsl:attribute name="sandbox">
                    <xsl:value-of select="fragment[@name='sandbox']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='seamless']">
                <xsl:attribute name="seamless">
                    <xsl:value-of select="fragment[@name='seamless']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='src']">
                <xsl:attribute name="src">
                    <xsl:value-of select="fragment[@name='src']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='srcdoc']">
                <xsl:attribute name="srcdoc">
                    <xsl:value-of select="fragment[@name='srcdoc']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='width']">
                <xsl:attribute name="width">
                    <xsl:value-of select="fragment[@name='width']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='role']">
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
            <xsl:if test="fragment[@name='ariaBusy']">
                <xsl:attribute name="aria-busy">
                    <xsl:value-of select="fragment[@name='ariaBusy']"/>
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
            <xsl:if test="fragment[@name='popover']">
                <xsl:attribute name="popover">
                    <xsl:value-of select="fragment[@name='popover']"/>
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
            <xsl:apply-templates select="item"/>
        </xsl:element>
    </xsl:template>

</xsl:stylesheet>
