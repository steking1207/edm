$('.header .dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(100);
}, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(100);
});
$('.dropdown-menu').click(function(event){
    event.stopPropagation();
});

$('.slick-gallery').slick({
    dots:true,
});

$('.slider-school-gallery').owlCarousel({
    loop: true,
    items: 1,
    nav: true,
    dots: true,
});

//        $(function(){
//            $(".dropdown-menu a.dropdown-item").click(function(){
//                $(this).parents(".dropdown").find('.dropdown-toggle').text($(this).text());
//                $(this).parents(".dropdown").find('.dropdown-toggle').val($(this).text());
//                $(this).closest(".dropdown-menu").prev().dropdown("toggle");
//            });
//        });

function inputSearch_keyup() {
    var $this = $(this);
    var $parent = $this.parent('.dropdown');

    if ($this.val().length > 0 && !$parent.hasClass('open')) {
        $this.siblings('span.toggle-helper').dropdown('toggle');
    } else if ($this.val().length == 0) {
        $('#inputFilterList').empty();
    };
};

$(function () {
    $('[data-toggle="tooltip"]').tooltip();

    $('.btn-step-prev').click(function(e){
        e.preventDefault();
        $('.nav-request a[href="#tab-step1"]').tab('show');
        $('.nav-request .nav-link').toggleClass('active');
    });
    $('.btn-step-next').click(function(e){
        e.preventDefault();
        $('.nav-request a[href="#tab-step2"]').tab('show');
        $('.nav-request .nav-link1').removeClass('active');
        $('.nav-request .nav-link2').toggleClass('active');
    });

    $('#inputFilterTextbox').on('keyup', inputSearch_keyup);

    $("#customCheck-agree").click(function () {
        if ($(this).is(":checked")) {
            $(".box-agree").show();
        } else {
            $(".box-agree").hide();
        }
    });
});

$(document).ready(function () {
    $('.header').hcSticky({
        top: 0,
    });
    $('.nav-sticky').hcSticky({
        top: 150,
        responsive: {
            992: {
                top: 58
            }
        }
    });
    $('.sticky-sidebar').hcSticky({
        top: 220,
        responsive: {
            992: {
                disable: true
            }
        }
    });
    $(".pagination").rPage();
});

$('.btn-like').click(function(){
    $(this).find('.fa-fw').toggleClass('far fas')
    $(this).find('.fa-fw').toggleClass('text-danger text-muted')
});

autoPlayYouTubeModal();

  //FUNCTION TO GET AND AUTO PLAY YOUTUBE VIDEO FROM DATATAG
  function autoPlayYouTubeModal() {
      var trigger = $("body").find('[data-toggle="modal"]');
      trigger.click(function () {
          var theModal = $(this).data("target"),
              videoSRC = $(this).attr("data-theVideo"),
              videoSRCauto = videoSRC + "?autoplay=1";
          $(theModal + ' iframe').attr('src', videoSRCauto);
          $(theModal + ' button.close').click(function () {
              $(theModal + ' iframe').attr('src', videoSRC);
          });
      });
  }

$(document).ready(function(){
    $('.modal').each(function(){
        var src = $(this).find('iframe').attr('src');
        $(this).on('click', function(){
            $(this).find('iframe').attr('src', '');
            $(this).find('iframe').attr('src', src);
        });
    });
});
