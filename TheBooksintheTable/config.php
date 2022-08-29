<?php

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'thebooksonthetable';

    $conexao = new mysqli($host, $user, $password, $database);

    if($conexao->connect_errno)
    {
        echo 'Erroooo';
    }

?>