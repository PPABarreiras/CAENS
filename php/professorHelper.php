<?php

    include_once 'professor.php';


    if(isset($_POST['tipo'])){
        $tipo = $_POST['tipo'];
        if($tipo === 'cadastrarprofessor'){
            cadastrarprofessor();
        }else if($tipo === 'excluirprofessor'){
            excluir_professor();
        } else if ($tipo === 'editarprofessor'){
            editar_professor();
        }
    }

    function cadastrarprofessor(){
        $nome = $_POST['nome'];
        $cod_siap = $_POST['cod_siap']; 
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $professor = new Professor($nome, $cod_siap, $email, $senha);
        $professor -> inserir();
        header("Location:inicio.php");
    }

    function editar_professor(){
        $nome = $_POST['nome'];
        $cod_siap = $_POST['cod_siap'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $id_professor = $_POST['id_professor'];
        $professor = new Professor($nome, $cod_siap, $email, $senha);
        $professor-> id= $id_professor;
        $professor -> editar();
        header("Location:inicio.php");

    }


    


       function excluir_professor(){
        $id_aluno = $_POST['id_professor'];
        $aluno = Professor::carregar($id_aluno);
        //$aluno->excluir();
    }
    
    //getAlunos();
    
    function getProfessores(){
        try{
            $banco = new Banco();
            $conexao = $banco->conectar();
            $stmt = $conexao->prepare("select * from professor");
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $professores = array();
            foreach($stmt->fetchAll() as $v => $value){
                $professor = new Professor($value['nome'], $value['cod_siap'], $value['email'], $value['senha']);
                $professor -> id = $value['id_professor'];
                array_push($professores, $professor);
            }
            return $professores;
        }catch(PDOException $ex){
            echo 'ERRO :' . $ex->getMessage();
        }
    }