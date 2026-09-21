<?php
namespace App;
class Item{
    public $id;
    public $nome;
    public $descricao;
    public $patrimonio;
    public function cadastrar(){    
        $db = new DataBase();
        $db->insert([
            "nome"=> $this->nome,
            "descricao" => $this->descricao,
            "patrimonio" => $this->patrimonio
        ]);
        return true;        
    }
    public function alterar(){        
        return true;
    }
    public function excluir(){
    }
    public function listar(){

    } 
}