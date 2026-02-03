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
<<<<<<< HEAD

        
=======
>>>>>>> 42f1a5a2834fd85a396e58f9fd5e777886114769
    }
}
