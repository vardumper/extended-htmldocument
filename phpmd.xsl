<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="text" encoding="UTF-8" omit-xml-declaration="yes" />
<xsl:strip-space elements="*"/>
<xsl:template match="/pmd">
<xsl:if test="count(file//violation) &gt; 0">
| Priority | File   | Line         |  Rule | Message |
| -------- | ------ | ------------ | ----- | ------- |
<xsl:for-each select="file//violation"><xsl:sort select="@priority" order="descending"/>| <xsl:value-of select="concat('&lt;span class=&quot;prio', @priority, '&quot;>', @priority, '&lt;/span>')"/> | src/<xsl:value-of select="substring-after(../@name, '/src/')"/> | <xsl:value-of select="@beginline"/> | [<xsl:value-of select="@rule"/>](<xsl:value-of select="@externalInfoUrl"/>) | <xsl:value-of select="normalize-space(translate(text(), &quot;'&quot;, '&#x60;'))"/> |
</xsl:for-each>
Issues detected: <xsl:value-of select="count(file//violation)"/>
</xsl:if>
<xsl:if test="count(file//violation) = 0">
    Good job. No issues found.
</xsl:if>
</xsl:template>
</xsl:stylesheet>
