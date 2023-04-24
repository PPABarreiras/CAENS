<?php 
    include_once 'professorHelper.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>CAENS | Cadastro de Professor</title>

    <link rel="stylesheet" href="../css/geral/import.css">

</head>
<body id="cadastro-professor">
    <header class="caens-bg cor-01">
        <div class="container caens-header">
            
            <span>CAENS</span>

            <nav class="caens-nav f-bold-400">
                <ul>
                    <li><a href="../php/inicio.php">Início</a></li>
                </ul>
            </nav>
         </div>
    </header>

    <section class="titulo-pagina-bg">
        <div class="container">
            <h1>Cadastro de Professor</h1>
        </div>
    </section>


    <main class="main-cadastro-professor">
        <form action="professorHelper.php" method="POST" name="formCad" target="_self" class="main-cadastro-professor-form-container container" onsubmit="return adicionarDados()">
        <input style="display: none" name="tipo" id="tipo" type="text" value="cadastrarprofessor">
            <div class="main-cadastro-professor-form cor-v1 container-cadastro-professor">
                <div>
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome-professor" placeholder="Nome do professor">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha-professor" placeholder="Senha">
                </div>
                <div>
                    <label for="senha1">Repita a senha</label>
                    <input type="text" name="senha1" id="repita-senha-professor" placeholder="Senha">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email-professor" placeholder="Email">
                </div>
                <div>
                    <label for="email1">Repita o email</label>
                    <input type="text" name="email1" id="repita-email-professor" placeholder="Email">
                </div>
                
                <div class="siap-container">
                    <label for="siap-professor">SIAP</label>
                    <input type="text" name="cod_siap" id="siap-professor" placeholder="Registro SIAP">
                </div>
            </div>
            
            <input type="submit" class="main-cadastro-professor-form-botao up botao-1 f-bold-600 cursor-pointer botao-cadastro-professor" value="Enviar">
        </form>

    </main>


</body>
</html>
