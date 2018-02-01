<?php

use Illuminate\Database\Seeder;

class UfSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Uf::create([
            'nome' => 'Distrito Federal',
        ]);
    }
}
