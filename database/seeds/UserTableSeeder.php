<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // \projectmanager\Entities\User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \projectmanager\Entities\User::truncate(); //apaga a tabela
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        factory(\projectmanager\Entities\User::class, 10)->create();
    }
}
