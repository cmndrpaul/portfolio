<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Project;
use App\Models\TechStack;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProjects = Project::where('is_featured', true)
            ->orderBy('sort_order', 'asc')
            ->get();

        $allProjects = Project::orderBy('sort_order', 'asc')->get();

        $techStacks = TechStack::orderBy('sort_order', 'asc')->get();
        $categories = TechStack::select('category')->distinct()->pluck('category');

        $certificates = Certificate::orderBy('sort_order', 'asc')->take(4)->get();

        $experience = [
            [
                'role' => 'Full Stack Intern',
                'icon' => 'depedcavite-icon.jpg',
                'company' => 'Department of Education - Cavite Division Office',
                'period' => 'August - September 2026',
                'location' => 'Cavite, Philippines',
                'type' => 'Internship',
                'description' => 'Built a full-stack Appointment System for the Human Resource Office using Laravel, streamlining staff scheduling and visitor management.',
                'badges' => ['Laravel', 'PHP', 'MySQL', 'Tailwind CSS', 'JavaScript'],
            ],
            [
                'role' => 'Student Developer & Academic Scholar',
                'icon' => 'cvsu-icon.jpg',
                'company' => 'Cavite State University - Naic Campus',
                'period' => '2023 — Present',
                'location' => 'Naic, Cavite',
                'type' => 'Academic',
                'description' => 'Consecutive President Lister. Leveraged web development expertise to deliver programming solutions and complete software projects.',
                'badges' => ['Computer Science', 'President Lister', 'Web Development', 'Algorithms'],
            ],
            [
                'role' => 'Senator for Public Information',
                'icon' => 'csg-icon.jpg',
                'company' => 'Central Student Government',
                'period' => '2024 - 2025',
                'location' => 'Cavite State University',
                'type' => 'Leadership',
                'description' => 'Created graphic designs, managed official page media, and published announcements across digital communication channels.',
                'badges' => ['Graphic Design', 'Figma', 'Public Information', 'Social Media'],
            ],
            [
                'role' => 'Freelance Full-Stack Developer',
                'icon' => 'cvsu-icon.jpg',
                'company' => 'Self-Employed (cmndrpaul)',
                'period' => '2026 - Present',
                'location' => 'Remote',
                'type' => 'Freelance',
                'description' => 'Delivered custom web applications, inventory portals, and responsive platforms for clients and organizations.',
                'badges' => ['Laravel', 'PHP', 'React', 'Tailwind CSS', 'MySQL', 'Supabase'],
            ],
            [
                'role' => 'Corps Commander / ROTC Cadet Officer',
                'icon' => 'rotc-icon.jpg',
                'company' => 'Department of Military Science and Tactics',
                'period' => '2024 - 2026',
                'location' => 'Cavite State University',
                'type' => 'Leadership',
                'description' => 'Led and managed battalion unit logistics, drill instruction, operational scheduling, and cadet readiness programs with high discipline.',
                'badges' => ['Leadership', 'Operations', 'Strategic Management'],
            ],
        ];

        $education = [
            [
                'degree' => 'Bachelor of Science in Computer Science',
                'icon' => 'cvsu-icon.jpg',
                'institution' => 'Cavite State University — Naic Campus',
                'period' => '2023 — 2027',
                'highlights' => null,
            ],
            [
                'degree' => 'Science, Technology, Engineering, Mathematics (STEM)',
                'icon' => 'hs-icon.jpg',
                'institution' => 'Naic Integrated National Highschool',
                'period' => '2021 — 2023',
                'highlights' => null,
            ],
        ];

        $partners = [
            ['name' => 'QCityBus', 'tag' => 'Public Transit AI'],
            ['name' => 'Zion Strategic Solutions', 'tag' => 'Enterprise Consulting'],
            ['name' => 'The Medical City', 'tag' => 'Healthcare Tech'],
            ['name' => 'Agri Tech Innovate', 'tag' => 'Smart Agriculture'],
            ['name' => 'UpaMate', 'tag' => 'PropTech Platform'],
            ['name' => 'Agapai', 'tag' => 'Disaster Response'],
            ['name' => 'Akwatek', 'tag' => 'IoT Aquaculture'],
            ['name' => 'Grupo PCX', 'tag' => 'Logistics Express'],
            ['name' => 'LootBX', 'tag' => 'Web3 Studio'],
            ['name' => 'RZ Ecommerce', 'tag' => 'Retail Group'],
        ];

        return view('pages.home', compact(
            'featuredProjects',
            'allProjects',
            'techStacks',
            'categories',
            'certificates',
            'experience',
            'education',
            'partners'
        ));
    }
}
