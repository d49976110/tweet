/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const { defaultsDeep } = require('lodash');

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

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

edit_tweet = function(e) {
    $(e.currentTarget).closest('.tweet-body').toggleClass('edit');
}

// addlike = function(e){
//     let url = $(e.currentTarget).attr('action');
//     console.log(e);
//     $.post(url).done(function(data){
        
//         console.log(data);
//         let like = Number(data['like']);
//         let dislike = Number(data['dislike']);
//         // console.log(data1);
//         $(e).siblings('p').html(like);
//         $(e).siblings('p').html(dislike);
//     });
// }

// dislike = function(e){
//     let url = $(e.currentTarget).attr('action');
//     // let dislike = $(e.currentTarget).siblings('p');
//     // let dislike = $(e.currentTarget).siblings('p');
    
//     $.post(url,{
//         _method:'delete',
//     }).done(function(data){
        
//         console.log($(this.currentTarget).siblings('p'));
//         let likenumber = Number(data['like']);
//         let dislikenumber = Number(data['dislike']);
//         // console.log(dislikenumber);
//         // dislike.text(like);
//         // dislike.empty().html(12);
        
//         // dislike.text(dislikenumber);
//     });
// }


