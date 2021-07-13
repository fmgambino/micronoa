<?php

include ("../res/x5engine.php");
$ecommerce = new ImCart();
// Setup the coupon data
$couponData = array();
$couponData['cart'] = array('coupon' => 'BOT0381','amount' => 0.05);
$couponData['products'] = array(
	'u8sj55t7' => array('coupon' => 'BOT0381','start_time' => 1554307303,'end_time' => 1554480103),
	'90j4l65d' => array('coupon' => 'BOT0381','start_time' => 1554307303,'end_time' => 1554480103)
);
// Setup the cart
$ecommerce->setPublicFolder('');
$ecommerce->setCouponData($couponData);
$dbconf = getDbData($imSettings['ecommerce']['database']['id']);
$ecommerce->setDatabaseConnection($dbconf['host'], $dbconf['user'], $dbconf['password'], $dbconf['database'], $imSettings['ecommerce']['database']['table']);
$ecommerce->setSettings(array(
	'force_sender' => false,
	'email_opening' => 'Estimado cliente,<br /><br />Gracias por su compra. Este es un resumen de su pedido<br /><br />A continuación encontrará una lista de los productos pedidos, la información de facturación y las instrucciones sobre el envío y la forma de pago que ha elegido.',
	'email_closing' => 'Póngase en contacto con nosotros si requiere información adicional.<br /><br />Atentamente, el personal de Ventas.',
	'useCSV' => false,
	'header_bg_color' => '#00BF30',
	'header_text_color' => '#FFFFFF',
	'cell_bg_color' => '#FFFFFF',
	'cell_text_color' => '#000000',
	'availability_reduction_type' => 2,
	'border_color' => '#D3D3D3',
	'owner_email' => 'electronicagambino@gmmail.com',
	'vat_type' => 'included'
));

// Check the coupon code
if (@$_GET['action'] == 'chkcpn' && isset($_POST['coupon'])) {
	header('Content-type: application/json');
	echo $ecommerce->checkCoupon($_POST['coupon']);
	exit();
}
// Check the dynamic products status
else if (@$_GET['action'] == 'productstatus' && !isset($_POST['product_id']) && ($headers = imRequestHeaders()) !== false) {
	$token = "";
	foreach ($headers as $key => $value) {
		if (strtolower($key) == 'x-incomedia-wsx5-token') {
			$token = $value;
		}
	}
	if ($token == '662h5e1t5j55r1390107z84e1n54541h3v143887vw0h2kh36o6h3207') {
		header('Content-type: application/json');
		echo json_encode(array('data' => $ecommerce->getDynamicProductsStatus()));
		exit();
	}
}
// Check a single dynamic products status
else if (@$_GET['action'] == 'productstatus' && isset($_POST['product_id'])) {
	header('Content-type: application/json');
	echo $ecommerce->getDynamicProductQuantity(@$_POST['product_id']);
	exit();
}
else if (@$_GET['action'] == 'sndrdr' && isset($_POST['orderData'])) {
	$orderNo = $_POST['orderData']['orderNo'];
	$ecommerce->setOrderData($_POST['orderData']);
	$db = getDbData('uyzpz244');
	if ($db === false) {
		echo '{ "status": "error", "errorType": "no_db_connection" }';
		exit;
	}
	$order = $ecommerce->saveOrderToDb($db['host'], $db['user'], $db['password'], $db['database'], 'tienda');
	if ($order['status'] == 'ok') {
		$ecommerce->sendOwnerEmail();
		$ecommerce->sendCustomerEmail();
	}
	echo json_encode($order);
}

// End of file x5cart.php
