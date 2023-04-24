<?php
include_once 'professorHelper.php';

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>CAENS | Professores Cadastrados </title>

    <link rel="stylesheet" href="../css/geral/import.css">
    <link rel="stylesheet" href="../css/professor/professores-cadastrados.css">

</head>
<body id="professores-cadastrados">
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
            <h1>Professores Cadastrados</h1>
        </div>
    </section>


    <main class="main-cadastro-professor container">
        <div class="professores-cadastrados-bg">
            <div class="professores-cadastrados-titulos">
                <h2>Professores</h2>
                <h2>SIAP</h2>
            </div>
            
            <div class="professores-cadastrados-conteudo">
                <div class="conteudo-celula">
                    <?php
                    $professores = getProfessores();
                    foreach ($professores as $professor){
                        echo '<span class="conteudo-celula-nome" value="'.$professor->id.'">'.$professor->nome.'</span>';               
                        echo '<span class="conteudo-celula-siap" value="'.$professor->id.'">'.$professor->cod_siap.'</span>';
                        echo '<td> <a class="botao-1" href="editar-professor.php? id_professor='. $professor -> id . '">Editar</a></td>';

                    }
                    ?>
                </div>
            </div>      
        </div>

        <button class="botao-2"> <a href="inicio.php">Voltar</a></button>
    </main>
    
    
</body>
</html>

<div class="professores-cadastrados-nome">
    
</div