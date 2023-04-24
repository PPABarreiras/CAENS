<?php
include_once 'professor.php';
include_once 'professorHelper.php';


$id = filter_input(
    INPUT_GET,
    'id_professor',
    FILTER_SANITIZE_NUMBER_INT
);
$professor = Professor::carregar($id);

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
            <h1>Editar Professor</h1>
        </div>
    </section>


    <main class="main-cadastro-professor">
        <form action="professorHelper.php" method="POST" name="formCad" target="_self" class="main-cadastro-professor-form-container container" onsubmit="return adicionarDados()">
            <input style="display: none" name="tipo" id="tipo" type="text" value="editarprofessor">
            <div class="main-cadastro-professor-form cor-v1 container-editar-professor">
                <label for="nome">Nome</label>
                <input placeholder="Nome Professor" class="campos-editar-professor" id="nome" type="text" name="nome" value="<?php echo $professor->nome; ?>">

                <label for="email">Email</label>
                <input type="text" name="email" class="campos-editar-professor" id="email" placeholder="Email" value="<?php echo $professor->email; ?>">
            
                <label for="siap-professor">SIAP</label>
                <input type="text" name="cod_siap" class="campos-editar-professor" id="cod_siap" placeholder="Registro SIAP" value="<?php echo $professor->cod_siap; ?>">

            </div>
            <input type="submit" class="main-cadastro-professor-form-botao up botao-1 f-bold-600 cursor-pointer botao-editar-professor" value="Enviar">
        </form>

    </main>


</body>

</html>