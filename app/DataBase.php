<?php
namespace App;
use PDO;
use PDOException;
class DataBase{
    const HOST = 'localhost';
    const USER = 'root';
    const PASS = '';
    const DB = 'reserva';
    private $connection;
    private $table;
public function __construct($table = null){
    $this->table = $table;
    $this->setConnection();
}
    private function setConnection(){
        try{
            $this->connection = new PDO
            ('mysql:host='.self::HOST.';dbname='.self::DB,self::USER,self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }        
    }
    public function execute($query, $values = null){
        try{
            echo "<pre>";
            print_r($query);
            echo "</pre>";
            $statement = $this->connection->prepare($query);
            $statement->execute($values);
            return $statement;
        }catch(PDOException $e){
            die('ERROR: '. $e->getMessage());
        }

    }
    public function insert($array){
        $query = "INSERT INTO item (nome, descricao, patrimonio) VALUES ('Data Show','','147895')";
        $fields = array_keys($array);
        $binds = array_pad([], count ($array), '? ');
        $query = "INSERT INTO ".$this->table." (".implode(', ',$fields). ")
        VALUES(" . implode(', ',$binds).")";
        $this->execute($query,array_values($array));
    }
    public function update($id,$array){
        
    }
    public function delete($id){
        
    }
    public function select(){
        
    }
}