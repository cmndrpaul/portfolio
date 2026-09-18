<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category');

        $query = Project::query()->orderBy('sort_order', 'asc');

        if ($category && $category !== 'All') {
            $query->where('category', $category);
        }

        $projects = $query->get();
        $categories = ['All', 'Full-Stack', 'AI & Computer Vision', 'Hardware & IoT', 'Mobile', 'Frontend', 'Backend'];

        return view('pages.projects.index', compact('projects', 'categories', 'category'));
    }

    public function show(Project $project)
    {
        $relatedProjects = Project::where('id', '!=', $project->id)
            ->where('category', $project->category)
            ->take(3)
            ->get();

        if ($relatedProjects->count() < 3) {
            $moreProjects = Project::where('id', '!=', $project->id)
                ->whereNotIn('id', $relatedProjects->pluck('id'))
                ->take(3 - $relatedProjects->count())
                ->get();
            $relatedProjects = $relatedProjects->concat($moreProjects);
        }

        return view('pages.projects.show', compact('project', 'relatedProjects'));
    }
}
