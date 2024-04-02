var mbtn = document.getElementById("mbtn");
var close = document.getElementById("close");
var canvas = document.getElementById("canvass");
// var list = document.getElementById("list-menu");
function togglemenu(){
    canvas.classList.add('show');
    mbtn.classList.add('hideee');
}
function hiden(){
    canvas.classList.remove('show');
    mbtn.classList.remove('hideee');
}
function hidecanvas(){
    canvas.classList.remove('show');
    mbtn.classList.remove('hideee');
}
var open1 = document.getElementById('open1');
var read1 = document.getElementById('read1');
var open2 = document.getElementById('open2');
var read2 = document.getElementById('read2');
var open3 = document.getElementById('open3');
var read3 = document.getElementById('read3');
var open4 = document.getElementById('open4');
var read4 = document.getElementById('read4');
var open5 = document.getElementById('open5');
var read5 = document.getElementById('read5');
open1.onclick = function(){
    read1.classList.toggle("readmore-show");
}
open2.onclick = function(){
    read2.classList.toggle("readmore-show");
}
open3.onclick = function(){
    read3.classList.toggle("readmore-show");
}
open4.onclick = function(){
    read4.classList.toggle("readmore-show");
}
open5.onclick = function(){
    read5.classList.toggle("readmore-show");
}
