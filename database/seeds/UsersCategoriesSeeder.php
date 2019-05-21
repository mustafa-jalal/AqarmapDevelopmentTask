<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title' => 'sport',
        ]);
        DB::table('categories')->insert([
            'title' => 'art',
        ]);
        DB::table('categories')->insert([
            'title' => 'technology',
        ]);
    }
}
