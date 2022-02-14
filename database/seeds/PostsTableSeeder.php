<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert([
            'user_id' => '1',
            'title' => 'aiu',
            'body' => 'aaa',
        ]);
        DB::table('posts')->insert([
            'user_id' => '2',
            'title' => 'bbb',
            'body' => 'bbb',
        ]);
        DB::table('posts')->insert([
            'user_id' => '3',
            'title' => 'ccc',
            'body' => 'ccc',
        ]);
        DB::table('posts')->insert([
            'user_id' => '4',
            'title' => 'ddd',
            'body' => 'ddd',
        ]);
        DB::table('posts')->insert([
            'user_id' => '5',
            'title' => 'eee',
            'body' => 'eee',
        ]);
    }
}
