<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Bodega;

class test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $test = Bodega::with('dispositivos.modelo.marca')->whereId(1)->first();
        dd($test->dispositivos[0]->modelo->marca->toArray());
    }
}
