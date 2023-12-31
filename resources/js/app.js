import './bootstrap';
import '../css/app.css';
// import '../assets/css/codebase.min.css';

// import `../assets/js/codebase.app.min.js?t=${Date.now()}`;
// import '../assets/js/lib/jquery.min.js';
// import '../assets/js/plugins/jquery-validation/jquery.validate.min.js';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';
const apiBaseUrl = import.meta.env.VITE_API_BASE_URL;
const appBaseUrl = import.meta.env.VITE_APP_BASE_URL;

// const scriptTag = document.createElement('script');
// scriptTag.src = `../assets/js/codebase.app.min.js?t=${Date.now()}`;
// document.head.appendChild(scriptTag);

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
      return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
