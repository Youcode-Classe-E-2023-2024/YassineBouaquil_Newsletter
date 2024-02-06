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
        // Créer des rôles
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        // Créer des permissions
        Permission::create(['name' => 'manage_users']);

        // Attribuer des permissions aux rôles
        Role::findByName('admin')->givePermissionTo('manage_users');
    }
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
