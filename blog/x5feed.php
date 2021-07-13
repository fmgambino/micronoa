<?php include('../res/x5engine.php'); header('Content-Type: text/xml'); echo '<?xml version="1.0" encoding="utf-8"?>'; ?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
	<channel>
		<atom:link href="http://botduino.com.ar/blog/x5feed.php" rel="self" type="application/rss+xml" />
		<title><![CDATA[BOTDUINO | Robótica Inclusiva BLOG ]]></title>
		<link>http://botduino.com.ar/blog/</link>
		<description><![CDATA[Portal de noticia sobre nuestro Proyecto Educativo BOTDUINO, Plataforma Educativa de Robótica para la Inclusión.]]></description>
		<language>ES</language>
		<lastBuildDate><?php echo getLastAvailableDate(array(1554429720)); ?></lastBuildDate>
		<generator>Incomedia WebSite X5 Professional</generator>
<?php if (time() > 1554429720): ?>
		<item>
			<title><![CDATA[BOTDUINO -  Proyecto Educativo Innovador Destacado en 2019]]></title>
			<author><![CDATA[Fernando Gambino]]></author>
			<category domain="http://botduino.com.ar/blog/index.php?category=Premios_y_Distinciones"><![CDATA[Premios y Distinciones]]></category>
			<category>imblog</category>
			<description><![CDATA[<div id="imBlogPost_6geo4yf7"><img class="image-0 fleft" src="http://botduino.com.ar/images/01-BOTDUINO-LITE_wvpon2m9.jpg"  title="" alt=""/><span class="fs21 ff1"><span class="cf1">BOTDUINO</span> <span class="cf2">| Robótica Inclusive</span></span><div><span class="fs16">Durante el 2018 y debido al Programa Nacional de Capital Semilla, un fondeo para que los emprendedores pudieran recibir un apoyo para el diseño y desarrollos de sus proyectos, a modo de incentivar esta cultura y a futuro que convertir a estos emprendedores, en futuras PyMES, generando de esta manera una mayor fuente laborar genuina para los ciudadanos Argentino.</span></div></div>]]></description>
			<pubDate>Fri, 05 Apr 2019 02:02:00 GMT</pubDate>
			<link>http://botduino.com.ar/blog/?id=6geo4yf7</link>
			<guid isPermaLink="false">http://botduino.com.ar/blog/rss/6geo4yf7</guid>
		</item>
<?php endif; ?>
	</channel>
</rss>