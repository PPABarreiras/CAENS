<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAENS | Login</title>

    <link rel="stylesheet" href="../css/geral/import.css">
</head>
<body id="login">
    <header class="caens-header-2">
        <span>CAENS</span>
    </header>

    <main>
        <div class="bg-verde-claro">
            <div class="login-container">
                <h1>Login</h1>

                <form action="inicio.php" class="form-login">
                    <h2>Informe suas informações de acesso ao sistema.</h2>

                    <div>
                        <label for="login-user">Usuário</label>
                        <input type="text" placeholder="Usuario" name="login-user" id="login-user">
                    </div>

                    <div>
                        <label for="login-senha">Senha</label>
                        <input type="password" placeholder="Senha" name="login-senha" id="login-senha">
                    </div>

                    <div class="form-login-links">
                        <a href="../php/recuperar-senha.php">Esqueceu a senha?</a>
                        <a href="../php/cadastro.php">Cadastrar novo usuário</a>
                    </div>

                    <input type="submit" value="Entrar" class="botao-2">
                </form>
            </div>
        </div>
    </main>



</body>
</html>