import $ from 'jquery';
import '@popperjs/core';
import 'bootstrap/dist/js/bootstrap';
import 'select2/dist/js/select2.min.js';



import {App} from './parts/app.js'
import {Plugins} from './parts/plugins.js'
import {Parts} from './parts/parts.js'


// export for others scripts to use
window.$ = $;
window.jQuery = jQuery;

$(function () {

    window.windowWidth = $(window).width();
    window.windowHeight = $(window).height();

    window.isiPhone = navigator.userAgent.toLowerCase().indexOf('iphone');
    window.isiPad = navigator.userAgent.toLowerCase().indexOf('ipad');
    window.isiPod = navigator.userAgent.toLowerCase().indexOf('ipod');

    //Functions List Below

    window.app = new App();
    window.app.init();

    window.plugins = new Plugins();
    window.plugins.init();

    window.parts = new Parts();
    window.parts.init();

});

// ===========================================================================
// Select2 JS
$(document).ready(function() {
    $('.select-dropdown').select2();
    //$('.variations select').select2();


    // $('.variations select').on('select2:select', function (e) {

    //     var data = e.params.data;
        
    //     var text = data.id.toLowerCase();;
    //     console.log($('.variations select option[value="'+text+'"]').closest('select'));
    //     $('.variations select option[value="'+text+'"]').closest('select').val(text).addClass('test');
    //     // $('.variations select.select2-hidden-accessible option[value="'+text+'"]').attr('selected', 'selected');
    //      $('.variations select').trigger('change');
    // });

    $('.product-option, .disable-search').select2({
            minimumResultsForSearch: -1
    });
});


// fancy box
// require('@fancyapps/ui/src/Fancybox/Fancybox');

// ===========================================================================



//header
$(window).scroll(function(){
    var sticky = $('header'),
        scroll = $(window).scrollTop();

    if (scroll >= 30) sticky.addClass('header-fixed');
    else sticky.removeClass('header-fixed');
});
var p = $( "header" );
$( ".fake-header" ).css( "height", p.innerHeight() );


//mega menu script
$("[data-menu='true']").click(function(){
    var isOpen = $(this).hasClass("open");
    var siblings = $(this).parent().siblings().find(".open");
    var openedMenu = siblings.data("menu-name");
    $(openedMenu).toggleClass("show");
    siblings.removeClass("open");
    $(this).toggleClass("open");
    var megamenu = $(this).data("menu-name");
    $(megamenu).toggleClass("show");
    if(!isOpen){
        $("body").addClass("fixed-bg");
        $("body").addClass("overflowHidden");
    }else{
        $("body").removeClass("fixed-bg");
        $("body").removeClass("overflowHidden");
    }
    if (!isOpen) {
        $("header").addClass("white-bg");
      } else {
        $("header").removeClass("white-bg");
      }
});

$(".menu-bg-overlay, .menu-close").click(function () {
    $(".custom-mega-menu").removeClass("show");
    $("body").removeClass("fixed-bg");
    $(".mega-menu").removeClass("open"); 
    $(".navbar").removeClass("white-bg");
    $("header").removeClass("white-bg");
});

$(".mega-menu-back").click(function () {
    $(".custom-mega-menu").removeClass("show");
    $("body").removeClass("fixed-bg");
    $(".mega-menu").removeClass("open"); 
});

// mega menu tabs
$("[data-mega-menu='true']").click(function(){
    $('.mega-menu-result-tab').removeClass('show');
    $('.our-category').removeClass('open');
    $(this).addClass('open');
    let menu = $(this).attr('data-mega-menu-name');
    $(menu).addClass('show');

});

$(".humbrger-menu").click(function () {
    

    if($("body").hasClass('overflow')){
        $("body").removeClass("overflow");
    }else{
        $("body").addClass("overflow");
    }

    $('.mobile-menu-closed').hide();
    $('.mobile-menu-open').show();


  });
  $(".menu-close").click(function () {
    $("body").removeClass("overflow");

    $('.mobile-menu-closed').show();
    $('.mobile-menu-open').hide();
  });



// mega menu third layer active
$(document).ready(function(){
    $(".our-category").click(function(){
        $(".mega-menu-result").addClass("show-megamenu");
    });

    if ($(window).width() <= 991) {
        $(".mega-menu-back, .menu-close").click(function () {
            $(".our-category").removeClass("open");
            $(".mega-menu-result-tab").removeClass("show");
            $(".mega-menu-result").removeClass("show-megamenu");
        });
    }
});

$(document).ready(function(){
    $(".filter-close").click(function(){
      $(".filter-trigger").removeClass("open");
      $(".product-filter").removeClass("show");
    //   $("body").removeClass("fixed-bg");
    });
});

// open menu responsive
$('.global-search-btn').click(function(){
    $('.main-menu > li:not(.search-box)').addClass('menu-visible');
    $('.searchglobal').addClass('menu-show');
});
$('.search-close').click(function(){
    $('.main-menu > li:not(.search-box)').removeClass('menu-visible');
    $('.searchglobal').removeClass('menu-show');
});

$('.planter-form-section .btn-arrow').on('click', function() {
        $("html, body").animate({
        scrollTop: 0
        }, 400);
       
});

// Step Form JS
const allPreviousButtons = document.querySelectorAll('.prev-btn')
const allNextButtons = document.querySelectorAll('.next-btn')
const steps = document.querySelectorAll('.step')
let activeStep = 0

allNextButtons.forEach(nextButton => {
    nextButton.addEventListener('click', () => {
        activeStep = activeStep + 1
        visibleActiveStep(activeStep);
        console.log(activeStep);
    })
});

allPreviousButtons.forEach(previousButton => {
    previousButton.addEventListener('click', () => {
        activeStep = activeStep - 1
        visibleActiveStep(activeStep);
        console.log(activeStep);
    })
});


const visibleActiveStep =  (active) => {
    steps.forEach((step, index) => {
        // console.log(step);
        const classes = step.classList
        if (index === active) {
            classes.add('d-block')
            classes.remove('d-none')
        } else {
            classes.remove('d-block')
            classes.add('d-none')
        }

    })
}

// Filter JS
$(".filter-tab-btn").click(function(){
    var value = $(this).attr('data-filter');
    if(value == "all")
    {
        $('.filter').show('700');
    }
    else
    {
        $(".filter").not('.'+value).hide('2000');
        $('.filter').filter('.'+value).show('2000');
    }
    var filterOpen = $(this).hasClass("active");
    if(filterOpen){
        $('.filter-tab-btn').removeClass('active');
    }else {
        var siblings = $('.filter-tab-nav').find(".active");
        siblings.removeClass('active');
        $(this).addClass('active');
    }
});