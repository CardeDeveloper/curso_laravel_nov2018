<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function index($param=false){

    	
    		return view('welcome')->with('param', $param);
    	
    }

    function postFunction(Request $parametros){
    	return "hola". $parametros['nombre'];
    }

    function getFunction(){
    	return view('form');
    }
}
