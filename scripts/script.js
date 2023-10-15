$(document).ready(function () {

  function resizeHeight() {
    const cornerHeight = $('.top-left-corner').height();
    const mainHeight = $('.main-content').height();

    $('.left-border').height(mainHeight - 2 * cornerHeight - 50);
    $('.right-border').height(mainHeight - 2 * cornerHeight - 50);
    $('.left-sec-border').height(mainHeight - 2 * cornerHeight - 100);
    $('.right-sec-border').height(mainHeight - 2 * cornerHeight - 100);

    const docWidth = $(document).width();
    const sectionWidth = $('section').width();

    let countSpace = (docWidth - sectionWidth) / 2;
    $('.heading-line-left').css('left', -(countSpace - 30));
    $('.heading-line-right').css('right', -(countSpace - 30));

    $('.box-area').height($('.box-area').width() * 0.6);
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