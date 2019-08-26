import Vue from 'vue'
import VueRouter from 'vue-router'
import BootstrapVue from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import Topbar from './components/Topbar'
import Glossaries from './views/glossary/Glossaries'
import GlossaryEdit from './views/glossary/GlossaryEdit'

Vue.use(VueRouter)
Vue.use(BootstrapVue)
Vue.component('topbar' , Topbar);


import App from './views/App'
import Dashboard from './views/Dashboard'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Dashboard
        },        
        {
            path: '/glossaries',
            name: 'glossaries',
            component: Glossaries
        },
                {
            path: '/glossary/:id/edit',
            name: 'glossary.edit',
            component: GlossaryEdit
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});

