<?php

use Illuminate\Database\Seeder;

class ContaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Conta::create([
            'nome' => 'XPTO',
            'sigla' => 'XPTO',
            'site' => 'www.xpto.gov.br',
            'endereco' => 'SQB 100',
            'usuario_id' => 3,
            'cidade_id' => 1
        ]);

        App\Conta::create([
            'nome' => 'XYZ',
            'sigla' => 'XYZ',
            'site' => 'www.xyz.gov.br',
            'endereco' => 'SQB 100',
            'usuario_id' => 4,
            'cidade_id' => 1
        ]);
    }
}
