<?php

    /*session_start();

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('location: index.php');
    } else{
        header('location: home.php');
    }

    $logado = $_SESSION['email'];*/

    if(!isset($_SESSION))
    {
        session_start();
    }

    if((!isset($_SESSION['email']) == true || !isset($_SESSION['senha']) == true))
    {
        //die("Não foi possivel acessar a página pois você não está logado!<p><a href=\"index.php\">Entrar</a></p>");
    }

?>