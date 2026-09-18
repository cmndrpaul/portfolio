@extends('layouts.app')

@section('title', $project->title . ' — Project Case Study (riecodes)')
@section('meta_description', $project->description)

@section('content')
<div class="max-w-5xl mx-auto px-4 sm:px-8 py-8 space-y-16">

    <!-- Breadcrumb & Back Link -->
    <div>
        <a href="{{ route('projects.index') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-purple-400 hover:text-purple-300 transition-colors">
            <i data-lucide="arrow-left" class="w-4 h-4"></i>
            <span>Back to All Projects</span>
        </a>
    </div>

    <!-- Project Header Hero -->
    <div class="space-y-6">
        <div class="flex flex-wrap items-center gap-3">
            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-purple-600/20 text-purple-300 border border-purple-500/30">
                {{ $project->category }}
            </span>
            @if($project->year)
            <span class="px-3 py-1 rounded-full text-xs font-mono bg-white/5 text-slate-300 border border-white/10">
                {{ $project->year }}
            </span>
            @endif
        </div>

        <h1 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight leading-tight">
            {{ $project->title }}
        </h1>

        <p class="text-base sm:text-lg text-slate-300 leading-relaxed max-w-3xl">
            {{ $project->description }}
        </p>

        <!-- Project Action Buttons -->
        <div class="flex flex-wrap items-center gap-4 pt-2">
            @if($project->live_url)
            <a href="{{ $project->live_url }}" target="_blank" rel="noopener noreferrer" class="px-6 py-3 rounded-xl bg-purple-600 hover:bg-purple-500 text-white font-semibold text-xs shadow-lg shadow-purple-600/30 flex items-center gap-2 transition-all transform hover:-translate-y-0.5">
                <span>Launch Live Application</span>
                <i data-lucide="external-link" class="w-3.5 h-3.5"></i>
            </a>
            @endif

            @if($project->github_url)
            <a href="{{ $project->github_url }}" target="_blank" rel="noopener noreferrer" class="px-6 py-3 rounded-xl bg-white/5 hover:bg-white/10 border border-white/10 hover:border-purple-500/40 text-slate-200 font-semibold text-xs backdrop-blur-md flex items-center gap-2 transition-all">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                <span>Source Code Repository</span>
            </a>
            @endif
        </div>
    </div>

    <!-- Project Metadata Cards Grid -->
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 p-6 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-md">
        <div>
            <div class="text-[11px] font-mono text-slate-400">Category</div>
            <div class="text-sm font-bold text-white mt-1">{{ $project->category }}</div>
        </div>
        <div>
            <div class="text-[11px] font-mono text-slate-400">Role / Scope</div>
            <div class="text-sm font-bold text-white mt-1">{{ $project->role ?? 'Lead Developer' }}</div>
        </div>
        <div>
            <div class="text-[11px] font-mono text-slate-400">Client / Initiative</div>
            <div class="text-sm font-bold text-white mt-1">{{ $project->client ?? 'Internal / Open Source' }}</div>
        </div>
        <div>
            <div class="text-[11px] font-mono text-slate-400">Status</div>
            <div class="text-sm font-bold text-emerald-400 mt-1 flex items-center gap-1.5">
                <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                <span>Production Ready</span>
            </div>
        </div>
    </div>

    <!-- Main Showcase Visual Banner -->
    <div class="relative rounded-3xl bg-gradient-to-br from-purple-950/60 via-slate-900 to-indigo-950/60 border border-purple-500/30 p-12 sm:p-20 overflow-hidden text-center shadow-2xl flex flex-col items-center justify-center min-h-[300px]">
        <div class="absolute inset-0 opacity-20 bg-[radial-gradient(#a855f7_1px,transparent_1px)] [background-size:20px_20px]"></div>
        
        <div class="w-24 h-24 rounded-3xl bg-purple-600/30 border border-purple-500/40 flex items-center justify-center text-purple-300 mb-6 shadow-xl shadow-purple-950/50">
            <i data-lucide="layers" class="w-12 h-12"></i>
        </div>
        
        <h3 class="text-xl sm:text-2xl font-bold text-white mb-2">{{ $project->title }}</h3>
        <p class="text-xs font-mono text-purple-300">Case Study &amp; Technical Architecture Overview</p>
    </div>

    <!-- Deep Dive Technical Description -->
    <div class="space-y-8 text-sm sm:text-base text-slate-300 leading-relaxed">
        <h2 class="text-2xl font-bold text-white">System Architecture &amp; Implementation</h2>
        <div class="p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-md space-y-4">
            <p>
                {{ $project->long_description ?? $project->description }}
            </p>
            <p>
                Engineered with high performance, test-driven methodologies, and optimal resource consumption. Features end-to-end integration across edge clients and backend infrastructure with minimal latency.
            </p>
        </div>
    </div>

    <!-- Tech Stack Employed -->
    <div class="space-y-4">
        <h2 class="text-2xl font-bold text-white">Technologies &amp; Libraries Used</h2>
        <div class="flex flex-wrap gap-2.5">
            @if(is_array($project->tags))
                @foreach($project->tags as $tag)
                <div class="flex items-center gap-2 px-4 py-2.5 rounded-2xl bg-white/5 border border-white/10 text-xs font-mono text-slate-200">
                    <span class="w-2 h-2 rounded-full bg-purple-400"></span>
                    <span>{{ $tag }}</span>
                </div>
                @endforeach
            @endif
        </div>
    </div>

    <!-- Related Projects Carousel / Grid -->
    @if(isset($relatedProjects) && $relatedProjects->count() > 0)
    <div class="space-y-6 pt-12 border-t border-white/10">
        <div class="flex items-center justify-between">
            <h2 class="text-2xl font-bold text-white">Related Projects</h2>
            <a href="{{ route('projects.index') }}" class="text-xs text-purple-400 hover:text-purple-300 font-semibold">View all</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($relatedProjects as $rel)
                @include('components.project-card', ['project' => $rel])
            @endforeach
        </div>
    </div>
    @endif

</div>
@endsection
