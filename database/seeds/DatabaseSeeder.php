<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UfSeed::class);
        // $this->call(CidadeSeed::class);
//        $this->call(UsuarioSeed::class);
        // $this->call(ContaSeed::class);
        // $this->call(CargoSeed::class);
        // $this->call(TipoAcaoSeed::class);
        // $this->call(ContatoSeed::class);
        //$this->call(OportunidadeSeed::class);

        Model::reguard();
    }
}
