<?xml version="1.0" encoding="UTF-8"?>
<!--
    This file is auto-generated. Do not edit manually.
    @see src/TemplateGenerator/XSLTGenerator.php
-->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes" encoding="UTF-8"/>

    <xsl:template match="item[@type='dd']">
        <xsl:element name="dd">
            <xsl:if test="@id">
                <xsl:attribute name="id"><xsl:value-of select="@id"/></xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='class']">
                <xsl:attribute name="class">
                    <xsl:value-of select="fragment[@name='class']"/>
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
