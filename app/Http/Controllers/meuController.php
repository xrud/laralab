<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\minhaModel;

class meuController extends Controller
{
   /**/

   public function meuMetodo(){
   	$instancia = new minhaModel();
   	$lista = $instancia->listagem();
   	//dd($lista);
   	return view('minhaView', compact('lista'));
   }

}
