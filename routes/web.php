<?php

use App\Http\Controller\HomeController;
use Lib\Routes;

Routes::get('/',[HomeController::class,'home']);

Routes::get('/Curia/:id',function($id){
    return 'Curia'.$id;
});

Routes::dispatched();
