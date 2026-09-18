<?php

namespace Database\Seeders;

use App\Models\TechStack;
use Illuminate\Database\Seeder;

class TechStackSeeder extends Seeder
{
    public function run(): void
    {
        TechStack::truncate();

        $stacks = [
            // Frontend
            [
                'name' => 'React',
                'category' => 'Frontend',
                'brand_color' => '#61DAFB',
                'proficiency' => 'Advanced',
                'sort_order' => 1,
            ],
            [
                'name' => 'Javascript',
                'category' => 'Frontend',
                'brand_color' => '#F7DF1E',
                'proficiency' => 'Advanced',
                'sort_order' => 2,
            ],
            [
                'name' => 'Tailwind CSS',
                'category' => 'Frontend',
                'brand_color' => '#06B6D4',
                'proficiency' => 'Advanced',
                'sort_order' => 3,
            ],
            [
                'name' => 'HTML5/CSS3',
                'category' => 'Frontend',
                'brand_color' => '#E34F26',
                'proficiency' => 'Expert',
                'sort_order' => 4,
            ],

            // Backend
            [
                'name' => 'Laravel',
                'category' => 'Backend',
                'brand_color' => '#FF2D20',
                'proficiency' => 'Advanced',
                'sort_order' => 5,
            ],
            [
                'name' => 'PHP',
                'category' => 'Backend',
                'brand_color' => '#777BB4',
                'proficiency' => 'Advanced',
                'sort_order' => 6,
            ],
            [
                'name' => 'Node.js',
                'category' => 'Backend',
                'brand_color' => '#5FA04E',
                'proficiency' => 'Advanced',
                'sort_order' => 7,
            ],
            [
                'name' => 'Express.js',
                'category' => 'Backend',
                'brand_color' => '#68A063',
                'proficiency' => 'Proficient',
                'sort_order' => 8,
            ],
            [
                'name' => 'Java',
                'category' => 'Backend',
                'brand_color' => '#007396',
                'proficiency' => 'Intermediate',
                'sort_order' => 9,
            ],

            // Database & Cloud
            [
                'name' => 'MySQL',
                'category' => 'Database & Cloud',
                'brand_color' => '#4479A1',
                'proficiency' => 'Advanced',
                'sort_order' => 10,
            ],
            [
                'name' => 'Supabase',
                'category' => 'Database & Cloud',
                'brand_color' => '#3ECF8E',
                'proficiency' => 'Advanced',
                'sort_order' => 11,
            ],
            [
                'name' => 'Firebase',
                'category' => 'Database & Cloud',
                'brand_color' => '#FFCA28',
                'proficiency' => 'Advanced',
                'sort_order' => 12,
            ],
            [
                'name' => 'Vercel',
                'category' => 'Database & Cloud',
                'brand_color' => '#000000',
                'proficiency' => 'Advanced',
                'sort_order' => 13,
            ],

            // Tools & Design
            [
                'name' => 'Git & Github',
                'category' => 'Tools',
                'brand_color' => '#F05032',
                'proficiency' => 'Advanced',
                'sort_order' => 14,
            ],
            [
                'name' => 'Figma',
                'category' => 'Tools',
                'brand_color' => '#F24E1E',
                'proficiency' => 'Proficient',
                'sort_order' => 15,
            ],
        ];

        foreach ($stacks as $stack) {
            TechStack::create($stack);
        }
    }
}
