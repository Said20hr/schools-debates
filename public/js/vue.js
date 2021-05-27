require('./bootstrap');

// 1. Importation de vue.js
import Vue from "vue"

const app = new Vue({
    el:'#app',
    data: function(){
        return{
            show: true
        }
    }
});
var vue = new Vue({
    el:"#app",
    data: {
        showing:false,
    }
})