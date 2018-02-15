<?php

use Illuminate\Database\Seeder;

class ContatoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Contato::create([
            'nome' => 'Pedro',
            'sobrenome' => 'Machado',
            'email' => 'pedro@company.com',
            'nivelInfluencia' => 5,
            'conta_id' => 1,
            'cargo_id' => 1
        ]);

        App\Contato::create([
            'nome' => 'Marcia',
            'sobrenome' => 'Pereira',
            'email' => 'marcia@company.com',
            'nivelInfluencia' => 3,
            'conta_id' => 1,
            'cargo_id' => 2
        ]);
    }
}
