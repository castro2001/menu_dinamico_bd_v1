

<?php
class Database{
    protected $server;
    protected $user;
    protected $psw;
    protected $dbname;
    protected $conn;


public function connection(){
    try{
        $this->conn= new PDO("mysql:server=localhost;dbname=santaelena",'root','');
        return $this->conn;
    }catch(\PDOException $e){
        throw new Error("error in conection db".$e->getMessage());
    }
    
}
}