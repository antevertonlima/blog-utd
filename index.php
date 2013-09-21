<?php
	include_once 'models/urls.php';
	//inclusao do arquivo modal
	include_once 'models/modal.php';
	//habilita o uso de sessoes
	session_start();
	//verifica se o usuario esta logado e se estiver redireciona para a pagina de acordo com seu perfil
	if (isset($_SESSION['comum'])) {
		header("Location: $index/usuario.php");
	} elseif (isset($_SESSION['admin'])){
		header("Location: $index/admin.php");
	}
	//variaveis de SEO
	$title = "Inicio";
	//inclusao do template
	include_once 'template.html';
	//chama funcao que gera a modal de cadastro
	geraModal($header, $body, $id_div);