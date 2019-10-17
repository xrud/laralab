<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class labModel extends Model
{
    public function listar(){
    	return (object)[
    	(object)["nome"=>"Dado1"],
    	(object)["nome"=>"Dado2"],
    	(object)["nome"=>"Dado3"],
    	];
    }
}
