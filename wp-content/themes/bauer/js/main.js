jQuery(document).ready(function ($) {
  // hamburger
  $(".hamburger").click(function () {
    $(".menu-mobile").addClass("active");
  });
  $(".close-button").click(function () {
    $(".menu-mobile").removeClass("active");
  });
  $(".mob-wrapper__link").click(function () {
    $(".menu-mobile").removeClass("active");
  });

  // projects
  $(".projects__wrapper").slick({
    slidesToShow: 3,
    centerMode: true,
    centerPadding: "0",
    speed: 300,
    arrows: false,
    dots: true,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
  // works-slider
//   $(".works__mainphoto").slick({
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     dots: false,
//     arrows: false,
//     infinite: true,
//     asNavFor: ".works__minphoto",
//   });
//   $(".works__minphoto").slick({
//     slidesToShow: 4,
//     slidesToScroll: 1,
//     dots: false,
//     arrows: false,
//     infinite: true,
//     focusOnSelect: true,
//     asNavFor: ".works__mainphoto",
//   });
//   
   $('.works__mainphoto').each(function() {
        $(this).slick({
            slidesToShow: 1,
			slidesToScroll: 1,
			dots: false,
			arrows: false,
			infinite: true,
			asNavFor: $(this).closest('.works__photos').find('.works__minphoto'),
        });
    });
	$('.works__minphoto').each(function() {
        $(this).slick({
            slidesToShow: 4,
			slidesToScroll: 1,
			dots: false,
			arrows: false,
			infinite: true,
			focusOnSelect: true,
			asNavFor: $(this).closest('.works__photos').find('.works__mainphoto'),
        });
    });
  $(".positions__tabs li").click(function () {
    $(".positions__tabs li").removeClass("active");
    $(this).addClass("active");
    $(".products__wrapper")
      .removeClass("active")
      .eq($(this).index())
      .addClass("active");
  });
});
