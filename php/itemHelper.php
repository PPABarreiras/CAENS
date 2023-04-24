<?php

include_once "item.php";

if(isset($_POST['tipoF'])){
    $tipo = $_POST['tipoF'];

    if($tipo === 'cadastraritem'){
        cadastrar_item();
    }else if($tipo === "excluiritem"){
        excluir_item();
    }else if($tipo === "editaritem"){
        editar_item();
    }else if ($tipo === "buscarItem"){
        echo buscarItensJSON();
    }
}

function cadastrar_item()
{
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $tipo = $_POST['tipo'];
    $item = new Item($nome,$quantidade,$tipo);
   // var_dump($item);
    $item->inserir();
 //   echo $nome;
    header("Location:inicio.php");
}

function buscarItensJSON(){
    $nome = $_POST['nome'];
    return json_encode(getItensNome($nome));

}

function getItensNome($nome){
    try{
        $banco = new Banco();
        $conexao = $banco->conectar();
        $stmt = $conexao->prepare("SELECT * FROM item WHERE nome LIKE :nome");
        $nome = '%' . $nome . '%'; 
        $stmt->bindParam(":nome",$nome);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $itens = array();
        foreach($stmt->fetchAll() as $v => $value){
            $it = new Item($value['nome'], $value['quantidade'], $value['tipo']);
            $it->id_item = $value['id_item'];
            array_push($itens, $it);
        }

        return $itens;

    }catch(PDOException $ex){
        echo 'Erro' . $ex->getMassage();
    }

}

function getItem(){
    try{
        $banco = new Banco();
        $conexao = $banco->conectar();
        $stmt = $conexao->prepare("select * from item");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $itens = array();
        foreach($stmt->fetchAll() as $v => $value){
            $item = new Item($value['nome'], $value['quantidade'], $value['tipo']);
            $item -> id_item = $value['id_item'];
            array_push($itens, $item);
        }
        return $itens;
    }catch(PDOException $ex){
        echo 'ERRO :' . $ex->getMessage();
    }
}


/*function editar_item(){
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $tipo = $_POST['tipo'];
    //$id_item = $_POST['id_item'];
    $item = new Item($nome,$quantidade,$tipo);
    //$item->id_eitem = $id_item;
    $item->editar();
    header("Location:inicio.php");

}

function excluir_item(){
    $id_item = $_POST["id_item"];
    $item = Item::carregar($id_item);
    $item->excluir();
    header("Location:index.php");
}
    
function getItens(){
    try{
        $banco = new Banco();
        $conexao = $banco->conectar();
        $stmt = $conexao->prepare("select * from item");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $itens = array();
        foreach($stmt->fetchAll() as $v => $valor){
            $item = new Item(
                $valor['nome'],
                $valor['quantidade'],
                $valor['tipo'],
            $item->id_item = $valor['id_item'],
            array_push($itens, $item));
        }

        return $item;

    }catch(PDOException $ex){
        echo 'Erro' . $ex->getMassage();
    }
}*/


