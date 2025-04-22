import 'slick-carousel';
require("@fancyapps/ui");
require("@fancyapps/fancybox");
export class App{

  init() {

    this.variationsLogic();
    this.accordionTrigger();
    this.wooMessages();
    this.slickSliders();
    this.wooCommerceCarts();
    this.productQtyControls();
    this.customPlanter();

    $('.woocommerce-message .close-button').on('click', function(){
      $('.woocommerce-message').fadeOut(function(){$(this).remove();});
    });

  }

  customPlanter(){

    var triggerOnClick = $('.planter-form-checkbox-group .custom--radio');

    triggerOnClick.on('click', function(e){

      var activeCheckbox = $(this).find('input[type="radio"]'),
          activeObject = $(this);

          activeObject.addClass('active');
          $('.planter-form-checkbox-group .custom--radio').not(activeObject).removeClass('active');

    });

  }


  productQtyControls(){

    $('.cartPlusProduct').on('click', function() {
      let val = parseInt($(this).parent().find('.qty').val()) + 1;
      $(this).parent().find('.qty').val(val).trigger('change');
    }); 
    
    $('.cartMinusProduct').on('click', function() {
      let val = parseInt($(this).parent().find('.qty').val()) - 1;
      if (val >= 0) {
        let val = parseInt($(this).parent().find('.qty').val()) - 1;
        $(this).parent().find('.qty').val(val).trigger('change');
      }
    });


  }

  wooCommerceCarts() {
    $('.product-share-box').on('click', function() {
      $('.addtoany_shortcode').toggleClass('active');
    });

    $('.cartPlus').on('click', function() {
      $('button[name="update_cart"]').removeAttr('disabled').removeAttr('aria-disabled');

      //let key = $(this).attr('data-key');
      let val = parseInt($(this).parent().find('.qty').val()) + 1;
      $(this).parent().find('.qty').val(val).trigger('change');
    }); 
    
    $('.cartMinus').on('click', function() {
      $('button[name="update_cart"]').removeAttr('disabled').removeAttr('aria-disabled');
      let val = parseInt($(this).parent().find('.qty').val()) - 1;
      if (val >= 0) {
        let val = parseInt($(this).parent().find('.qty').val()) - 1;
        $(this).parent().find('.qty').val(val).trigger('change');
      }
    });

    $('.cartTrigger').on('click', function() {
      $('.mini-cart--wrap').addClass('active');
    })
    $('.close-button').on('click', function() {
      $('.mini-cart--wrap').removeClass('active');
    })
  }

  wooMessages(){


    if ($('.woocommerce-message').length) {
        // // Move WooCommerce messages to a hidden div for FancyBox
        // var messageHtml = $('.woocommerce-message').detach();
        // $('body').append('<div id="woocommerce-message-fancybox" style="display: none;">' + messageHtml.html() + '</div>');

        if ($('.woocommerce-message:contains(added to your cart)')) {
          $('.mini-cart--wrap').addClass('active');
        } else {
          // Trigger FancyBox
            jQuery.fancybox.open({
              src: '.woocommerce-message',
              type: 'inline'
          });
        }
    }

  }

  variationsLogic () {

    var variationsForm =  $('form.variations_form');



    $('.variations_form').on('change', '.variations', function(event) {

      if($('.woocommerce-variation .woocommerce-Price-amount').length > 0){
        var newVariationPrice = $('.woocommerce-variation .woocommerce-Price-amount').html(),
            oldPriceBlock = $('.product-prize .wrap--price');

            console.log(newVariationPrice);

            oldPriceBlock.html(newVariationPrice);
      }
       
    });

  }

  accordionTrigger () {
    var accordionToggle = $('.accordion-item');

    $('body').on('click','.accordion--trigger', function (event) {
      var currentObject = $(this), //Assigning current mouse over link

      currentObjectIndex = currentObject.data('index');
      var activeObject = $('.accordion--block__' + currentObjectIndex);
      var notActiveObjects = $('.accordion--block').not(activeObject);

      notActiveObjects.removeClass('active');
      if (activeObject.hasClass('active')) {

        activeObject.removeClass('active');
        currentObject.removeClass('active');
      } else {
        activeObject.addClass('active');
        currentObject.addClass('active');
        //$(this+' .icon').addClass('active');
      }

      $('.accordion--text').on('click', function (event) {
        event.stopPropagation();
      });

    });
  }

