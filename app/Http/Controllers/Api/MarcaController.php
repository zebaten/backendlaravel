<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Marca;
use Illuminate\Http\Request;
use Facades\App\Repositories\Marcas\MarcaRepository;


class MarcaController extends Controller
{
    public function getMarcas(){
        $marcas = MarcaRepository::getMarcas();
        return $marcas;
    }

}
