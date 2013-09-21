<?php
    include_once 'conexao.php';
    //responsavel por inserir usuario no banco de dados
    function insertUser($dados_user){
            global $conectar;
            if($dados_user != null){
                    $nome  = $dados_user["nome"];
                    $email = $dados_user["email"];
                    $senha = $dados_user["senha"];
                    $perfil = $dados_user["perfil"];
                    $status = $dados_user["status"];
                    //query para validar se existe o email cadastrado no banco
                    $query_val  = "SELECT * FROM `tb_usuarios` WHERE `email`='$email'";
                    $result_val = mysql_query($query_val, $conectar);
                    $val = mysql_num_rows($result_val);
                    //se nao existir cadastra se existir mostra erro
                    if ($val <= 0) {
                            //executa o cadastro dos dados do usuario
                            $query = "INSERT INTO `tb_usuarios` (`nome`, `email`, `senha`, `perfil`,`status`)
                            VALUES ('$nome', '$email', '$senha', '$perfil','$status')";
                            mysql_query($query, $conectar);
                            //incerra a conexao com banco
                            mysql_close();
                            //retorna o resultado como verdadeiro
                            return true;
                    } else {
                            return false;
                    }
            }
    }
    function updateUser($dados_user){

    }
    function deleteUser($dados_user){

    }
    function selectedUser(){
        $query = "SELECT * FROM `tb_usuarios`";
        $qr = mysql_query($query);
        while ($row = mysql_fetch_assoc($qr)) {
            $perfil = ($row['perfil'] == "admin") ? "Administrador" : "Comum";
            $status = ($row['status'] == a) ? "Ativo" : "Inativo";
            $resultados[] = '
                <tr>
                    <td>'.$row['nome'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$perfil.'</td>
                    <td>'.$status.'</td>
                </tr>
            ';
        }
        return $resultados;
    }
    function pagination($perPage = 1, $atual = 1, $retorno, $pagina = ""){
        $pagResult = array_chunk($retorno, $perPage);
        $contar = count($pagResult);
        $result = $pagResult[$atual-1];
        foreach ($result as $value) {
            echo $value;
        }
        echo '</table>';
        echo '<div class="pagination pagination-small pagination-centered">';
        echo '<ul>';
        for($i = 1; $i <= $contar; $i++){
            if ($i == $atual) {
                printf('<li class="disabled"><a href="#">%s</a></li>',$i);
            }  else {
                printf('<li><a href="%s&pag=%s">%s</a></li>',$pagina,$i,$i);
            }
        }
        echo '</ul>';
        echo '</div>';
    }