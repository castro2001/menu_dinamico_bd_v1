<?php

use App\Http\Controller\HomeController;
use Lib\Routes;

Routes::get('/',[HomeController::class,'home']);

Routes::get('/Nuñez',function(){
    return 'Nuñez';
});

Routes::get('/entrada',function(){
    return 'Entrada';
});
Routes::get('/Curia',function(){
    return 'Curia';
});
Routes::get('/Sanjose',function(){
    return 'Sanjose';
});

Routes::get('/Olon',function(){
    return 'Olon';
});

Routes::get('/Montanita',function(){
    return 'Montañita';
});

Routes::get('/Ancon',function(){
    return 'Ancon';
});

Routes::get('/Anconcito',function(){
    return 'Anconcito';
});

Routes::dispatched();
