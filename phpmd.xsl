<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="text" encoding="UTF-8" omit-xml-declaration="yes" />
<xsl:strip-space elements="*"/>
<xsl:template match="/pmd">
| Priority | File   | Line         |  Rule | Message |
| -------- | ------ | ------------ | ----- | ------- |
<xsl:for-each select="file//violation">| <xsl:value-of select="@priority"/> | src/<xsl:value-of select="substring-after(../@name, '/src/')"/> | <xsl:value-of select="@beginline"/> | [<xsl:value-of select="@rule"/>](<xsl:value-of select="@externalInfoUrl"/>) | <xsl:value-of select="normalize-space(translate(text(), &quot;'&quot;, '&#x60;'))"/> |
</xsl:for-each>
</xsl:template>
</xsl:stylesheet>
