<?php
    $pagina = $_GET['pg'];
    switch ($pagina) {
    //mostra a pagina de cadastro de usuarios
    case "newuser":
        include_once '../models/urls.php';
        //habilita o uso de sessoes
        session_start();
        //verifica se o usuario esta logado e se estiver redireciona para a pagina de acordo com seu perfil
        if (isset($_SESSION['comum'])) {
                header("Location: $index/usuario.php");
        }
        function content(){
            global $raiz_dir, $index;
            echo '</br>';
            include_once($raiz_dir.'/views/admin/forms/newuser.html');
        }
        //variaveis de SEO
        $title = "Cadastrar novo usuário";
        //inclusao do template
        include_once '../views/admin/template.html';
        break;
    //mostra pagina que lista os usuarios cadastrados no sistema
    case "listuser":
        include_once '../models/urls.php';
        include_once '../controls/evento.php';
        //habilita o uso de sessoes
        session_start();
        //verifica se o usuario esta logado e se estiver redireciona para a pagina de acordo com seu perfil
        if (isset($_SESSION['comum'])) {
                header("Location: $index/usuario.php");
        }
        function content(){
            global $raiz_dir, $index;
            echo '</br>';
            include_once($raiz_dir.'/views/admin/listuser.php');
        }
        //variaveis de SEO
        $title = "Cadastrar novo usuário";
        //inclusao do template
        include_once '../views/admin/template.html';
        break;
    //mostra a pagina de alteracao de usuarios
    case "altuser":
        include_once '../models/urls.php';
        //habilita o uso de sessoes
        session_start();
        //verifica se o usuario esta logado e se estiver redireciona para a pagina de acordo com seu perfil
        if (isset($_SESSION['comum'])) {
                header("Location: $index/usuario.php");
        }
        function content(){
            global $raiz_dir, $index;
            echo '</br>';
            include_once($raiz_dir.'/views/admin/forms/newuser.html');
        }
        //variaveis de SEO
        $title = "Cadastrar novo usuário";
        //inclusao do template
        include_once '../views/admin/template.html';
        break;
    default:
        break;
}