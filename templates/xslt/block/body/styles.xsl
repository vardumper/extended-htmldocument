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
            <xsl:if test="fragment[@name='translate']">
                <xsl:attribute name="translate">
                    <xsl:value-of select="fragment[@name='translate']"/>
                </xsl:attribute>
            </xsl:if>
            <xsl:apply-templates select="item"/>
        </xsl:element>
    </xsl:template>

</xsl:stylesheet>
