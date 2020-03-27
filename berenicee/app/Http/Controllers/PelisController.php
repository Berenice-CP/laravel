<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelisController extends Controller
{
    public function index() 
    {
        
        
        return App\Pelis::all();
        
    }
}
