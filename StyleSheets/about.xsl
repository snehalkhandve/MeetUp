<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version= "1.0"
xmlns:xsl ="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
	<html>
		<body>
		<head>
			<link rel="stylesheet" type="text/css" href="style.css"></link>
		</head>
			<h2>About Us</h2>
			<header>
			<div class="icon-bar">
			  <a class="active" href="home.html">Home</a> 
			  <a class="active" href="faq.html">FAQs</a>
			  <a class="active" href="about.xml">AboutUs</a>
			  <a class="active" href="login.php" style="float: right;">Login</a> 
			  <a class="active" href="signup.php" style="float: right;">SignUp</a>
			</div>	
		</header>	
				<xsl:for-each select="aboutus/about">
				<tr>
					<h3><td><xsl:value-of select="feature"/></td></h3>
				</tr>
				<tr>
					<td><xsl:value-of select="description"/></td>
				</tr>
			</xsl:for-each>
		</body>
		<footer  style="text-align: center; ">
			Copyright &#9400; 2020 Snehal Khandve
		</footer>
	</html>

</xsl:template>
</xsl:stylesheet>