<?php

use Illuminate\Database\Seeder;

class OportunidadeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nomes = [
          'Licença de Antivírus',
          'GBuster',
          'Consultoria'
        ];
        $status = [
          'Aberta', 'Fechada'
        ];

        App\Oportunidade::create([
            'nome' => $nomes[rand(0,2)],
            'valor' => rand(100000, 10000000),
            'dataAbertura' => '2017-04-01',
            'dataFechamento' => '2017-10-01',
            'status' => $status[rand(0,1)],
            'probabilidadeGanho' => 'Alta',
            'conta_id' => 1,
            'fasevenda_id' => 3
        ]);

        App\Oportunidade::create([
            'nome' => $nomes[rand(0,2)],
            'valor' => rand(100000, 10000000),
            'dataAbertura' => '2017-04-01',
            'dataFechamento' => '2017-10-01',
            'status' => $status[rand(0,1)],
            'probabilidadeGanho' => 'Alta',
            'conta_id' => 2,
            'fasevenda_id' => 3
        ]);

        App\Oportunidade::create([
            'nome' => $nomes[rand(0,2)],
            'valor' => rand(100000, 10000000),
            'dataAbertura' => '2017-01-01',
            'dataFechamento' => '2017-06-01',
            'status' => $status[rand(0,1)],
            'probabilidadeGanho' => 'Alta',
            'conta_id' => 2,
            'fasevenda_id' => 3
        ]);

        App\Oportunidade::create([
            'nome' => $nomes[rand(0,2)],
            'valor' => rand(100000, 10000000),
            'dataAbertura' => '2017-06-01',
            'dataFechamento' => '2017-12-01',
            'status' => $status[rand(0,1)],
            'probabilidadeGanho' => 'Alta',
            'conta_id' => 2,
            'fasevenda_id' => 3
        ]);

        App\Oportunidade::create([
            'nome' => $nomes[rand(0,2)],
            'valor' => rand(100000, 10000000),
            'dataAbertura' => '2017-04-01',
            'dataFechamento' => '2017-10-01',
            'status' => $status[rand(0,1)],
            'probabilidadeGanho' => 'Alta',
            'conta_id' => 3,
            'fasevenda_id' => 3
        ]);

        App\Oportunidade::create([
            'nome' => $nomes[rand(0,2)],
            'valor' => rand(100000, 10000000),
            'dataAbertura' => '2017-01-01',
            'dataFechamento' => '2017-06-01',
            'status' => $status[rand(0,1)],
            'probabilidadeGanho' => 'Alta',
            'conta_id' => 3,
            'fasevenda_id' => 3
        ]);

        App\Oportunidade::create([
            'nome' => $nomes[rand(0,2)],
            'valor' => rand(100000, 10000000),
            'dataAbertura' => '2017-06-01',
            'dataFechamento' => '2017-12-01',
            'status' => $status[rand(0,1)],
            'probabilidadeGanho' => 'Alta',
            'conta_id' => 3,
            'fasevenda_id' => 3
        ]);

    }
}
