<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">

<html>
<head><style>
.imgcss{
	
	color:white;
    background: url(header.jpg);
    padding: 45px;
	background-repeat: no-repeat;
	border: 3px solid #ffffff;
    background-size: auto;
	background-position: center;
}</style></head>
<body>
<div  class="imgcss">
<h2>Contact US</h2>

<table border="3">
<tr bgcolor="red">
<th>ID</th>
<th>NAME</th>
<th>EMAIL</th>
<th>SKILLS</th>
</tr>

<xsl:for-each select="contactus/details">
<xsl:choose>
<xsl:when test="id=1">
<tr bgcolor="orange">
<td style="color:white"><xsl:value-of select="id"/></td>
<td style="color:white"><xsl:value-of select="name"/></td>
<td style="color:white"><xsl:value-of select="emailaddress"/></td>
<td style="color:white"><xsl:value-of select="skills"/></td>
</tr>
</xsl:when>
<xsl:otherwise>
<tr>
<td style="color:white"><xsl:value-of select="id"/></td>
<td style="color:white"><xsl:value-of select="name"/></td>
<td style="color:white"><xsl:value-of select="emailaddress"/></td>
<td style="color:white"><xsl:value-of select="skills"/></td>
</tr>
</xsl:otherwise>
</xsl:choose>
</xsl:for-each>
</table>
</div>

</body>
</html>
</xsl:template>
</xsl:stylesheet>