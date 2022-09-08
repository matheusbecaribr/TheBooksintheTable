<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="registerstyle.css">
    <title>Criar Conta</title>
</head>
<body>
    <header>
        <nav>
            <div>
                <a id="entrar" href="index.html">Entrar</a>
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
        <form action="" method="POST" class="form" name="formusuario">
            <div class="div1">
                <section>
                    <h1>Crie sua conta agora!</h1>
                </section>
                <section>
                    <h3>Rm: </h3>
                    <input type="text" name="nome" id="nome">
                </section>
                <section>
                    <h3>Nome:</h3>
                    <input type="text" name="nome" id="nome">
                </section>
                <section>
                    <h3>Email:</h3>
                    <input type="email" name="email" id="email">
                </section>
                <section>
                    <h3>Senha:</h3>
                    <input type="password" name="senha" id="senha">
                    <label class="container">
                        <input id="checkboxinput" type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                        Lembrar de mim
                    </label>
                </section>
                <section>
                    <h3>Status do usuario: </h3>
                    <input type="text" name="userStatus" id="userStatus" placeholder="Status:">
                </section>
                <section>
                    <h3>Administrador: </h3>
                    <select name="adm" id="adm">
                        <option value="0">Não</option>
                        <option value="1">Sim</option>
                    </select>
                </section>
                <section>
                <div class="div2">
                    <a href="home.html">Criar</a>
                </section>
            </div>
            </div>
            </form>
        </nav>
    </nav>
</body>
</html>

