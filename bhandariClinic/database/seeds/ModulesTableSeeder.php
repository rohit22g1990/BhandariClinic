<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modules')->insert([
            [
                [
                    'module_name' => 'home-main-banner',
                    'page_id' => 1,
                ]
            ]
        ]);
    }
}
