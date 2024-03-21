<?php
   class Produto{
    private $id;

    private $nome;

    private $descricao;

    private $preco;

    private $categoria;

    function __construct($id, $nome ,$descricao, $preco, $categoria){
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->categoria = $categoria;
    }
    

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }
    
    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getdescricao(){
        return $this->descricao;
    }

    public function setdescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getpreco(){
        return $this->preco;
    }

    public function setpreco($preco){
        $this->preco = $preco;
    }
    public function getcategoria(){
        return $this->categoria;
    }

    public function setcategoria($categoria){
        $this->categoria = $categoria;
    }

   }
?>