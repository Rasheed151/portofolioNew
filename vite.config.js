import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0', // biar bisa diakses dari device lain
        port: 5173, // default vite port
        hmr: {
            host: '192.168.18.43', // ganti dengan IP PC/laptop lo di jaringan WiFi
        },
    },
});
