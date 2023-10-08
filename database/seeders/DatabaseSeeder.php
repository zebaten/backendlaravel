<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Bodega;
use App\Models\Dispositivo;
use App\Models\Marca;
use App\Models\Modelo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //Bodegas
        $bodegas = [
            'Acuenta',
            'Lider',
            'Paris',
            'Falabella',
        ];

        foreach($bodegas as $bodega) {
            Bodega::create([
                'name' => $bodega,
            ]);
        };


        //Marcas
        $marcas = [
            'Nintendo',
            'Sony',
            'Microsoft',
            'Asus',
            'Steam',
        ];

        foreach($marcas as $marca) {
            Marca::create([
                'name' => $marca,
            ]);
        };


        //Modelos
        $modelos = [
            ['Wii',1],
            ['Switch',1],
            ['PS4',2],
            ['PS5',2],
            ['XBOX SERIES X',3],
            ['XBOX ONE',3],
            ['Rog Ally',4],
            ['Deck',5],
        ];

        foreach($modelos as $modelo) {
            Modelo::create([
                'name' => $modelo[0],
                'marca_id' => $modelo[1],
            ]);
        };


        //Dispositivos
        $dispositivos = [
            ['Wiimote',2,1],
            ['Nunchuck',2,1],
            ['Dock',1,2],
            ['Dualshock 4',3,3],
            ['Dualshock 5',4,4],
            ['Control pro inalambrico',1,5],
            ['Control inalambrico',4,6],
            ['Kinect',3,6],
            ['Mando ROG Kaikiri',4,7],
            ['Tarjeta Micro SD',2,8],
        ];

        foreach($dispositivos as $dispositivo) {
            Dispositivo::create([
                'name' => $dispositivo[0],
                'bodega_id' => $dispositivo[1],
                'modelo_id' => $dispositivo[2],
            ]);
        };
    }
}
