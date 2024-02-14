<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Adjust this namespace if needed

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create a user with a related user
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
        ]);

        // Attach the related user
        $relatedUser = User::factory()->create([
            'name' => 'related_user',
            'email' => 'related_user@example.com',
        ]);

        $user->relatedUser()->save($relatedUser);
    }
}
