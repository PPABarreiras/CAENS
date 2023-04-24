<?php
include_once 'itemHelper.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAENS | Retirada de Item</title>
    <link rel="stylesheet" href="../css/geral/import.css">
</head>

<body id="retirada-de-item">
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
    <main class="bg-verde-claro">
        <div class="container titulo-pagina">
            <h1>Retirada de Item</h1>
        </div>


  <!--  <form method="post" target="_self" class="container form-retirada-de-item">  -->
            <div class="bg-shadow bg-retirada-item">
                <div class="texto-itens select">
                    <label id="nome-do-item" for="nome">Nome do item</label>
                    <input type="text" class="campos-editar-professor"name="nome" id="nome">
                    <button id="btnBuscar" type="submit" class="botao-2">Pesquisar</button>

                </div>
                <table id="itens" >
            <thead class="tabela-itens">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Ação</th>
                </tr>
            </thead>
          
        </table>

            </div>
            </div>
            <!--<button type="submit" class="botao-2 prosseguir-retirada-item">Prosseguir</button>-->
        <!--</form>  -->

        
    </main>
</body>
<script src="jquery.min.js"></script>
<script  src="script.js"></script>


</html>