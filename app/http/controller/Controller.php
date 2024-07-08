<?php
namespace App\Http\Controller;

class Controller{
    
    public  function view(string $route,array $data =[]) {
       //Destructura el array
       extract($data);
        $route = str_replace(".","/",$route);
        //User/user.php = user.user
        if(file_exists("../resource/view/{$route}.php")){
            ob_start();
            include_once "../resource/view/{$route}.php";
            $content = ob_get_clean();
            return $content;
        }else{
            return "archivo no disponible";
        }
    }    

    public function redirect($route){
        header("Location: {$route}");
    }


  
}