<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version= "1.0"
xmlns:xsl ="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
	<html>
		<body>
		<head>
			<link rel="stylesheet" type="text/css" href="style.css"></link>
		</head>
			<header>
			<div class="icon-bar">
			  <a class="active" href="home.html">Home</a> 
			  <a class="active" href="faq.xml">FAQs</a>
			  <a class="active" href="about.xml">AboutUs</a>
			  <a class="active" href="login.php" style="float: right;">Login</a> 
			  <a class="active" href="signup.php" style="float: right;">SignUp</a>
			</div>	
		</header>
			<table border = "1">
				<xsl:for-each select="faqlist/faq">
				<p>
				<strong>
					<xsl:value-of select="q"/>
				</strong>
				</p>
				<p>
					<xsl:value-of select="a"/>
				</p>
			</xsl:for-each>
			</table>
		</body>
	<footer  style="text-align: center; ">
		Copyright &#9400; 2020 Meeting Room Portal
	</footer>
	</html>

</xsl:template>
</xsl:stylesheet>
