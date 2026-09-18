@extends('layouts.app')

@section('title', 'Certificates & Credentials — Eirmon John Paculan (riecodes)')
@section('meta_description', 'View professional certifications, hackathon awards, and technical credentials earned by Eirmon John Paculan (riecodes).')

@section('content')
<div class="max-w-6xl mx-auto px-4 sm:px-8 py-8 space-y-12">

    <!-- Page Header -->
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-8 border-b border-white/10">
        <div>
            <a href="{{ route('home') }}" class="inline-flex items-center gap-1 text-xs font-semibold text-purple-400 hover:text-purple-300 mb-3 transition-colors">
                <i data-lucide="arrow-left" class="w-3.5 h-3.5"></i>
                <span>Back to Overview</span>
            </a>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight">Certificates &amp; Credentials</h1>
            <p class="text-sm text-slate-400 mt-2">Verified specializations in AI, Computer Vision, Cloud Architectures, and Embedded Systems</p>
        </div>

        <div class="p-4 rounded-2xl bg-white/5 border border-white/10 text-center font-mono">
            <div class="text-xl font-bold text-purple-400">{{ $certificates->count() }}</div>
            <div class="text-[10px] text-slate-400 uppercase">Verified Badges</div>
        </div>
    </div>

    <!-- Certificates Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach($certificates as $cert)
        <div class="p-8 rounded-3xl bg-slate-900/60 border border-white/10 hover:border-purple-500/50 backdrop-blur-md transition-all duration-300 flex flex-col justify-between space-y-6 hover:shadow-2xl hover:shadow-purple-950/40">
            
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-mono text-purple-400 bg-purple-950/60 px-3 py-1 rounded-full border border-purple-800/40">
                        {{ $cert->issued_date }}
                    </span>
                    <div class="w-9 h-9 rounded-xl bg-purple-600/20 border border-purple-500/30 flex items-center justify-center text-purple-400">
                        <i data-lucide="award" class="w-4 h-4"></i>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-bold text-white leading-snug">{{ $cert->title }}</h3>
                    <div class="text-xs font-medium text-slate-400 mt-1 flex items-center gap-2">
                        <span class="text-purple-300">{{ $cert->issuer }}</span>
                        <span>•</span>
                        <span class="font-mono text-slate-500">{{ $cert->credential_id }}</span>
                    </div>
                </div>

                <p class="text-xs text-slate-300 leading-relaxed">
                    {{ $cert->description }}
                </p>

                @if(is_array($cert->skills))
                <div class="flex flex-wrap gap-1.5 pt-2">
                    @foreach($cert->skills as $skill)
                    <span class="text-[10px] font-mono px-2.5 py-1 rounded-lg bg-white/5 border border-white/10 text-slate-300">
                        {{ $skill }}
                    </span>
                    @endforeach
                </div>
                @endif
            </div>

            @if($cert->credential_url)
            <div class="pt-4 border-t border-white/10 flex items-center justify-between">
                <span class="text-[11px] text-emerald-400 flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                    <span>Verified Authenticity</span>
                </span>
                <a href="{{ $cert->credential_url }}" target="_blank" rel="noopener noreferrer" class="text-xs text-purple-400 hover:text-purple-300 font-semibold inline-flex items-center gap-1.5">
                    <span>View Certificate</span>
                    <i data-lucide="external-link" class="w-3.5 h-3.5"></i>
                </a>
            </div>
            @endif

        </div>
        @endforeach
    </div>

</div>
@endsection
