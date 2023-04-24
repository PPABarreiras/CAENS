<?php
include_once 'itemHelper.php';
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>CAENS | Estoque </title>

    <link rel="stylesheet" href="../css/geral/import.css">
    <link rel="stylesheet" href="../css/item/estoque.css">

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
            <h1>Itens no Estoque</h1>
        </div>
    </section>


    <main class="main-cadastro-professor container">
        <div class="professores-cadastrados-bg">
            
            <div class="professores-cadastrados-conteudo">
                <div class="conteudo-celula-item2">
                    <?php
                    $itens = getItem();
                    foreach ($itens as $item){
                        echo '<div class="item-estoque-bg">';
                            echo '<div class="item-estoque item-estoque-nome">';
                                echo '<span class="conteudo-celula-item conteudo-celula-item-nome" value="'.$item->id_item.'">'.$item->nome.'</span>';
                            echo '</div>';
                        
                            echo '<div class="item-estoque">';
                                echo '<span class="conteudo-celula-item" value="'.$item->id_item.'">'.$item->quantidade.' unidades</span>';
                            echo '</div>';

                            echo '<div class="item-estoque">';
                                echo '<span class="conteudo-celula-item" value="'.$item->id_item.'">'.$item->tipo.'</span>';
                            echo '</div>';
                            echo '<div>
                                    <button class="botao-1 botao-item-estoque cursor-pointer">Editar</button>
                                  </div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>      
        </div>

        <button class="botao-2"><a href="../php/inicio.php">Voltar</a></button>
    </main>
    
    
</body>
</html>

<div class="professores-cadastrados-nome">
    
</div>