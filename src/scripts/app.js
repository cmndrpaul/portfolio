import Alpine from 'alpinejs';
import {
    ArrowDownRight,
    ArrowLeft,
    ArrowRight,
    ArrowUpRight,
    Award,
    BriefcaseBusiness,
    Check,
    Command,
    Coffee,
    Copy,
    Cpu,
    FileText,
    GraduationCap,
    Home,
    Layers,
    Mail,
    Music2,
    Search,
    Send,
    Sparkles,
    UserRound,
    createIcons,
} from 'lucide';

window.Alpine = Alpine;

const iconSet = {
    ArrowDownRight,
    ArrowLeft,
    ArrowRight,
    ArrowUpRight,
    Award,
    BriefcaseBusiness,
    Check,
    Command,
    Coffee,
    Copy,
    Cpu,
    FileText,
    GraduationCap,
    Home,
    Layers,
    Mail,
    Music2,
    Search,
    Send,
    Sparkles,
    UserRound,
};

const iconAliases = {
    Briefcase: BriefcaseBusiness,
    User: UserRound,
};

Alpine.data('portfolioApp', () => ({
    theme: localStorage.getItem('cmndrpaul_theme') || 'purple',
    commandPaletteOpen: false,
    scrolled: false,
    scrollProgress: 0,

    init() {
        this.applyTheme(this.theme);
        this.updateScroll();
        window.addEventListener('scroll', () => this.updateScroll(), { passive: true });
        window.addEventListener('keydown', (event) => {
            if ((event.ctrlKey || event.metaKey) && event.key.toLowerCase() === 'k') {
                event.preventDefault();
                this.commandPaletteOpen = !this.commandPaletteOpen;
            }
            if (event.key === 'Escape') this.commandPaletteOpen = false;
        });
    },

    updateScroll() {
        const scrollTop = window.scrollY || document.documentElement.scrollTop;
        const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        this.scrolled = scrollTop > 40;
        this.scrollProgress = scrollHeight > 0 ? Math.min(100, Math.max(0, (scrollTop / scrollHeight) * 100)) : 0;
    },

    toggleTheme() {
        this.theme = this.theme === 'purple' ? 'dark' : this.theme === 'dark' ? 'light' : 'purple';
        localStorage.setItem('cmndrpaul_theme', this.theme);
        this.applyTheme(this.theme);
    },

    applyTheme(theme) {
        document.documentElement.setAttribute('data-theme', theme);
    },
}));

Alpine.start();

const renderIcons = () => createIcons({ icons: { ...iconSet, ...iconAliases } });
window.refreshIcons = renderIcons;
document.addEventListener('DOMContentLoaded', renderIcons);
document.addEventListener('alpine:initialized', renderIcons);
