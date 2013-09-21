<?php
	include_once 'models/urls.php';
	//habilita o uso de sessoes
	session_start();
	if (!isset($_SESSION['comum'])) {
		header("Location: $index");
	}
	//variaveis de SEO
	$title = "Usuário";
	//inclusao do template
	include_once 'template.html';