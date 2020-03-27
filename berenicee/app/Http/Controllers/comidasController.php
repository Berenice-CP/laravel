<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//importamos el nombre de la clase por su namespace/packages
use App\comidas;

class comidasController extends Controller
{
    public function index() 
    {
        //$comidas = comidas::create(["nombre" => "tacos", "cantidad" => "7"],);
        
        //$comidas = comidas::findOrFail(3);
       // $comidas = comidas::whereNombre('enchiladas')
                            //->get();
        /*
        métodos estáticos con ::
        métodos no estáticos con ->
        Facades  DB
        */
        //$id = 1;
        //$comidas = comidas::destroy($id);
        $comidas = comidas::query()->whereId(1)
                        ->update(
                                    ["nombre" => "pambaza", "cantidad" => "11"]
                                );
     return $comidas;
    }
    
    
    
}