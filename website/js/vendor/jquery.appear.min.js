/*
 * jQuery appear plugin
 *
 * Copyright (c) 2012 Andrey Sidorov
 * licensed under MIT license.
 *
 * https://github.com/morr/jquery.appear/
 *
 * Version: 0.3.6
 */
 !function(a){function h(b){return a(b).filter(function(){return a(this).is(":appeared")})}function i(){d=!1;for(var a=0,c=b.length;a<c;a++){var e=h(b[a]);if(e.trigger("appear",[e]),g[a]){var f=g[a].not(e);f.trigger("disappear",[f])}g[a]=e}}function j(a){b.push(a),g.push()}var b=[],c=!1,d=!1,e={interval:250,force_process:!1},f=a(window),g=[];a.expr[":"].appeared=function(b){var c=a(b);if(!c.is(":visible"))return!1;var d=f.scrollLeft(),e=f.scrollTop(),g=c.offset(),h=g.left,i=g.top;return i+c.height()>=e&&i-(c.data("appear-top-offset")||0)<=e+f.height()&&h+c.width()>=d&&h-(c.data("appear-left-offset")||0)<=d+f.width()},a.fn.extend({appear:function(b){var f=a.extend({},e,b||{}),g=this.selector||this;if(!c){var h=function(){d||(d=!0,setTimeout(i,f.interval))};a(window).scroll(h).resize(h),c=!0}return f.force_process&&setTimeout(i,f.interval),j(g),a(g)}}),a.extend({force_appear:function(){return!!c&&(i(),!0)}})}(function(){return"undefined"!=typeof module?require("jquery"):jQuery}());