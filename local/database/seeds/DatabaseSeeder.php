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
        // $this->call(UsersTableSeeder::class);
        DB::table('Admin')->insert(['id'=>'1', 'name'=>'admin','email'=>'chuongdv98@gmail.com', 'password'=>bcrypt('admin')]);
    }
}
