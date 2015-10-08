
//===============ROTATE WORDS================//


$('#nav-hamburger').on('click', function () {
  $('#responsive-menu').removeClass('hide');
  $('#nav-hamburger').addClass('hide');
});

$('#close-responsive').on('click', function () {
  $('#responsive-menu').addClass('hide');
  $('#nav-hamburger').removeClass('hide');
});

$('.nav-item').on('click', function () {
  $('#responsive-menu').addClass('hide');
  $('#nav-hamburger').removeClass('hide');
});



//============Viewport Fix for Search Input =============//

if ('ontouchstart' in window) {
    /* cache dom references */
    var $nav = $('.nav-menu');

    /* bind events */
    $(document)
    .on('focus', 'input', function() {
        $body.addClass('fixfixed');
    })
    .on('blur', 'input', function() {
        $body.removeClass('fixfixed');
    });
}


//================== EASY SCROLL ===================//



$('a[href*=#]:not([href=#])').click(function() {

  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
    if (target.length) {
      $('html,body').animate({
        scrollTop: target.offset().top - 50
      }, 1000);
      return false;
    }
  }
});

