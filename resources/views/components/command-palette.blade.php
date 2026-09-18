<div 
    x-show="commandPaletteOpen" 
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    style="display: none;"
    class="fixed inset-0 z-50 bg-black/70 backdrop-blur-md flex items-start justify-center pt-24 px-4"
    @keydown.escape.window="commandPaletteOpen = false">

    <div 
        @click.outside="commandPaletteOpen = false"
        x-data="{
            query: '',
            items: [
                { title: 'Home / Hero', subtitle: 'Introduction & Tagline', url: '{{ route('home') }}', icon: 'home', category: 'Navigation' },
                { title: 'About Eirmon John', subtitle: 'Bio, Background & Passion', url: '{{ route('home') }}#about', icon: 'user', category: 'Navigation' },
                { title: 'Work Experience & Timeline', subtitle: 'Career milestones & roles', url: '{{ route('home') }}#experience', icon: 'briefcase', category: 'Navigation' },
                { title: 'Tech Stack & Skills', subtitle: 'Frontend, Backend, AI, IoT & Tools', url: '{{ route('home') }}#stack', icon: 'cpu', category: 'Navigation' },
                { title: 'All Projects (34+)', subtitle: 'Filterable portfolio gallery', url: '{{ route('projects.index') }}', icon: 'layers', category: 'Navigation' },
                { title: 'SplashSafe: AI Drowning Detection', subtitle: 'YOLOv11 & Computer Vision', url: '{{ route('projects.show', 'splashsafe') }}', icon: 'shield-alert', category: 'Projects' },
                { title: 'AKWATek Smart Aquaculture', subtitle: 'IoT & Telemetry Automation', url: '{{ route('projects.show', 'akwatek') }}', icon: 'activity', category: 'Projects' },
                { title: 'AGAPAI Disaster Response', subtitle: 'Emergency mapping & relief', url: '{{ route('projects.show', 'agapai') }}', icon: 'heart-pulse', category: 'Projects' },
                { title: 'Quezon CityBus AI Counter', subtitle: 'Passenger analytics edge AI', url: '{{ route('projects.show', 'quezon-citybus-counting-system') }}', icon: 'bus', category: 'Projects' },
                { title: 'PTC CareerLink', subtitle: 'Maritime & technical job portal', url: '{{ route('projects.show', 'ptc-career-link') }}', icon: 'external-link', category: 'Projects' },
                { title: 'BabyTalk Infant Cry AI', subtitle: 'CNN acoustic audio classifier', url: '{{ route('projects.show', 'babytalk') }}', icon: 'mic', category: 'Projects' },
                { title: 'Certificates & Honors', subtitle: 'Specializations and credentials', url: '{{ route('certificates.index') }}', icon: 'award', category: 'Navigation' },
                { title: 'Contact / Socials', subtitle: 'Email, GitHub, LinkedIn, FB', url: '{{ route('home') }}#contact', icon: 'send', category: 'Navigation' }
            ],
            get filtered() {
                if (!this.query.trim()) return this.items;
                return this.items.filter(i => 
                    i.title.toLowerCase().includes(this.query.toLowerCase()) || 
                    i.subtitle.toLowerCase().includes(this.query.toLowerCase()) ||
                    i.category.toLowerCase().includes(this.query.toLowerCase())
                );
            }
        }"
        class="w-full max-w-xl bg-slate-900 border border-purple-500/30 rounded-2xl shadow-2xl shadow-purple-950/60 overflow-hidden">
        
        <!-- Search Input Header -->
        <div class="p-4 border-b border-white/10 flex items-center gap-3">
            <i data-lucide="search" class="w-5 h-5 text-purple-400"></i>
            <input 
                x-ref="searchInput"
                x-model="query"
                type="text" 
                placeholder="Search sections, projects, tech stacks, or navigation..."
                class="w-full bg-transparent text-sm text-white placeholder-slate-500 focus:outline-none">
            <kbd class="text-[10px] bg-white/10 px-2 py-1 rounded text-slate-400 border border-white/10 font-mono">ESC</kbd>
        </div>

        <!-- Search Results List -->
        <div class="max-h-[350px] overflow-y-auto p-2 space-y-1">
            <template x-for="item in filtered" :key="item.title">
                <a 
                    :href="item.url" 
                    @click="commandPaletteOpen = false"
                    class="flex items-center justify-between p-3 rounded-xl hover:bg-purple-600/20 hover:border-purple-500/30 border border-transparent group transition-all">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-purple-400 group-hover:text-purple-300">
                            <i :data-lucide="item.icon" class="w-4 h-4"></i>
                        </div>
                        <div>
                            <div class="text-xs font-semibold text-white group-hover:text-purple-300" x-text="item.title"></div>
                            <div class="text-[11px] text-slate-400" x-text="item.subtitle"></div>
                        </div>
                    </div>
                    <span class="text-[10px] px-2 py-0.5 rounded-full bg-white/5 text-slate-400 font-mono" x-text="item.category"></span>
                </a>
            </template>
            <template x-if="filtered.length === 0">
                <div class="p-8 text-center text-slate-400 text-xs">
                    No results found for "<span class="text-white" x-text="query"></span>".
                </div>
            </template>
        </div>

        <!-- Footer Bar -->
        <div class="p-3 bg-black/40 border-t border-white/10 flex items-center justify-between text-[11px] text-slate-400">
            <span>Navigate with instant search</span>
            <span class="font-mono">riecodes v2.0</span>
        </div>
    </div>
</div>
