<?php
    include('config.php');

    if(isset($_POST['email']) || isset($_POST['senha']))
    {
        if(strlen($_POST['email']) == 0)
        {
            echo "Digite seu email!";
        } else if(strlen($_POST['senha']) == 0){
            echo "Digite sua senha!";
        } else{
            $email = $conexao->real_escape_string($_POST['email']);
            $senha = $conexao->real_escape_string($_POST['senha']);
        
            $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
            $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->error);
        
            $quantidade = $sql_query->num_rows;

            if($quantidade == 1)
            {
                $user = $sql_query->fetch_assoc();

                if(!isset($_SESSION))
                {
                    session_start();
                }

                $_SESSION['nome'] = $usuario['rm'];
                $_SESSION['nome'] = $usuario['nome'];

                header('location: home.php');
                
            } else{
                echo "Falha ao logar. E-mail e/ou senha incorretos!";
            }
        }
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
                <form method="POST">
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
                    <button type="submit" name="submit">Entrar</button>
                </section>
                </form>
            </div>
            </div>
        </nav>
    </nav>
</body>
</html>