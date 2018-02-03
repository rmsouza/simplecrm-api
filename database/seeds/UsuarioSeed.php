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
            'nome' => 'João Gabriel',
            'sobrenome' => 'Menezes',
            'email' => 'joao@gmail.com',
            'telefone' => '6199999999',
            'funcao' => 'Diretor',
            'status' => 'Ativo',
            'senha' => bcrypt('secret')
        ]);
    }
}
