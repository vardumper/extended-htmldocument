<?xml version="1.0" encoding="UTF-8"?>
<!--
    This file is auto-generated. Do not edit manually.
    @see src/TemplateGenerator/XSLTGenerator.php
-->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes" encoding="UTF-8"/>

    <xsl:template match="item[@type='body']">
        <xsl:element name="body">
            <xsl:if test="@id">
                <xsl:attribute name="id"><xsl:value-of select="@id"/></xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='class']">
                <xsl:attribute name="class">
                    <xsl:value-of select="fragment[@name='class']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='onafterprint']">
                <xsl:attribute name="onafterprint">
                    <xsl:value-of select="fragment[@name='onafterprint']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='onbeforeprint']">
                <xsl:attribute name="onbeforeprint">
                    <xsl:value-of select="fragment[@name='onbeforeprint']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='onbeforeunload']">
                <xsl:attribute name="onbeforeunload">
                    <xsl:value-of select="fragment[@name='onbeforeunload']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='onhashchange']">
                <xsl:attribute name="onhashchange">
                    <xsl:value-of select="fragment[@name='onhashchange']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='onlanguagechange']">
                <xsl:attribute name="onlanguagechange">
                    <xsl:value-of select="fragment[@name='onlanguagechange']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='onmessage']">
                <xsl:attribute name="onmessage">
                    <xsl:value-of select="fragment[@name='onmessage']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='onmessageerror']">
                <xsl:attribute name="onmessageerror">
                    <xsl:value-of select="fragment[@name='onmessageerror']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='onoffline']">
                <xsl:attribute name="onoffline">
                    <xsl:value-of select="fragment[@name='onoffline']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='ononline']">
                <xsl:attribute name="ononline">
                    <xsl:value-of select="fragment[@name='ononline']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='onpagehide']">
                <xsl:attribute name="onpagehide">
                    <xsl:value-of select="fragment[@name='onpagehide']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='onpageshow']">
                <xsl:attribute name="onpageshow">
                    <xsl:value-of select="fragment[@name='onpageshow']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='onpopstate']">
                <xsl:attribute name="onpopstate">
                    <xsl:value-of select="fragment[@name='onpopstate']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='onrejectionhandled']">
                <xsl:attribute name="onrejectionhandled">
                    <xsl:value-of select="fragment[@name='onrejectionhandled']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='onstorage']">
                <xsl:attribute name="onstorage">
                    <xsl:value-of select="fragment[@name='onstorage']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='onunhandledrejection']">
                <xsl:attribute name="onunhandledrejection">
                    <xsl:value-of select="fragment[@name='onunhandledrejection']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='onunload']">
                <xsl:attribute name="onunload">
                    <xsl:value-of select="fragment[@name='onunload']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='accesskey']">
                <xsl:attribute name="accesskey">
                    <xsl:value-of select="fragment[@name='accesskey']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:if test="fragment[@name='dir'] and contains('|ltr|rtl|auto|', concat('|', fragment[@name='dir'], '|'))">
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
            <xsl:if test="fragment[@name='translate'] and contains('|yes|no|', concat('|', fragment[@name='translate'], '|'))">
                <xsl:attribute name="translate">
                    <xsl:value-of select="fragment[@name='translate']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:apply-templates select="item[@type='a' or @type='abbr' or @type='address' or @type='area' or @type='article' or @type='aside' or @type='audio' or @type='b' or @type='bdi' or @type='bdo' or @type='blockquote' or @type='br' or @type='button' or @type='canvas' or @type='cite' or @type='code' or @type='data' or @type='datalist' or @type='del' or @type='details' or @type='dfn' or @type='dialog' or @type='div' or @type='dl' or @type='em' or @type='embed' or @type='fieldset' or @type='figure' or @type='footer' or @type='form' or @type='h1' or @type='h2' or @type='h3' or @type='h4' or @type='h5' or @type='h6' or @type='header' or @type='hr' or @type='i' or @type='iframe' or @type='img' or @type='input' or @type='ins' or @type='kbd' or @type='label' or @type='main' or @type='map' or @type='mark' or @type='meter' or @type='nav' or @type='noscript' or @type='object' or @type='ol' or @type='output' or @type='p' or @type='picture' or @type='pre' or @type='progress' or @type='q' or @type='ruby' or @type='s' or @type='samp' or @type='script' or @type='section' or @type='select' or @type='small' or @type='span' or @type='strong' or @type='sub' or @type='sup' or @type='table' or @type='template' or @type='textarea' or @type='time' or @type='u' or @type='ul' or @type='var' or @type='video' or @type='wbr']"/>
        </xsl:element>
    </xsl:template>

</xsl:stylesheet>
