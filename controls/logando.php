<?php
	include_once 'conexao.php';
	include_once '../models/urls.php';
	session_start();
	//recebendo dados do usuario
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);
	//seleciona dados retornados do formulario
	$query  = "SELECT * FROM `tb_usuarios` WHERE `email`='$email' AND `senha`='$senha'";
	$result = mysql_query($query, $conectar);
	//testando o login
	if (mysql_num_rows($result) > 0) {
		$dados = mysql_fetch_array($result);
		//cria a sessao logado com os dados do usuario
		if ($dados['perfil'] == "comum") {
			$_SESSION['comum'] = $dados;
			echo '<script>';
			echo 'alert("Usuario Logado com sucesso!");';
			echo 'location.href="'.$index.'"';
			echo '</script>';
		} elseif ($dados['perfil'] == "admin"){
			$_SESSION['admin'] = $dados;
			echo '<script>';
			echo 'alert("Usuario Logado com sucesso!");';
			echo 'location.href="'.$index.'"';
			echo '</script>';
		}
	} else {
		echo '<script>';
			echo 'alert("Erro ao logar.");';
			echo 'location.href="'.$index.'"';
		echo '</script>';
	}