@props(['project'])

<div class="group relative rounded-2xl bg-slate-900/60 border border-white/10 hover:border-purple-500/50 transition-all duration-300 overflow-hidden flex flex-col hover:shadow-2xl hover:shadow-purple-950/40 transform hover:-translate-y-1">
    
    <!-- Thumbnail Image / Gradient Placeholder -->
    <div class="relative h-48 sm:h-52 w-full overflow-hidden bg-gradient-to-br from-purple-950/50 to-slate-900 flex items-center justify-center">
        <!-- Abstract Tech Visual Pattern -->
        <div class="absolute inset-0 opacity-20 bg-[radial-gradient(#a855f7_1px,transparent_1px)] [background-size:16px_16px]"></div>
        
        <!-- Category Badge -->
        <div class="absolute top-3 left-3 z-10">
            <span class="px-2.5 py-1 rounded-full text-[11px] font-semibold bg-black/60 backdrop-blur-md text-purple-300 border border-purple-500/30">
                {{ $project->category }}
            </span>
        </div>

        @if($project->year)
        <div class="absolute top-3 right-3 z-10">
            <span class="px-2 py-0.5 rounded-full text-[10px] font-mono bg-white/10 backdrop-blur-md text-slate-300">
                {{ $project->year }}
            </span>
        </div>
        @endif

        <!-- Card Center Icon & Title Accent -->
        <div class="text-center p-6 transform group-hover:scale-105 transition-transform duration-300">
            <div class="w-14 h-14 mx-auto rounded-2xl bg-purple-600/20 border border-purple-500/30 flex items-center justify-center text-purple-400 mb-2 shadow-lg shadow-purple-900/30">
                <i data-lucide="code-2" class="w-7 h-7"></i>
            </div>
            <span class="text-xs font-mono text-purple-300/80">{{ $project->slug }}</span>
        </div>

        <!-- Hover Overlay with View Details Link -->
        <a href="{{ route('projects.show', $project->slug) }}" class="absolute inset-0 z-20 bg-purple-950/40 backdrop-blur-[2px] opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-2 text-white text-xs font-semibold">
            <span>Explore Case Study</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
    </div>

    <!-- Content Area -->
    <div class="p-5 flex-grow flex flex-col justify-between space-y-4">
        <div>
            <a href="{{ route('projects.show', $project->slug) }}" class="block">
                <h3 class="text-base font-bold text-white group-hover:text-purple-400 transition-colors line-clamp-1">
                    {{ $project->title }}
                </h3>
            </a>
            <p class="text-xs text-slate-400 mt-2 line-clamp-2 leading-relaxed">
                {{ $project->description }}
            </p>
        </div>

        <!-- Tech Tags -->
        <div class="space-y-3">
            <div class="flex flex-wrap gap-1.5">
                @if(is_array($project->tags))
                    @foreach(array_slice($project->tags, 0, 4) as $tag)
                        <span class="text-[10px] font-mono px-2 py-0.5 rounded-md bg-white/5 border border-white/10 text-slate-300">
                            {{ $tag }}
                        </span>
                    @endforeach
                    @if(count($project->tags) > 4)
                        <span class="text-[10px] font-mono px-1.5 py-0.5 rounded-md bg-white/5 text-purple-400">
                            +{{ count($project->tags) - 4 }}
                        </span>
                    @endif
                @endif
            </div>

            <!-- Action Links -->
            <div class="pt-2 border-t border-white/10 flex items-center justify-between text-xs">
                <a href="{{ route('projects.show', $project->slug) }}" class="text-purple-400 hover:text-purple-300 font-medium inline-flex items-center gap-1">
                    <span>Details</span>
                    <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                </a>

                <div class="flex items-center gap-2">
                    @if($project->github_url)
                    <a href="{{ $project->github_url }}" target="_blank" rel="noopener noreferrer" class="p-1.5 text-slate-400 hover:text-white rounded-lg hover:bg-white/10 transition-colors" title="GitHub Repository">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                    </a>
                    @endif
                    @if($project->live_url)
                    <a href="{{ $project->live_url }}" target="_blank" rel="noopener noreferrer" class="p-1.5 text-slate-400 hover:text-white rounded-lg hover:bg-white/10 transition-colors" title="Live Preview">
                        <i data-lucide="external-link" class="w-4 h-4"></i>
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
