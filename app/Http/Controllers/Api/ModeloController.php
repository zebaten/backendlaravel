<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Modelo;
use Illuminate\Http\Request;
use Facades\App\Repositories\Modelo\ModeloRepository;
use App\Http\Requests\ModelosPorMarcaRequest;


class ModeloController extends Controller
{

    public function getModelosPorMarca(ModelosPorMarcaRequest $request){
        return ModeloRepository::getModelosPorMarca($request);
    }

}
