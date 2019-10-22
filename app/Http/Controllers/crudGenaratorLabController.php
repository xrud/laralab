<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class crudGenaratorLabController extends Controller
{
    public function index(){
      return view("crudGenaratorView");
    }
}
