<?php
	include_once '../models/urls.php';
	session_start();
	session_unset();
	session_destroy();
	echo '<script>';
	echo 'alert("LogOff realizado com sucesso! Obrigado por escolher nosso site!");';
	echo 'location.href="'.$index.'"';
	echo '</script>';