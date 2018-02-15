<?php

use Illuminate\Database\Seeder;

class FaseVendaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\FaseVenda::create([
            'nome' => 'Inicial'
        ]);

        App\FaseVenda::create([
            'nome' => 'Prova de Conceito'
        ]);

        App\FaseVenda::create([
            'nome' => 'Elaboração de Contrato'
        ]);
    }
}
