<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed Education Cards
        $cards = [
            [
                'name' => 'Literacy & Support',
                'description' => 'Providing direct educational assistance and bridge courses for children who have dropped out of school.',
                'icon' => 'fa-book-reader',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Child Safety',
                'description' => 'Teaching children about their rights, "Good Touch & Bad Touch," and how to protect themselves from exploitation.',
                'icon' => 'fa-shield-alt',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Community Hubs',
                'description' => 'Establishing local learning centers that act as safe havens for children in sensitive neighborhoods.',
                'icon' => 'fa-users',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];
        DB::table('education_cards')->insert($cards);

        // Seed some Gallery items for Education
        $gallery = [
            [
                'name' => 'Education Activity 1',
                'image' => 'rb-education.png', // Reusing available image
                'type' => 'Activity',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Education Activity 2',
                'image' => 'rb-street-play.png', // Reusing available image
                'type' => 'Activity',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Donate Education',
                'image' => 'rb-covid-relief.png', // Reusing available image
                'type' => 'Donate',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];
        // Move images to gallery folder if needed, or just reference them
        // For now, I'll assume they are in gallery folder for testing or reuse news folder
        // The view uses URL::asset('uploads/gallery/'.$item->image)
        
        DB::table('gallery')->insert($gallery);
    }
}
