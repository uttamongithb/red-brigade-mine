<?php

namespace Database\Seeders;

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
            [
                'name' => 'Meera Singh',
                'image' => 'sunshine-testimonial-317.jpg',
                'description' => 'Former Lead Coordinator. Meera played a pivotal role in the early days of Red Brigade, helping establish the first self-defense camps.',
                'type' => 'Executive',
                'status' => 0,
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

        // --- Seed Work Initiatives (work_initiatives table) ---
        DB::table('work_initiatives')->truncate();
        $initiatives = [
            [
                'title' => 'Mission One Million',
                'tagline' => 'Safe Women, Strong Women',
                'collaboration' => 'SEWA THDC',
                'image' => 'mission-one million-ongoing.jpeg',
                'category' => 'sexual_violence',
                'type' => 'ongoing',
                'status' => 1,
                'slug' => 'mission-one-million-ongoing',
                'description' => 'Mission One Million is an extensive and high-impact self-defense and empowerment campaign targeting young girls and women to build physical safety skills and psychological resilience. In collaboration with SEWA THDC, the campaign aims to reach one million women across India to create a fearless environment and promote women\'s agency.',
                'gallery_images' => json_encode(['mom_1.jpeg', 'mom_2.jpeg', 'mom_3.jpeg']),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'NCC - Uttar Pradesh',
                'tagline' => 'Youth Leadership & Safety',
                'collaboration' => 'National Cadet Corps',
                'image' => 'ncc-ongoing.jpeg',
                'category' => 'sexual_violence',
                'type' => 'ongoing',
                'status' => 1,
                'slug' => 'ncc-uttar-pradesh',
                'description' => 'A dedicated safety and self-defense training program conducted in collaboration with the National Cadet Corps (NCC) in Uttar Pradesh. The program focuses on youth leadership, situational awareness, and quick-response survival techniques, enabling cadets to act as safety ambassadors in their communities.',
                'gallery_images' => json_encode(['ncc_1.jpeg', 'ncc_2.jpeg', 'ncc_3.jpeg', 'ncc_4.jpeg', 'ncc_5.jpeg', 'ncc_6.jpeg', 'ncc_7.jpeg']),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Chikenkari Training',
                'tagline' => null,
                'collaboration' => null,
                'image' => 'chikenkari.png',
                'category' => 'economic_upliftment',
                'type' => 'ongoing',
                'status' => 1,
                'slug' => 'chikenkari-training',
                'description' => 'Chikenkari Training provides skill-building workshops in the traditional art of Chikenkari embroidery, offering marginalized women a viable livelihood and financial independence. The program combines artisanal craft training with entrepreneurial coaching to foster long-term financial autonomy and dignity.',
                'gallery_images' => json_encode(['chikankari_1.jpeg', 'chikankari_2.jpeg', 'chikankari_3.jpeg', 'chikankari_4.jpeg', 'chikankari_5.jpeg', 'chikankari_6.jpeg', 'chikankari_7.jpeg', 'chikankari_8.jpeg']),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Mission One Million',
                'tagline' => 'Safe Women, Strong Women',
                'collaboration' => 'SEWA THDC',
                'image' => 'mom-prev.jpeg',
                'category' => 'sexual_violence',
                'type' => 'previous',
                'status' => 1,
                'slug' => 'mission-one-million-previous',
                'description' => 'A previous phase of the Mission One Million campaign, focusing on self-defense workshops in public schools and rural centers. Through SEWA THDC’s support, this phase laid the foundation of our high-impact physical and psychological empowerment methodology.',
                'gallery_images' => json_encode([
                    'WhatsApp Image 2026-07-02 at 11.02.35 (1).jpeg',
                    'WhatsApp Image 2026-07-02 at 11.02.35 (2).jpeg',
                    'WhatsApp Image 2026-07-02 at 11.02.35.jpeg'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Nishastra Kala Self-Defense Workshop',
                'tagline' => null,
                'collaboration' => 'The Aditya Birla Public School, Hirmi Chhattisgarh',
                'image' => 'nishastakala hirmi.jpeg',
                'category' => 'sexual_violence',
                'type' => 'previous',
                'status' => 1,
                'slug' => 'nishastakala-hirmi',
                'description' => 'A specialized workshop teaching \'Nishastra Kala\', a real-world self-defense technique developed by Red Brigade survivors. This session was conducted at The Aditya Birla Public School, Hirmi Chhattisgarh, equipping 100 female students with physical defense methods and mental confidence to counter violence.',
                'gallery_images' => json_encode([
                    'nishastra_1.jpeg',
                    'nishastra_2.jpeg',
                    'nishastra_3.jpeg'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'ShaktiPreneur',
                'tagline' => 'Shasakt Balika, Surakshit Samaj',
                'collaboration' => 'Shri Ram Charitable Trust, Hyderabad',
                'image' => 'shaktipreneur.jpeg',
                'category' => 'sexual_violence,leadership_community,economic_upliftment',
                'type' => 'ongoing',
                'status' => 1,
                'slug' => 'shaktipreneur',
                'description' => '<p>ShaktiPreneur is a women empowerment initiative focused on developing Self-Defense Entrepreneurs (ShaktiPreneurs) across Uttar Pradesh. The program equips women leaders with self-defense skills, leadership capabilities, and entrepreneurial opportunities, enabling them to train girls in their communities while creating sustainable livelihood opportunities.</p><p>Through this initiative, trained women leaders will conduct self-defense training, spread awareness on women\'s safety, and inspire girls to become confident, fearless, and self-reliant.</p><h4>Program Objectives</h4><ul><li>Develop women as Self-Defense Entrepreneurs (ShaktiPreneurs).</li><li>Build a district-level network of trained women leaders.</li><li>Provide practical self-defense training to girls.</li><li>Promote confidence, leadership, and safety awareness among adolescent girls.</li><li>Create sustainable livelihood opportunities for women through self-defense training.</li><li>Contribute to building safer and stronger communities.</li></ul><h4>Program Details</h4><table class="table table-bordered"><tbody><tr><th>Program Name</th><td>ShaktiPreneur</td></tr><tr><th>Duration</th><td>6 Months</td></tr><tr><th>Coverage Area</th><td>10 Districts of Uttar Pradesh</td></tr><tr><th>Women Leaders</th><td>26 ShaktiPreneur Leaders</td></tr><tr><th>Overall Target</th><td>Train 15,000 Girls</td></tr><tr><th>Collaborating Organization</th><td>Shri Ram Charitable Trust, Hyderabad</td></tr></tbody></table><h4>District-wise Leadership</h4><div class="row"><div class="col-md-6"><ul><li><strong>Unnao:</strong> Laxmi Prajapati, Laxmi, Antima</li><li><strong>Raebareli:</strong> Priyanka, Jyoti</li><li><strong>Barabanki:</strong> Shivani, Saloni</li><li><strong>Ayodhya:</strong> Kalpana, Chandani, Varsha</li><li><strong>Basti:</strong> Anamika, Jyoti</li></ul></div><div class="col-md-6"><ul><li><strong>Varanasi:</strong> Akanksha, Moni, Ritu</li><li><strong>Jaunpur:</strong> Antima, Saloni, Pinki</li><li><strong>Mau:</strong> Ritika, Renu, Akanksha</li><li><strong>Gorakhpur:</strong> Khushbu, Shalini</li><li><strong>Ballia:</strong> Divyani, Anchal, Sangita</li></ul></div></div><h4>Program Targets (6 Months)</h4><p>Each ShaktiPreneur Leader will organize self-defense training programs, awareness campaigns, and community engagement activities within their respective districts, collectively working toward the goal of training 15,000 girls over six months.</p><h4>Expected Outcomes</h4><ul><li>Train and empower 15,000 girls with practical self-defense skills.</li><li>Establish a strong network of 26 ShaktiPreneur Leaders across 10 districts.</li><li>Enhance girls\' confidence, leadership, and personal safety.</li><li>Create sustainable livelihood opportunities for women through community-based self-defense training.</li><li>Build safer, stronger, and more resilient communities.</li></ul><h4>Program Vision</h4><p>To create a state-wide network of ShaktiPreneurs who empower girls with self-defense skills, foster women\'s leadership, and build safer communities where every girl has the confidence and capability to protect herself and pursue her aspirations.</p>',
                'gallery_images' => json_encode(['shaktipreneur_1.jpeg', 'shaktipreneur_2.jpeg', 'shaktipreneur_3.jpeg', 'shaktipreneur_4.jpeg', 'shaktipreneur_5.jpeg', 'shaktipreneur_6.jpeg', 'shaktipreneur_7.jpeg', 'shaktipreneur_8.jpeg', 'shaktipreneur_9.jpeg', 'shaktipreneur_10.jpeg', 'shaktipreneur_11.jpeg', 'shaktipreneur_12.jpeg', 'shaktipreneur_13.jpeg', 'shaktipreneur_14.jpeg']),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'SAKSHAM',
                'tagline' => 'Be Fearless & Formidable',
                'collaboration' => 'Inner Wheel Club of Lucknow Baradari',
                'image' => 'saksham-upcoming.jpeg',
                'category' => 'sexual_violence',
                'type' => 'upcoming',
                'status' => 1,
                'slug' => 'saksham',
                'description' => '<p><strong>Project SAKSHAM – Self Defense Training for Girls</strong></p><p>Organized by Inner Wheel Club of Lucknow Baradari (District 312) and Red Brigade Lucknow.</p><h4>Event Details</h4><ul><li><strong>Dates:</strong> 15th, 16th, and 17th July 2026</li><li><strong>Time:</strong> 10:30 AM</li><li><strong>Venue:</strong> Dayanand Inter Girls College, Mahanagar, Lucknow</li></ul><h4>Objective</h4><p>Strong Girls, Safe Communities, Fearless Futures.</p><h4>Association\'s Flagship Project</h4><p>FIT GIRL</p><h4>Key Office Bearers</h4><ul><li><strong>President:</strong> Vandana Srivastava</li><li><strong>Red Brigade Founder:</strong> Usha Vishwakarma</li><li><strong>Secretary:</strong> Sumita Rastogi</li></ul><h4>Organizations Featured</h4><ul><li>Inner Wheel Club of Lucknow Baradari (District 312)</li><li>Red Brigade Lucknow</li><li>Reach & Inspire</li><li>Grow & Flourish (2026–2027)</li><li>Rotary International</li></ul><p><em>"Empowered Girls Build a Stronger Tomorrow."</em></p>',
                'gallery_images' => json_encode([]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Mukka Maar Camp',
                'tagline' => 'सशक्त नारी, सुरक्षित समाज, सशक्त बिहार',
                'collaboration' => 'Rotary International & Red Brigade Lucknow',
                'image' => 'mukkmar-upcoming.jpeg',
                'category' => 'sexual_violence',
                'type' => 'upcoming',
                'status' => 1,
                'slug' => 'mukka-maar-camp',
                'description' => '<p><strong>Launch: मुक्का मार CAMP - SELF DEFENCE TRAINING (MUKKA MAAR)</strong></p><p>The Mukka Maar Camp is a self-defence training initiative launched jointly by Rotary Club and Red Brigade Lucknow. The programme focuses on empowering women and girls by teaching practical self-defence skills while promoting:</p><ul><li>Self-confidence (आत्मविश्वास)</li><li>Self-Defence (आत्मरक्षा)</li><li>Unity (एकजुटता)</li><li>Leadership (नेतृत्व)</li><li>Women\'s empowerment (सशक्तिकरण)</li></ul><p>The initiative is being implemented across four districts of Bihar through Rotary Clubs with the vision of creating an empowered society where every girl has the confidence and ability to protect herself.</p><h4>Main Message</h4><p>SELF DEFENCE IS NOT JUST A SKILL. IT\'S A RIGHT!</p><h4>Programme Coverage (4 Districts of Bihar)</h4><ul><li>Rotary Bhagalpur</li><li>Rotary Tathagat, Bihar Sharif</li><li>Rotary Muzaffarpur</li><li>Rotary Gaya City</li></ul><h4>Organizations</h4><ul><li>Rotary International</li><li>Red Brigade Lucknow - "A Voice Against Sexual Violence"</li></ul><p><em>"Empowered Women, Safe Society, Empowered Bihar"</em></p>',
                'gallery_images' => json_encode([]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'लड़की निडर, करे वोट की फ़िकर Campaign',
                'tagline' => 'Vote Awareness & Leadership Campaign',
                'collaboration' => 'Amren Foundation',
                'image' => 'vote_campaign_1.jpeg',
                'category' => 'leadership_community',
                'type' => 'previous',
                'status' => 1,
                'slug' => 'vote-awareness-campaign',
                'description' => '<p>Red Brigade Lucknow, in collaboration with Amren Foundation, successfully organized the "लड़की निडर, करे वोट की फ़िकर" awareness campaign to encourage young women to understand the importance of voting, democratic participation, and leadership. The initiative included a six-day training program designed to empower girls with confidence, civic awareness, and a sense of social responsibility.</p><p>As part of the campaign, the Red Brigade Lucknow team visited Nari Niketan Degree College, Lucknow, on 6 December, where students actively participated in sessions focused on voting awareness, women\'s leadership, and civic engagement.</p><p>The event\'s Chief Guest, Abhivyakti Singh, Administrative Head of the Lucknow Film Forum, Amren Foundation, addressed the students and emphasized the importance of every vote in strengthening democracy. She encouraged young women to develop leadership qualities from an early stage and to actively participate in shaping the future of society and the nation.</p><p>The students enthusiastically participated throughout the program, engaging in discussions and learning about the value of voting, leadership, and responsible citizenship. The Principal of Nari Niketan Degree College, Mrs. Sapna, appreciated the initiative and motivated the students to become informed, responsible, and empowered citizens.</p><p>Usha Vishwakarma, Founder of Red Brigade Lucknow, spoke about the significance of voting in a democratic society and encouraged every student to exercise their voting rights responsibly. She highlighted that informed and active participation in the electoral process is essential for creating positive social change and strengthening democracy.</p><p>The campaign was successfully conducted with the support of Red Brigade Lucknow team members Pooja Vishwakarma, Laxmi, Annu, Deepak, Pooja, and Hansraj, whose dedication and efforts contributed to the success of the event.</p><h4>Program Details</h4><ul><li><strong>Campaign Name:</strong> लड़की निडर, करे वोट की फ़िकर</li><li><strong>Organized By:</strong> Red Brigade Lucknow</li><li><strong>In Collaboration With:</strong> Amren Foundation</li><li><strong>Venue:</strong> Nari Niketan Degree College, Lucknow</li><li><strong>Date:</strong> 6 December</li><li><strong>Chief Guest:</strong> Abhivyakti Singh, Administrative Head, Lucknow Film Forum, Amren Foundation</li><li><strong>Key Speaker:</strong> Usha Vishwakarma, Founder, Red Brigade Lucknow</li></ul><h4>Objectives</h4><ul><li>Raise awareness about the importance of voting and democratic participation.</li><li>Encourage young women to become informed and responsible voters.</li><li>Inspire leadership, confidence, and civic responsibility among girls.</li><li>Promote active participation in democracy and community development.</li><li>Empower young women to become future leaders and changemakers.</li></ul><p>This campaign reflects the shared commitment of Red Brigade Lucknow and Amren Foundation to empowering young women through civic education, leadership development, and democratic awareness, helping build a more informed, responsible, and inclusive society.</p>',
                'gallery_images' => json_encode(['vote_campaign_1.jpeg', 'vote_campaign_2.jpeg', 'vote_campaign_3.jpeg', 'vote_campaign_4.jpeg', 'vote_campaign_5.jpeg', 'vote_campaign_6.jpeg', 'vote_campaign_7.jpeg', 'vote_campaign_8.jpeg', 'vote_campaign_9.jpeg', 'vote_campaign_10.jpeg', 'vote_campaign_11.jpeg']),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => '\'रात का उजाला\' (Raat Ka Ujala) Campaign',
                'tagline' => 'Promoting Women\'s Safety & Recognition at Night',
                'collaboration' => '',
                'image' => 'raat_ka_ujala_3.jpeg',
                'category' => 'gender_sensitization',
                'type' => 'previous',
                'status' => 1,
                'slug' => 'raat-ka-ujala-campaign',
                'description' => '<p>\'रात का उजाला\' (Raat Ka Ujala) is a flagship initiative of Red Brigade Lucknow, an organization founded by Usha Vishwakarma to combat sexual violence and empower women and girls across India. The campaign is dedicated to creating safer public spaces at night by recognizing, supporting, and celebrating women who work fearlessly during late hours while encouraging greater awareness of women\'s safety and rights.</p><p>The initiative highlights the courage, resilience, and contributions of women who continue to serve society in professions that require them to work at night. By bringing their stories to the forefront, the campaign challenges gender stereotypes and inspires more women to pursue opportunities without fear.</p><h4>Campaign Objectives</h4><ul><li>Promote women\'s safety and security during night-time.</li><li>Raise awareness about women\'s rights and gender equality.</li><li>Encourage confidence and independence among women and girls.</li><li>Recognize and honor women who contribute to society through night-shift and public service roles.</li><li>Build safer communities by promoting respect, equality, and women\'s empowerment.</li></ul><h4>Self-Defense Training</h4><p>As part of the \'रात का उजाला\' campaign, Red Brigade Lucknow provides NISHASTRA Self-Defense Training to women and girls, equipping them with practical techniques and the confidence to protect themselves in challenging situations.</p><p>The training focuses on:</p><ul><li>Practical self-defense techniques</li><li>Situational awareness</li><li>Confidence building</li><li>Emergency response skills</li><li>Leadership and decision-making</li></ul><h4>Women Empowerment</h4><p>A unique strength of Red Brigade Lucknow is that many of its members are survivors of sexual violence who have transformed their experiences into a mission of empowering others. Through their leadership and lived experiences, they mentor girls and women to face adversity with courage, resilience, and confidence.</p><h4>Recognition of Emerging Women Leaders</h4><p>Under the \'रात का उजाला\' campaign, Red Brigade Lucknow recognizes and honors women who demonstrate exceptional dedication and courage while serving society in essential professions, particularly during night hours.</p><p>Women leaders recognized through the initiative include professionals from sectors such as:</p><ul><li>Traffic Police</li><li>Women Police Officers</li><li>Petrol Pump Workers</li><li>Security Guards</li><li>E-Rickshaw Drivers</li><li>Other frontline women professionals working during night shifts</li></ul><p>By celebrating these women, the campaign encourages greater social recognition of their contributions and inspires more women to pursue leadership roles across diverse professions.</p><h4>Key Highlights</h4><ul><li><strong>Campaign Name:</strong> \'रात का उजाला\' (Raat Ka Ujala)</li><li><strong>Organized By:</strong> Red Brigade Lucknow</li><li><strong>Founder:</strong> Usha Vishwakarma</li><li><strong>Focus Areas:</strong> Women\'s Safety, Self-Defense, Leadership, and Recognition</li><li><strong>Flagship Training:</strong> NISHASTRA Self-Defense Training</li><li><strong>Beneficiaries:</strong> Women and Girls across communities</li><li><strong>Special Initiative:</strong> Recognition of women working in frontline and night-shift professions</li></ul><h4>Vision</h4><p>To build a society where every woman can move freely and confidently at any hour, supported by safe communities, equal opportunities, and the skills to protect herself. Through \'रात का उजाला\', Red Brigade Lucknow strives to create an environment where women are recognized not only for overcoming challenges but also for leading positive social change.</p>',
                'gallery_images' => json_encode(['raat_ka_ujala_1.jpeg', 'raat_ka_ujala_2.jpeg', 'raat_ka_ujala_3.jpeg', 'raat_ka_ujala_4.jpeg']),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'National Women\'s Day',
                'tagline' => 'Celebrating Leadership & Community Building',
                'collaboration' => '',
                'image' => 'national_womens_day_1.jpeg',
                'category' => 'leadership_community',
                'type' => 'previous',
                'status' => 1,
                'slug' => 'national-womens-day',
                'description' => '<p>Played a significant role in reviving National Women’s Day celebrations (February 13, Sarojini Naidu’s birth anniversary). Initiated an 18-day activism campaign in 2018, including the \'Prerna Yatra\' (vehicle rally) covering 50 districts across four states. Other events include \'Salute to Sarojini\' (2019) with 140 events across Lucknow and a \'One Million Meter March\' scooter rally in 100 villages (2021). In 2023, 50 girls marched from Bhojla, Jhansi, to Lucknow. These efforts have led to National Women’s Day events in approximately 150 districts.</p>',
                'gallery_images' => json_encode(['national_womens_day_1.jpeg', 'national_womens_day_2.jpeg', 'national_womens_day_3.jpeg', 'national_womens_day_4.jpeg']),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Tailoring Training (Apna Hunar Training Centre)',
                'tagline' => '',
                'collaboration' => '',
                'image' => 'silai_training_1.jpeg',
                'category' => 'economic_upliftment',
                'type' => 'previous',
                'status' => 1,
                'slug' => 'silai-training',
                'description' => '<p>As part of its women empowerment initiatives, Red Brigade Lucknow provides tailoring and stitching training to women from underserved communities, equipping them with practical vocational skills that promote financial independence and self-reliance. The program empowers participants to generate sustainable livelihoods through self-employment and small-scale entrepreneurship, helping them build a secure and dignified future for themselves and their families.</p>',
                'gallery_images' => json_encode(['silai_training_1.jpeg', 'silai_training_2.jpeg', 'silai_training_3.jpeg', 'silai_training_4.jpeg', 'silai_training_5.jpeg', 'silai_training_6.jpeg', 'silai_training_7.jpeg']),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Beauty Parlor Courses (Apna Hunar Training Centre)',
                'tagline' => '',
                'collaboration' => '',
                'image' => 'parlour_training_1.jpeg',
                'category' => 'economic_upliftment',
                'type' => 'previous',
                'status' => 1,
                'slug' => 'beautician-makeup-training',
                'description' => '<p>Red Brigade Lucknow conducts Beautician and Makeup Skill Development Training to empower women with professional beauty and personal grooming skills that can lead to sustainable employment and entrepreneurship. The program provides hands-on training in beauty services, enabling women to establish their own salons, offer freelance services, or secure employment in the beauty and wellness industry, fostering financial independence and self-reliance.</p>',
                'gallery_images' => json_encode(['parlour_training_1.jpeg', 'parlour_training_2.jpeg']),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Hinsa Mukt Jeevan Activism Campaign',
                'tagline' => '12-Day Campaign for Peace and Safety',
                'collaboration' => '',
                'image' => 'hinsa_mukt_jeevan_6.jpeg',
                'category' => 'gender_sensitization',
                'type' => 'previous',
                'status' => 1,
                'slug' => 'hinsa-mukt-jeevan',
                'description' => '<p>Conducted the 12-day \'Hinsa Mukt Jeevan\' activism campaign (2022) from September 21 (International Peace Day) to October 2 (Gandhi Jayanti), engaging 100 volunteers and reaching 10,000 girls with self-defense training.</p>',
                'gallery_images' => json_encode(['hinsa_mukt_jeevan_1.jpeg', 'hinsa_mukt_jeevan_2.jpeg', 'hinsa_mukt_jeevan_3.jpeg', 'hinsa_mukt_jeevan_4.jpeg', 'hinsa_mukt_jeevan_5.jpeg', 'hinsa_mukt_jeevan_6.jpeg', 'hinsa_mukt_jeevan_7.jpeg', 'hinsa_mukt_jeevan_8.jpeg', 'hinsa_mukt_jeevan_9.jpeg']),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];
        DB::table('work_initiatives')->insert($initiatives);
    }
}
