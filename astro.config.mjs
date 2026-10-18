import { defineConfig } from 'astro/config';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    output: 'static',
    publicDir: './public',
    vite: {
        plugins: [tailwindcss()],
    },
});