<?php

use Illuminate\Database\Seeder;

class CidadeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Cidade::create([
            'nome' => 'Brasília',
            'uf_id' => 1
        ]);
    }
}
