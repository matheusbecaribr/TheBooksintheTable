<?php

    $host = 'localhost:3306';
    $user = 'igolniuu_Becari';
    $password = '@Myl101917';
    $database = 'igolniuu_projetothebooksonthetable';

    $conexao = new mysqli($host, $user, $password, $database);

    if($conexao->connect_errno)
    {
        echo 'Erroooo';
    }



    function cadastrarUsuario($rm,$nome,$email,$dt_nascimento,$telefone,$senha,$userstatus,$adm){

        $sql = 'INSERT INTO usuario(rm, nome, email, dt_nascimento, telefone, senha, status_user, adm) VALUES ('.$rm.',"'.$nome.'","'.$email.'","'.$dt_nascimento.'","'.$telefone.'","'.$senha.'","'.$userstatus.'","'.$adm.'")';

        $res = $GLOBALS['conexao']->query($sql);

        if($res)
        {

          echo "Usuário cadastrado com sucesso!";

        }else{

          echo "Erro ao cadastrar!";
          
        }
    }


    function ExcluirUsuario($rm){
      
        $sql = 'DELETE FROM usuario WHERE rm = '.$rm;
        $res = $GLOBALS['conexao']->query($sql);

        if($res)
        {
          
          echo "Excluído com sucesso!";

        }else{ 

          echo "Erro ao excluir";

        }
    }
    
    function CadastrarLivro($ano, $classificacao, $estado, $id_editora, $id_genero, $isbn, $qtd, $sinopse, $titulo){
    
        $sql = 'INSERT INTO livro(ano, capa, cd, classificacao, estado, id_editora, id_genero, isbn, qtd, sinopse, titulo) VALUES ("'.$ano.'", null, null, "'.$classificacao.'", "'.$estado.'", "'.$id_editora.'", "'.$id_genero.'", "'.$isbn.'", "'.$qtd.'", "'.$sinopse.'", "'.$titulo.'")';
        
        $res  = $GLOBALS['conn']->query($sql);
        
        if($res){
          echo "Livro cadastrado";
        } else {
          echo "Erro ao cadastrar"; 
        }
    }

?>