<?php
namespace App\Http\Controller;
class HomeController extends Controller{
    public function home(){
        return  $this->view('home');
        
    }
}