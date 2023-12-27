<?php

namespace database\seeders;
use Illuminate\Database\Seeder;
use App\Models\entity\Relation;

class RelationSeeder extends Seeder
{
    public function run()
    {
        // Exemple 1
        Relation::create([
            'nom' => 'Relation 1',
            'logo' => 'logo1.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Exemple 2
        Relation::create([
            'nom' => 'Relation 2',
            'logo' => 'logo2.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Exemple 3
        Relation::create([
            'nom' => 'Relation 3',
            'logo' => 'logo3.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
