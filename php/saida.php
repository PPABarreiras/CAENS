<?php

include_once 'banco.php';

class Item{
    public $id_saida;
    public $data_saida;
    public $id_item;
    public $id_professor;

    function __construct($id_saida, $data_saida, $id_item, $id_professor){
        $this->id_saida = $id_saida;
        $this->data_saida = $data_saida;
        $this->id_item = $id_item;
        $this->id_professor = $id_professor; 
    }

    function retirar_item(){
        $banco = new Banco();
        $conexao = $banco->conectar();
        try{
            $stmt = $conexao->prepare("insert into saida (id_saida, data_saida, id_item, id_professor) values (:id_saida, :data_saida, :id_item, :id_professor)");
            $stmt->bindParam(':id_saida', $this->id_saida);
            $stmt->bindParam(':data_saida', $this->data_saida);
            $stmt->bindParam(':id_item', $this->id_item);
            $stmt->bindParam(':id_professor', $this->id_professor);
            $stmt->execute();
        } catch(PDOException $ex){
            echo "Erro ao retirar item: " . $ex;
        }
    }