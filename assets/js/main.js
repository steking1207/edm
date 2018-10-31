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

//Functions
function lazyLoadGoogleMap(canvas, addr) {
  $.getScript("//maps.google.com/maps/api/js?key=AIzaSyBJfBxwjbrHacrORsc3ovnDYBnss-NQrcA&sensor=true&callback=initializeMap")
    .done(function () {
      $.googleMap.initMap(canvas, addr);
    });
}

function initializeMap(canvas, addr) {
  $.googleMap.initMap(canvas, addr);
}

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
  googleMap: {
    map: '',
    marker: '',
    defaultAddr: 'No.166, Sec. 4, Zhongxiao E. Rd., Da’an Dist., Taipei City 106, Taiwan (R.O.C.)',

    initMap: function (canvas, addr) {
      canvas = canvas || 'map_canvas';
      addr = (String(addr).length) ? addr : $.googleMap.defaultAddr;

      var geocoder = new google.maps.Geocoder(),
        lat,
        lng,
        $mapLink = $('.maplink'),
        $mapNavigator = $('.map-navigator');

      geocoder.geocode({
        'address': addr
      }, function (results, status) {

        if (status == google.maps.GeocoderStatus.OK) {
          lat = results[0].geometry.location.lat();
          lng = results[0].geometry.location.lng();

          var latlng = new google.maps.LatLng(lat, lng),
            zoom = 16,
            dir = {
              start: '',
              end: lat + ',' + lng
            };

          var mapOptions = {
            zoom: zoom,
            zoomControl: false,
            mapTypeControl: false,
            streetViewControl: false,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: [{
              "featureType": "administrative",
              "elementType": "geometry",
              "stylers": [{
                "visibility": "off"
              }]
            }, {
              "featureType": "poi",
              "stylers": [{
                "visibility": "off"
              }]
            }, {
              "featureType": "road",
              "elementType": "labels.icon",
              "stylers": [{
                "visibility": "off"
              }]
            }]
          };

          var image = {
            url: '/assets/img/map-pin.png',
            size: new google.maps.Size(44, 73),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(22, 73)
          };

          $.googleMap.map = new google.maps.Map(
            document.getElementById(canvas),
            mapOptions
          );

          $.googleMap.marker = new google.maps.Marker({
            draggable: false,
            position: latlng,
            map: $.googleMap.map,
            icon: image
          });

          if ($mapLink.length) {
            $mapLink.attr({
              'href': 'https://www.google.com/maps/place/' + addr,
              'target': '_blank'
            });
          }

          if ($mapNavigator.length) {
            if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(function (position) {
                dir.start = position.coords.latitude + ',' + position.coords.longitude;

                $mapNavigator.attr({
                  'href': 'https://www.google.com/maps/dir/' + dir.start + '/' + dir.end
                }).removeClass('hide');

              }, function () {
                $.googleMap.handleNoGeolocation(latlng);
              });
            } else {
              $.googleMap.handleNoGeolocation(latlng);
            }
          }
        }
      });
    },

    getAddressMarker: function (canvas, selector) {
      var map,
        marker,
        that = $(selector),
        thatValue = that.val(),
        addr = (thatValue.length) ? thatValue : $.googleMap.defaultAddr,
        action = (window.orientation !== undefined) ? 'input' : 'keyup';

      if (window.google && google.maps) {
        $.googleMap.initMap(canvas, addr);
      } else {
        lazyLoadGoogleMap(canvas, addr);
      }

      var getAddressMarker = function () {
        var val = that.val(),
          address = (val.length) ? val : $.googleMap.defaultAddr,
          geocoder = new google.maps.Geocoder();

        geocoder.geocode({
          'address': address
        }, function (results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
            LatLng = results[0].geometry.location;
            $.googleMap.map.setCenter(LatLng);
            $.googleMap.marker.setPosition(LatLng);
            $.googleMap.marker.setTitle(address);
          }
        });
      };

      $(document).on(action, selector, getAddressMarker);
    },

    handleNoGeolocation: function (latlng) {
      $.googleMap.map.setCenter(latlng);
      $('.map-navigator').remove();
    },

    run: function (canvas, addr) {
      if (window.google && google.maps) {
        initializeMap(canvas, addr);
      } else {
        lazyLoadGoogleMap(canvas, addr);
      }
    }
  },

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

      if ($$['map'].length) {
        $.googleMap.run('map_canvas', 'No.166, Sec. 4, Zhongxiao E. Rd., Da’an Dist., Taipei City 106, Taiwan (R.O.C.)');
      }
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
    if ($(window).scrollTop() >= $('#section2').offset().top) {

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
