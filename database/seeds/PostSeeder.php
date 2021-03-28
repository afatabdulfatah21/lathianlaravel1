<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
           DB::table('posts')->insert([
                'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, cupiditate facere! Inventore et est explicabo magni modi dolorum repellendus accusantium accusamus aspernatur officia adipisci ratione obcaecati aut, laborum architecto vel.',
                'thumbnail' => 'default-image.png',
                'user_id' => 1,
                'created_at' => Carbon::now(),
           ]);
        }
    }
    
}
