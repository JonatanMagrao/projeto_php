<?php

class Cliente{

    private $id;
    private $nome;
    private $apelido;
    private $data;

    public function __construct($id,$nome,$apelido,$data){
        $this->id = $id;
        $this->setNome($nome);
        $this->apelido = $apelido;
        $this->data = $data;
    }

    public function setNome($novoNome){
        if($novoNome == "Brandão"){
            echo "Nome inválido!";
            return;
        }
        $this->nome = $novoNome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getApelido(){
        return $this->apelido;
    }

    public function setApelido($novoApelido){
        $this->apelido = $novoApelido;
    }

    public function getJobs(){
        $jobs = new Job();
        return $jobs->listJob($this->id);
    }

}

class Job{

    private $idJob = 0;
    private $dataInicio = ''; //new DateTime()
    private $titulo = '';
    private $descricao = '';
    private $valor = 0;
    private $dataEntrega = '';
    private $pago = False;

    public function setTitulo($altTitulo){
        $this->titulo = $altTitulo;
    }

    public function createJob(){

    }

    public function listJob(){

    }
    
}

