<?php

use Illuminate\Database\Seeder;
use App\Comment;
class commentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //comment::truncate();
        factory(Comment::class,250)->create();
    }
}
