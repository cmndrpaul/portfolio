<!-- Fixed scroll progress indicator -->
<div
    class="fixed top-0 left-0 z-50 h-[3px] w-full pointer-events-none"
    aria-hidden="true">
    <div
        class="h-full rounded-r-full bg-[var(--accent)] shadow-[0_0_10px_var(--accent-glow)] transition-[width] duration-75"
        :style="'width: ' + scrollProgress + '%'">
    </div>
</div>

<header 
    :class="scrolled ? 'bg-black/60 backdrop-blur-md border-b border-white/10 shadow-lg shadow-black/20' : 'bg-transparent border-b border-transparent'"
    class="fixed top-0 left-0 right-0 z-40 transition-all duration-300 py-4 px-4 sm:px-8">
    <div class="max-w-6xl mx-auto flex items-center justify-between">
        
        <!-- Brand Logo -->
        <div class="flex items-center gap-2 sm:gap-2.5">
            <!-- Logo Link -->
            <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-purple-600 to-indigo-500 flex items-center justify-center text-white font-bold text-lg shadow-lg shadow-purple-500/30 group-hover:scale-105 transition-transform">
                    c
                </div>
                <span class="font-bold text-lg tracking-tight text-white group-hover:text-purple-400 transition-colors">
                    cmndr<span class="text-purple-400">paul</span>
                </span>
            </a>
        </div>

        <!-- Desktop Navigation Links -->
        <nav class="hidden md:flex items-center gap-1 bg-white/5 border border-white/10 backdrop-blur-lg px-4 py-1.5 rounded-full">
            <a href="{{ route('home') }}#about" class="text-sm font-medium px-3 py-1.5 rounded-full text-slate-300 hover:text-white hover:bg-white/10 transition-colors">About</a>
            <a href="{{ route('home') }}#experience" class="text-sm font-medium px-3 py-1.5 rounded-full text-slate-300 hover:text-white hover:bg-white/10 transition-colors">Experience</a>
            <a href="{{ route('home') }}#stack" class="text-sm font-medium px-3 py-1.5 rounded-full text-slate-300 hover:text-white hover:bg-white/10 transition-colors">Stack</a>
            <a href="{{ route('projects.index') }}" class="text-sm font-medium px-3 py-1.5 rounded-full text-slate-300 hover:text-white hover:bg-white/10 transition-colors">Projects</a>
            <a href="{{ route('certificates.index') }}" class="text-sm font-medium px-3 py-1.5 rounded-full text-slate-300 hover:text-white hover:bg-white/10 transition-colors">Certificates</a>
            <a href="{{ route('home') }}#contact" class="text-sm font-medium px-3 py-1.5 rounded-full text-slate-300 hover:text-white hover:bg-white/10 transition-colors">Contact</a>
        </nav>

        <!-- Right Action Items -->
        <div class="flex items-center gap-2 sm:gap-3">
            <!-- Theme Toggle Button -->
            <button 
                @click="toggleTheme()"
                type="button"
                title="Toggle Theme (Purple / Dark / Light)"
                class="w-9 h-9 flex items-center justify-center rounded-xl bg-white/5 hover:bg-white/10 border border-white/10 hover:border-purple-500/40 text-purple-400 transition-all">
                <i data-lucide="sparkles" class="w-4 h-4"></i>
            </button>

            <!-- Request CV Action -->
            <button 
                @click="cvModalOpen = true"
                class="hidden sm:inline-flex items-center gap-1.5 bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-500 hover:to-indigo-500 text-white font-medium text-xs px-4 py-2 rounded-xl shadow-lg shadow-purple-600/25 transition-all transform hover:-translate-y-0.5">
                <i data-lucide="file-text" class="w-3.5 h-3.5"></i>
                <span>CV</span>
            </button>
        </div>
    </div>
</header>
