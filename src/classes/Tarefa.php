<?php

    class Tarefa(){
        private $id;
        private $id_prjeto;
        private $nome;
        private $descricao;

        public function __construct($nome,$id_projeto){
            $this->setNome($nome);
            $this->setIdProjeto($id_projeto);
        }
    }

    public function getId(){
        return $this->$id;
    }

    public function getIdProjeto(){
        return $this->$id_projeto;
    }

    public function getNome(){
        return $this->$nome;
    }   

    public function getDescricao(){
        return $this->descricao;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setIdProjeto($projeto){
        $this->projeto = $projeto;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }    

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function createTask(){

    }

    public function updateTask(){

    }

    public function deleteTask(){
        
    }

    public function finish(){

    }

?>