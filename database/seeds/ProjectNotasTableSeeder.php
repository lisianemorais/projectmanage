<?php

use Illuminate\Database\Seeder;

class NotasProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\projectmanager\Entities\Clientes::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \projectmanager\Entities\NotasProject::truncate(); //apaga a tabela
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        factory(\projectmanager\Entities\NotasProject::class, 10)->create();
    }
}
