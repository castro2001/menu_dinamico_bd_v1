<?php
namespace App\Http\Controller;
class HomeController extends Controller{
    public function home(){
        $this->asset('css/style.css');
        return $this->view('home');
        
    }
}