import Vue from "vue";
import VueRouter from "vue-router";
import ExampleComponent from "./Components/ExampleComponent.vue";
import JobComponent from "./Components/JobComponent.vue";

Vue.use(VueRouter);

export default new VueRouter({
    routes: [{
            path: '/',
            component: ExampleComponent,
        },
        {
            path: '/job',
            component: JobComponent,
        }
    ],
    mode: 'history',
});