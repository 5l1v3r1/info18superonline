<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'Admin', 
        	'cpf' => '11111111111', 
        	'email' => 'admin@email.com', 
        	'password' => bcrypt('123456'),
        	'departamento_id' => '2']);
    }
}
