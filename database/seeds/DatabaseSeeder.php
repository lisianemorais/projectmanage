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

        

         $this->call(UserTableSeeder::class);
         $this->call(ClientTableSeeder::class);
         $this->call(ProjectTableSeeder::class);
         $this->call(NotasProjectTableSeeder::class);
       
       factory(\projectmanager\Entities\User::class)->create([
            'name' => 'Usuario Teste',
            'email' => 'user@projectmanager.com',
            'password' => bcrypt(123456),
       ]);


        factory(\projectmanager\Entities\StatusProject::class)->create([
            'descricao' => 'A Iniciar',
        ]);
//
       factory(\projectmanager\Entities\StatusProject::class)->create([
           'descricao' => 'Em andamento',
       ]);
//
        factory(\projectmanager\Entities\StatusProject::class)->create([
            'descricao' => 'Concluído',
        ]);
//
        Model::reguard();
    }
}
