<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bodega;
use Illuminate\Http\Request;
use Facades\App\Repositories\Bodega\BodegaRepository;

class BodegaController extends Controller
{
    public function getBodega(){
        return BodegaRepository::getBodega();
    }

    
}
