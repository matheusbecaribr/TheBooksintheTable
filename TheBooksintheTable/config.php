<?php

    $bdhost = 'localhost';
    $bduser = 'root';
    $bdpassword = '';
    $bdbanco = 'thebooksonthetable';

    $conexao = new mysqli($bdhost, $bduser, $bdpassword, $bdbanco);

    if($conexao->connect_errno)
    {
        echo 'Erroooo';
    }



    function Login($email, $senha, $tipo){

        $sql = 'SELECT * FROM usuario WHERE email = "'. $email .'" AND senha "'. $senha .'"';
        $res = $GLOBALS['conn']->query($sql);

        if($res->num_rows > 0){
            $retorno['erro'] = false;
            $user = $res->fetch_object();
            $retorno['dados'] = json_encode($user);
        }
        else{
            $retorno['erro'] = true;
        }

        if($tipo == "json"){
            return json_encode($retorno);
        }
        else{
            return $retorno;
        }
    }
?>