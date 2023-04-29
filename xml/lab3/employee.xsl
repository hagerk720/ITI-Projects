<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:fo="http://www.w3.org/1999/XSL/Format">
  <xsl:template match="/">
    <html>
      <head>
        <title>Employee List</title>
      </head>
      <body>
        <h2>Employee List</h2>
        <table border="1">
          <tr>
            <th>Name</th>
            <th>Work Phone</th>
            <th>Mobile Phone</th>
            <th>Home Phone</th>
            <th>Street</th>
            <th>City</th>
            <th>Country</th>
            <th>Building</th>
            <th>Region</th>
            <th>Email</th>
          </tr>
          <xsl:for-each select="employees/employee">
            <tr>
              <td><xsl:value-of select="name"/></td>
              <td><xsl:value-of select="phone[@type='work']"/></td>
              <td><xsl:value-of select="phone[@type='mobile']"/></td>
              <td><xsl:value-of select="phone[@type='home']"/></td>
              <td><xsl:value-of select="address/street"/></td>
              <td><xsl:value-of select="address/city"/></td>
              <td><xsl:value-of select="address/country"/></td>
              <td><xsl:value-of select="address/building"/></td>
              <td><xsl:value-of select="address/region"/></td>
              <td><xsl:value-of select="email"/></td>
            </tr>
          </xsl:for-each>
        </table>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>
