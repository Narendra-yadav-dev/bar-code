<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserRoleSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::find(1);

        if (! $user) {
            return;
        }

        // Assign multiple roles (same as your tinker)
        $user->syncRoles([
            'Admin',
            'Vendor',
            'Manager',
            'User',
        ]);

        // Optional: set primary role_id
        $user->update([
            'role_id' => 1, // Admin
        ]);
    }
}
