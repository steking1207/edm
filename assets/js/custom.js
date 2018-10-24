$('.dropdown-menu').click(function(event){
    event.stopPropagation();
});

$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  focusOnSelect: true
});
$('.slick-gallery').slick({
    dots:true,
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
                disable: true
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
