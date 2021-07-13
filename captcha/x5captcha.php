<?php
include("../res/x5engine.php");
$nameList = array("j2d","e3l","se7","g4e","3dw","ucw","ge5","u2g","34l","pl2");
$charList = array("L","J","5","M","X","S","8","A","R","F");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
