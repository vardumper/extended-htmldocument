<?xml version="1.0" encoding="UTF-8"?>
<!--
    This file is auto-generated. Do not edit manually.
    @see src/TemplateGenerator/XSLTGenerator.php
-->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes" encoding="UTF-8"/>

    <xsl:template match="item[@type='progress']">
        <xsl:element name="progress">
            <xsl:if test="@id">
                <xsl:attribute name="id"><xsl:value-of select="@id"/></xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='class']">
                <xsl:attribute name="class">
                    <xsl:value-of select="fragment[@name='class']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='max']">
                <xsl:attribute name="max">
                    <xsl:value-of select="fragment[@name='max']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='value']">
                <xsl:attribute name="value">
                    <xsl:value-of select="fragment[@name='value']"/>
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
            <xsl:if test="fragment[@name='ariaValuemax']">
                <xsl:attribute name="aria-valuemax">
                    <xsl:value-of select="fragment[@name='ariaValuemax']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaValuemin']">
                <xsl:attribute name="aria-valuemin">
                    <xsl:value-of select="fragment[@name='ariaValuemin']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaValuenow']">
                <xsl:attribute name="aria-valuenow">
                    <xsl:value-of select="fragment[@name='ariaValuenow']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaValuetext']">
                <xsl:attribute name="aria-valuetext">
                    <xsl:value-of select="fragment[@name='ariaValuetext']"/>
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
