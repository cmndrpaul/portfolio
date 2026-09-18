import Alpine from 'alpinejs';
import axios from 'axios';

window.Alpine = Alpine;
window.axios = axios;

// Configure Axios defaults
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
const token = document.querySelector('meta[name="csrf-token"]');
if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
}

// Global App State
Alpine.data('portfolioApp', () => ({
    theme: localStorage.getItem('cmndrpaul_theme') || 'purple',
    activeSection: 'about',
    commandPaletteOpen: false,
    cvModalOpen: false,
    chatOpen: false,
    scrolled: false,
    scrollProgress: 0,

    init() {
        this.applyTheme(this.theme);
        this.updateScroll();
        window.addEventListener('scroll', () => {
            this.updateScroll();
        }, { passive: true });
        window.addEventListener('keydown', (e) => {
            if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
                e.preventDefault();
                this.commandPaletteOpen = !this.commandPaletteOpen;
            }
            if (e.key === 'Escape') {
                this.commandPaletteOpen = false;
                this.cvModalOpen = false;
            }
        });
    },

    updateScroll() {
        const scrollTop = window.scrollY || document.documentElement.scrollTop;
        const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        this.scrolled = scrollTop > 40;
        this.scrollProgress = scrollHeight > 0 ? Math.min(100, Math.max(0, (scrollTop / scrollHeight) * 100)) : 0;
    },

    toggleTheme() {
        if (this.theme === 'purple') {
            this.theme = 'dark';
        } else if (this.theme === 'dark') {
            this.theme = 'light';
        } else {
            this.theme = 'purple';
        }
        localStorage.setItem('cmndrpaul_theme', this.theme);
        this.applyTheme(this.theme);
    },

    applyTheme(theme) {
        document.documentElement.setAttribute('data-theme', theme);
    }
}));

// Chat Widget Alpine Component
Alpine.data('chatWidget', () => ({
    open: false,
    messages: [],
    newMessage: '',
    username: localStorage.getItem('cmndrpaul_chat_username') || '',
    onlineCount: 4,
    loading: false,
    pollInterval: null,

    init() {
        this.fetchMessages();
        this.pollInterval = setInterval(() => {
            if (this.open) {
                this.fetchMessages();
            }
        }, 8000);
    },

    async fetchMessages() {
        try {
            const res = await axios.get('/api/chat/messages');
            if (res.data && res.data.messages) {
                this.messages = res.data.messages;
                this.onlineCount = res.data.online_count || this.onlineCount;
                this.scrollToBottom();
            }
        } catch (err) {
            console.error('Failed to load chat messages:', err);
        }
    },

    async sendMessage() {
        if (!this.newMessage.trim()) return;

        const msg = this.newMessage;
        this.newMessage = '';
        this.loading = true;

        try {
            const res = await axios.post('/api/chat/messages', {
                message: msg,
                username: this.username || undefined,
            });

            if (res.data && res.data.message) {
                this.messages.push(res.data.message);
                if (res.data.message.username && !this.username) {
                    this.username = res.data.message.username;
                    localStorage.setItem('cmndrpaul_chat_username', this.username);
                }
                this.scrollToBottom();
            }
        } catch (err) {
            console.error('Failed to send message:', err);
        } finally {
            this.loading = false;
        }
    },

    scrollToBottom() {
        this.$nextTick(() => {
            const el = document.getElementById('chat-scroll-container');
            if (el) el.scrollTop = el.scrollHeight;
        });
    }
}));

// CV Modal Alpine Component
Alpine.data('cvModal', () => ({
    name: '',
    email: '',
    company: '',
    message: '',
    loading: false,
    success: false,
    errorMessage: '',

    async submitCvRequest() {
        this.loading = true;
        this.errorMessage = '';
        try {
            const res = await axios.post('/api/cv/request', {
                name: this.name,
                email: this.email,
                company: this.company,
                message: this.message
            });
            this.success = true;
            this.name = '';
            this.email = '';
            this.company = '';
            this.message = '';
        } catch (err) {
            this.errorMessage = err.response?.data?.message || 'Something went wrong. Please try again.';
        } finally {
            this.loading = false;
        }
    }
}));

Alpine.start();
