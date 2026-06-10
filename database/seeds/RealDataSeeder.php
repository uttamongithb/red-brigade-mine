<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RealDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Clear existing data to avoid duplicates if run multiple times
        DB::table('news')->truncate();
        DB::table('testimonial')->truncate();
        DB::table('blog')->truncate();

        // --- Seed Our Team (Testimonial table) ---
        $team = [
            [
                'name' => 'Usha Vishwakarma',
                'image' => 'usha.jpg', // Verified in public/uploads/testimonial/usha.jpg
                'description' => 'Founder & Chief Managing Trustee. Usha started the movement after surviving an attempted rape, turning her trauma into a nationwide movement for women\'s safety.',
                'type' => 'Executive',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Laxmi Vishwakarma',
                'image' => 'sunshine-team.jpeg', // Verified in public/uploads/testimonial/
                'description' => 'Co-founder and Secretary. Laxmi has been instrumental in organizing grassroots mobilization and legal support for survivors.',
                'type' => 'Executive',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Pratishtha Tiwari',
                'image' => 'sunshine-testimonial-673.jpeg', // Verified in public/uploads/testimonial/
                'description' => 'CEO of Red Brigade Trust. She oversees the strategic operations and partnerships that help scale the Mission One Million initiative.',
                'type' => 'Executive',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Saloni Sharma',
                'image' => 'sunshine-testimonial-889.jfif', // Verified in public/uploads/testimonial/
                'description' => 'Lead Self-Defense Trainer. Developer of the "Nishastra Kala" technique, focusing on survival and quick response training for girls.',
                'type' => 'Executive',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        DB::table('testimonial')->insert($team);

        // --- Seed Our Work / Events (News table) ---
        $events = [
            [
                'type' => 'event',
                'name' => 'Nishastra Kala Self-Defense Workshop',
                'slug' => 'nishastra-kala-workshop',
                'date' => '2026-07-15',
                'time_interval' => '10:00 AM - 02:00 PM',
                'city' => 'Lucknow',
                'image' => 'rb-self-defense.png', // Verified in public/uploads/news/
                'description' => 'A specialized workshop teaching "Nishastra Kala", a self-defense technique developed by Red Brigade survivors that focuses on real-world survival scenarios.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'type' => 'event',
                'name' => 'Salute to Sarojini Annual Rally',
                'slug' => 'salute-to-sarojini',
                'date' => '2026-02-13',
                'time_interval' => '08:00 AM - 12:00 PM',
                'city' => 'Lucknow',
                'image' => 'rb-street-play.png', // Verified in public/uploads/news/
                'description' => 'Our annual rally celebrating National Women’s Day. We honor the legacy of Sarojini Naidu and advocate for women\'s right to safety in public spaces.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'type' => 'mission',
                'name' => 'Mission One Million',
                'slug' => 'mission-one-million',
                'date' => 'Ongoing',
                'time_interval' => 'Full Day',
                'city' => 'Across India',
                'image' => 'rb-women-leadership.png', // Verified in public/uploads/news/
                'description' => 'Our flagship initiative aiming to provide self-defense workshops to one million girls across schools and colleges in India.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'type' => 'event',
                'name' => 'Covid-19 Relief Mission',
                'slug' => 'covid-relief-mission',
                'date' => '2026-06-25',
                'time_interval' => '09:00 AM - 06:00 PM',
                'city' => 'Varanasi',
                'image' => 'rb-covid-relief.png', // Verified in public/uploads/news/
                'description' => 'Red Brigade members actively participated in distributing relief materials and providing support to vulnerable communities during the pandemic.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            // Adding blog types to news table for homepage featured stories
            [
                'type' => 'blog',
                'name' => 'Reclaiming the Name',
                'slug' => 'reclaiming-the-name-featured',
                'date' => '2026-05-10',
                'time_interval' => 'Full Story',
                'city' => 'Lucknow',
                'image' => 'rb-street-play.png',
                'description' => 'How we turned a derogatory remark into a symbol of power and protest.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'type' => 'blog',
                'name' => 'The Power of Nishastra Kala',
                'slug' => 'power-of-nishastra-kala',
                'date' => '2026-06-01',
                'time_interval' => 'Full Story',
                'city' => 'Lucknow',
                'image' => 'rb-self-defense.png',
                'description' => 'Why our self-defense technique is saving lives across India.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        DB::table('news')->insert($events);

        // --- Seed Blogs (Blog table) ---
        $blogs = [
            [
                'name' => 'Reclaiming the Name: The Story of Red Brigade',
                'image' => 'rb-street-play.png', // Verified in public/uploads/news/
                'date' => '2026-05-10',
                'slug' => 'reclaiming-the-name',
                'description' => 'What started as a derogatory remark from a group of boys became our badge of honor. Red for power, Black for protest. This is the story of how we found our voice.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Self-Defense is a Right, Not a Privilege',
                'image' => 'rb-self-defense.png', // Verified in public/uploads/news/
                'date' => '2026-06-01',
                'slug' => 'self-defense-is-a-right',
                'description' => 'In a world where public spaces often feel unsafe, self-defense is not just a skill—it is a necessity. Learn why Nishastra Kala is different from traditional martial arts.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Empowering Through Education',
                'image' => 'rb-education.png', // Verified in public/uploads/news/
                'date' => '2026-04-20',
                'slug' => 'empowering-through-education',
                'description' => 'Education is the most powerful weapon which you can use to change the world. At Red Brigade, we focus on digital literacy and formal education for girls.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        DB::table('blog')->insert($blogs);
    }
}
