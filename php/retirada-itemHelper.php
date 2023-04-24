<?php

include_once 'banco.php';

if (isset($_POST)) {
    buscarItens();
}



function buscarItens()
{
    if (isset($_POST['descricao'])) {
        $descricao = $_POST['descricao'];

        try {
            $banco = new Banco();
            $conexao = $banco->conectar();
            $stmt = $conexao->prepare("SELECT * FROM item WHERE nome like '%:descricao%'");
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $itens = array();
            foreach ($stmt->fetchAll() as $v => $value) {
                $item = new Item($value['nome'], $value['quantidade'], $value['tipo']);
                $item->id_item = $value['id_item'];
                array_push($itens, $item);
                //var_dump($value);
                //echo '<br>';


            }

            echo "<script>
            window.location.href = 'retirada-item.php';
          
            </script>";
            return $itens;
        } catch (PDOException $ex) {
            echo 'ERRO :' . $ex->getMessage();
        }
    }
}
