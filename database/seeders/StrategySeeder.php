<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StrategySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $strategies = [
            [
                'name' => 'Self-Defense',
                'description' => 'Empowering women with critical, real-world self-defense skills (Nishatra).',
                'image' => 'rb-self-defense.png',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Leadership',
                'description' => 'Creating the next generation of fearless feminist leadership.',
                'image' => 'rb-women-leadership.png',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Activism',
                'description' => 'Building widespread social movements to dismantle discrimination.',
                'image' => 'rb-skill-dev.png',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Nukkad Natak',
                'description' => '800+ Street Plays performed to spread vital awareness against sexual violence.',
                'image' => 'rb-street-play.png',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Balmanch',
                'description' => 'Providing educational support to children in marginalized communities (Educational Aid).',
                'image' => 'rb-education.png',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];

        DB::table('strategy')->insert($strategies);
    }
}
