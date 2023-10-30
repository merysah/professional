$(document).ready(function () {

  function resizeHeight() {

    // let leftBorder = $('.border-frame').offset().left;
    // if ( $('.heading-line-left').length ) {
    //   let border = $('.heading-line-left').offset().left;
    //   let countDistance = border - leftBorder - 13;
    //   $('.heading-line-left').css('left', -countDistance);
    //   $('.heading-line-right').css('right', -countDistance);
    // }
  }
  resizeHeight()

  $(window).resize(function () {
    resizeHeight()
  }) 
  
})