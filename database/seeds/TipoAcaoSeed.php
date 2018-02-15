<?php

use Illuminate\Database\Seeder;

class TipoAcaoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\TipoAcao::create([
            'nome' => 'Visita'
        ]);

        App\TipoAcao::create([
            'nome' => 'Telefone'
        ]);

        App\TipoAcao::create([
            'nome' => 'Reunião'
        ]);

        App\TipoAcao::create([
            'nome' => 'E-mail'
        ]);
    }
}
