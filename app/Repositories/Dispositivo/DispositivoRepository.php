<?php

namespace App\Repositories\Dispositivo;

use App\Http\Controllers\Controller;
use App\Models\Dispositivo;
use Illuminate\Http\Request;

class DispositivoRepository
{
    public function getDispositivos($request){
        \Log::info($request);
        $bodegas = Dispositivo::with('bodega','modelo.marca')
        ->where(function ($query) use($request){
            if($request->bodega_id)
            return $query->where('bodega_id',$request->bodega_id);
        })->where(function ($query) use($request){
            if($request->modelo_id)
            return $query->where('modelo_id',$request->modelo_id);
        })->get();
        return $bodegas;
    }
    
}
