<?php

namespace App\Repositories\Bodega;

use App\Http\Controllers\Controller;
use App\Models\Bodega;
use Illuminate\Http\Request;

class BodegaRepository
{
    public function getBodega(){
        $bodega = Bodega::all();
        return $bodega;
    }

    
}
