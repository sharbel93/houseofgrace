
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// require('select2');
// require('tinymce');
window.Vue = require('vue');
window.Slug = require('slug');
Slug.defaults.mode = 'rfc3986';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import Vue from 'vue';
import Buefy from 'buefy';


Vue.use(Buefy);
Vue.component('slugWidget', require('./components/slugWidget.vue'));
// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// require('./manage');
//select2
