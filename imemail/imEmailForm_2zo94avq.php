<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Nombre', $_POST['imObjectForm_3_1'], '', false);
	$form->setField('Correo Electrónico', $_POST['imObjectForm_3_2'], '', false);
	$form->setField('Mensaje', $_POST['imObjectForm_3_3'], '', false);

	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != 'jsactive' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner($_POST['imObjectForm_3_2'] != "" ? $_POST['imObjectForm_3_2'] : 'info@aetti.org', 'info@aetti.org', '[AETTI] Consulta desde BOTDUINO', '', false);
		$form->mailToCustomer('no-responder@aetti.org', $_POST['imObjectForm_3_2'], '[AETTI] Consulta desde BOTDUINO.com.ar', '', false);
		@header('Location: ../index.php');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file