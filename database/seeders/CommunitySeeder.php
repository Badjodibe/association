<?php

namespace database\seeders;
use Illuminate\Database\Seeder;
use App\Models\entity\Community;

class CommunitySeeder extends Seeder
{
    public function run()
    {
 // Création de quelques enregistrements pour le modèle Community
            Community::create([
                'pays' => 'France',
                'belongDate' => '2023-11-01',
                'descriptions' => 'Description de la communauté 1',
                'name' => 'Communauté 1',
                'logo' => '/media/community/logo1.png', // Assurez-vous d'avoir le fichier dans le bon chemin
            ]);
    
            Community::create([
                'pays' => 'Espagne',
                'belongDate' => '2023-11-05',
                'descriptions' => 'Description de la communauté 2',
                'name' => 'Communauté 2',
                'logo' => 'chemin/vers/logo2.png', // Assurez-vous d'avoir le fichier dans le bon chemin
            ]);
    
            // Ajoutez autant d'enregistrements que nécessaire
        }
}

