<?xml version="1.0"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">
            <div id="container">
                <div id="mainContent">
                    <div id="actualContent">
                        <h1>
                            About <xsl:value-of select="page/title"/> Page
                        </h1>
                        <p>
                            <xsl:value-of disable-output-escaping="yes" select="page/description"/>
                        </p>
                        <p class='keywords'>
                            Keywords: <xsl:for-each select="page/keywords/keyword">
                                <span><xsl:value-of select="."/></span>
                            </xsl:for-each>
                        </p>
                        <xsl:for-each select="page/section">
                            <h3>
                                <xsl:value-of select="title" />
                            </h3>
                            <xsl:value-of disable-output-escaping="yes" select="content" />
                            <br />
                        </xsl:for-each>
                    </div>
                </div>
            </div>
        </xsl:template>

</xsl:stylesheet> 