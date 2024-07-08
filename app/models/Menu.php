<?php 
require_once __DIR__.'/../../config/database.php';
class Menu extends Database{
    protected $menuId;
    protected $menuRuta;
    protected $menuIcon;
    protected $menuNombre;


    public function get_menu_user(){
        try{
            $database = parent::connection();

            $statement = $database->prepare("SELECT * FROM menu ORDER BY orden");
            $statement->execute();

            return $result = $statement->fetchAll();
        }catch(PDOException $e){
            throw new Error("error in get table menu".$e->getMessage());

        }
    }

    public function get_submenu(){
        try{
            $database = parent::connection();

            $statement = $database->prepare(" SELECT * FROM submenu WHERE menu_id = 1 ORDER BY orden;");
            $statement->execute();

            return $result = $statement->fetchAll();
           
        }catch(PDOException $e){
            throw new Error("error in get table menu".$e->getMessage());

        }
    }
}