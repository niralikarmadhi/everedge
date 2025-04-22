

export class Helpers{

  init() {
    this.wooMessages();
  }


  isInScrollableViewport($elem) {
    var offset = $(window).height() / 2;
    var loadingOffset = offset;

    var elementTop = $elem.offset().top;
    var elementBottom = elementTop + $elem.outerHeight();
    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + loadingOffset;
    return elementBottom > viewportTop && elementTop < viewportBottom;
  }

}
