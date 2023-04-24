<?php

include_once 'banco.php';

class Funcionario {
    public $id;
    public $nome;
    public $matricula;
    public $email;
    public $senha;


    function __construct($nome, $matricula, $email, $senha) {
        $this -> nome = $nome;
        $this -> matricula = $matricula;
        $this -> email = $email;
        $this -> senha = $senha;
    }   

    function inserir() {
        $banco = new Banco();
        $conexao = $banco->conectar();

        try {
           $stmt = $conexao->prepare('insert into funcionario (nome, matricula, email, senha) values (:nome, :matricula, :email, :senha)'); 
           $stmt -> bindParam(':nome', $this -> nome);
           $stmt -> bindParam(':matricula', $this -> matricula);
           $stmt -> bindParam(':email', $this -> email);
           $stmt -> bindParam(':senha', $this -> senha);
           $stmt -> execute();

        } catch (PDOException $ex) {
           echo "Erro ao inserir funcionario: " . $ex; 
        }
    }
}