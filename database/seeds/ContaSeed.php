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
            'nome' => 'Tribunal do Trabalho',
            'sigla' => 'TRT',
            'site' => 'www.trt.gov.br',
            'endereco' => 'SQB',
            'usuario_id' => 1,
            'cidade_id' => 4
        ]);
    }
}
