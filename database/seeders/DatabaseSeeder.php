<?php

use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call('passport:install');
        $this->call(UserSeeder::class);
         $this->call(RoleSeeder::class);
    }
}
