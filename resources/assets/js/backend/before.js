/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// Loaded before CoreUI app.js
require('../bootstrap');
require('pace');
require('../plugins');

numberOnly = function(e, t) {
    var unicode = e.charCode ? e.charCode : e.keyCode;
    if (unicode === 46 && t.value.length === 0) {
        t.value = '';
        return false;
    }
    var test = t.value;
    if (test.split('.').length > 1 && unicode === 46) {
        return false;
    }
    if (unicode === 13)
    {
        try {
            t.blur();
        } catch (e) {
        }
        return true;
    }
    if (unicode !== 8 && unicode !== 9)
    {
        if (unicode < 48 || unicode > 57) {
            if (unicode !== 46)
                return false;
        }
    }
};