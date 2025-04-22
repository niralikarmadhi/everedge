//fancybox js
// require("@fancyapps/ui");

export class Parts{

  init() {
    this.loginButton();
    this.planterMain();
    this.showLogin();

    this.relocateCartAccountCreation();
  }

  relocateCartAccountCreation() {

    $( ".checkout-page" ).ready(function() {
      console.log( "ready!" );
      $(".woocommerce-account-fields").appendTo("#shipping_email_field");
    });

  }

  showLogin() {
    $(".showlogin").on("click", function () {
      $(".woocommerce--shopBeforeText").toggleClass("show");
    });
  }

  loginButton() {

    $(".login--toggle__button").on("click", function () {
      $(".login--toggle").toggleClass("active");
    })

  }

  planterMain(){

    var triggerForSizes = $('[data-class="wpcf7cf_group"] input[type="text"]'),
        triggerForFinish = $('.planter-form-section input[name="Finish"]'),
        triggerForShape = $('.planter-form-section input[name="PlanterShape"]');

    triggerForSizes.on('keyup', function(){
      var thisValue = $(this).val(),
          targetId = $(this).attr('name').toLocaleLowerCase(),
          targetParent = $(this).closest('[data-class="wpcf7cf_group"]'),
          targetObject = targetParent.find('.' + targetId);

          targetObject.text(thisValue);
    });

    triggerForFinish.on('change', function(){
      var targetValue = $(this).val(),
          blockedValue = 'Cor-Ten',
          blockedValue2 = 'Galvanised',
          targetBlock = $('.targetColour');
      
      if(targetValue == blockedValue || targetValue == blockedValue2){
        targetBlock.hide();
        $(".targetColour input").attr('checked', false);
        $(".fallback-colour input").attr('checked', true);
      }else{
        targetBlock.show();
      }

      console.log($(this).val());
      console.log(targetValue == blockedValue);
    });

    triggerForShape.on('change', function(){
      var targetValue = $(this).val(),
          circleValue = 'Round',
          targetBlock = $('.targetEdge'),
          defaultConnection = $('.connection-default'),
          altConnection = $('.connection-alt');
      
      if(targetValue == circleValue){
        targetBlock.hide();
        defaultConnection.hide();
        altConnection.show();
      }else{
        targetBlock.show();
        defaultConnection.show();
        altConnection.hide();
      }

      console.log($(this).val());
      console.log(targetValue == circleValue);
    });

  }


}
