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

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

// set this to however many columns you want
var col_heights = [], 
    container = document.getElementById('masonry');
    console.log(container.children)
for (var i = 0; i <= 2; i++) {
    col_heights.push(0);
}
for (var i = 0; i < container.children.length; i++) {
    var order = (i + 1) % 2 || 2;
    container.children[i].style.order = order;
    col_heights[order] += parseFloat(container.children[i].scrollHeight);
    console.log(col_heights)
}
console.log("----", col_heights)
var highest = Math.max.apply(Math, col_heights);
container.style.height = highest + 50 +'px';