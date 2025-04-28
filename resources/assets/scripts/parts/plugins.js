let isLoading = false;

const Handlebars = require("handlebars");

import AOS from "aos";

export class Plugins {
  init() {
    this.filter();
    this.clear();
    // this.filterBar();
    this.handlebarTrigger();
    this.handlebarBlogTrigger();
    this.iconSlider();
    this.testimonialSlider();
    this.readMoreReadLess();
    this.ProductTab();
    this.inspirationGallerySlider();

    AOS.init({
      duration: 1000,
      once: true,
    });
  }

  clear() {
    $(".clearSelected").on("click", function () {
      $(this).prev().find("input").prop("checked", false);
    });
  }

  filter() {
    let mainCat = $(".catId").attr("data-cat-id");
    let url = window.location.href;
    url = url.replace(/\?.*/, "");

    let counter = 0;

    $(".filterTrigger").on("click", function () {
      url = url + "?filters=";
      $(".product-filter li").each(function () {
        if ($(this).find("input:checked").length > 0) {
          $(this)
            .find("input:checked")
            .each(function () {
              console.log($(this).val());
              url += $(this).val() + ",";
            });
        }
        counter++;
      });
      url = url.slice(0, -1);
      //alert(url);
      window.location = url;
    });

    if ($(".filter--search").length > 0) {
      $(".search--icon").on("click", function () {
        window.plugins.questionsFilter();
      });
      $(document).on("keypress", function (e) {
        if (e.which == 13) {
          window.plugins.questionsFilter();
        }
      });
    }
  }

  questionsFilter() {
    var template = "";
    var questionsContainer = $(".questions--wrap");
    var search = $(".filter--search").val();
    let ID = $(".filter--dropdown option:selected").data("id");

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
            var questionsTemplateSource =
              document.getElementById("questions-template").innerHTML;
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
    var triggerOnClick = $(".loadMore");

    $("body").on("click", ".handlebar--trigger", function () {
      $(".handlebar--trigger").removeClass("active");
      $(this).addClass("active");
      triggerOnClick.attr("data-items", "4");
      window.plugins.handlebarsFilter();
      // console.log(this);
    });

    // load more case studies button
    triggerOnClick.on("click", function (e) {
      e.preventDefault();
      var loadMoreVal =
        parseInt(triggerOnClick.attr("data-items")) + parseInt("4");
      triggerOnClick.attr("data-items", loadMoreVal);

      $(".filter--title li").hasClass("active");

      window.plugins.handlebarsFilter();
    });
  }

