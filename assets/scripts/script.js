$(document).ready(function () {

  function resizeHeight() {

    $('.box-area').height($('.box-area').width() * 0.6);

    let cornerHeight = $('.top-left-corner').height();
    let mainHeight = $('.main-content').height();

    $('.left-border').height(mainHeight - 2 * cornerHeight - 50);
    $('.right-border').height(mainHeight - 2 * cornerHeight - 50);
    $('.left-sec-border').height(mainHeight - 2 * cornerHeight - 100);
    $('.right-sec-border').height(mainHeight - 2 * cornerHeight - 100);

    let leftBorder = $('.left-sec-border').offset().left;
    if ( $('.heading-line-left').length ) {
      let border = $('.heading-line-left').offset().left;
      let countDistance = border - leftBorder;
      $('.heading-line-left').css('left', -countDistance);
      $('.heading-line-right').css('right', -countDistance);
    }
  }
  resizeHeight()

  $(window).resize(function () {
    resizeHeight()
  })
  
  $('#accordion-all-exams').on('shown.bs.collapse', function() {
    resizeHeight()
  }).on('hidden.bs.collapse', function() {
    resizeHeight()
  });
  
})