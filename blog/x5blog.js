x5engine.settings.imBlog = {
	root: 'http://botduino.com.ar/blog/',
	home_posts_number: 10,
	file_prefix: 'x5_',
	comments: true,
	comments_source: 'external',
	comments_code: '<div id="fb-root"></div><div class="fb-comments" data-href="http://127.0.0.1:8080/blog/index.php" data-numposts="5" data-width="100%" data-colorscheme="light"></div><script>$(".fb-comments").attr("data-href", location.href);(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.6";fjs.parentNode.insertBefore(js, fjs);}(document, \'script\', \'facebook-jssdk\'));</script>',
	post_type: 'firstshown',
	addThis: '<!-- AddThis Button BEGIN --><div class="addthis_toolbox addthis_default_style addthis_32x32_style"><a class="addthis_button_preferred_1"></a><a class="addthis_button_preferred_2"></a><a class="addthis_button_preferred_3"></a><a class="addthis_button_preferred_4"></a><a class="addthis_button_compact"></a><a class="addthis_counter addthis_bubble_style"></a></div><script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#username="></script><!-- AddThis Button END --><script type="text/javascript">(function waitForAddThis() {if (typeof addthis == "undefined" || typeof $ == "undefined") { setTimeout(waitForAddThis, 100); return; }addthis.addEventListener("addthis.ready", function (evt) { $("#imContent").change(); }) })()</script>',
	categories: ['Premios y Distinciones'],
	posts: [],
	posts_cat: [],
	posts_month: [],
	posts_ids: []
};

var post = null;

// Post titled "BOTDUINO -  Proyecto Educativo Innovador Destacado en 2019"
x5engine.settings.imBlog.posts['6geo4yf7'] = {
	id: '6geo4yf7',
	title: 'BOTDUINO -  Proyecto Educativo Innovador Destacado en 2019',
	author: 'Fernando Gambino',
	category: 'Premios y Distinciones',
	summary: 'Se destaco entre todos lo sproyectos presentados durando 2018 para Capital Semilla otorgado por el ministerio de Producción y Trabajo de la Nación Argentina.',
	sources: [],
	body: '<div id="imBlogPost_6geo4yf7"><img class="image-0 fleft" src="../images/01-BOTDUINO-LITE_wvpon2m9.jpg"  title="" alt=""/><span class="fs21 ff1"><span class="cf1">BOTDUINO</span> <span class="cf2">| Robótica Inclusive</span></span><div><span class="fs16">Durante el 2018 y debido al Programa Nacional de Capital Semilla, un fondeo para que los emprendedores pudieran recibir un apoyo para el diseño y desarrollos de sus proyectos, a modo de incentivar esta cultura y a futuro que convertir a estos emprendedores, en futuras PyMES, generando de esta manera una mayor fuente laborar genuina para los ciudadanos Argentino.</span></div><div style="clear: both;"><!-- clear floated images --></div></div>',
	timestamp: '4/4/2019 23:02:00',
	utc_time: new Date(2019,3,5,2,2,0),
	month: '201904',
	comments: true,
	tag: []
};
if (x5engine.settings.imBlog.posts_cat['Premios y Distinciones'] == null) x5engine.settings.imBlog.posts_cat['Premios y Distinciones'] = [];
x5engine.settings.imBlog.posts_cat['Premios y Distinciones'][x5engine.settings.imBlog.posts_cat['Premios y Distinciones'].length] = '6geo4yf7';
if (x5engine.settings.imBlog.posts_month['201904'] == null) x5engine.settings.imBlog.posts_month['201904'] = [];
x5engine.settings.imBlog.posts_month['201904'][x5engine.settings.imBlog.posts_month['201904'].length] = '6geo4yf7';

// IDs summary
x5engine.settings.imBlog.posts_ids = ['6geo4yf7'];

x5engine.boot.push("x5engine.imBlog.show()");
x5engine.boot.push("x5engine.imForm.initForm('#blogComment')");

// End of file x5blog.js