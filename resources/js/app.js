/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import {createApp} from 'vue';
import 'vazirmatn/misc/Farsi-Digits/Vazirmatn-FD-font-face.css';
import '@fortawesome/fontawesome-free/css/all.min.css';
import hcOffcanvasNav from 'hc-offcanvas-nav';
import ExampleComponent from './components/ExampleComponent.vue';
import ComfyComponent from './components/ComfyComponent.vue';
import ShowPriceComponent from './components/ShowPriceComponent.vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */
setTimeout(function () {
    var Nav = new hcOffcanvasNav('#main-nav', {
        customToggle: '.toggle',
        navTitle: 'Routes',
        position: 'right',
        levelTitles: true,
        levelOpen: 'expand',
        levelTitleAsBack: true,
        rtl: true,
        disableBody: false,
    });
}, 100);

window.addEventListener('load' , function (e) {

    setTimeout(function () {
        document.querySelector('.preloader').remove();
    }, 1000);

    jQuery('.delete-confirm').click(function (e) {
        if (!confirm('Are you sure to remove?')) {
            e.preventDefault();
            return false;
        }
    });
    jQuery('.checkall').click(function (e) {
        $("input[type='checkbox']").prop("checked", $(this).is(':checked'));
    });
    jQuery('.main-img span').click(function () {
      $('.chose-img').click();
    })
})

const app = createApp({});

app.component('example-component', ExampleComponent);
app.component('comfy', ComfyComponent);
app.component('price', ShowPriceComponent);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');
