<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\labModel;

class MVClabController extends Controller
{
    public function listar(){
    	$instancia = new labModel();
   		$lista = $instancia->listar();
		
   	return view('labMVC', compact('lista'));
    }
}
