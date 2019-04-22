<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class articleseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title'=>"title-6",
            'body'=>"body-6",
            'user_id'=>rand(1,6)
        ]);
    }
}
