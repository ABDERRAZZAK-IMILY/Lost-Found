<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('announcements')->insert([
            [
                'titre' => 'Téléphone perdu',
                'description' => 'J’ai perdu mon téléphone près du centre commercial.',
                'image' => 'images/phone.jpg',
                'lieu' => 'Casablanca',
                'status' => 'losted',
                'user_id' => 1, // Assurez-vous qu'un utilisateur avec ID=1 existe
                'created_at' => now(),
                'updated_at' => now(),
            ] 
            
        ]);
    }
}
