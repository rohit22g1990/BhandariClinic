<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentDate = date('Y-m-d H:i:s');
        DB::table('pages')->insert(
            [
                [
                    'page_name' => 'home',
                    'created_at'    =>  $currentDate,
                    'updated_at'    =>  $currentDate
                ],
                [
                    'page_name' => 'about',
                    'created_at'    =>  $currentDate,
                    'updated_at'    =>  $currentDate
                ],
                [
                    'page_name' => 'department',
                    'created_at'    =>  $currentDate,
                    'updated_at'    =>  $currentDate
                ],
                [
                    'page_name' => 'doctors',
                    'created_at'    =>  $currentDate,
                    'updated_at'    =>  $currentDate
                ],
                [
                    'page_name' => 'contact',
                    'created_at'    =>  $currentDate,
                    'updated_at'    =>  $currentDate
                ]
            ]
        );
    }
}
