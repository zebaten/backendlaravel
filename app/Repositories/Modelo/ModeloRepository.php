<?php

namespace App\Repositories\Modelo;

use App\Http\Controllers\Controller;
use App\Models\Modelo;
use Illuminate\Http\Request;

class ModeloRepository
{
    public function getModelosPorMarca($request){
        $marcas = Modelo::where('marca_id',$request->marca_id)->get();
        return $marcas;
    }

    
}
