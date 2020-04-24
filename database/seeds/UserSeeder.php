<?php

use Illuminate\Database\Seeder;
use \App\Profile;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 1)->create()->each(function ($user) {

            $user->profile()->save(factory(\App\Profile::class)->make());
        });
    }
}
