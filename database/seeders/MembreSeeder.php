<?php

namespace database\seeders;
use Illuminate\Database\Seeder;
use App\Models\entity\Member;
use App\Models\entity\Community;
use App\Models\User;

class MembreSeeder extends Seeder
{
    public function run()
    {
        // Exemple 1
        Member::create([
            'name' => 'John',
            'surnames' => 'Doe',
            'community_id' => 1, // Remplacez par l'ID d'une communauté existante
            'user_id' => 1, // Remplacez par l'ID d'un utilisateur existant
            'filliere' => 'Informatique',
            'belongDate' => '2022-01-01',
            'photo' => 'john_doe.jpg',
            'description' => 'Membre actif de la communauté.',
            'role_id' => 2, // Remplacez par l'ID d'un rôle existant
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Exemple 2
        Member::create([
            'name' => 'Alice',
            'surnames' => 'Smith',
            'community_id' => 2, // Remplacez par l'ID d'une communauté existante
            'user_id' => 2, // Remplacez par l'ID d'un utilisateur existant
            'filliere' => 'Biologie',
            'belongDate' => '2022-02-15',
            'photo' => 'alice_smith.jpg',
            'description' => 'Membre passionné de la nature.',
            'role_id' => 3, // Remplacez par l'ID d'un rôle existant
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Exemple 3
        Member::create([
            'name' => 'Bob',
            'surnames' => 'Johnson',
            'community_id' => 1, // Remplacez par l'ID d'une communauté existante
            'user_id' => 3, // Remplacez par l'ID d'un utilisateur existant
            'filliere' => 'Chimie',
            'belongDate' => '2022-03-20',
            'photo' => 'bob_johnson.jpg',
            'description' => 'Membre étudiant de la communauté.',
            'role_id' => 2, // Remplacez par l'ID d'un rôle existant
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Exemple 4
        Member::create([
            'name' => 'Eva',
            'surnames' => 'Williams',
            'community_id' => 3, // Remplacez par l'ID d'une communauté existante
            'user_id' => 4, // Remplacez par l'ID d'un utilisateur existant
            'filliere' => 'Mathématiques',
            'belongDate' => '2022-04-10',
            'photo' => 'eva_williams.jpg',
            'description' => 'Membre passionné de mathématiques.',
            'role_id' => 2, // Remplacez par l'ID d'un rôle existant
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}