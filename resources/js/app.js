
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

// import BootstrapVue from 'bootstrap-vue';

// Vue.use(BootstrapVue);

require('./custom');

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
    /**
    $("#artistAvatar").change(function () {
        $('#image_preview').html("");
        var total_file = document.getElementById("avatar").files.length;

        for (var i = 0; i < total_file; i++) {
            $('#image_preview').append("<img src='" + URL.createObjectURL(event.target.files[i]+"'>"));
        }
    });

    $('form').ajaxForm(function () {
       alert('Artist successfully added');
    });
    */

    //iCheck for checkbox and radio inputs
    $('input.filled-in').iCheck(); // initialise iCheck

    // JPlayer
    $('#jquery_player_audio').jPlayer({
        ready: function () {
            $(this).jPlayer("setMedia", {
                mp3: "http://fossil.test/storage/music/Sjk-Lacoste%20ft%20CaptainHook%20-%20Pula%20(Original%20mix).mp3"
            });
        }
    });

});

