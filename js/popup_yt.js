(function ($) {
  $('.popup-youtube, .popup-vimeo').magnificPopup({
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });

  $('.gallery_img').magnificPopup({
    type: 'image',
    gallery: {
      enabled: true
    }
  });
}(jQuery));
