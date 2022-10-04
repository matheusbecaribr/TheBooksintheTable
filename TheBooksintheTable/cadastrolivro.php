<?php

    session_start();
        
    $prot = $_SESSION['email'];

    if(!isset($prot)){
        header('location: index.php');
    } else{
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="registerstyle.css">
    <title>Cadastro Livro</title>
</head>
<style>

    .nav2{
        padding-top: 12rem;
        padding-bottom: 12rem;
    }

    *{
        overflow: visible;
    }

    h1{
        padding: 5rem;
    }

    .nav2{
        width: 50%;
        height: 100vh;
    }

    #buttonmenu{
        padding: 10px;
        border-radius: 5px;
        color: white;
        text-decoration: none;
        background-color: #5900ff;
        transition: 0.3s;
    }

    #buttonmenu:hover{
        background-color: #262779;
    }
    
    .form{
        padding: 10%;
    }

    select{
        display: flex;
        justify-content: center;
        width: 30rem;
        padding: 10px;
        font-size: 12pt;
    }
    
    .dive{
        width: 100%;
    }
    
    #criar{
        padding: 15px;
    }

    #buttoncriar{
        width: 30rem;
        font-size: 12pt;
        padding: 10px;
        border-radius: 5px;
        color: white;
        text-decoration: none;
        background-color: #5900ff;
        transition: 0.3s;
    }

    #buttoncriar:hover{
        background-color: #262779;
    }
    
    h3{
        font-size: 10pt;
    }
    
    input{
        padding: 6px;
        width: 30rem;
    }
    
    textarea{
        color: white;
        padding: none;
        background-color: #10141d;
        border: 1px solid rgb(100, 100, 100);
        border-radius: 5px;
    }
</style>
<body>
    <header>
        <nav>
            <div>
                <a id="buttonmenu" href="home.php">Home</a>
            </div>
        </nav>
    </header>
    <nav class="navdasnavs">
        <nav class="nav1">
            <div>
                <h1>cadastro<br>de<br>livro</h1>
            </div>
        </nav>
        <nav class="nav2">
        <form action="" method="POST" class="form" name="form ">
            <div class="div1">
                <section>
                        <h3>Título: </h3>
                        <input type="text" name="titulo" id="titulo">
                </section>
                <section>
                        <h3>Ano:</h3>
                        <input type="number" name="ano" id="ano">
                </section>
                <section>
                        <h3>Quantidade:</h3>
                        <input type="number" name="qtd" id="qtd">
                </section>
                <section>
                        <h3>Sinopse:</h3>
                        <textarea class="input" name="sinopse" id="sinopse">
                        </textarea>
                </section>
                <section>
                        <h3>Classificação:</h3>
                        <input type="number" name="classificacao" id="classificacao">
                </section>
                <section>
                        <h3>Estado:</h3>
                        <input type="text" name="estado" id="estado">
                </section>
                <section>
                        <h3>ID Gênero:</h3>
                        <input type="number" name="id_genero" id="id_genero">
                </section>
                <section>
                    <h3>ID Editora: </h3>
                    <input type="number" name="id_editora" id="id_editora">
                </section>
                <section>
                    <h3>Selecionar Imagem da Capa:</h3>
                    <input type="file" name="capa" id="capa">
                </section>
                <section>
                <div class="div2">
                    <input type="submit" name="usuario" id="buttoncriar" value="Cadastrar">
                </section>
            </div>
            </div>
            </form>
        </nav>
    </nav>
</body>
</html>

<?php

    include('config.php');

    if($_POST)
    {
        if(isset($_POST['']))
        {

            $resultado = cadastrarUsuario($_POST['rm'],$_POST['nome'],$_POST['email'],$_POST['dt_nascimento'],$_POST['telefone'],$_POST['senha'],$_POST['userStatus'],$_POST['adm']);

            header('location: home.php');
        }else{

            echo "Erro ao cadastrar usuário";

        }
    }

?>