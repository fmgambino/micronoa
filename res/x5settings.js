(function ( $, x5engine ) {
	var x = x5engine,
		s = x.settings,
		p = s.currentPath,
		b = x.boot;

	s.siteId = '1911F2DCA79DF532D58ED24E882DDD8F';
	s.version = '12-0-10-32';
	b.push(function () {
		x.setupDateTime();
		x.imAccess.showLogout();
		x.utils.autoHeight();
		x.cart.ui.updateWidget();
		x.imGrid.init();
	});
	s.menu = {
		verticalScroll: true,
		orientation: 'horizontal'
	};
	b.push(function () {
		x.menu({
			target: '#imMnMn',
			showCurrent: false,
			desktopVerticalScroll: true,
			mobileVerticalScroll: false,
			showLogoOnScroll: false,
			orientation: 'horizontal',
			menuHeight: 43,
			menuWidth: 115,
			submenuHeight: 25,
			submenuWidth: 160,
			opacity: 0.8,
			type: 'singleColumn',
			alignment: 'left',
			effect: 'fade'
		});
	});
	b.push(function () { x.utils.imPreloadImages([p + 'menu/hor_main.png',p + 'menu/hor_main_h.png',p + 'menu/hor_main_c.png',p + 'menu/sub.png',p + 'menu/sub_h.png',p + 'menu/sub_f.png',p + 'menu/sub_m.png',p + 'menu/sub_l.png',p + 'menu/sub_f_h.png',p + 'menu/sub_m_h.png',p + 'menu/sub_l_h.png', p + 'res/imLoad.gif', p + 'res/imClose.png']); });

	// ShowBox
	$.extend(s.imShowBox, {
		'effect' : 'fade',
		'shadow' : '',
		'background' : '#000000',
		'borderWidth' : {
			'top': 1,
			'right': 1,
			'bottom': 1,
			'left': 1
		},
		buttonRight: {
			url: p + 'res/b01_r.png',
			position: {
				x: -12,
				y: 0
			}
		},
		buttonLeft: {
			url: p + 'res/b01_l.png',
			position: {
				x: -12,
				y: 0
			}
		},
		'borderRadius' : '5px 5px 5px 5px',
		'borderColor' : '#000000 #000000 #000000 #000000',
		'textColor' : '#000000',
		'fontFamily' : 'Tahoma',
		'fontStyle' : 'normal',
		'fontWeight' : 'normal',
		'fontSize' : '9pt',
		'textAlignment' : 'left',
		'boxColor' : '#FFFFFF',
		'opacity' : 0.7,
		'radialBg' : true // Works only in Mozilla Firefox and Google Chrome
	});

	// PopUp
	$.extend(s.imPopUp, {
		'effect' : 'fade',
		'width' : 500,
		'shadow' : '',
		'background' : '#000000',
		'borderRadius' : 10,
		'textColor' : '#000000',
		'boxColor' : '#FFFFFF',
		'opacity' : 0.7
	});

	// Tip
	$.extend(s.imTip, {
		'borderRadius' : 1,
		'arrow' : true,
		'position' : 'bottom',
		'effect' : 'none',
		'showTail' : true
	});

	// Captcha
	b.push(function () {
		x5engine.captcha.instance = new x5engine.captcha.x5captcha({
			"phpfile": "captcha/x5captcha.php",
		});
	}, false, 'first');

	// BreakPoints
	s.breakPoints.push({ "hash": "fc23f27c1080aa74e1efeec9f2399630", "name": "Desktop", "start": "max", "end": 960, "fluid": false});
	s.breakPoints.push({ "hash": "eee935b95a745d19534ef1597767c120", "name": "Breakpoint 1", "start": 959, "end": 840, "fluid": false});
	s.breakPoints.push({ "hash": "b5a6e70dcd45b271d4dbff444ddeed77", "name": "Mobile", "start": 839, "end": 480, "fluid": false});
	s.breakPoints.push({ "hash": "e81e7c6a4cc72fa678403ac3f73710af", "name": "Mobile Fluid", "start": 479, "end": 0, "fluid": true});

	b.push(function() { x.cookielaw.showBanner({id: "cookie-law-message", text: "Este sitio web usa Cookies, se ruega leer la nota informativa sobre el Tratamiento de Datos.", priority: 1, position: 'top'}); });

	s.loaded = true;
})( _jq, x5engine );
