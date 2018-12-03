<?php

use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert(['nome' => 'Cliente']);
        DB::table('departamentos')->insert(['nome' => 'Diretoria']);
        DB::table('departamentos')->insert(['nome' => 'Administrador']);
    }
}
