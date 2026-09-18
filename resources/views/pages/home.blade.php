@extends('layouts.app')

@section('title', 'John Paul Gonzaga — Full-Stack Developer (cmndrpaul)')

@section('content')
<div class="max-w-6xl mx-auto px-4 sm:px-8 space-y-32">

    <!-- HERO SECTION -->
    <section class="min-h-[80vh] flex flex-col justify-center items-center text-center relative overflow-hidden py-12">
        <div class="halftone pointer-events-none absolute inset-x-0 top-0 h-64 opacity-25" aria-hidden="true"></div>
        
        <!-- Handwritten greeting -->
        <div class="inline-flex items-center gap-2 mb-4">
            <span class="font-script text-2xl sm:text-3xl text-purple-400 rotate-[-4deg]">Hello world, I am</span>
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            <span class="text-xs font-mono text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded-full border border-emerald-500/20">Available for Opportunities</span>
        </div>

        <!-- Main Title / Name -->
        <h1 class="text-4xl sm:text-6xl md:text-7xl font-extrabold tracking-tight text-white mb-6">
            John Paul <span class="bg-gradient-to-r from-purple-400 via-pink-400 to-indigo-400 bg-clip-text text-transparent">Gonzaga</span>
        </h1>

        <!-- Alias / Handle Badge -->
        <div class="inline-flex items-center gap-2 bg-white/5 border border-purple-500/30 px-4 py-1.5 rounded-full text-xs font-mono text-purple-300 mb-8 backdrop-blur-md">
            <span>&lt;cmndrpaul /&gt;</span>
            <span class="text-slate-500">•</span>
            <span>Full-Stack Developer</span>
        </div>

        <!-- Hero Subtitle Tagline -->
        <p class="max-w-2xl text-base sm:text-lg text-slate-300 leading-relaxed mb-10 font-normal">
            Building modern full-stack web platforms, robust backend APIs, and responsive user experiences with precision and performance.
        </p>

        <!-- CTA Action Buttons -->
        <div class="flex flex-wrap items-center justify-center gap-4">
            <a href="#projects" class="px-6 py-3.5 rounded-2xl bg-purple-600 hover:bg-purple-500 text-white font-semibold text-sm shadow-xl shadow-purple-600/30 hover:shadow-purple-600/50 transform hover:-translate-y-0.5 transition-all flex items-center gap-2">
                <span>Explore Projects</span>
                <i data-lucide="arrow-down-right" class="w-4 h-4"></i>
            </a>

            <button @click="cvModalOpen = true" class="px-6 py-3.5 rounded-2xl bg-white/5 hover:bg-white/10 border border-white/10 hover:border-purple-500/40 text-slate-200 font-semibold text-sm backdrop-blur-md transition-all flex items-center gap-2">
                <i data-lucide="file-text" class="w-4 h-4 text-purple-400"></i>
                <span>Request Resume</span>
            </button>

            <a href="https://github.com/cmndrpaul" target="_blank" rel="noopener noreferrer" class="p-3.5 rounded-2xl bg-white/5 hover:bg-white/10 border border-white/10 text-slate-300 hover:text-white transition-colors" title="GitHub">
                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
            </a>
        </div>

        <!-- Metric Cards (12+ Delivered, 3+ Years Experience, 100% Commitment to Coding) -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 sm:gap-6 mt-16 w-full max-w-3xl pt-8 border-t border-white/10">
            <div class="p-5 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm text-center">
                <div class="text-2xl sm:text-3xl font-bold text-white mb-1">12+</div>
                <div class="text-xs text-slate-400 font-mono">Projects Delivered</div>
            </div>
            <div class="p-5 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm text-center">
                <div class="text-2xl sm:text-3xl font-bold text-purple-400 mb-1">3+</div>
                <div class="text-xs text-slate-400 font-mono">Years Experience</div>
            </div>
            <div class="p-5 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm text-center">
                <div class="text-2xl sm:text-3xl font-bold text-emerald-400 mb-1">100%</div>
                <div class="text-xs text-slate-400 font-mono">Commitment to Coding</div>
            </div>
        </div>
    </section>

    <!-- TRUSTED BY / PARTNERS MARQUEE -->
    <section class="relative left-1/2 w-screen -translate-x-1/2 overflow-hidden py-8">
        <div class="text-center mb-6">
            <span class="text-xs font-mono tracking-widest text-slate-400 uppercase">Trusted by forward-thinking teams &amp; ventures</span>
        </div>
        
        <!-- Gradient Fades on Left & Right -->
        <div class="absolute left-0 top-0 bottom-0 w-24 bg-gradient-to-r from-[var(--bg-main)] to-transparent z-10 pointer-events-none"></div>
        <div class="absolute right-0 top-0 bottom-0 w-24 bg-gradient-to-l from-[var(--bg-main)] to-transparent z-10 pointer-events-none"></div>

        <div class="flex overflow-hidden">
            <div class="animate-marquee flex items-center gap-8 py-2">
                @foreach(array_merge($partners, $partners) as $p)
                <div class="flex items-center gap-3 px-6 py-3 rounded-xl bg-white/5 border border-white/10 whitespace-nowrap">
                    <div class="w-2 h-2 rounded-full bg-purple-400"></div>
                    <span class="text-sm font-semibold text-white">{{ $p['name'] }}</span>
                    <span class="text-[10px] text-purple-300 font-mono bg-purple-950/60 px-2 py-0.5 rounded border border-purple-800/40">{{ $p['tag'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="scroll-mt-24">
        <div class="flex items-center gap-3 mb-10">
            <span class="w-8 h-[2px] bg-purple-500"></span>
            <span class="text-xs font-mono uppercase tracking-widest text-purple-400">01. About Me</span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left: Avatar / Visual Box -->
            <div class="lg:col-span-5 flex justify-center">
                <div class="relative group">
                    <div class="absolute -inset-2 bg-gradient-to-r from-purple-600 to-indigo-600 rounded-3xl blur-xl opacity-50 group-hover:opacity-80 transition duration-500"></div>
                    
                    <div class="relative w-64 h-64 sm:w-80 sm:h-80 rounded-3xl bg-slate-900 border border-white/20 overflow-hidden flex flex-col items-center justify-center p-6 text-center shadow-2xl">
                        <img
                            src="{{ asset('portfolio-profile.jpg') }}"
                            alt="John Paul Gonzaga"
                            class="w-28 h-28 rounded-2xl object-cover object-top mb-4 border border-purple-300/30 shadow-xl shadow-purple-600/40"
                            loading="lazy">
                        <h3 class="text-lg font-bold text-white">John Paul Gonzaga</h3>
                        <p class="text-xs text-purple-300 font-mono mt-1">@cmndrpaul • Cavite, PH</p>
                        <div class="mt-4 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                            <span class="text-[11px] text-slate-300">Open for opportunities</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Bio Content -->
            <div class="lg:col-span-7 space-y-6 text-sm sm:text-base text-slate-300 leading-relaxed">
                <h2 class="text-2xl sm:text-3xl font-bold text-white tracking-tight">
                    Architecting high-impact software from pixel to server.
                </h2>
                
                <p>
                    I'm <strong class="text-white font-semibold">John Paul Gonzaga</strong>, known online as <span class="text-purple-400 font-mono">cmndrpaul</span>. I am a Full-Stack Developer with a passion for building reliable, scalable, and intuitive web applications.
                </p>

                <p>
                    My core expertise spans modern web development including <span class="text-purple-300">Laravel</span>, <span class="text-purple-300">PHP</span>, <span class="text-purple-300">React</span>, <span class="text-purple-300">JavaScript</span>, <span class="text-cyan-300">Tailwind CSS</span>, <span class="text-cyan-300">Node.js</span>, <span class="text-pink-300">Express.js</span>, and relational databases like <span class="text-pink-300">MySQL</span>.
                </p>

                <p>
                    I focus on clean code, solid architectures, and seamless user experiences across every project I develop.
                </p>

                <div class="grid grid-cols-2 gap-4 pt-4 border-t border-white/10 text-xs sm:text-sm">
                    <div class="flex items-center gap-2.5">
                        <i data-lucide="check" class="w-4 h-4 text-purple-400"></i>
                        <span class="text-slate-200">Full-Stack Web Development</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <i data-lucide="check" class="w-4 h-4 text-purple-400"></i>
                        <span class="text-slate-200">REST APIs &amp; Backend Systems</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <i data-lucide="check" class="w-4 h-4 text-purple-400"></i>
                        <span class="text-slate-200">Database Design &amp; Optimization</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <i data-lucide="check" class="w-4 h-4 text-purple-400"></i>
                        <span class="text-slate-200">Responsive UI &amp; Modern Styling</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- EXPERIENCE & EDUCATION SECTION -->
    <section id="experience" class="scroll-mt-24">
        <div class="flex items-center gap-3 mb-10">
            <span class="w-8 h-[2px] bg-purple-500"></span>
            <span class="text-xs font-mono uppercase tracking-widest text-purple-400">02. Career Timeline</span>
        </div>

        <div class="space-y-12">
            <div>
                <h2 class="text-2xl font-bold text-white mb-6">Work Experience &amp; Roles</h2>
                <div class="space-y-6 relative before:absolute before:left-3.5 before:top-3 before:bottom-3 before:w-[2px] before:bg-white/10">
                    @foreach($experience as $exp)
                    <div class="relative pl-10 group">
                        <!-- Node indicator -->
                        <div class="absolute left-1.5 top-1.5 w-4 h-4 rounded-full bg-slate-900 border-2 border-purple-500 group-hover:scale-125 group-hover:bg-purple-500 transition-all"></div>
                        
                        <div class="p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-purple-500/40 backdrop-blur-md transition-all space-y-3">
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1">
                                <div class="flex items-center gap-3">
                                    <img
                                        src="{{ asset($exp['icon']) }}"
                                        alt="{{ $exp['company'] }} logo"
                                        class="w-10 h-10 rounded-xl object-cover border border-white/15 bg-white shadow-sm"
                                        loading="lazy">
                                    <h3 class="text-base font-bold text-white group-hover:text-purple-400 transition-colors">
                                        {{ $exp['role'] }}
                                    </h3>
                                </div>
                                <span class="text-xs font-mono text-purple-300 bg-purple-950/60 px-2.5 py-1 rounded-full border border-purple-800/40 w-fit">
                                    {{ $exp['period'] }}
                                </span>
                            </div>

                            <div class="flex items-center gap-3 text-xs text-slate-400">
                                <span class="font-medium text-slate-200">{{ $exp['company'] }}</span>
                                <span>•</span>
                                <span>{{ $exp['location'] }}</span>
                            </div>

                            <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                                {{ $exp['description'] }}
                            </p>

                            <div class="flex flex-wrap gap-1.5 pt-2">
                                @foreach($exp['badges'] as $badge)
                                <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-white/5 text-slate-300 border border-white/10">
                                    {{ $badge }}
                                </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Education -->
            <div class="pt-8 border-t border-white/10">
                <h2 class="text-2xl font-bold text-white mb-6">Education &amp; Background</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach($education as $edu)
                    <div class="p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-purple-500/40 backdrop-blur-md transition-all space-y-2">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-mono text-purple-300">{{ $edu['period'] }}</span>
                            <i data-lucide="graduation-cap" class="w-4 h-4 text-purple-400"></i>
                        </div>
                        <div class="flex items-center gap-3">
                            @if(!empty($edu['icon']))
                            <img
                                src="{{ asset($edu['icon']) }}"
                                alt="{{ $edu['institution'] }} logo"
                                class="w-10 h-10 rounded-xl object-cover border border-white/15 bg-white shadow-sm"
                                loading="lazy">
                            @endif
                            <h4 class="text-base font-bold text-white">{{ $edu['degree'] }}</h4>
                        </div>
                        <div class="text-xs text-slate-400 font-medium">{{ $edu['institution'] }}</div>
                        @if(!empty($edu['highlights']))
                        <p class="text-xs text-slate-300 pt-2 leading-relaxed">{{ $edu['highlights'] }}</p>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- TECH STACK SECTION -->
    <section id="stack" class="scroll-mt-24" x-data="{ activeCategory: 'All' }">
        <div class="flex items-center gap-3 mb-6">
            <span class="w-8 h-[2px] bg-purple-500"></span>
            <span class="text-xs font-mono uppercase tracking-widest text-purple-400">03. Tech Arsenal</span>
        </div>

        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
            <div>
                <h2 class="text-2xl sm:text-3xl font-bold text-white">Skills &amp; Technologies</h2>
                <p class="text-xs sm:text-sm text-slate-400 mt-1">Tools and frameworks I use to build scalable products</p>
            </div>

            <!-- Category Filter Badges -->
            <div class="flex flex-wrap gap-1.5">
                <button 
                    @click="activeCategory = 'All'" 
                    :class="activeCategory === 'All' ? 'bg-purple-600 text-white shadow-lg shadow-purple-600/30' : 'bg-white/5 text-slate-300 hover:bg-white/10'"
                    class="text-xs px-3 py-1.5 rounded-full border border-white/10 transition-all font-medium">
                    All ({{ $techStacks->count() }})
                </button>
                @foreach($categories as $cat)
                <button 
                    @click="activeCategory = '{{ $cat }}'" 
                    :class="activeCategory === '{{ $cat }}' ? 'bg-purple-600 text-white shadow-lg shadow-purple-600/30' : 'bg-white/5 text-slate-300 hover:bg-white/10'"
                    class="text-xs px-3 py-1.5 rounded-full border border-white/10 transition-all font-medium">
                    {{ $cat }}
                </button>
                @endforeach
            </div>
        </div>

        <!-- Tech Cards Grid -->
        @php
            $techIcons = [
                'React' => 'devicon-react-original colored',
                'Javascript' => 'devicon-javascript-plain colored',
                'Tailwind CSS' => 'devicon-tailwindcss-plain colored',
                'HTML5/CSS3' => 'devicon-html5-plain colored',
                'Laravel' => 'devicon-laravel-original colored',
                'PHP' => 'devicon-php-plain colored',
                'Node.js' => 'devicon-nodejs-plain colored',
                'Express.js' => 'devicon-express-original',
                'Java' => 'devicon-java-plain colored',
                'MySQL' => 'devicon-mysql-plain colored',
                'Supabase' => 'devicon-supabase-plain colored',
                'Firebase' => 'devicon-firebase-plain colored',
                'Vercel' => 'devicon-vercel-original',
                'Git & Github' => 'devicon-github-original',
                'Figma' => 'devicon-figma-plain colored',
            ];
        @endphp
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3.5">
            @foreach($techStacks as $tech)
            <div 
                x-show="activeCategory === 'All' || activeCategory === '{{ $tech->category }}'"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                class="p-4 rounded-2xl bg-white/5 border border-white/10 hover:border-purple-500/40 backdrop-blur-md group hover:shadow-xl hover:shadow-purple-950/40 transition-all flex flex-col items-center justify-center text-center gap-2">
                
                <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center group-hover:scale-110 transition-transform">
                    <i class="{{ $techIcons[$tech->name] ?? 'devicon-devicon-plain' }} text-2xl" aria-hidden="true"></i>
                </div>

                <div class="font-bold text-xs text-white group-hover:text-purple-300 transition-colors">
                    {{ $tech->name }}
                </div>
                
                <span class="text-[9px] font-mono text-slate-400 bg-white/5 px-2 py-0.5 rounded-full">
                    {{ $tech->category }}
                </span>
            </div>
            @endforeach
        </div>
    </section>

    <!-- FEATURED PROJECTS SECTION -->
    <section id="projects" class="scroll-mt-24">
        <div class="flex items-center gap-3 mb-6">
            <span class="w-8 h-[2px] bg-purple-500"></span>
            <span class="text-xs font-mono uppercase tracking-widest text-purple-400">04. Portfolio Work</span>
        </div>

        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-10">
            <div>
                <h2 class="text-2xl sm:text-3xl font-bold text-white">Featured Projects</h2>
                <p class="text-xs sm:text-sm text-slate-400 mt-1">Highlighted web applications, platforms, and API systems</p>
            </div>

            <a href="{{ route('projects.index') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-purple-400 hover:text-purple-300 transition-colors">
                <span>Browse all projects</span>
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
        </div>

        <!-- 3-Column Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($featuredProjects as $project)
                @include('components.project-card', ['project' => $project])
            @endforeach
        </div>

        <div class="mt-12 text-center">
            <a href="{{ route('projects.index') }}" class="px-8 py-3.5 rounded-2xl bg-white/5 hover:bg-white/10 border border-white/10 hover:border-purple-500/40 text-white font-semibold text-xs backdrop-blur-md transition-all inline-flex items-center gap-2">
                <span>View Full Project Archive</span>
                <i data-lucide="layers" class="w-4 h-4 text-purple-400"></i>
            </a>
        </div>
    </section>

    <!-- CERTIFICATES PREVIEW SECTION -->
    <section class="scroll-mt-24">
        <div class="flex items-center gap-3 mb-6">
            <span class="w-8 h-[2px] bg-purple-500"></span>
            <span class="text-xs font-mono uppercase tracking-widest text-purple-400">05. Credentials</span>
        </div>

        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
            <div>
                <h2 class="text-2xl sm:text-3xl font-bold text-white">Certificates &amp; Honors</h2>
                <p class="text-xs sm:text-sm text-slate-400 mt-1">Accredited certifications and technical specializations</p>
            </div>

            <a href="{{ route('certificates.index') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-purple-400 hover:text-purple-300 transition-colors">
                <span>View all credentials</span>
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($certificates as $cert)
            <div class="p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-purple-500/40 backdrop-blur-md transition-all flex flex-col justify-between space-y-4">
                <div>
                    <div class="flex items-center justify-between text-xs text-purple-300 font-mono mb-2">
                        <span>{{ $cert->issued_date }}</span>
                        <span class="bg-purple-950/60 px-2 py-0.5 rounded border border-purple-800/40">{{ $cert->credential_id }}</span>
                    </div>
                    <h3 class="text-base font-bold text-white">{{ $cert->title }}</h3>
                    <p class="text-xs text-slate-400 mt-1">{{ $cert->issuer }}</p>
                    <p class="text-xs text-slate-300 mt-3 leading-relaxed">{{ $cert->description }}</p>
                </div>

                @if($cert->credential_url)
                <div class="pt-3 border-t border-white/10">
                    <a href="{{ $cert->credential_url }}" target="_blank" rel="noopener noreferrer" class="text-xs text-purple-400 hover:text-purple-300 inline-flex items-center gap-1.5 font-medium">
                        <span>Verify Credential</span>
                        <i data-lucide="external-link" class="w-3.5 h-3.5"></i>
                    </a>
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="scroll-mt-24 pt-8 border-t border-white/10" x-data="{ copied: false }">
        <div class="flex items-center gap-3 mb-6">
            <span class="w-8 h-[2px] bg-purple-500"></span>
            <span class="text-xs font-mono uppercase tracking-widest text-purple-400">06. Get in Touch</span>
        </div>

        <div class="space-y-8">
            <div>
                <h2 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight">
                    Let's collaborate on something extraordinary.
                </h2>
                <p class="text-slate-300 text-sm sm:text-base mt-3 max-w-2xl leading-relaxed">
                    Have an exciting project, full-time role, or contract opportunity? My inbox is always open. Let's discuss how we can build something impactful together.
                </p>
            </div>

            <!-- Email Action Card -->
            <div class="p-6 sm:p-8 rounded-3xl bg-gradient-to-br from-purple-950/40 via-slate-900 to-indigo-950/40 border border-purple-500/30 flex flex-col sm:flex-row items-center justify-between gap-6 shadow-2xl">
                <div>
                    <div class="text-xs font-mono text-purple-300 mb-1">Direct Email Address</div>
                    <div class="text-lg sm:text-2xl font-bold text-white font-mono">cmndr.johnpaulgonzaga@gmail.com</div>
                </div>

                <div class="flex items-center gap-3 w-full sm:w-auto">
                    <button 
                        @click="navigator.clipboard.writeText('cmndr.johnpaulgonzaga@gmail.com'); copied = true; setTimeout(() => copied = false, 2500)"
                        class="flex-1 sm:flex-initial px-5 py-3 rounded-xl bg-white/10 hover:bg-white/15 border border-white/15 text-white text-xs font-semibold transition-all flex items-center justify-center gap-2">
                        <i :data-lucide="copied ? 'check' : 'copy'" class="w-4 h-4"></i>
                        <span x-text="copied ? 'Copied!' : 'Copy Email'"></span>
                    </button>
                    <a href="mailto:cmndr.johnpaulgonzaga@gmail.com" class="flex-1 sm:flex-initial px-5 py-3 rounded-xl bg-purple-600 hover:bg-purple-500 text-white text-xs font-semibold transition-all flex items-center justify-center gap-2 shadow-lg shadow-purple-600/30">
                        <svg class="w-4 h-4 fill-none stroke-current stroke-2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <span>Send Message</span>
                    </a>
                </div>
            </div>

            <!-- Social Links Grid with Inline SVGs -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                <a href="https://github.com/cmndrpaul" target="_blank" rel="noopener noreferrer" class="p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-purple-500/40 group flex items-center justify-between transition-all">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-purple-400 group-hover:scale-110 transition-transform">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                        </div>
                        <div>
                            <div class="text-xs font-bold text-white">GitHub</div>
                            <div class="text-[11px] text-slate-400 font-mono">@cmndrpaul</div>
                        </div>
                    </div>
                    <i data-lucide="arrow-up-right" class="w-4 h-4 text-slate-500 group-hover:text-purple-400 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all"></i>
                </a>

                <a href="https://linkedin.com/in/cmndrpaul" target="_blank" rel="noopener noreferrer" class="p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-purple-500/40 group flex items-center justify-between transition-all">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-purple-400 group-hover:scale-110 transition-transform">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/></svg>
                        </div>
                        <div>
                            <div class="text-xs font-bold text-white">LinkedIn</div>
                            <div class="text-[11px] text-slate-400 font-mono">/in/cmndrpaul</div>
                        </div>
                    </div>
                    <i data-lucide="arrow-up-right" class="w-4 h-4 text-slate-500 group-hover:text-purple-400 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all"></i>
                </a>

                <a href="https://facebook.com/cmndrpaul" target="_blank" rel="noopener noreferrer" class="p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-purple-500/40 group flex items-center justify-between transition-all">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-purple-400 group-hover:scale-110 transition-transform">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </div>
                        <div>
                            <div class="text-xs font-bold text-white">Facebook</div>
                            <div class="text-[11px] text-slate-400 font-mono">cmndrpaul</div>
                        </div>
                    </div>
                    <i data-lucide="arrow-up-right" class="w-4 h-4 text-slate-500 group-hover:text-purple-400 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all"></i>
                </a>

                <a href="https://tiktok.com/@cmndrpaul" target="_blank" rel="noopener noreferrer" class="p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-purple-500/40 group flex items-center justify-between transition-all">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-purple-400 group-hover:scale-110 transition-transform">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.96-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.24 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                        </div>
                        <div>
                            <div class="text-xs font-bold text-white">TikTok</div>
                            <div class="text-[11px] text-slate-400 font-mono">@cmndrpaul</div>
                        </div>
                    </div>
                    <i data-lucide="arrow-up-right" class="w-4 h-4 text-slate-500 group-hover:text-purple-400 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all"></i>
                </a>
            </div>
        </div>
    </section>

</div>
@endsection
