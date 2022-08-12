<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Forms</title>
</head>
<body>
    <header>
        <nav>
            <div>
                <a id="inicio" href="home.html">Início</a>
            </div>
            <div>
                <a id="criarconta" href="#">Criar conta</a>
            </div>
        </nav>
    </header>
    <nav class="navdasnavs">
        <nav class="nav1">
            <div>
                <h1>the books<br>in<br>the table</h1>
            </div>
        </nav>
        <nav class="nav2">
            <div class="div1">
                <section>
                    <h1>Bem-vindo de volta</h1>
                </section>
                <section>
                    <h3>Seu nome:</h3>
                    <input type="text" name="nome" id="nome" placeholder="digite seu nome aqui">
                </section>
                <section>
                    <h3>Sua senha:</h3>
                    <input type="password" name="senha" id="senha" placeholder="digite sua senha aqui">
                    <label class="container">
                        <input id="checkboxinput" type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                        Lembrar de mim
                    </label>
                    <a style="color: blue; margin-top: 10px; display: flex; justify-content: flex-start; padding-bottom: 10px; font-size: 10pt;" href="#">Recuperar senha</a>
                </section>
                <div class="div2">
                    <a href="#">Entrar</a>
                </section>
            </div>
            </div>
        </nav>
    </nav>
</body>

</html>

<?php
session_start();
include('biblioteca.php');
if ($_POST){
    $_resultado = Login($_POST['login'],$_POST['senha'],"");
    if($resultado['erro']){
        echo "Usuario e/ou Senha inválido";
    }else{
        echo"usuario existe";
        $user = $resultado['dados']
        $_SESSION ['rm'] = $user ->rm;
        $_SESSION ['nome'] = $user ->nome;
        $_SESSION ['email'] = $user ->email;
        $_SESSION ['senha'] = $user ->senha;
        $_SESSION ['perfil'] = $user ->perfil;
        $_SESSION ['status'] = $user ->status;
        $_SESSION ['adm'] = $user ->adm;
        //redireciona o usuario para a pag adm
        header('location: home.php');
    }
}
?>

</html>