  handlebarsFilter() {
    var id = $(".handlebar--trigger.active").attr("data-id");

    var template = "";
    var handlebarsContainer = $(".case-studies-grid");

    // load more items
    var loadMoreTrigger = $(".loadMore");
    var loadMoreAmount = loadMoreTrigger.attr("data-items");
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
            var handlebarsTemplateSource =
              document.getElementById("handlebar-template").innerHTML;
            template = Handlebars.compile(handlebarsTemplateSource);

            var result = template(item);

            handlebarsContainer.append(result);
          });

          //var bannerTemplateSource = $(".black--banner").html();

          //$("</ul></div>" + bannerTemplateSource + "<div class='wide--wrap'><ul class='row post--block2'>").insertAfter('.postBlock .post--block:nth-child(6n)');

          loadMoreTrigger.attr("data-items", _response["loadMoreNumber"]);
        } else {
          handlebarsContainer.html("No Posts Found");
        }
        isLoading = false;
      });
    }
  }

  // blog post handlebars

  handlebarBlogTrigger() {
    var triggerOnClick = $(".loadMoreBlog");

    $("body").on("click", ".handlebar--trigger__blog", function () {
      $(".handlebar--trigger__blog").removeClass("active");
      $(this).addClass("active");
      window.plugins.handlebarsBlogFilter(true);
      // console.log(this);
    });

    // load more blog button
    triggerOnClick.on("click", function (e) {
      e.preventDefault();

      $(".filter--title li").hasClass("active");

      window.plugins.handlebarsBlogFilter();
    });
  }

  handlebarsBlogFilter(categoryClick = false) {
    var id = $(".handlebar--trigger__blog.active").attr("data-id");

    var template = "";
    var handlebarsBlogContainer = $(".blog--wrap");

    // load more items
    var loadMoreTrigger = $(".loadMoreBlog");
    var loadMoreAmount = loadMoreTrigger.attr("data-items");
    var offset = parseInt(loadMoreAmount);

    if (categoryClick) {
      loadMoreAmount = 6;
      offset = 0;
    }

    var postBody = {
      action: "get_blog_ajax",
      cat: id,
      loadMoreAmount: loadMoreAmount,
      offset: offset,
    };

    if (!isLoading) {
      isLoading = true;
      //window.posts.ajaxLoaderIn();

      jQuery.post(ajaxurl, postBody, function (response) {
        if (categoryClick) {
          handlebarsBlogContainer.html("");
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
            var handlebarsBlogTemplateSource = document.getElementById(
              "handlebar-blog-template"
            ).innerHTML;
            template = Handlebars.compile(handlebarsBlogTemplateSource);

            var result = template(item);

            handlebarsBlogContainer.append(result);
          });

          loadMoreTrigger.attr("data-items", offset + 6);

          if (_response["noMorePosts"]) {
            loadMoreTrigger.addClass("d-none");
          } else {
            loadMoreTrigger.removeClass("d-none");
          }
        } else {
          //handlebarsBlogContainer.html("No Posts Found");
        }

        isLoading = false;
      });
    }
  }
  iconSlider() {
    $(".icon--slider").slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 0,
      speed: 10000,
      cssEase: "linear",
      variableWidth: true,
      arrows: false,
    });
  }
  testimonialSlider() {
    $(".testimonial-slider").slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      dots: false,
      arrows: false,
    });
  }
  ProductTab() {
    $(document).ready(function () {
      $(".tab-btn").on("click", function () {
        var tabId = $(this).data("tab");

        // Remove active classes
        $(".tab-btn").removeClass("active");
        $(".product-tab-content").removeClass("active");

        // Add active to clicked tab
        $(this).addClass("active");
        $("#" + tabId).addClass("active");
      });

      $(".product-color-variations").each(function () {
        var $group = $(this);
        var $swatches = $group.find(".swatch");
        var $box = $group.closest(".product-box");
        var $image = $box.find(".dynamic-image");
        var $title = $box.find(".dynamic-title");
        var $price = $box.find(".dynamic-price");

        // Function to update product info
        function updateProductInfo($swatch) {
          var newImg = $swatch.data("image");
          var newTitle = $swatch.data("title");
          var newPrice = $swatch.data("price");

          if (newImg) $image.attr("src", newImg);
          if (newTitle) $title.text(newTitle);
          if (newPrice) $price.html(newPrice);
        }

        $swatches.on("click", function () {
          $swatches.removeClass("active");
          $(this).addClass("active");
          updateProductInfo($(this));
        });

        var $first = $swatches.first();
        if ($first.length) {
          $first.addClass("active");
          updateProductInfo($first);
        }
      });
    });
  }
  readMoreReadLess() {
    $(document).ready(function () {
      $(".description-text").each(function () {
        var $content = $(this);
        var defaultHeight =
          $(window).width() <= 393
            ? 180
            : $(window).width() <= 426
            ? 150
            : $(window).width() <= 768
            ? 80
            : 120;
        var fullHeight = $content[0].scrollHeight;
        // Set initial max-height and overflow
        $content.css({
          "max-height": defaultHeight + "px",
          overflow: "hidden",
        });
        // Check if content is larger than default height
        if (fullHeight > defaultHeight) {
          $content.after(
            '<div class="read-more mt-4 pt-2 text-base alt-font fw-medium text-7C7C7C text-decoration-underline cursor-pointer">Read more</div>'
          );
        }
      });
      // Read more/less button click event
      $(document).on("click", ".read-more", function () {
        var $button = $(this);
        var $content = $button.prev(".description-text");
        var fullHeight = $content[0].scrollHeight;
        var defaultHeight =
          $(window).width() <= 393
            ? 180
            : $(window).width() <= 426
            ? 150
            : $(window).width() <= 768
            ? 80
            : 120;
        // Close all other content before opening the clicked one
        $(".description-text")
          .not($content)
          .each(function () {
            $(this)
              .removeClass("active")
              .animate(
                {
                  "max-height": defaultHeight + "px",
                },
                500
              );
            $(this).next(".read-more").text("Read More");
          });
        // Toggle the clicked content
        if ($content.hasClass("active")) {
          $content.removeClass("active").animate(
            {
              "max-height": defaultHeight + "px",
            },
            500
          );
          $button.text("Read More");
        } else {
          $content.addClass("active").animate(
            {
              "max-height": fullHeight + "px",
            },
            500
          );
          $button.text("Read Less");
        }
      });
      // Window resize event
      $(window).resize(function () {
        $(".description-text").each(function () {
          var $content = $(this);
          var defaultHeight =
            $(window).width() <= 393
              ? 180
              : $(window).width() <= 426
              ? 150
              : $(window).width() <= 768
              ? 80
              : 120;
          if (!$content.hasClass("active")) {
            $content.css({
              "max-height": defaultHeight + "px",
            });
          }
        });
      });
    });
  }
  inspirationGallerySlider() {
    $(document).ready(function($) {
      var allItems = [];

      $('.carousel-item').each(function() {
          allItems.push($(this).clone());
      });

      $(document).on("click", ".grid-item", function() {
          var selectedCategory = $(this).data("category");
          var selectedIndex = $(this).data("index");

          var $carouselInner = $("#inspirationCarousel .carousel-inner");
          $carouselInner.empty();

          var newItems = [];

          allItems.forEach(function(item, index) {
              var itemCategory = item.data("tag");
              if (itemCategory === selectedCategory) {
                  var newItem = item.clone();
                  newItems.push(newItem);
              }
          });

          if (newItems.length) {
              newItems[0].addClass("active");
              $carouselInner.append(newItems);
          }
          var memberId = $(this).data("index");
          $(".carousel-item").removeClass("active");
          $("#" + memberId).addClass("active");
      });
  });
  }
}
