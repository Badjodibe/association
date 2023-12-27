<?php

namespace database\seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Exemple 3
        Role::create([
            'name' => 'Secretary',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
