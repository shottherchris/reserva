<?php
namespace App;
use PDO;
class Emprestimo{
    public $id;
    public $item;
    public $servidor;
    public $data_emprestimo;
    public $data_devolucao;

public function cadastrar(){       
    $db = new DataBase('emprestimo');
    $this->id = $db->insert([
        "id_item"       => $this->item->id,
        "id_servidor"  => $this->servidor->id,
        "data_emprestimo"  => $this->data_emprestimo,
        "data_devolucao"  => $this->data_devolucao
    ]);
    return true;        
}
public function alterar(){     
    return (new DataBase('emprestimo'))->update("id=".$this->id,[ 
        "id_item"       => $this->item->id,
        "id_servidor"  => $this->servidor->id,
        "data_emprestimo"  => $this->data_emprestimo,
        "data_devolucao"  => $this->data_devolucao
    ]);       
}
public function excluir(){
    return (new DataBase('emprestimo'))->delete('id='.$this->id);
}
public static function listar($where = null, $order = null, $limit = null){
    return (new DataBase('emprestimo'))->select()->fetchAll(PDO::FETCH_CLASS, self::class);
}
public static function buscarPorId($id){
    return (new DataBase('emprestimo'))->select('id = '.$id)->fetchObject(self::class);
}
}