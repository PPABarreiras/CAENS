<?php

include_once 'banco.php';

class Funcionario{
    public $id_funcionario;
    public $nome;
    public $matricula;
    public $email;
    public $senha;

    function __construct($nome, $matricula, $email, $senha){
        $this->nome = $nome; 
        $this->matricula = $matricula;
        $this->email = $email;
        $this->senha = $senha;
        
    }

    function inserir(){
        $banco = new Banco();
        $conexao = $banco->conectar();
        try{
            $stmt = $conexao->prepare("insert into funcionario (nome, matricula, email, senha) values (:nome, :matricula, :email, :senha)");
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':matricula', $this->matricula);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':senha', $this->senha);
            $stmt->execute();
        } catch(PDOException $ex){
            echo "Erro ao inserir funcionario: " . $ex;
        }
        
    }

    function excluir(){
        $banco = new Banco();
        $conexao = $banco->conectar();
        try{
            $stmt = $conexao->prepare("delete from funcionario where  id_funcionario = :id_funcionario");
            
            $stmt->bindParam(':id_funcionario', $this->id_funcionario);
            
            $stmt->execute();

        } catch(PDOException $ex){
            echo "Erro ao excluir funcionario: " . $ex;
        }
        
    }

    function editar(){
        $banco = new Banco();
        $conexao = $banco->conectar();
        try{
            $stmt = $conexao->prepare("update item set nome = :nome, matricula = :matricula, email = :email, senha = :senha where id_funcionario = :id_funcionario");
            
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':matricula', $this->matricula);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':senha', $this->senha);
            $stmt->execute();
        } catch(PDOException $ex){
            echo "Erro ao alterar funcionario: " . $ex;
        }
    }

    static function carregar($id_funcionario){
        try{
            $banco = new Banco();
            $conexao = $banco->conectar();
            $stmt = $conexao->prepare("select * from funcionario where id_funcionario = :id_funcionario");
            $stmt->bindParam(':id_funcionario', $id_funcionario);
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $item = null;
            foreach($stmt->fetchAll() as $v => $valor){
                $funcionario = new Funcionario(
                    $valor['nome'],
                    $valor['matricula'],
                    $valor['email'], 
                    $valor['senha']);
                $funcionario->id_funcionario = $valor['id_funcionario'];
                
            }
    
            return $item;
    
        }catch(PDOException $ex){
            echo 'Erro ao carregar o funcionario' . $ex->getMassage();
        }
    }
}