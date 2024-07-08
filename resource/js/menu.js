let  btnMenu = document.getElementById('menu');
let menu = document.querySelector('.menu') 

btnMenu.addEventListener('click' ,function(){
 menu.classList.toggle('mostrar');
})



$('.menu ul li .menu_map').hide();
$('.menu ul li .submenu').hide();
$('.menu ul li .form').hide();


if($(window).width() > 1400){


 $('.menu ul li').bind('mousemove', function(){
     $(this).children('.submenu').fadeIn(200);

 })
 $('.menu ul li ').bind('mousemove', function(){
     $(this).children('.menu_map').fadeIn(200);

 })
  $('.menu ul li').bind('mouseleave', function(){
     $(this).children('.submenu').fadeOut(200);
     
 })

 $('.menu ul li ').bind('mouseleave', function(){
 $(this).children('.menu_map').fadeOut(200);

 })
}else{
$('.menu ul li').unbind('mousemove');
 $('.menu ul li').unbind('mouseleave');


 var show_menu1 = 0;
 $('.menu ul li').bind('click', function(){
 // $(this).children('ul').slideToggle(200);

 if(show_menu1 == 0){
     $(this).children(".submenu").slideDown();
     // $(this).next('.menu_map').slideToggle();
     show_menu1 = 1;
 }else{
     $(this).children(".submenu").slideUp();
     //  $(this).children(".menu_map").slideUp();
     show_menu1 = 0;
 }
 })
 
  $('.menu ul li').on('click', function(e){
     e.stopImmediatePropagation();
 })



}

$(window).resize(function(){


$('.menu ul li .menu_map').hide();
$('.menu ul li .submenu').hide();

if($(window).width() > 1400){


 $('.menu ul li').bind('mousemove', function(){
     $(this).children('.submenu').fadeIn(200);

 })
 $('.menu ul li ').bind('mousemove', function(){
     $(this).children('.menu_map').fadeIn(200);

 })
  $('.menu ul li').bind('mouseleave', function(){
     $(this).children('.submenu').fadeOut(200);
     
 })

 $('.menu ul li ').bind('mouseleave', function(){
 $(this).children('.menu_map').fadeOut(200);

 })
}else{
$('.menu ul li').unbind('mousemove');
 $('.menu ul li').unbind('mouseleave');


 var show_menu1 = 0;
 $('.menu ul li').bind('click', function(){
 // $(this).children('ul').slideToggle(200);

 if(show_menu1 == 0){
     $(this).children(".submenu").slideDown();
     //  $(this).children(".menu_map").slideDown();
     show_menu1 = 1;
 }else{
     $(this).children(".submenu").slideUp();
     // $(this).children(".menu_map").slideUp();
     show_menu1 = 0;
 }
 })
 
  $('.menu ul li').on('click', function(e){
     e.stopImmediatePropagation();
 })



}
})
