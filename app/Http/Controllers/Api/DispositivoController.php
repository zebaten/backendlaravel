<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dispositivo;
use Illuminate\Http\Request;
use Facades\App\Repositories\Dispositivo\DispositivoRepository;
use App\Http\Requests\DispositivosPorBodegaRequest;

class DispositivoController extends Controller
{
    public function index(){
        $dispositivos = Dispositivo::all();
        return $dispositivos;
    }

    public function getDispositivos(Request $request){
        return DispositivoRepository::getDispositivos($request);
    }

}
