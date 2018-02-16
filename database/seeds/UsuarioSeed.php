<?php

use Illuminate\Database\Seeder;

class UsuarioSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Usuario::create([
            'nome' => 'Edson',
            'sobrenome' => 'Silveira',
            'email' => 'edson@company.com',
            'telefone' => '6199999999',
            'funcao' => 'Pré-vendas',
            'status' => 'Ativo',
            'senha' => bcrypt('123456')
        ]);
    }
}
