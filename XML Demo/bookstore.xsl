<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
    <head>
    </head>
    <body>
    <h2>Bookstore Collection</h2>
    <table>
        <xsl:for-each select="bookstore">
            <xsl:value-of select>
    </table>
    </body>
</html>
</xsl:template>
</xsl:stylesheet>
