<!-- Scroll-Driven Timeline Indicator (Left Gutter) -->
<div class="fixed left-3 sm:left-5 md:left-6 lg:left-8 top-32 bottom-24 z-30 pointer-events-none hidden md:flex flex-col items-center select-none">
    
    <!-- Top Origin Anchor Dot -->
    <div class="relative flex items-center justify-center">
        <span class="animate-ping absolute w-4 h-4 rounded-full bg-purple-500 opacity-50"></span>
        <span class="relative w-3 h-3 rounded-full bg-gradient-to-tr from-purple-400 to-pink-400 border-2 border-slate-900 shadow-[0_0_12px_rgba(192,132,252,0.9)]"></span>
    </div>

    <!-- Vertical Line Track -->
    <div class="relative flex-grow w-[2px] bg-white/10 my-2 rounded-full overflow-hidden">
        <!-- Progressive Scroll-Filled Line -->
        <div 
            class="absolute top-0 left-0 w-full rounded-full bg-gradient-to-b from-purple-400 via-pink-400 to-cyan-400 shadow-[0_0_12px_rgba(168,85,247,0.8)] transition-all duration-75"
            :style="'height: ' + scrollProgress + '%'">
        </div>
    </div>

    <!-- Traveling Active Indicator Pulse Dot -->
    <div 
        class="absolute left-1/2 -translate-x-1/2 w-2.5 h-2.5 rounded-full bg-cyan-400 border-2 border-slate-900 shadow-[0_0_10px_#22d3ee] transition-all duration-75 pointer-events-none"
        :style="'top: calc(' + scrollProgress + '% + 8px)'">
    </div>

    <!-- Bottom Terminal Dot -->
    <div class="w-2 h-2 rounded-full bg-white/20 border border-white/30"></div>

    <!-- Scroll Percentage Meter -->
    <div class="mt-2 text-[10px] font-mono text-purple-300/80 bg-slate-900/90 border border-purple-500/30 px-1.5 py-0.5 rounded-md shadow-md backdrop-blur-sm" x-text="Math.round(scrollProgress) + '%'"></div>
</div>
