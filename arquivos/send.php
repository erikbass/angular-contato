<?php

$erromsg         = array();
$data 			= array();

	if (empty($_POST['nome']))
		$erromsg['nome'] = 'Nome é obrigatório.';

	if (empty($_POST['email']))
		$erromsg['email'] = 'Email é obrigatório.';

	if (empty($_POST['mensagem']))
		$erromsg['mensagem'] = 'Mensagem é obrigatória.';


	if ( ! empty($erromsg)) {
		$data['success'] = false;
		$data['erromsg']  = $erromsg;
	} else {
		$data['success'] 	= true;
		$data['result'] 	= 'Obrigado pelo contato';
		$data['nome']		= $_POST['nome'];
		$data['email']		= $_POST['email'];
		$data['mensagem']	= $_POST['mensagem'];
	}

	echo json_encode($data);