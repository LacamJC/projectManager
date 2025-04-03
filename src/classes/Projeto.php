<?php  

    class Projeto{
        private $id;
        private $id_status;
        private $tarefas;
        private $nome;
        private $conclusao;

        public function __construct($nome){
            $this->setNome($nome);
            $this->setConclusao(0);

        }
    }

    Public function getId(){
        return $this->id;
    }

    Public function getIdStatus(){
        return $this->id_status;
    }

    Public function getTarefa(){
        return $this->tarefas;
    }

    Public function getNome(){
        return $this->nomes;
    }

    Public function getConclusao(){
        return $this->conclusao;
    }

    public function setId($id){
        $this->id = $id;

    }

    public function setIdStatus($id_status){
        $this->Id_status = $id_status;
    }

    public function addTarefa(){
        
    }

    public function setNome($nome){
        $this->nome = $nomes;
    }

    public function setConclusao($conclusao){ 
        $this->conclusao = $conclusao;
    }

    public function addtask(){


    }

    public function deletetask(){


    }

?>