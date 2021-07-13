<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Nombre y Apellido', $_POST['imObjectForm_1_1'], '', false);
	$form->setField('Correo Electrónico', $_POST['imObjectForm_1_2'], '', false);
	$form->setField('Usuario', $_POST['imObjectForm_1_3'], '', false);
	$form->setField('Contraseña', $_POST['imObjectForm_1_4'], '', false);

	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != 'jsactive' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner($_POST['imObjectForm_1_2'] != "" ? $_POST['imObjectForm_1_2'] : 'electronicagambino@gmail.com', 'electronicagambino@gmail.com', '[BOTDUINO®]Registro de Nuevo Usuario', 'Nuevo Usuario', true);
		$form->mailToCustomer('no-responder@botduino.com.ar', $_POST['imObjectForm_1_2'], '[BOTDUINO®]Registro de Usuario', 'Gracias por registrarse', true);
		@header('Location: ../acceso.php');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file