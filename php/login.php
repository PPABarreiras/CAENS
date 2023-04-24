<?php

include_once 'banco.php';

class Item{
    public $usuario;
    public $senha;

    function __construct($nome,$quantidade,$tipo){
        $this->nome = $nome;
        $this->telefone = $quantidade;
        $this->email = $tipo;
        
    }
    function inserir(){
        $banco = new Banco();
        $conexao = $banco->conectar();
        try{
            $stmt = $conexao->prepare("insert into item (nome, quantidade, tipo) values (:nome, :quantidade, :tipo)");
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':quantidade', $this->quantidade);
            $stmt->bindParam(':tipo', $this->tipo);
            //$stmt->bindParam(':id_funcionario', $this->id_funcionario);
            $stmt->execute();
        } catch(PDOException $ex){
            echo "Erro ao inserir item: " . $ex;
        }
        
    }

    function excluir(){
        $banco = new Banco();
        $conexao = $banco->conectar();
        try{
            $stmt = $conexao->prepare("delete from item where  id_item = :id_item");
            
            $stmt->bindParam(':id_item', $this->id_item);
            
            $stmt->execute();

        } catch(PDOException $ex){
            echo "Erro ao excluir item: " . $ex;
        }
        
    }

    function editar(){
        $banco = new Banco();
        $conexao = $banco->conectar();
        try{
            $stmt = $conexao->prepare("update item set nome = :nome, quantidade = :quantidade, tipo = :tipo, id_funcionario = :id_funcionario where id_item = :id_item");
            
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':quantidade', $this->quantidade);
            $stmt->bindParam(':tipo', $this->tipo);
            $stmt->bindParam(':id_item', $this->id_item);
            $stmt->execute();
        } catch(PDOException $ex){
            echo "Erro ao alterar item: " . $ex;
        }
    }

    static function carregar($id_item){
        try{
            $banco = new Banco();
            $conexao = $banco->conectar();
            $stmt = $conexao->prepare("select * from item where id_item = :id_item");
            $stmt->bindParam(':id_item', $id_item);
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $item = null;
            foreach($stmt->fetchAll() as $v => $valor){
                $aluno = new Aluno(
                    $valor['nome'],
                    $valor['quantidade'],
                    $valor['tipo'], 
                    $valor['id_item'];
                $item->id_item = $valor['id_item'];
                
            }
    
            return $item;
    
        }catch(PDOException $ex){
            echo 'Erro ao carregar o item' . $ex->getMassage();
        }
    }
}