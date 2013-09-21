<?php
    include_once 'models/urls.php';
    //habilita o uso de sessoes
    session_start();
    //verifica se o usuario esta logado e se estiver redireciona para a pagina de acordo com seu perfil
    if (isset($_SESSION['comum'])) {
            header("Location: $index/usuario.php");
    }
    function content(){
        global $raiz_dir, $index;
        echo '<h1 class="span10 offset1">Página inicial da area administrativa.</h1>';
    }
    //variaveis de SEO
    $title = "Inicio";
    //inclusao do template
    include_once 'views/admin/template.html';