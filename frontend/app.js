import { createApp } from 'vue'
import App from '@/App.vue'
import "./src/assets/styles/index.css"  
import "./src/assets/styles/partials/header.css"
import './src/assets/styles/cars.css'
import TheHeader from './src/components/TheHeader.vue'
import router from './src/services/router.js'

const app = createApp(App);

app
    .component('the-header', TheHeader)
    .use(router)


app.mount('#app');