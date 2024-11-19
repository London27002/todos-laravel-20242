<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    function welcome(Request $request){
        Log:: info("Binvenidos al log de Laravel");
        Log:: info(print_r($request-> all(), 1));
        return view ('welcome');
        
    }

    function testView (Request $request) {
        // var_dump($request->all());
        // var_dump($request->query('titulo'));
        // die;
        // return "Hola mundo, Bienvenidos a Laravel";
        // return[
        // 'name'=> 'Luis',
        // 'lastname' => 'Gonzales',
        // 'age' => 30
        // ];
    
        $titulo = $request -> query('titulo' , 'Valor por defecto');
    
        return view('test', [
            'title' => $titulo,
            'books' => [
                'El señor de los anillos',
                'Harry Potter',
                'Cien años de soledad'
            ],
            'countries'=>[
                'Colombia' => ['Bogota', 'Medellin', 'Cali'],
                'Peru' => ['Lima', 'Arequipa', 'Cuzco'],
                'España' => ['Madrid', 'Barcelona', 'Valencia'],
    
            ]
        ]);
    }
}
