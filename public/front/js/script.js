$(function(){
  //banner typing
  var typed = new Typed('.banner_typing', {
    strings: [
      'Developer.',
      'Professional Coder.',
      'Developer.',
    ],
    typeSpeed: 50,
    backSpeed: 50,
    loop: true,
    startDelay: 1000,
    backDelay: 1000,
  });

//progress bar1
  $('.progress0').rProgressbar({
    percentage: 100,
    duration: 2000,
    height: '10px',
    width: '97%',
  });
  $('.progress1').rProgressbar({
    percentage: 95,
    duration: 2000,
    height: '10px',
    width: '97%',
  });
  $('.progress2').rProgressbar({
    percentage: 60,
    duration: 2000,
    height: '10px',
    width: '97%',
  });
  $('.progress3').rProgressbar({
    percentage: 70,
    duration: 2000,
    height: '10px',
    width: '97%',
  });
  $('.progress4').rProgressbar({
    percentage: 90,
    duration: 2000,
    height: '10px',
    width: '97%',
  });


//progress bar2
  $('.progress00').rProgressbar({
    percentage: 85,
    duration: 2000,
    height: '10px',
    width: '97%',
  });
  $('.progress01').rProgressbar({
    percentage: 80,
    duration: 2000,
    height: '10px',
    width: '97%',
  });
  $('.progress02').rProgressbar({
    percentage: 90,
    duration: 2000,
    height: '10px',
    width: '97%',
  });
  $('.progress03').rProgressbar({
    percentage: 75,
    duration: 2000,
    height: '10px',
    width: '97%',
  });
  $('.progress04').rProgressbar({
    percentage: 70,
    duration: 2000,
    height: '10px',
    width: '97%',
  });
//mixit-up
  var containerEl = document.querySelector('.mixit-up');
  var mixer = mixitup(containerEl);
 

//slick-slider
$('.sliader-main').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  pauseOnHover:false,
  arrows: true,
  prevArrow:".btn",
  nextArrow:".btn",
  dots:true,
});

//form-validation
  let validator = $('.needs-validation').jbvalidator({
        language: '', //json file url
        errorMessage: true,
        successClass: false,
        html5BrowserDefault: false,
        validFeedBackClass: 'valid-feedback',
        invalidFeedBackClass: 'invalid-feedback',
        validClass: 'is-valid',
        invalidClass: 'is-invalid'
  });

  //custom validate methode
  validator.validator.custom = function(el, event){
      if($(el).is('[name=password]') && $(el).val().length < 5){
          return 'Your password is too weak.';
      }
  }

  validator.validator.example = function(el, event){
      if($(el).is('[name=name]') && $(el).val().length < 3){
          return 'Your name is too short.';
      }
  }
  validator.validator.example = function(el, event){
    if($(el).is('[name=email]') && $(el).val().length < 5){
        return 'Your email is too short.';
    }
}
// sticky-menu + Top-up-Button
$(window).scroll(function(){
  var top = $(this).scrollTop()
  if(top > 900){
    $(".navbar").addClass("sticky-menu")
  }
  else{
    $(".navbar").removeClass("sticky-menu")
  }
  if(top > 300){
    $(".top-up-button").fadeIn(300)
  }
  else{
    $(".top-up-button").fadeOut(300)
  }
});

$(".top-up-button").click(function(){
  $("html,body").animate({scrollTop:0},1000)
});
   //scroll-spy & Smooth-scrolling
   var scrollLink = $('.scroll-link');
   $(scrollLink).on('click', function (event) {
     event.preventDefault();
     $('html,body').animate({
       scrollTop: $(this.hash).offset().top - 10
     }, 1000);
   });
   $(window).on('scroll', function () {
     var scrollTop = $(this).scrollTop();
     scrollLink.each(function () {
       var sectionhead = $(this.hash).offset().top - 10;
       if (scrollTop >= sectionhead) {
         $(this).parent().addClass('active');
         $(this).parent().siblings().removeClass('active');
       }
     });
   });
  

  //  AOS
  AOS.init({
    duration: 1000,
  });

  $(".navbar-toggler").click(function(event) {
    event.stopPropagation();
    $("#hamburger-menu").toggleClass("open");
    $("#menu-container .menu-list").toggleClass("active");
    slideMenu();

    $("body").toggleClass("overflow-hidden");
  });

});
