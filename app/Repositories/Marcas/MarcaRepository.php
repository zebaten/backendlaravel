<?php

namespace App\Repositories\Marcas;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaRepository
{
    public function getMarcas(){
        $marcas = Marca::all();
        return $marcas;
    }

}