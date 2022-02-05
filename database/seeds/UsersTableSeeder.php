<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'hoge',
            'email' => 'hoge@hoge.com',
            'password' => bcrypt('hoge12345')
        ]);
        DB::table('users')->insert([
            'name' => 'fuga',
            'email' => 'fuga@fuga.com',
            'password' => bcrypt('fuga12345')
        ]);
        DB::table('users')->insert([
            'name' => 'hogehoge',
            'email' => 'hogehoge@hoge.com',
            'password' => bcrypt('hogehoge12345')
        ]);
        DB::table('users')->insert([
            'name' => 'fugafuga',
            'email' => 'fugafuga@fuga.com',
            'password' => bcrypt('fugafuga12345')
        ]);
        DB::table('users')->insert([
            'name' => 'piyo',
            'email' => 'piyo@piyo.com',
            'password' => bcrypt('piyo12345')
        ]);
    }
}
