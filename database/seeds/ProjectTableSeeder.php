<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \projectmanager\Entities\Project::truncate(); //apaga a tabela
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        factory(\projectmanager\Entities\Project::class, 10)->create();
    }
}

