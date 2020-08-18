<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class,5)->create();
//        \Illuminate\Support\Facades\Schema::disableForeignKeyConstraints();
        // $this->call(UsersTableSeeder::class);
//        $this->call(MusicGroupSeeder::class);
//        \Illuminate\Support\Facades\Schema::enableForeignKeyConstraints();
    }
}
