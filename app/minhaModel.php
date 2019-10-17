<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class minhaModel extends Model
{
    public function listagem(){
    	return (object)[
    	(object)["nome"=>"Paulo"],
    	(object)["nome"=>"Pamela"],
    	(object)["nome"=>"Luiz Roberto"],
    	];
    }

    public function olaFunction(){
    	echo "Ola Function!";
    }
}
