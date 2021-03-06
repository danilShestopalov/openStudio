
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('q3-component', require('./components/Q3Component.vue').default);
Vue.component('idea-component', require('./components/IdeaComponent.vue').default);
Vue.component('image-upload', require('./components/ImageUploadComponent.vue').default);
Vue.component('main-startup-list-component', require('./components/main/StartupsComponent.vue').default);
Vue.component('startup-list-component', require('./components/StartupsComponent.vue').default);
Vue.component('main-post-list-component', require('./components/main/PostsComponent.vue').default);
Vue.component('select-tags-component', require('./components/SelectTagsComponent.vue').default);
Vue.component('profile-component', require('./components/ProfileComponent.vue').default);
Vue.component('upload-file-component', require('./components/UploadFileComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: {

    }
});
