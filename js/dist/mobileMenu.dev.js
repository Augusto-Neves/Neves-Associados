"use strict";

var btnMobile = document.getElementById('btn-mobile'); //Toggle Menu Function

function toggleMenu() {
  var nav = document.getElementById('mobile-menu');
  nav.classList.toggle('active');
  var html = document.getElementsByTagName(html);
  html.classList.toggle('overflow');
}

;
btnMobile.addEventListener('click', toggleMenu);