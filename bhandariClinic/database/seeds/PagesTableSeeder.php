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
        DB::table('pages')->insert(
            [
                ['page_name' => 'home'],
                ['page_name' => 'about'],
                ['page_name' => 'department'],
                ['page_name' => 'doctors'],
                ['page_name' => 'contact']
            ]
        );
    }
}
