<div x-data="chatWidget()" class="fixed bottom-6 right-6 z-50">
    
    <!-- Floating Trigger Button -->
    <button 
        @click="open = !open; if(open) { scrollToBottom(); }"
        class="relative flex items-center gap-2.5 bg-purple-600 hover:bg-purple-500 text-white font-medium px-4 py-3 rounded-full shadow-2xl shadow-purple-600/50 hover:shadow-purple-600/70 transform hover:-translate-y-1 transition-all duration-300 group">
        
        <!-- Pulsing Online Indicator -->
        <span class="relative flex h-2.5 w-2.5">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
        </span>

        <span class="text-xs tracking-wide">Visitor Chat</span>
        
        <!-- Live Count Pill -->
        <span class="bg-black/30 text-[11px] px-1.5 py-0.5 rounded-full font-mono text-purple-200" x-text="onlineCount + ' online'"></span>
        
        <i data-lucide="message-square" class="w-4 h-4 text-purple-200 group-hover:rotate-6 transition-transform"></i>
    </button>

    <!-- Chat Popover Window -->
    <div 
        x-show="open" 
        x-transition:enter="transition ease-out duration-250"
        x-transition:enter-start="opacity-0 translate-y-8 scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
        x-transition:leave-end="opacity-0 translate-y-8 scale-95"
        @click.outside="open = false"
        style="display: none;"
        class="absolute bottom-16 right-0 w-[340px] sm:w-[380px] h-[480px] bg-slate-900/95 border border-purple-500/30 backdrop-blur-2xl rounded-2xl shadow-2xl shadow-purple-950/50 flex flex-col overflow-hidden">
        
        <!-- Window Header -->
        <div class="p-3.5 bg-purple-950/40 border-b border-white/10 flex items-center justify-between">
            <div class="flex items-center gap-2.5">
                <div class="w-8 h-8 rounded-full bg-purple-600/30 border border-purple-500/40 flex items-center justify-center text-purple-300 font-bold text-xs">
                    jp
                </div>
                <div>
                    <h4 class="text-xs font-semibold text-white">Live Portfolio Chat</h4>
                    <div class="flex items-center gap-1.5 text-[10px] text-emerald-400">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                        <span x-text="onlineCount + ' people exploring now'"></span>
                    </div>
                </div>
            </div>
            <button @click="open = false" class="text-slate-400 hover:text-white p-1 rounded-lg hover:bg-white/10 transition-colors">
                <i data-lucide="x" class="w-4 h-4"></i>
            </button>
        </div>

        <!-- Messages Container -->
        <div id="chat-scroll-container" class="flex-grow p-4 overflow-y-auto space-y-3.5 text-xs">
            <template x-for="msg in messages" :key="msg.id">
                <div :class="msg.is_admin ? 'bg-purple-900/30 border-purple-500/30' : 'bg-white/5 border-white/10'" 
                     class="p-2.5 rounded-xl border flex flex-col gap-1">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-1.5">
                            <span class="font-semibold text-purple-300" x-text="msg.username"></span>
                            <template x-if="msg.is_admin">
                                <span class="bg-purple-500/20 text-purple-300 text-[9px] px-1.5 py-0.2 rounded font-mono">ADMIN</span>
                            </template>
                        </div>
                        <span class="text-[10px] text-slate-500" x-text="new Date(msg.created_at).toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'})"></span>
                    </div>
                    <p class="text-slate-200 leading-relaxed break-words" x-text="msg.message"></p>
                </div>
            </template>
        </div>

        <!-- Chat Input Form -->
        <form @submit.prevent="sendMessage()" class="p-3 bg-black/40 border-t border-white/10 flex flex-col gap-2">
            <div class="flex items-center gap-2">
                <input 
                    type="text" 
                    x-model="username" 
                    placeholder="Your Name / Handle"
                    class="w-1/3 bg-white/5 border border-white/10 rounded-lg px-2.5 py-1.5 text-xs text-white placeholder-slate-500 focus:outline-none focus:border-purple-500 transition-colors">
                
                <input 
                    type="text" 
                    x-model="newMessage" 
                    placeholder="Type a message..." 
                    class="flex-grow bg-white/5 border border-white/10 rounded-lg px-3 py-1.5 text-xs text-white placeholder-slate-500 focus:outline-none focus:border-purple-500 transition-colors">
                
                <button 
                    type="submit" 
                    :disabled="loading || !newMessage.trim()"
                    class="bg-purple-600 hover:bg-purple-500 disabled:opacity-50 text-white p-2 rounded-lg transition-all shadow-md shadow-purple-600/30">
                    <i data-lucide="send" class="w-3.5 h-3.5"></i>
                </button>
            </div>
            <p class="text-[10px] text-slate-500 text-center">Be respectful. Messages are visible to all current visitors.</p>
        </form>
    </div>
</div>
