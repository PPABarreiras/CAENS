<?php

include_once "usuario.php";



if(isset($_POST['tipo'])){
    $tipo = $_POST['tipo'];

    if($tipo === 'cadastrarusuario'){
        cadastrar_usuario();
    }else if($tipo === "excluirusuario"){
        excluir_usuario();
    }else if($tipo === "editarusuario"){
        editar_usuario();
    }
}

function cadastrar_usuario()
{
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $funcionario = new Funcionario($nome,$matricula,$email,$senha);
    $funcionario->inserir();
    header("Location:index.php");
}

function editar_funcionario(){
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $funcionario = new Funcionario($nome,$matricula,$email,$senha);
    $funcionario->id_funcionario = $id_funcionario;
    $funcionario->editar();
    header("Location:index.php");

}

function excluir_funcionario(){
    $id_funcionario = $_POST["id_funcio$id_funcionario"];
    $funcionario = Funcionario::carregar($id_funcionario);
    $funcionario->excluir();
    header("Location:index.php");
}

function getfuncionarios(){
    try{
        $banco = new Banco();
        $conexao = $banco->conectar();
        $stmt = $conexao->prepare("select * from funcionario");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $funcionarios = array();
        foreach($stmt->fetchAll() as $v => $valor){
            $item = new Item(
                $valor['nome'],
                $valor['matricula'],
                $valor['email'],
                $valor['senha']);
            $item->id_item = $valor['id_funcionario'];
            array_push($funcionarios, $funcionario);
        }

        return $funcionario;

    }catch(PDOException $ex){
        echo 'Erro' . $ex->getMassage();
    }
}


