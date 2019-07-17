
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


window.Vue = require('vue');
window.Dropzone = require('dropzone');
window.iCheck = require('icheck');
// var Inputmask = require('inputmask');

import 'owl.carousel/dist/assets/owl.carousel.css';
window.owlCarousel = require('owl.carousel');

import flatpickr from "flatpickr";

// require('./editor');

require('./custom');
require('./contact');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('google-map', require('./components/Map.vue'));
Vue.component('google-map', require('./components/ContactMap.vue'));

const app = new Vue({
    el: '#app',
    data: {}
});

$(document).ready( function () {
    $('#datatable').DataTable();
    $('.select2').select2({
        placeholder: 'Select a position'
    });

    $('.owl-carousel').owlCarousel();

    //iCheck for checkbox and radio inputs
    $('input.filled-in').iCheck(); // initialise iCheck
});

// function MyUploadAdapterPlugin( editor ) {
//     editor.plugins.get( 'FileRepository' ).createUploadAdapter = function( loader ) {
//         // ...
//     };
// }

// // Load the custom upload adapter as a plugin of the editor.
// ClassicEditor
// .create( document.querySelector( '#editor' ), {
//     extraPlugins: [ MyUploadAdapterPlugin ],
//     // The plugins are now passed directly to .create().
//     plugins: [
//         Essentials,
//         UploadAdapter,
//         Autoformat,
//         Bold,
//         Italic,
//         BlockQuote,
//         EasyImage,
//         Heading,
//         Image,
//         ImageCaption,
//         ImageStyle,
//         ImageToolbar,
//         ImageUpload,
//         Link,
//         List,
//         Paragraph,
//         Alignment
//     ],

//     // So is the rest of the default configuration.
//     toolbar: [
//         'heading',
//         '|',
//         'alignment',                                                 // <--- ADDED
//         'bold',
//         'italic',
//         'link',
//         'bulletedList',
//         'numberedList',
//         'imageUpload',
//         'blockQuote',
//         'undo',
//         'redo'
//     ],
//     image: {
//         toolbar: [
//             'imageStyle:full',
//             'imageStyle:side',
//             '|',
//             'imageTextAlternative'
//         ]
//     },
//     // This value must be kept in sync with the language defined in webpack.config.js.
//     language: 'en'
// } )
// .then( editor => {
//     console.log( 'Editor was initialized', editor );
// } )
// .catch( error => {
//     console.error( error.stack );
// } );
