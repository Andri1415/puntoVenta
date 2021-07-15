<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UnidadesModel;

class Unidades extends BaseController
{
    protected $unidades; 

    public function __construct(){
        $this->unidades = new UnidadesModel();
    }

	public function index($activo = 1)
	{
        $unidades = $this->unidades->where("activo",$activo)->findAll();

        $data = ["titulo"=>"Unidades","datos"=>$unidades];

		return view("header").view('unidades/unidades',$data).view("footer");
	}

    public function nuevo(){
        
        $data = ["titulo"=>"Agregar Unidad"];
        return view("header").view('unidades/nuevo',$data).view("footer");
    }

    
}
