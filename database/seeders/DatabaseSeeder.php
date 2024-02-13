<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
      $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);


    }
    /**
     * Seed the application's database.
     */

}
