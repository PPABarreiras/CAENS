<?php



class Banco{

    private $conn;
    
    private $userName = "root";
    private $password = "";
    private $serverName = "localhost";
    private $dbName = "ppa";

  
    function conectar(){
        try {
            $this->conn = new PDO("mysql:host = $this->serverName; dbname=$this->dbName", $this->userName, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $this->conn;   
                              
        } catch(PDOException $ex){
            echo "Erro ao Conectar com o Banco";
        }
    }

    function fecharConexao() {
        try {
            $this->conn = null;
            echo "Conexão Finalizada";
        } catch (PDOException $ex) {
            echo "Erro ao conectar com o Banco";
        }
    }
}