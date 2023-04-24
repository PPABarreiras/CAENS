<?php

include_once 'banco.php';

class Professor {
    public $id;
    public $nome;
    public $cod_siap;
    public $email;
    public $senha;

    function __construct($nome, $cod_siap, $email, $senha) {
        $this -> nome = $nome;
        $this -> cod_siap = $cod_siap;
        $this -> email = $email;
        $this -> senha = $senha;
    }

    function inserir() {
        $banco = new Banco();
        $conexao = $banco->conectar();

        try {
           $stmt = $conexao->prepare('insert into professor (nome, cod_siap, email, senha) values (:nome, :cod_siap, :email, :senha)'); 
           $stmt -> bindParam(':nome', $this -> nome);
           $stmt -> bindParam(':cod_siap', $this -> cod_siap);
           $stmt -> bindParam(':email', $this -> email);
           $stmt -> bindParam(':senha', $this -> senha);
           $stmt -> execute();

        } catch (PDOException $ex) {
           echo "Erro ao inserir professor: " . $ex; 
        }
    }

    /*function excluir(){
        $banco = new Banco();
        $conexao = $banco->conectar();

        try {
           $stmt = $conexao->prepare('delete from professor where id_professor = :id_professor'); 
           $stmt -> bindParam(':id_professor', $this -> id);
           $stmt -> execute();

        } catch (PDOException $ex) {
           echo "Erro: " . $ex; 
        }
    }
   */ 
    function editar(){
        $banco = new Banco();
        $conexao = $banco->conectar();

        try {
           $stmt = $conexao->prepare('UPDATE professor SET nome = :nome, cod_siap = :cod_siap, email = :email, senha = :senha where id_professor = :id_professor'); 
           $stmt -> bindParam(':nome', $this ->nome);
           $stmt -> bindParam(':cod_siap', $this ->cod_siap);
           $stmt -> bindParam(':email', $this ->email);
           $stmt -> bindParam(':senha', $this ->senha);
           $stmt -> bindParam(':id_professor', $this -> id); 
           $stmt -> execute();

        } catch (PDOException $ex) {
           echo "Erro ao inserir professor: " . $ex; 
        }
    }

    static function carregar($id_professor) {
        try{
            $banco = new Banco();
            $conexao = $banco->conectar();
            $stmt = $conexao->prepare("select * from professor WHERE id_professor = :id_professor");
            $stmt -> bindParam(':id_professor', $id_professor);
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $professor = null;

            foreach($stmt->fetchAll() as $v => $value){
                $professor = new Professor(
                $value['nome'],
                $value['cod_siap'],
                $value['email'],
                $value['senha']);
                $professor->id = $value['id_professor'];
            }

            return $professor;

        } catch(PDOException $ex){
            echo 'ERRO :' . $ex->getMessage();
        }
    }   
}