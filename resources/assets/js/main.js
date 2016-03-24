//import Vue from 'Vue';
var Vue = require('vue');
import Alert from './components/Alert.vue';

window.Vue = Vue;

new Vue({

	el:'body',

	components: { Alert }

})