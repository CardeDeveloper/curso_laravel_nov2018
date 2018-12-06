<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiPrimerControlador extends Controller
{
   function mifuncion(){
   	return "<h1>Hola mundo desde mi controlador</h1>";
   }
}
