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
            'nome' => 'Tribunal Regional do Trabalho',
            'sigla' => 'TRT',
            'site' => 'www.trt1.gov.br',
            'endereco' => 'SQB 100',
            'usuario_id' => 1,
            'cidade_id' => 1
        ]);
    }
}
