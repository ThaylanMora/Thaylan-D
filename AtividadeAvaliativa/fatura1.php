<?php

class fatura{
    private $numero;
    private $descricao;
    private $qtitem;  
    private $preco;

    public function getNumero(){
    return $this->numero;
    }
    public function setNumero($numero){
        $this->numero = $numero;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($descricao){
        $this->descricao=$descricao;
    }
    public function getQtitem($qtitem){
        return $this->qtitem;
    }
    public function setQtitem(){
        $this->qtitem = $qtitem;
    }
    public function getPreco($preco){
        if($preco > 0){
            $this->preco = $preco;
            }
            else
            {
            $this->preco = 0.0;
            }
    }
    public function totalFatuta(){
    $total = $this->qtitem * $this-> preco;
        if ($total <0){
            $total = 0;
        }
    }
}


?>