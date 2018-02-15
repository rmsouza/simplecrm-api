<?php

use Illuminate\Database\Seeder;

class CargoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Cargo::create([
            'nome' => 'Diretor Comercial'
        ]);

        App\Cargo::create([
            'nome' => 'Gerente de Contas'
        ]);

        App\Cargo::create([
            'nome' => 'Gestor de Contratos'
        ]);

        App\Cargo::create([
            'nome' => 'Diretor de Tecnologia'
        ]);
    }
}