  slickSliders() {

    $('.choose-slider').slick({
      dots: false,
      arrows: false,
      infinite: true,
      speed: 400,
      centerMode: true,
      autoplay: true,
      slidesToShow: 1,
      responsive: [
          {
              breakpoint: 768,
              settings: {
                 slidesToShow: 1,
                 centerMode: false,
              }
          }
      ]
  });
  // resources slider
  $('.resources-slider').slick({
      dots: false,
      arrows: false,
      infinite: false,
      speed: 400,
      autoplay: false,
      slidesToShow: 3,
      responsive: [
          {
              breakpoint: 1024,
              settings: {
                  slidesToShow: 2,
              }
          },
          {
              breakpoint: 768,
              settings: {
                 slidesToShow: 1,
                 centerMode: false,
              }
          }
      ]
  });

   // Footer Slider
   $('.footer-slider').slick({
      infinite: false,
      slidesToShow: 6,
      slidesToScroll: 1,
      arrows: false,
      autoplay: true,
      speed: 300,
      dots: false,
      responsive: [
      {
          breakpoint: 1024,
          settings: {
          slidesToShow: 4
          }
      },
      {
          breakpoint: 767,
          settings: {
          slidesToShow: 3
          }
      },
      ]
  });

   // Notification Slider
   $('.notification-slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    speed: 300,
    dots: false
  });

  // Target the header element
  var target = document.querySelector('header');

  // Create a MutationObserver to watch for class changes
  var observer = new MutationObserver(function(mutations) {
      mutations.forEach(function(mutation) {
          if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
              // Check if the class has been removed
              if (!jQuery(mutation.target).hasClass('notification-slider')) {
                  // Reinitialize the Slick slider when the class is removed
                  jQuery('.notification-slider').slick('unslick'); // Destroy the existing instance
                  jQuery('.notification-slider').slick(); // Reinitialize slick
              }
          }
      });
  });

  // Configure the observer to watch for attribute changes (class changes)
  observer.observe(target, {
      attributes: true // Watch for attribute changes (like class removal)
  });

  // product silder
  $('.product-slider').slick({
      dots: false,
      arrows: true,
      infinite: true,
      speed: 400,
      autoplay: true,
      autoplaySpeed: 3000,
      slidesToShow: 1,
      responsive: [
          {
              breakpoint: 768,
              settings: {
                  dots: false,
                 slidesToShow: 1,
                 centerMode: false,
              }
          }
      ]
  });

  $('.large-slider').slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 300,
    autoplay: true,
    slidesToShow: 1,
    responsive: [
      {
          breakpoint: 1024,
          settings: {
              slidesToShow: 3,
          }
      },
      {
          breakpoint: 768,
          settings: {
              slidesToShow: 1,
          }
      }
    ]
  });
  
  // About img Slider
  $('.about-image-slider').slick({
      arrows: true,
      infinite: false,
      speed: 300,
      // autoplay: true,
      slidesToShow: 1.8,
      dots: true,
  });

  // Team Slider
  $('.team-slider').slick({
    dots: false,
    infinite: false,
    arrows: true,
    speed: 300,
  //   autoplay: true,
    slidesToShow: 2.5,
    responsive: [
      {
          breakpoint: 1024,
          settings: {
              slidesToShow: 2.5,
          }
      },
      {
          breakpoint: 768,
          settings: {
              slidesToShow: 2,
              arrows: false,
          }
      },
      {
          breakpoint: 576,
          settings: {
              slidesToShow: 1,
              arrows: false,
          }
      }
    ]
  });
  
/* related products slider */
$('.logos-slider').slick({
    dots: false,
    arrows: false,
    infinite: false,
    speed: 400,
    autoplay: true,
    slidesToShow: 6,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 5,
                arrows: false,
            }
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 3,
            }
        }
    ]
});

  }

  slickSLider (){

  }

}