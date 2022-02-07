<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run()
    {
        //
        for($i=1; $i<10; $i++){
            DB::table('comments')->insert([
                'comment'=>'sample'.$i,
                'user_id' => rand(1,10),
                'post_id' => rand(1,10)
            ]);
        };
    }
}
