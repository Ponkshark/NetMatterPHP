
// Carousel

$(document).ready(function(){
  $(".slider-container").owlCarousel({
    loop: true,
    margin: 100,
    autoWidth: true,
    autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      items: 8
  });
  $("#owl-1").owlCarousel({
    loop: true,
    autoWidth: true,
    items: 1,
    autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,

  });
});


   
// Sticky Nav Bar on Scroll

window.onscroll = function() {
  scroll();
};

var oldScrollY = window.scrollY;
window.onscroll = function() {
  if(oldScrollY < window.scrollY){
    if(window.scrollY > 110){
    document.getElementById("main-header-id").style.top = "-110px";
    document.getElementById("main-nav-id").style.top = "-110px";
    document.getElementById("form-2-main-cont").style.top = "-110px";
    }
  } else {
    document.getElementById("main-header-id").style.top = "0";
    document.getElementById("main-nav-id").style.top = "120px";
    document.getElementById("form-2-main-cont").style.top = "80px";
  }
  oldScrollY = window.scrollY;
}

//Collapsible Sidebar

function openNav() {
  document.getElementById("sidebar-inner-id").style.right = "0px";
  if ($(window).width() < 992){
    document.getElementById("body-id").style.marginRight = "276px";
    document.getElementById("body-id").style.marginLeft = "-276px";
  } else {
    document.getElementById("body-id").style.marginRight = "350px";
    document.getElementById("body-id").style.marginLeft = "-350px";
  }
  document.getElementsByTagName("html").style.overflow = "hidden";
  document.getElementsByTagName("html").style.height = "100%";
  document.getElementsByTagName("body").style.overflow = "auto";
  document.getElementsByTagName("body").style.height = "100%";
}

function closeNav() {
  document.getElementById("sidebar-inner-id").style.right = "-350px";
  document.getElementById("body-id").style.marginRight = "0";
  document.getElementById("body-id").style.marginLeft = "0";
}

//Cookies

function myFunction() {
  if (!document.cookie.split('; ').find(row => row.startsWith('cookies=accepted'))){ 
    document.getElementById("myDialog").showModal(); 
    document.getElementById("body-id").style.overflow = "hidden";
    document.body.style.position = "fixed";
  }
} 


document.addEventListener("load", myFunction());

function createCookie() {
  document.cookie = "cookies=accepted; max-age=86400; path=/";
  document.getElementById("body-id").style.overflow = "visible";
  document.getElementById("body-id").style.overflowX = "hidden";
  document.body.style.position = "static";
}

//Takes window to the top on reload

window.onbeforeunload = function () {
  window.scrollTo(0, 0);
}

//Slides the Out of Hours IT section up and down

function ITDropdown(){
  if (document.getElementById("it-dropdown-id").style.display == "block"){
  $("#it-dropdown-id").slideUp();
  }
  else{
  $("#it-dropdown-id").slideDown();
  document.getElementById("it-dropdown-id").style.display = "block";
  }
}

//Form Validation

function validateForm(inputText) {
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ ;
  let x = document.forms["newsletterForm"]["yourname2"].value;
  if (x==null || x == "") {
    return false;
  }
  let y = document.forms["newsletterForm"]["youremail2"].value;
  if (y==null || y == "") {
      return false;
  }
  let z = document.forms["newsletterForm"]["yourtelephone"].value;
  if (z==null || z == "") {
      return false;
  }
  let v = document.forms["newsletterForm"]["yoursubject"].value;
  if (v==null || v == "") {
      return false;
  }
  let w = document.forms["newsletterForm"]["yourmessage"].value;
  if (w==null || w == "") {
      return false;
  }
  if(inputText.value.match(mailformat)) {
    document.newsletterForm.youremail2.focus();
    return true;
  } else {
    document.newsletterForm.youremail2.focus();
    return false;
  }
}


