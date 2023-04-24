<?php

include_once "funcionario.php";



if(isset($_POST['tipo'])){
    $tipo = $_POST['tipo'];

    if($tipo === 'cadastrarfuncionario'){
        cadastrar_funcionario();
    }else if($tipo === "excluirfuncionario"){
        excluir_funcionario();
    }else if($tipo === "editarfuncionario"){
        editar_funcionario();
    }
}

function cadastrar_funcionario()
{
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $aluno = new Item($nome,$quantidade,$tipo, $senha);
    $aluno->inserir();
    header("Location:index.php");
}