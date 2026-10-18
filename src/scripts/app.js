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
    Menu,
    Music2,
    Search,
    Send,
    Sparkles,
    UserRound,
    X,
    createIcons,
} from 'lucide';

const readStoredTheme = () => {
    try {
        return localStorage.getItem('cmndrpaul_theme') || 'purple';
    } catch {
        return 'purple';
    }
};

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
    Menu,
    Music2,
    Search,
    Send,
    Sparkles,
    UserRound,
    X,
};

const iconAliases = {
    Briefcase: BriefcaseBusiness,
    User: UserRound,
};

Alpine.data('portfolioApp', () => ({
    theme: readStoredTheme(),
    commandPaletteOpen: false,
    mobileMenuOpen: false,
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
            if (event.key === 'Escape') {
                this.commandPaletteOpen = false;
                this.mobileMenuOpen = false;
            }
        });
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) this.mobileMenuOpen = false;
        }, { passive: true });
    },

    updateScroll() {
        const scrollTop = window.scrollY || document.documentElement.scrollTop;
        const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        this.scrolled = scrollTop > 40;
        this.scrollProgress = scrollHeight > 0 ? Math.min(100, Math.max(0, (scrollTop / scrollHeight) * 100)) : 0;
    },

    toggleTheme() {
        this.theme = this.theme === 'purple' ? 'dark' : this.theme === 'dark' ? 'light' : 'purple';
        try {
            localStorage.setItem('cmndrpaul_theme', this.theme);
        } catch {
            // Theme still applies for this page view when storage is unavailable.
        }
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
