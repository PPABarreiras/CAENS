<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/item/cadastro_item.css">
    <title>Document</title>
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
            <h1>Cadastro de Item</h1>
        </div>

        <form action="itemHelper.php" method="POST" name="formCad" target="_self" class="container form-retirada-de-item">
        <input style="display: none" name="tipoF" id="tipoF" type="text" value="cadastraritem">
            <div class="bg-shadow">
                <div class="informacoes-item">

                </div>

                <div class="texto-itens identificador">

                    <label for="novo-item">Novo item</label>
                    <input name="nome" id="novo-item" rows="8"
                        placeholder="Nome">
                </div>

                <div class="texto-itens">
                    <label for="quantidade">Quantidade</label>
                    <input name="quantidade" id="quantidade" rows="8"
                        placeholder="Quantidade">
                </div>

                <div class="texto-itens select">
                    <label for="tipo">Tipo</label>
                    <select name="tipo" id="tipo">
                        <option value="Permanente">Permanente</option>
                        <option value="Emprestado">Emprestado</option>
                    </select>
                </div>

            </div>

            <button type="submit" class="botao-2">Prosseguir</button>

        </form>
    </main>



</body>

</html>

