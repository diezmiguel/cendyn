import Persons from '../components/PersonComponent.vue';
import Welcome from '../components/WelcomeComponent.vue';

const routes = [
    {
        path: '/persons',
        name: 'person',
        component: Persons
    },
    {
        path: '*',
        name: 'welcome',
        component: Welcome
    },

]
export default routes
