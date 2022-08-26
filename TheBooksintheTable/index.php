<?php

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {

        include('config.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'"
        
        $result =  $conexao->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
             print_r('Não existe!');
        }
        else
        {
            print_r('Existe');
        }
    }
    else
    {
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Entrar</title>
</head>
<body>
    <header>
        <nav>
            <div>
                <a id="criarconta" href="register.html">Criar conta</a>
            </div>
        </nav>
    </header>
    <nav class="navdasnavs">
        <nav class="nav1">
            <div>
                <h1>the books<br>on<br>the table</h1>
            </div>
        </nav>
        <nav class="nav2">
            <div class="div1">
                <section>
                    <h1>Bem-vindo de volta</h1>
                </section>
                <section>
                    <h3>Seu email:</h3>
                    <input type="email" name="email" id="email">
                </section>
                <section>
                    <h3>Sua senha:</h3>
                    <input type="password" name="senha" id="senha">
                    <label class="container">
                        <input id="checkboxinput" type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                        Lembrar de mim
                    </label>
                    <a style="color: blue; margin-top: 10px; display: flex; justify-content: flex-start; padding-bottom: 10px; font-size: 10pt;" href="#">Recuperar senha</a>
                </section>
                <div class="div2">
                    <a href="home.html">Entrar</a>
                </section>
            </div>
            </div>
        </nav>
    </nav>
</body>
</html>