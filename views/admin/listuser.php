<?php
    $pg = (isset($_GET['pag'])) ? intval($_GET['pag']) : 1;
    echo '<table class="table table-hover">';
    echo '
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Perfil</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
    ';
    pagination(10,$pg,selectedUser(),"usuario.php?pg=listuser");
    