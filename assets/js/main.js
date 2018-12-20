var $$ = {
  'window': $(window),
  'doc': $(document),
  'body': $('body'),
  'burger': $('.burger'),
  'mobileMenu': $('.mobileMenu'),
  'scrollBar': $('.scrollbar-inner'),
  'carousel': $('.js-carousel'),
  'accordion': $('.accordion__caption'),
  'tab': $('.js-tab'),
  'quickNav': $('.quickNav'),
  'quickNavSwitch': $('.quickNav__switch'),
  'map': $('#map_canvas')
};

const showSidebar = localStorage.getItem('showSidebar');

if (showSidebar === 'false') {
  $$['quickNav'].removeClass('open');
} else if (showSidebar === 'true') {
  $$['quickNav'].addClass('open');
}

$$['quickNavSwitch'].on('click', function () {
  if (showSidebar === 'false') {
    $$['quickNav'].toggleClass('open');
    $('.q1').toggleClass('display-none');
    $('.q2').toggleClass('display-none');
    localStorage.setItem('showSidebar', 'true');
  } else {
    $$['quickNav'].toggleClass('open');
    $('.q1').toggleClass('display-none');
    $('.q2').toggleClass('display-none');
    localStorage.setItem('showSidebar', 'false');
  }
});


var EDM = {

  home: function () {
    $$['doc'].ready(function () {
      $$['carousel'].each(function () {
        var $that = $(this);

        var opts = {
          loop: true,
          nav: false,
          items: 1,
          //autoplay: true,
          //autoplayHoverPause: true,
          smartSpeed: 400
        };

        switch (true) {
            case ($that.hasClass('js-carousel-news')):
            opts.center = true;
            opts.responsiveClass = true;
            opts.autoplay = true;
            opts.lazyLoad = true;
            opts.autoplayHoverPause = true;
            opts.autoplayTimeout = 3800;
            opts.dots = true;
            opts.responsive = {
              0: {
                items: 1
              },

              576: {
                items: 3
              },

              992: {
                items: 5
              }
            };

            break;

          case ($that.hasClass('review-grp')):
            opts.center = true;
            opts.responsiveClass = true;
            opts.autoplay = true;
            opts.autoplayHoverPause = true;
            opts.autoplayTimeout = 3800;
            opts.responsive = {
              0: {
                items: 1
              },

              576: {
                items: 2
              },

              992: {
                items: 3
              },
                1100: {
                    items: 4
              },
                1680: {
                    items: 5
              }
            };

            break;

          case ($that.hasClass('partner-list')):
            opts.center = true;
            opts.responsiveClass = true;
            opts.autoplay = true;
            opts.autoplayHoverPause = true;
            opts.autoplayTimeout = 5000;
            opts.responsive = {
              0: {
                items: 3
              },
              768: {
                items: 5
              },

              1200: {
                items: 7
              }
            }

            break;

          case ($that.hasClass('kv-list')):
            opts.autoplay = true;
            opts.autoplayHoverPause = true;
            opts.autoplayTimeout = 3800;

            break;

          default:
            opts.autoplay = true;
            opts.autoplayHoverPause = true;

            break;
        }

        var owl = $that.owlCarousel(opts);

        if ($that.hasClass('experience-owl')) {
          owl.on('changed.owl.carousel', function (event) {
            $cover = $('.experience-cover');
            $cover.removeClass('show').eq(event.page.index).addClass('show');
          });
        }
      });
    });
  },

  common: function () {
    $$['window'].on('load', function () {
      $$['body'].addClass('loaded');
      $('.initial-load-animation').addClass('fade-load');

//      if ($$['map'].length) {
//        $.googleMap.run('map_canvas', 'No.166, Sec. 4, Zhongxiao E. Rd., Da’an Dist., Taipei City 106, Taiwan (R.O.C.)');
//      }
    });

    $$['burger'].on('click', function (e) {
      e.preventDefault();

      $$['burger'].toggleClass('active');

      if ($$['burger'].hasClass('active')) {
        $$['mobileMenu'].addClass('open');
      } else {
        $$['mobileMenu'].removeClass('open');
      }
    });

    if ($$['scrollBar'].length) {
      $$['scrollBar'].scrollbar();
    }

    if ($$['accordion'].length) {
      $$['accordion'].on('click', function () {
        $('.accordion h6').removeClass('active');
        $(this).toggleClass('active');
      });
    }

    if ($$['tab'].length) {
      var $tab = $$['tab'];

      $tab.each(function (index) {
        var $that = $(this);
        var $nav = $that.children('.tab__nav');
        var $btns = $nav.children('.tab__btn');
        var $container = $that.children('.tab__container');
        var $contents = $container.find('.tab__content');

        $btns.on('click', function (e) {
          e.preventDefault();

          var $btn = $(this);
          var $target = $($btn.attr('href'));

          $btns.removeClass('active');
          $btn.addClass('active');
          $contents.removeClass('show');
          $target.addClass('show');
        });
      });
    }
  }
};

$.extend(true, EDM);
$.common();


var getPath = window.location.pathname;

// add count effect
//if (getPath === '/') {
  $(window).on('scroll', function () {
    if ($(window).scrollTop() >= $('.index-section-hot').offset().top) {

      $(".number").each(function (index, element) {
        counter($(element));
      });

    } else {}

  });
//}

var counter = function (number) {

  var objSaveText = {
    countNum: number.text()
  };
  var objSaveDataVal = {
    countNum: $(number).data("value")
  }

  $(objSaveText).animate(objSaveDataVal, {
    duration: 1000,
    easing: 'linear',
    step: function () {
      number.text(Math.ceil(this.countNum));
    },
    complete: function () {
      number.text(objSaveDataVal.countNum);
    }
  });
}


// add typing effect
//if (getPath === '/about') {
  consoleText(['開始', '選擇'], 'text', ['#6EC12D']);
//}

function consoleText(words, id, colors) {
  if (colors === undefined) colors = ['#fff'];
  var visible = true;
  var con = document.getElementById('console');
  var letterCount = 1;
  var x = 1;
  var waiting = false;
  var target = document.getElementById(id)
  target.setAttribute('style', 'color:' + colors[0])
  window.setInterval(function () {

    if (letterCount === 0 && waiting === false) {
      waiting = true;
      target.innerHTML = words[0].substring(0, letterCount)
      window.setTimeout(function () {
        var usedColor = colors.shift();
        colors.push(usedColor);
        var usedWord = words.shift();
        words.push(usedWord);
        x = 1;
        target.setAttribute('style', 'color:' + colors[0])
        letterCount += x;
        waiting = false;
      }, 1000)
    } else if (letterCount === words[0].length + 1 && waiting === false) {
      waiting = true;
      window.setTimeout(function () {
        x = -1;
        letterCount += x;
        waiting = false;
      }, 1500)
    } else if (waiting === false) {
      target.innerHTML = words[0].substring(0, letterCount)
      letterCount += x;
    }
  }, 120)

  window.setInterval(function () {
    if (visible === true) {
      con.className = 'texteffect-flash hidden'
      visible = false;

    } else {
      con.className = 'texteffect-flash'
      visible = true;
    }
  }, 400)
}
