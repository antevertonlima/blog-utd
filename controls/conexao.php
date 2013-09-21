<?php
//define as constantes que serao usadas para a conexao
define("HOST", "localhost");
define("USER", "oshima");
define("PASS", "infojust12");
define("DB", "blogdopoder");
//conecta ao banco de dados
$conectar = mysql_connect(HOST, USER, PASS) or die(mysql_error());
//seleciona o banco em questao
mysql_select_db(DB, $conectar) or die(mysql_error());