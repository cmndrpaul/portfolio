@extends('layouts.app')

@section('title', 'Projects Archive (34+) — Eirmon John Paculan (riecodes)')
@section('meta_description', 'Explore 34+ software engineering projects by Eirmon John Paculan (riecodes), spanning Full-Stack, AI & Computer Vision, IoT, and Mobile apps.')

@section('content')
<div class="max-w-6xl mx-auto px-4 sm:px-8 py-8 space-y-12" x-data="{
    searchQuery: '',
    activeCategory: '{{ $category ?? 'All' }}',
    items: {{ json_encode($projects) }},
    get filteredItems() {
        return this.items.filter(item => {
            const matchesCat = this.activeCategory === 'All' || item.category === this.activeCategory;
            const matchesQuery = !this.searchQuery.trim() || 
                item.title.toLowerCase().includes(this.searchQuery.toLowerCase()) || 
                item.description.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                (item.tags && item.tags.some(t => t.toLowerCase().includes(this.searchQuery.toLowerCase())));
            return matchesCat && matchesQuery;
        });
    }
}">

    <!-- Page Header -->
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-8 border-b border-white/10">
        <div>
            <a href="{{ route('home') }}" class="inline-flex items-center gap-1 text-xs font-semibold text-purple-400 hover:text-purple-300 mb-3 transition-colors">
                <i data-lucide="arrow-left" class="w-3.5 h-3.5"></i>
                <span>Back to Overview</span>
            </a>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight">Project Archive</h1>
            <p class="text-sm text-slate-400 mt-2">Comprehensive catalog of web platforms, embedded hardware, and AI innovations</p>
        </div>

        <!-- Live Search Input -->
        <div class="w-full md:w-80 relative">
            <i data-lucide="search" class="w-4 h-4 text-slate-400 absolute left-3.5 top-1/2 -translate-y-1/2"></i>
            <input 
                type="text" 
                x-model="searchQuery"
                placeholder="Search projects or tags..."
                class="w-full bg-white/5 border border-white/10 rounded-2xl pl-10 pr-4 py-2.5 text-xs text-white placeholder-slate-500 focus:outline-none focus:border-purple-500 transition-colors">
        </div>
    </div>

    <!-- Category Filter Pills -->
    <div class="flex flex-wrap gap-2">
        @foreach($categories as $cat)
        <button 
            @click="activeCategory = '{{ $cat }}'"
            :class="activeCategory === '{{ $cat }}' ? 'bg-purple-600 text-white shadow-lg shadow-purple-600/30' : 'bg-white/5 text-slate-300 hover:bg-white/10'"
            class="text-xs px-4 py-2 rounded-xl border border-white/10 font-medium transition-all">
            {{ $cat }}
        </button>
        @endforeach
    </div>

    <!-- Live Results Count -->
    <div class="flex items-center justify-between text-xs text-slate-400 font-mono">
        <div>Showing <span class="text-white font-bold" x-text="filteredItems.length"></span> projects</div>
        <div x-show="searchQuery" class="text-purple-400">Filtering by query: "<span x-text="searchQuery"></span>"</div>
    </div>

    <!-- Project Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <template x-for="p in filteredItems" :key="p.id">
            <div class="group relative rounded-2xl bg-slate-900/60 border border-white/10 hover:border-purple-500/50 transition-all duration-300 overflow-hidden flex flex-col hover:shadow-2xl hover:shadow-purple-950/40 transform hover:-translate-y-1">
                
                <!-- Card Header Visual -->
                <div class="relative h-48 w-full overflow-hidden bg-gradient-to-br from-purple-950/50 to-slate-900 flex items-center justify-center">
                    <div class="absolute inset-0 opacity-20 bg-[radial-gradient(#a855f7_1px,transparent_1px)] [background-size:16px_16px]"></div>
                    
                    <div class="absolute top-3 left-3 z-10">
                        <span class="px-2.5 py-1 rounded-full text-[11px] font-semibold bg-black/60 backdrop-blur-md text-purple-300 border border-purple-500/30" x-text="p.category"></span>
                    </div>

                    <template x-if="p.year">
                        <div class="absolute top-3 right-3 z-10">
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-mono bg-white/10 backdrop-blur-md text-slate-300" x-text="p.year"></span>
                        </div>
                    </template>

                    <div class="text-center p-6 transform group-hover:scale-105 transition-transform duration-300">
                        <div class="w-14 h-14 mx-auto rounded-2xl bg-purple-600/20 border border-purple-500/30 flex items-center justify-center text-purple-400 mb-2 shadow-lg shadow-purple-900/30">
                            <i data-lucide="code-2" class="w-7 h-7"></i>
                        </div>
                        <span class="text-xs font-mono text-purple-300/80" x-text="p.slug"></span>
                    </div>

                    <a :href="'/projects/' + p.slug" class="absolute inset-0 z-20 bg-purple-950/40 backdrop-blur-[2px] opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-2 text-white text-xs font-semibold">
                        <span>Explore Case Study</span>
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>

                <!-- Card Body -->
                <div class="p-5 flex-grow flex flex-col justify-between space-y-4">
                    <div>
                        <a :href="'/projects/' + p.slug" class="block">
                            <h3 class="text-base font-bold text-white group-hover:text-purple-400 transition-colors line-clamp-1" x-text="p.title"></h3>
                        </a>
                        <p class="text-xs text-slate-400 mt-2 line-clamp-2 leading-relaxed" x-text="p.description"></p>
                    </div>

                    <div class="space-y-3">
                        <div class="flex flex-wrap gap-1.5">
                            <template x-for="tag in (p.tags || []).slice(0, 4)" :key="tag">
                                <span class="text-[10px] font-mono px-2 py-0.5 rounded-md bg-white/5 border border-white/10 text-slate-300" x-text="tag"></span>
                            </template>
                        </div>

                        <div class="pt-2 border-t border-white/10 flex items-center justify-between text-xs">
                            <a :href="'/projects/' + p.slug" class="text-purple-400 hover:text-purple-300 font-medium inline-flex items-center gap-1">
                                <span>Details</span>
                                <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                            </a>

                            <div class="flex items-center gap-2">
                                <template x-if="p.github_url">
                                    <a :href="p.github_url" target="_blank" rel="noopener noreferrer" class="p-1.5 text-slate-400 hover:text-white rounded-lg hover:bg-white/10 transition-colors" title="GitHub">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                                    </a>
                                </template>
                                <template x-if="p.live_url">
                                    <a :href="p.live_url" target="_blank" rel="noopener noreferrer" class="p-1.5 text-slate-400 hover:text-white rounded-lg hover:bg-white/10 transition-colors" title="Live Preview">
                                        <i data-lucide="external-link" class="w-4 h-4"></i>
                                    </a>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </template>
    </div>

    <!-- Empty State -->
    <div x-show="filteredItems.length === 0" class="p-16 text-center rounded-3xl bg-white/5 border border-white/10 space-y-3">
        <i data-lucide="folder-search" class="w-10 h-10 text-slate-500 mx-auto"></i>
        <h4 class="text-base font-bold text-white">No matching projects found</h4>
        <p class="text-xs text-slate-400">Try adjusting your category filter or search keywords.</p>
        <button @click="activeCategory = 'All'; searchQuery = ''" class="mt-2 px-4 py-2 rounded-xl bg-purple-600 hover:bg-purple-500 text-white text-xs font-semibold">
            Reset Filters
        </button>
    </div>

</div>
@endsection
