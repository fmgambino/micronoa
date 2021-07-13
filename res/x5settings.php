<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'url' => 'http://micronoa.com/',
	'homepage_url' => 'http://micronoa.com/index.php',
	'public_folder' => '',
	'salt' => '5e1t5j55r1390107z84e1n54541h3v143887vw0hc2kh36o6a207',
	'use_common_email_sender_address' => true,
	'common_email_sender_addres' => 'electronicagambino@gmail.com'
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array(
	'uyzpz244' => array(
		'description' => 'Tienda',
		'host' => 'localhost',
		'database' => 'u217846095_shop',
		'user' => 'u217846095_fmg',
		'password' => 'jamboree0381'
	),
	'f4h6143u' => array(
		'description' => 'Usuarios',
		'host' => 'localhost',
		'database' => 'u217846095_user',
		'user' => 'u217846095_fg',
		'password' => 'jamboree0381'
	)
);


/*
|--------------------------------------------------------------------------------------
|	ECOMMERCE SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['ecommerce'] = array(
	'database' => array(
		'id' => 'uyzpz244',
		'table' => 'tienda',
		'currency' => '$'
	)
);

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();
/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(
);

/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = true;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 v12 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="#FFFFFF" style="background-color: #FFFFFF;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px;">' . "\n\t" . '<tr><td id="imEmailHeader" style="text-align: center; width: 700px;border-top-style: solid; border-top-color: #00BF30; border-top-width: 4px; border-left-style: solid; border-left-color: #00BF30; border-left-width: 4px; border-right-style: solid; border-right-color: #00BF30; border-right-width: 4px; border-bottom-style: none; border-bottom-color: transparent; border-bottom-width: 0px; border-bottom: none; background-color: #FFFFFF;" width="700px"><img src="http://micronoa.com/images/00-Logo-BotDuino-Largo-PNG.png" style="width: 424px; border: none;" width="424px"></td></tr>' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal normal 9pt \'Tahoma\'; color: #000000; background-color: #FFFFFF; text-align: left; text-decoration: none;  width: 700px;border-style: solid; border-color: #00BF30; border-top-width: 0px; border-top: none; border-right-width: 4px; border-bottom-width: 0; border-bottom: none; border-left-width: 4px;background-color: #FFFFFF" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '<tr><td id="imEmailFooter" style="font: normal normal normal 7pt \'Tahoma\'; color: #000000; background-color: transparent; text-align: center; text-decoration: none;  width: 700px;border-style: solid; border-color: #00BF30; border-top-width: 0; border-top: none; border-right-width: 4px; border-bottom-width: 4px; border-left-width: 4px; padding: 10px; background-color: #FFFFFF" width="700px">' . "\n\t\t" . 'Este e-mail incluye información exclusiva para el destinatario mencionado anteriormente.<br>Si lo ha recibido por error, notifíqueselo inmediatamente al remitente y destrúyalo sin copiarlo.' . "\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#FFFFFF';
$ImMailer->bodyBackgroundEven = '#FFFFFF';
$ImMailer->bodyBackgroundOdd = '#F0F0F0';
$ImMailer->bodyBackgroundBorder = '#CDCDCD';
$ImMailer->bodySeparatorBorderColor = '#000000';
$ImMailer->emailBackground = '#FFFFFF';
$ImMailer->emailContentStyle = 'font: normal normal normal 9pt \'Tahoma\'; color: #000000; background-color: #FFFFFF; text-align: left; text-decoration: none; ';
$ImMailer->emailContentFontFamily = 'font-family: Tahoma;';
ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label>Palabra de control:</label><br />
			<input type=\"text\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";

// End of file x5settings.php