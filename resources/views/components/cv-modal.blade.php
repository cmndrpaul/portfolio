<div 
    x-show="cvModalOpen" 
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    style="display: none;"
    class="fixed inset-0 z-50 bg-black/70 backdrop-blur-md flex items-center justify-center p-4"
    @keydown.escape.window="cvModalOpen = false">

    <div 
        x-data="cvModal()"
        @click.outside="cvModalOpen = false"
        class="w-full max-w-lg bg-slate-900 border border-purple-500/30 rounded-2xl shadow-2xl shadow-purple-950/60 overflow-hidden">
        
        <!-- Modal Header -->
        <div class="p-5 border-b border-white/10 flex items-center justify-between bg-purple-950/20">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-purple-600/20 border border-purple-500/30 flex items-center justify-center text-purple-400">
                    <i data-lucide="file-check" class="w-5 h-5"></i>
                </div>
                <div>
                    <h3 class="text-sm font-bold text-white">Request Official CV / Resume</h3>
                    <p class="text-xs text-slate-400">Get the full curriculum vitae delivered directly to your inbox</p>
                </div>
            </div>
            <button @click="cvModalOpen = false" class="text-slate-400 hover:text-white p-1 rounded-lg hover:bg-white/10 transition-colors">
                <i data-lucide="x" class="w-5 h-5"></i>
            </button>
        </div>

        <!-- Form Body -->
        <div class="p-6 space-y-4">
            <template x-if="success">
                <div class="p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-center space-y-2">
                    <div class="w-10 h-10 mx-auto rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center">
                        <i data-lucide="check-circle" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-sm font-bold text-white">Request Sent Successfully!</h4>
                    <p class="text-xs text-emerald-200">Thank you! Your inquiry has been dispatched. I will review and send the latest PDF CV to your email shortly.</p>
                    <button 
                        @click="cvModalOpen = false; success = false" 
                        class="mt-3 px-4 py-1.5 rounded-lg bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-semibold">
                        Close
                    </button>
                </div>
            </template>

            <template x-if="!success">
                <form @submit.prevent="submitCvRequest()" class="space-y-4">
                    <template x-if="errorMessage">
                        <div class="p-3 rounded-lg bg-red-500/10 border border-red-500/30 text-xs text-red-400" x-text="errorMessage"></div>
                    </template>

                    <div>
                        <label class="block text-xs font-medium text-slate-300 mb-1">Your Full Name *</label>
                        <input 
                            type="text" 
                            x-model="name"
                            required
                            placeholder="e.g. John Doe / Tech Recruiter"
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-3.5 py-2.5 text-xs text-white placeholder-slate-500 focus:outline-none focus:border-purple-500 transition-colors">
                    </div>

                    <div>
                        <label class="block text-xs font-medium text-slate-300 mb-1">Email Address *</label>
                        <input 
                            type="email" 
                            x-model="email"
                            required
                            placeholder="name@company.com"
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-3.5 py-2.5 text-xs text-white placeholder-slate-500 focus:outline-none focus:border-purple-500 transition-colors">
                    </div>

                    <div>
                        <label class="block text-xs font-medium text-slate-300 mb-1">Company / Organization (Optional)</label>
                        <input 
                            type="text" 
                            x-model="company"
                            placeholder="e.g. Google, Startup Inc."
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-3.5 py-2.5 text-xs text-white placeholder-slate-500 focus:outline-none focus:border-purple-500 transition-colors">
                    </div>

                    <div>
                        <label class="block text-xs font-medium text-slate-300 mb-1">Message / Note (Optional)</label>
                        <textarea 
                            x-model="message"
                            rows="2"
                            placeholder="Interested in discussing a role or project..."
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-3.5 py-2.5 text-xs text-white placeholder-slate-500 focus:outline-none focus:border-purple-500 transition-colors"></textarea>
                    </div>

                    <div class="pt-2 flex items-center justify-end gap-3">
                        <button 
                            type="button" 
                            @click="cvModalOpen = false" 
                            class="px-4 py-2 rounded-xl bg-white/5 hover:bg-white/10 text-xs font-medium text-slate-300 transition-colors">
                            Cancel
                        </button>
                        <button 
                            type="submit" 
                            :disabled="loading"
                            class="px-5 py-2 rounded-xl bg-purple-600 hover:bg-purple-500 text-white text-xs font-semibold shadow-lg shadow-purple-600/30 transition-all flex items-center gap-2">
                            <template x-if="loading">
                                <i data-lucide="loader" class="w-3.5 h-3.5 animate-spin"></i>
                            </template>
                            <span>Send CV Request</span>
                        </button>
                    </div>
                </form>
            </template>
        </div>
    </div>
</div>
