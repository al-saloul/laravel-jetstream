<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RolesAndUsersSeeder extends Seeder
{
    public function run()
    {
        // Create roles if they don't exist
        $roles = ['root', 'admin', 'user'];

        foreach ($roles as $roleName) {
            Role::firstOrCreate(['name' => $roleName]);
        }

        // Create users and assign roles
        $users = [
            ['name' => 'root', 'email' => 'root@example.com', 'password' => bcrypt('password'), 'role' => 'root'],
            ['name' => 'admin', 'email' => 'admin@example.com', 'password' => bcrypt('password'), 'role' => 'admin'],
            ['name' => 'user', 'email' => 'user@example.com', 'password' => bcrypt('password'), 'role' => 'user']
        ];

        foreach ($users as $userData) {
            $user = User::firstOrCreate(
                ['email' => $userData['email']],
                ['name' => $userData['name'], 'password' => $userData['password']]
            );

            // Assign role to user
            $user->assignRole($userData['role']);
        }
    }
}
