// Scroll when clicking on nav link

$('.section-driver').click(function() {
    var sectionTo = $(this).attr('href');
    var navHeight = $('nav.navbar').outerHeight();
    $('html, body').animate({
      scrollTop: $(sectionTo).offset().top - navHeight
    }, 1500);
});