import './bootstrap';
import { createApp } from 'vue'
import Web_IndexCommentsComponent
    from "./components/web/IndexCommentsComponent.vue";


const app = createApp({})
app.component('web-comments-component',Web_IndexCommentsComponent)
app.mount('#wrapper')
