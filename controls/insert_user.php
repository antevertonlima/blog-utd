<?php
    session_start();
    include_once '../models/urls.php';
    //inclusao do arquivo responsavel pela manipulacao dos dados
    include_once 'evento.php';
    $dados = array(
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => md5($_POST['senha']),
            'perfil' => $_POST['perfil'],
            'status' => $_POST['status']
    );
    $retorno = insertUser($dados);
    if($retorno == true){
        if(!isset($_SESSION['admin'])){
           echo '<script>';
                echo 'alert("Novo usuario castrado com sucesso!");';
                echo 'location.href="'.$index.'"';
           echo '</script>'; 
        }  else {
           echo '<script>';
                echo 'alert("Novo usuario castrado com sucesso!");';
                echo 'location.href="'.$index.'/admin.php"';
           echo '</script>'; 
        }
    }else {
       if(!isset($_SESSION['admin'])){
           echo '<script>';
                echo 'alert("Novo usuario castrado com sucesso!");';
                echo 'location.href="'.$index.'"';
           echo '</script>'; 
        }  else {
           echo '<script>';
                echo 'alert("Novo usuario castrado com sucesso!");';
                echo 'location.href="'.$index.'/admin.php"';
           echo '</script>'; 
        }
    }