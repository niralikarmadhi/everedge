
let isLoading = false;

const Handlebars = require("handlebars");

import AOS from 'aos';

export class Plugins{

  init(){
    this.filter();
    this.clear();
    // this.filterBar();
    this.handlebarTrigger();
    this.handlebarBlogTrigger();
    this.iconSlider();

    AOS.init({
      duration: 1000,
      once: true
    });
  }
  
  clear() {
    $('.clearSelected').on('click', function() {
        $(this).prev().find('input').prop( "checked", false );
    })
}

filter() {
    let mainCat = $('.catId').attr('data-cat-id');
    let url = window.location.href;
    url = url.replace(/\?.*/,'');
    
    
    let counter = 0;
    
    $('.filterTrigger').on('click', function() {
        
        url = url+'?filters=';
        $('.product-filter li').each(function() {
            if ($(this).find('input:checked').length > 0){

              
                
                $(this).find('input:checked').each(function() {
                  console.log($(this).val());
                    url += $(this).val()+',';
                });
                
          
               
               
                
            };
            counter++;
        }) 
        url = url.slice(0,-1);
        //alert(url);
        window.location = url;
    });

    if ($('.filter--search').length > 0) {
      $('.search--icon').on('click', function () {
          window.plugins.questionsFilter();
      });
      $(document).on('keypress', function (e) {
        if (e.which == 13) {
          window.plugins.questionsFilter();
        }
      });
    }
}

questionsFilter() {
  var template = "";
  var questionsContainer = $(".questions--wrap");
  var search = $('.filter--search').val();
    let ID = $(".filter--dropdown option:selected").data('id'); 
  
    console.log(search);
    
  var postBody = {
    action: "get_questions_ajax",
    search: search,
    cat: ID,
  };

  if (!isLoading) {
    isLoading = true;
    //window.posts.ajaxLoaderIn();

    jQuery.post(ajaxurl, postBody, function (response) {
      questionsContainer.html("Loading");

      var _response = JSON.parse(response);

      //$('.loader--properties').fadeOut();
      if (
        typeof _response["questions"] != "undefined" &&
        _response["questions"].length > 0
      ) {
        questionsContainer.html("");

        var questions = _response["questions"];
        questions.map((item) => {
          var questionsTemplateSource = document.getElementById("questions-template")
            .innerHTML;
          template = Handlebars.compile(questionsTemplateSource);

          var result = template(item);

          questionsContainer.append(result);
        });

        //var bannerTemplateSource = $(".black--banner").html();


        //$("</ul></div>" + bannerTemplateSource + "<div class='wide--wrap'><ul class='row post--block2'>").insertAfter('.postBlock .post--block:nth-child(6n)');


      } else {
        questionsContainer.html("No Posts Found");
      }
      isLoading = false;
    });
  }
}

handlebarTrigger() {

  var triggerOnClick = $('.loadMore');

  $('body').on('click','.handlebar--trigger', function() {
    
    $('.handlebar--trigger').removeClass('active');
    $(this).addClass('active');
    triggerOnClick.attr('data-items', '4');
    window.plugins.handlebarsFilter();
    // console.log(this);
  })

  // load more case studies button
  triggerOnClick.on('click', function(e){
    e.preventDefault();
    var loadMoreVal = parseInt(triggerOnClick.attr('data-items')) + parseInt('4');
    triggerOnClick.attr('data-items', loadMoreVal);

    $( ".filter--title li" ).hasClass("active");

    window.plugins.handlebarsFilter();

  });
}

handlebarsFilter() {
  var id = $('.handlebar--trigger.active').attr('data-id');

  var template = "";
  var handlebarsContainer = $(".case-studies-grid");

  // load more items
  var loadMoreTrigger = $(".loadMore");
  var loadMoreAmount = loadMoreTrigger.attr('data-items');
  var offset = 10;
    console.log(loadMoreAmount);
  var postBody = {
    action: "get_handlebars_ajax",
    cat: id,
    loadMoreAmount: loadMoreAmount,
  };

  if (!isLoading) {
    isLoading = true;
    //window.posts.ajaxLoaderIn();

    jQuery.post(ajaxurl, postBody, function (response) {
      handlebarsContainer.html("Loading");

      var _response = JSON.parse(response);

      //$('.loader--properties').fadeOut();
      if (
        typeof _response["handlebars"] != "undefined" &&
        _response["handlebars"].length > 0
      ) {
        handlebarsContainer.html("");

        var handlebars = _response["handlebars"];
        handlebars.map((item) => {
          var handlebarsTemplateSource = document.getElementById("handlebar-template")
            .innerHTML;
          template = Handlebars.compile(handlebarsTemplateSource);

          var result = template(item);

          handlebarsContainer.append(result);
        });

        //var bannerTemplateSource = $(".black--banner").html();


        //$("</ul></div>" + bannerTemplateSource + "<div class='wide--wrap'><ul class='row post--block2'>").insertAfter('.postBlock .post--block:nth-child(6n)');

        loadMoreTrigger.attr('data-items', _response['loadMoreNumber']);


      } else {
        handlebarsContainer.html("No Posts Found");
      }
      isLoading = false;
    });
  }
}


// blog post handlebars

handlebarBlogTrigger() {

  var triggerOnClick = $('.loadMoreBlog');

  $('body').on('click','.handlebar--trigger__blog', function() {
    
    $('.handlebar--trigger__blog').removeClass('active');
    $(this).addClass('active');
    window.plugins.handlebarsBlogFilter(true);
    // console.log(this);
  })


  // load more blog button
  triggerOnClick.on('click', function(e){
    e.preventDefault();
    
    $( ".filter--title li" ).hasClass("active");

    window.plugins.handlebarsBlogFilter();

  });
}

handlebarsBlogFilter(categoryClick = false) {

  var id = $('.handlebar--trigger__blog.active').attr('data-id');

  var template = "";
  var handlebarsBlogContainer = $(".blog--wrap");

  // load more items
  var loadMoreTrigger = $(".loadMoreBlog");
  var loadMoreAmount = loadMoreTrigger.attr('data-items');
  var offset = parseInt(loadMoreAmount);

  if(categoryClick){
    loadMoreAmount = 6;
    offset = 0;
  }

  var postBody = {
    action: "get_blog_ajax",
    cat: id,
    loadMoreAmount: loadMoreAmount,
    offset: offset
  };

  if (!isLoading) {
    isLoading = true;
    //window.posts.ajaxLoaderIn();

    jQuery.post(ajaxurl, postBody, function (response) {

      if(categoryClick){
        handlebarsBlogContainer.html('');
      }
      //handlebarsBlogContainer.html("Loading");

      var _response = JSON.parse(response);

      //$('.loader--properties').fadeOut();
      if (
        typeof _response["handlebars-blog"] != "undefined" &&
        _response["handlebars-blog"].length > 0
      ) {
        
        //handlebarsBlogContainer.html("");

        var handlebarsBlog = _response["handlebars-blog"];
        handlebarsBlog.map((item) => {
          var handlebarsBlogTemplateSource = document.getElementById("handlebar-blog-template")
            .innerHTML;
          template = Handlebars.compile(handlebarsBlogTemplateSource);

          var result = template(item);

          handlebarsBlogContainer.append(result);
        });

        loadMoreTrigger.attr('data-items', offset + 6);


        if(_response['noMorePosts']){
          loadMoreTrigger.addClass('d-none');
        }else{
          loadMoreTrigger.removeClass('d-none');
        }

      } else {
        //handlebarsBlogContainer.html("No Posts Found");
      }

      isLoading = false;
    });
  }
}
iconSlider(){
  $('.icon--slider').slick({
    slidesToShow:3,
    slidesToScroll:1,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 10000,
    cssEase: 'linear',
    variableWidth: true,
    arrows:false
  })
}
}
