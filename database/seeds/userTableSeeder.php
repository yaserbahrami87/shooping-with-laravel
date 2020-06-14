<?php

use Illuminate\Database\Seeder;
use App\User;
class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User::truncate();
        factory(user::class,10)->create();
    }
}
