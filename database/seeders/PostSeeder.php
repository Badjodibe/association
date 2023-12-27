<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ressources\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        // Exemple 1
        Post::create([
            'title' => 'Nouvelle Publication',
            'dateCreation' => now(),
            'description' => 'Ceci est un exemple de publication.',
            'image' => 'image1.jpg',
            'document' => 'document1.pdf',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Exemple 2
        Post::create([
            'title' => 'Événement à venir',
            'dateCreation' => now(),
            'description' => 'Un événement passionnant à ne pas manquer.',
            'image' => 'image2.jpg',
            'document' => 'document2.pdf',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Exemple 3
        Post::create([
            'title' => 'Mise à jour importante',
            'dateCreation' => now(),
            'description' => 'Informations cruciales pour tous les membres.',
            'image' => 'image3.jpg',
            'document' => 'document3.pdf',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Exemple 4
        Post::create([
            'title' => 'Discussion ouverte',
            'dateCreation' => now(),
            'description' => 'Partagez vos idées et opinions.',
            'image' => 'image4.jpg',
            'document' => 'document4.pdf',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

