<?php

    include_once 'usuarioHelper.php';

?> 

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAENS | Cadastro</title>
    <link rel="stylesheet" href="../css/geral/import.css">
</head>
<body id="cadastro">
    <header class="caens-header-2">
        <span>CAENS</span>
    </header>

    <main>
        <div class="bg-verde-claro">
            <div class="login-container">
                <h1>Cadastro</h1>

                <form action="usuarioHelper.php" target="_self" method="POST" class="form-login">
                <input style="display: none" name="tipo" id="tipo" type="text" value="cadastrarusuario">

                    <div>
                        <label for="nome">Nome do usuário</label>
                        <input type="text" placeholder="Nome" name="nome" id="nome">
                    </div>

                    <div>
                        <label for="matricula">Matrícula do usuário</label>
                        <input type="text" placeholder="Matricula" name="matricula" id="matricula">
                    </div>

                    <div>
                        <label for="email">E-mail</label>
                        <input type="email" placeholder="Email" name="email" id="email">
                    </div>

                    <div>
                        <label for="senha">Senha</label>
                        <input type="password" placeholder="Senha" name="senha" id="senha">
                    </div>

                    <div>
                        <label for="confirmar-senha">Confirmar senha</label>
                        <input type="password" placeholder="Confirmar senha"name="cadastro-confirmar-senha" id="cadastro-confirmar-senha">
                    </div>
                
                    <input type="submit" value="Enviar" class="botao-2">
                </form>
            </div>
        </div>
    </main>

</body>

</html>