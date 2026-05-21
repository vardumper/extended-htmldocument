<?xml version="1.0" encoding="UTF-8"?>
<!--
    This file is auto-generated. Do not edit manually.
    @see src/TemplateGenerator/XSLTGenerator.php
-->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes" encoding="UTF-8"/>

    <xsl:template match="item[@type='button']">
        <xsl:element name="button">
            <xsl:if test="@id">
                <xsl:attribute name="id"><xsl:value-of select="@id"/></xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='class']">
                <xsl:attribute name="class">
                    <xsl:value-of select="fragment[@name='class']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='autocorrect']">
                <xsl:attribute name="autocorrect">
                    <xsl:value-of select="fragment[@name='autocorrect']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='disabled']">
                <xsl:attribute name="disabled">
                    <xsl:value-of select="fragment[@name='disabled']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='name']">
                <xsl:attribute name="name">
                    <xsl:value-of select="fragment[@name='name']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='type']">
                <xsl:attribute name="type">
                    <xsl:value-of select="fragment[@name='type']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='value']">
                <xsl:attribute name="value">
                    <xsl:value-of select="fragment[@name='value']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='form']">
                <xsl:attribute name="form">
                    <xsl:value-of select="fragment[@name='form']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='formaction']">
                <xsl:attribute name="formaction">
                    <xsl:value-of select="fragment[@name='formaction']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='formenctype']">
                <xsl:attribute name="formenctype">
                    <xsl:value-of select="fragment[@name='formenctype']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='formmethod']">
                <xsl:attribute name="formmethod">
                    <xsl:value-of select="fragment[@name='formmethod']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='formnovalidate']">
                <xsl:attribute name="formnovalidate">
                    <xsl:value-of select="fragment[@name='formnovalidate']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='formtarget']">
                <xsl:attribute name="formtarget">
                    <xsl:value-of select="fragment[@name='formtarget']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='popovertarget']">
                <xsl:attribute name="popovertarget">
                    <xsl:value-of select="fragment[@name='popovertarget']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='popovertargetaction']">
                <xsl:attribute name="popovertargetaction">
                    <xsl:value-of select="fragment[@name='popovertargetaction']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='command']">
                <xsl:attribute name="command">
                    <xsl:value-of select="fragment[@name='command']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='commandfor']">
                <xsl:attribute name="commandfor">
                    <xsl:value-of select="fragment[@name='commandfor']"/>
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
            <xsl:if test="fragment[@name='ariaCurrent']">
                <xsl:attribute name="aria-current">
                    <xsl:value-of select="fragment[@name='ariaCurrent']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaBusy']">
                <xsl:attribute name="aria-busy">
                    <xsl:value-of select="fragment[@name='ariaBusy']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaLabel']">
                <xsl:attribute name="aria-label">
                    <xsl:value-of select="fragment[@name='ariaLabel']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaDisabled']">
                <xsl:attribute name="aria-disabled">
                    <xsl:value-of select="fragment[@name='ariaDisabled']"/>
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
            <xsl:if test="fragment[@name='ariaExpanded']">
                <xsl:attribute name="aria-expanded">
                    <xsl:value-of select="fragment[@name='ariaExpanded']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaHaspopup']">
                <xsl:attribute name="aria-haspopup">
                    <xsl:value-of select="fragment[@name='ariaHaspopup']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaPressed']">
                <xsl:attribute name="aria-pressed">
                    <xsl:value-of select="fragment[@name='ariaPressed']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ariaChecked']">
                <xsl:attribute name="aria-checked">
                    <xsl:value-of select="fragment[@name='ariaChecked']"/>
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
