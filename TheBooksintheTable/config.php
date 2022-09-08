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



    function cadastrarUsuario($rm,$nome,$email,$senha,$userstatus,$adm){

        $sql = 'INSERT INTO usuario(rm, nome, email, senha, status_user, adm) VALUES ('.$rm.',"'.$nome.'","'.$email.'","'.$senha.'","'.$userstatus.'","'.$adm.'")';
        $destino = '/imagees/usuarios/'.$rm;

        if (is_dir($destino))
        {
            mkdir($destino, 0777);
        }

        $res = $GLOBALS['conn']->query($sql);

        if($res)
        {

          echo "Usuário cadastrado com sucesso!";

        }else{

          echo "Erro ao cadastrar ADM";
          
        }
    }


    function ExcluirUsuario($rm){
      
        $sql = 'DELETE FROM usuario WHERE rm = '.$rm;
        $res = $GLOBALS['conn']->query($sql);

        if($res)
        {
          
          echo "Excluído com sucesso!";

        }else{ 

          echo "Erro ao excluir";

        }
    }

?>