import { createApp, provide } from 'vue'
import './index.css'
// import './style.css'
import App from './App.vue'
import store from './store'
import router from './router'

const apiBaseUrl = import.meta.env.VITE_API_BASE_URL;
const appBaseUrl = import.meta.env.VITE_APP_BASE_URL;

createApp(App)
  .use(store)
  .use(router)
  .provide('apiBaseUrl', apiBaseUrl)
  .provide('appBaseUrl', appBaseUrl)
  .mount('#app')

