"use strict";
(function () {
  // Global variables
  var userAgent = navigator.userAgent.toLowerCase(),
    initialDate = new Date(),

    $document = $(document),
    $window = $(window),
    $html = $("html"),
    $body = $("body"),

    isDesktop = $html.hasClass("desktop"),
    isIE = userAgent.indexOf("msie") !== -1 ? parseInt(userAgent.split("msie")[1], 10) : userAgent.indexOf("trident") !== -1 ? 11 : userAgent.indexOf("edge") !== -1 ? 12 : false,
    isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
    windowReady = false,
    isNoviBuilder = false,
    pageTransitionDuration = 300,

    plugins = {
      preloader: $(".preloader"),
      bootstrapTooltip: $("[data-toggle='tooltip']"),
      bootstrapModalDialog: $('.modal'),
      bootstrapCollapse: $(".card-custom"),
      rdNavbar: $(".rd-navbar"),
      rdMailForm: $(".rd-mailform"),
      filePicker: $('.rd-file-picker'),
      fileDrop: $('.rd-file-drop'),
      rdRange: $('.rd-range'),
      rdInputLabel: $(".form-label"),
      captcha: $('.recaptcha'),
      mailchimp: $('.mailchimp-mailform'),
      campaignMonitor: $('.campaign-mailform'),
      materialParallax:        $( '.parallax-container' ),
      maps: $(".google-map-container:not(.google-map-container--triggerable)"), // *
      regula: $("[data-constraints]"),
      wow: $(".wow"),
      owl: $(".owl-carousel"),
      swiper: $(".swiper-slider"),
      search: $(".rd-search"),
      searchResults: $('.rd-search-results'),
      isotope: $(".isotope-wrap"),
      popover: $('[data-toggle="popover"]'),
      radio: $("input[type='radio']"),
      checkbox: $("input[type='checkbox']"),
      lightGallery: $("[data-lightgallery='group']"),
      lightGalleryItem: $("[data-lightgallery='item']"),
      lightDynamicGalleryItem: $("[data-lightgallery='dynamic']"),
      copyrightYear: $(".copyright-year"),
      selectFilter: $("select"),
      heading: $('.heading-square'),
      linkWithIcon: $('.link-with-icon'),
      slick: $('.slick-slider'),
      stepper: $("input[type='number']"),
      scroller: $(".scroll-wrap"),
      multitoggles: document.querySelectorAll('[data-multitoggle]'),
      gmapTrigger: document.querySelectorAll("[data-gmap-trigger]"),
      waypoint: $('[data-waypoint-to]'),
      counter:                 document.querySelectorAll( '.counter' ),
      progressLinear:          document.querySelectorAll( '.progress-linear' ),
      progressCircle:          document.querySelectorAll( '.progress-circle' ),
      countdown:               document.querySelectorAll( '.countdown' )
    };

  /**
   * @desc Check the element was been scrolled into the view
   * @param {object} elem - jQuery object
   * @return {boolean}
   */
  function isScrolledIntoView(elem) {
    if (isNoviBuilder) return true;
    return elem.offset().top + elem.outerHeight() >= $window.scrollTop() && elem.offset().top <= $window.scrollTop() + $window.height();
  }

  /**
   * @desc Calls a function when element has been scrolled into the view
   * @param {object} element - jQuery object
   * @param {function} func - init function
   */
  function lazyInit(element, func, funcArguments) {
    var scrollHandler = function () {
      if ((!element.hasClass('lazy-loaded') && (isScrolledIntoView(element)))) {
        func(funcArguments);
        element.addClass('lazy-loaded');
      }
    };

    scrollHandler();
    $window.on('scroll', scrollHandler);
  }

  // Initialize scripts that require a loaded page
  $window.on('load', function () {
    // Page loader & Page transition
    if (plugins.preloader.length && !isNoviBuilder) {
      pageTransition({
        target: document.querySelector( '.page' ),
        delay: 0,
        duration: 500,
        classIn: 'fadeIn',
        classOut: 'fadeOut',
        classActive: 'animated',
        conditions: function (event, link) {
          return link && !/(\#|javascript:void\(0\)|callto:|tel:|mailto:|:\/\/)/.test(link) && !event.currentTarget.hasAttribute('data-lightgallery');
        },
        onTransitionStart: function ( options ) {
          setTimeout( function () {
            plugins.preloader.removeClass('loaded');
          }, options.duration * .75 );
        },
        onReady: function () {
          plugins.preloader.addClass('loaded');
          windowReady = true;
        }
      });
    }

    // Counter
    if ( plugins.counter ) {
      for ( var i = 0; i < plugins.counter.length; i++ ) {
        var
          node = plugins.counter[i],
          counter = aCounter({
            node: node,
            duration: node.getAttribute( 'data-duration' ) || 1000
          }),
          scrollHandler = (function() {
            if ( Util.inViewport( this ) && !this.classList.contains( 'animated-first' ) ) {
              this.counter.run();
              this.classList.add( 'animated-first' );
            }
          }).bind( node ),
          blurHandler = (function() {
            this.counter.params.to = parseInt( this.textContent, 10 );
            this.counter.run();
          }).bind( node );

        if ( isNoviBuilder ) {
          node.counter.run();
          node.addEventListener( 'blur', blurHandler );
        } else {
          scrollHandler();
          window.addEventListener( 'scroll', scrollHandler );
        }
      }
    }

    // Progress Bar
    if ( plugins.progressLinear ) {
      for ( var i = 0; i < plugins.progressLinear.length; i++ ) {
        var
          container = plugins.progressLinear[i],
          counter = aCounter({
            node: container.querySelector( '.progress-linear-counter' ),
            duration: container.getAttribute( 'data-duration' ) || 1000,
            onStart: function() {
              this.custom.bar.style.width = this.params.to + '%';
            }
          });

        counter.custom = {
          container: container,
          bar: container.querySelector( '.progress-linear-bar' ),
          onScroll: (function() {
            if ( ( Util.inViewport( this.custom.container ) && !this.custom.container.classList.contains( 'animated' ) ) || isNoviBuilder ) {
              this.run();
              this.custom.container.classList.add( 'animated' );
            }
          }).bind( counter ),
          onBlur: (function() {
            this.params.to = parseInt( this.params.node.textContent, 10 );
            this.run();
          }).bind( counter )
        };

        if ( isNoviBuilder ) {
          counter.run();
          counter.params.node.addEventListener( 'blur', counter.custom.onBlur );
        } else {
          counter.custom.onScroll();
          document.addEventListener( 'scroll', counter.custom.onScroll );
        }
      }
    }

    // Progress Circle
    if ( plugins.progressCircle ) {
      for ( var i = 0; i < plugins.progressCircle.length; i++ ) {
        var
          container = plugins.progressCircle[i],
          counter = aCounter({
            node: container.querySelector( '.progress-circle-counter' ),
            duration: 500,
            onUpdate: function( value ) {
              this.custom.bar.render( value * 3.6 );
            }
          });

        counter.params.onComplete = counter.params.onUpdate;

        counter.custom = {
          container: container,
          bar: aProgressCircle({ node: container.querySelector( '.progress-circle-bar' ) }),
          onScroll: (function() {
            if ( Util.inViewport( this.custom.container ) && !this.custom.container.classList.contains( 'animated' ) ) {
              this.run();
              this.custom.container.classList.add( 'animated' );
            }
          }).bind( counter ),
          onBlur: (function() {
            this.params.to = parseInt( this.params.node.textContent, 10 );
            this.run();
          }).bind( counter )
        };

        if ( isNoviBuilder ) {
          counter.run();
          counter.params.node.addEventListener( 'blur', counter.custom.onBlur );
        } else {
          counter.custom.onScroll();
          window.addEventListener( 'scroll', counter.custom.onScroll );
        }
      }
    }

    // Isotope
    if (plugins.isotope.length) {
      for (var i = 0; i < plugins.isotope.length; i++) {
        var
          wrap = plugins.isotope[i],
          filterHandler = function (event) {
            event.preventDefault();
            for (var n = 0; n < this.isoGroup.filters.length; n++) this.isoGroup.filters[n].classList.remove('active');
            this.classList.add('active');
            this.isoGroup.isotope.arrange({filter: this.getAttribute("data-isotope-filter") !== '*' ? '[data-filter*="' + this.getAttribute("data-isotope-filter") + '"]' : '*'});
          },
          resizeHandler = function () {
            this.isoGroup.isotope.layout();
          };

        wrap.isoGroup = {};
        wrap.isoGroup.filters = wrap.querySelectorAll('[data-isotope-filter]');
        wrap.isoGroup.node = wrap.querySelector('.isotope');
        wrap.isoGroup.layout = wrap.isoGroup.node.getAttribute('data-isotope-layout') ? wrap.isoGroup.node.getAttribute('data-isotope-layout') : 'masonry';
        wrap.isoGroup.isotope = new Isotope(wrap.isoGroup.node, {
          itemSelector: '.isotope-item',
          layoutMode: wrap.isoGroup.layout,
          filter: '*',
        });

        for (var n = 0; n < wrap.isoGroup.filters.length; n++) {
          var filter = wrap.isoGroup.filters[n];
          filter.isoGroup = wrap.isoGroup;
          filter.addEventListener('click', filterHandler);
        }

        window.addEventListener('resize', resizeHandler.bind(wrap));
      }
    }

    // Material Parallax
    if ( plugins.materialParallax.length ) {
      if ( !isNoviBuilder && !isIE && !isMobile) {
        plugins.materialParallax.parallax();
      } else {
        for ( var i = 0; i < plugins.materialParallax.length; i++ ) {
          var $parallax = $(plugins.materialParallax[i]);

          $parallax.addClass( 'parallax-disabled' );
          $parallax.css({ "background-image": 'url('+ $parallax.data("parallax-img") +')' });
        }
      }
    }

  });

  $window.on('load resize', function () {
    // Heading script
    if (plugins.heading.length) {
      for (var i = 0; i < plugins.heading.length; i++) {
        var heading = $(plugins.heading[i]),
          fz = parseInt(heading.css('font-size'), 10),
          lh = parseInt(heading.css('line-height'), 10),
          height,
          item = heading.find($(heading.attr(('data-item'))));
        height = ((fz * (lh / fz)) / 2);
        item.css({
          'top': height
        })
      }
    }

    // Link With Icon
    if (plugins.linkWithIcon.length) {
      for (var i = 0; i < plugins.linkWithIcon.length; i++) {
        var linkWithIcon = $(plugins.linkWithIcon[i]),
          fz = parseInt(linkWithIcon.css('font-size'), 10),
          lh = parseInt(linkWithIcon.css('line-height'), 10),
          height,
          item = linkWithIcon.find($(linkWithIcon.attr(('data-item'))));
        height = ((fz * (lh / fz)) / 2);
        item.css({
          'top': height
        })
      }
    }
  });


  // Initialize scripts that require a finished document
  $(function () {
    isNoviBuilder = window.xMode;

    /**
     * @desc Toggle swiper videos on active slides
     * @param {object} swiper - swiper slider
     */
    function toggleSwiperInnerVideos(swiper) {
      var prevSlide = $(swiper.slides[swiper.previousIndex]),
        nextSlide = $(swiper.slides[swiper.activeIndex]),
        videos,
        videoItems = prevSlide.find("video");

      for (var i = 0; i < videoItems.length; i++) {
        videoItems[i].pause();
      }

      videos = nextSlide.find("video");
      if (videos.length) {
        videos.get(0).play();
      }
    }

    /**
     * @desc Toggle swiper animations on active slides
     * @param {object} swiper - swiper slider
     */
    function toggleSwiperCaptionAnimation(swiper) {
      var prevSlides = $(swiper.el).find("[data-caption-animate]"),
        nextSlide = $(swiper.slides[swiper.activeIndex]).find("[data-caption-animate]"),
        delay,
        duration,
        nextSlideItem,
        prevSlideItem;

      for (var i = 0; i < prevSlides.length; i++) {
        prevSlideItem = $(prevSlides[i]);

        prevSlideItem.removeClass("animated")
          .removeClass(prevSlideItem.attr("data-caption-animate"))
          .addClass("not-animated");
      }


      var tempFunction = function (nextSlideItem, duration) {
        return function () {
          nextSlideItem
            .removeClass("not-animated")
            .addClass(nextSlideItem.attr("data-caption-animate"))
            .addClass("animated");
          if (duration) {
            nextSlideItem.css('animation-duration', duration + 'ms');
          }
        };
      };

      for (var i = 0; i < nextSlide.length; i++) {
        nextSlideItem = $(nextSlide[i]);
        delay = nextSlideItem.attr("data-caption-delay");
        duration = nextSlideItem.attr('data-caption-duration');
        if (!isNoviBuilder) {
          if (delay) {
            setTimeout(tempFunction(nextSlideItem, duration), parseInt(delay, 10));
          } else {
            setTimeout(tempFunction(nextSlideItem, duration), parseInt(delay, 0));
          }

        } else {
          nextSlideItem.removeClass("not-animated")
        }
      }
    }

    /**
     * @desc Initialize owl carousel plugin
     * @param {object} c - carousel jQuery object
     */
    function initOwlCarousel(c) {
      var aliaces = ["-", "-sm-", "-md-", "-lg-", "-xl-", "-xxl-"],
        values = [0, 576, 768, 992, 1200, 1600],
        responsive = {};

      for (var j = 0; j < values.length; j++) {
        responsive[values[j]] = {};
        for (var k = j; k >= -1; k--) {
          if (!responsive[values[j]]["items"] && c.attr("data" + aliaces[k] + "items")) {
            responsive[values[j]]["items"] = k < 0 ? 1 : parseInt(c.attr("data" + aliaces[k] + "items"), 10);
          }
          if (!responsive[values[j]]["stagePadding"] && responsive[values[j]]["stagePadding"] !== 0 && c.attr("data" + aliaces[k] + "stage-padding")) {
            responsive[values[j]]["stagePadding"] = k < 0 ? 0 : parseInt(c.attr("data" + aliaces[k] + "stage-padding"), 10);
          }
          if (!responsive[values[j]]["margin"] && responsive[values[j]]["margin"] !== 0 && c.attr("data" + aliaces[k] + "margin")) {
            responsive[values[j]]["margin"] = k < 0 ? 30 : parseInt(c.attr("data" + aliaces[k] + "margin"), 10);
          }
        }
      }

      if (c.attr('data-nav-custom')) {
        c.on("initialized.owl.carousel", function (event) {
          var carousel = $(event.currentTarget),
            customNav = $(carousel.attr("data-nav-custom"));

          // Custom Navigation Events
          customNav.find(".owl-arrow-next").click(function (e) {
            e.preventDefault();
            carousel.trigger('next.owl.carousel');
          });
          customNav.find(".owl-arrow-prev").click(function (e) {
            e.preventDefault();
            carousel.trigger('prev.owl.carousel');
          });
        });
      }

      c.owlCarousel({
        autoplay: isNoviBuilder ? false : c.attr("data-autoplay") === "true",
        loop: isNoviBuilder ? false : c.attr("data-loop") !== "false",
        items: 1,
        center: c.attr("data-center") === "true",
        dotsContainer: c.attr("data-pagination-container") || false,
        navContainer: c.attr("data-navigation-container") || false,
        mouseDrag: isNoviBuilder ? false : c.attr("data-mouse-drag") !== "false",
        nav: c.attr("data-nav") === "true",
        dots: c.attr("data-dots") === "true",
        dotsEach: c.attr("data-dots-each") ? parseInt(c.attr("data-dots-each"), 10) : false,
        animateIn: c.attr('data-animation-in') ? c.attr('data-animation-in') : false,
        animateOut: c.attr('data-animation-out') ? c.attr('data-animation-out') : false,
        responsive: responsive,
        navText: c.attr("data-nav-text") ? $.parseJSON(c.attr("data-nav-text")) : [],
        navClass: c.attr("data-nav-class") ? $.parseJSON(c.attr("data-nav-class")) : ['owl-prev', 'owl-next']
      });
    }

    /**
     * @desc Create live search results
     * @param {object} options
     */
    function liveSearch(options) {
      $('#' + options.live).removeClass('cleared').html();
      options.current++;
      options.spin.addClass('loading');
      $.get(handler, {
        s: decodeURI(options.term),
        liveSearch: options.live,
        dataType: "html",
        liveCount: options.liveCount,
        filter: options.filter,
        template: options.template
      }, function (data) {
        options.processed++;
        var live = $('#' + options.live);
        if ((options.processed === options.current) && !live.hasClass('cleared')) {
          live.find('> #search-results').removeClass('active');
          live.html(data);
          setTimeout(function () {
            live.find('> #search-results').addClass('active');
          }, 50);
        }
        options.spin.parents('.rd-search').find('.input-group-addon').removeClass('loading');
      })
    }

    /**
     * @desc Attach form validation to elements
     * @param {object} elements - jQuery object
     */
    function attachFormValidator(elements) {
      // Custom validator - phone number
      regula.custom({
        name: 'PhoneNumber',
        defaultMessage: 'Invalid phone number format',
        validator: function() {
          if ( this.value === '' ) return true;
          else return /^(\+\d)?[0-9\-\(\) ]{5,}$/i.test( this.value );
        }
      });

      for (var i = 0; i < elements.length; i++) {
        var o = $(elements[i]), v;
        o.addClass("form-control-has-validation").after("<span class='form-validation'></span>");
        v = o.parent().find(".form-validation");
        if (v.is(":last-child")) o.addClass("form-control-last-child");
      }

      elements.on('input change propertychange blur', function (e) {
        var $this = $(this), results;

        if (e.type !== "blur") if (!$this.parent().hasClass("has-error")) return;
        if ($this.parents('.rd-mailform').hasClass('success')) return;

        if (( results = $this.regula('validate') ).length) {
          for (i = 0; i < results.length; i++) {
            $this.siblings(".form-validation").text(results[i].message).parent().addClass("has-error");
          }
        } else {
          $this.siblings(".form-validation").text("").parent().removeClass("has-error")
        }
      }).regula('bind');

      var regularConstraintsMessages = [
        {
          type: regula.Constraint.Required,
          newMessage: "The text field is required."
        },
        {
          type: regula.Constraint.Email,
          newMessage: "The email is not a valid email."
        },
        {
          type: regula.Constraint.Numeric,
          newMessage: "Only numbers are required"
        },
        {
          type: regula.Constraint.Selected,
          newMessage: "Please choose an option."
        }
      ];


      for (var i = 0; i < regularConstraintsMessages.length; i++) {
        var regularConstraint = regularConstraintsMessages[i];

        regula.override({
          constraintType: regularConstraint.type,
          defaultMessage: regularConstraint.newMessage
        });
      }
    }

    /**
     * @desc Check if all elements pass validation
     * @param {object} elements - object of items for validation
     * @param {object} captcha - captcha object for validation
     * @return {boolean}
     */
    function isValidated(elements, captcha) {
      var results, errors = 0;

      if (elements.length) {
        for (var j = 0; j < elements.length; j++) {

          var $input = $(elements[j]);
          if ((results = $input.regula('validate')).length) {
            for (k = 0; k < results.length; k++) {
              errors++;
              $input.siblings(".form-validation").text(results[k].message).parent().addClass("has-error");
            }
          } else {
            $input.siblings(".form-validation").text("").parent().removeClass("has-error")
          }
        }

        if (captcha) {
          if (captcha.length) {
            return validateReCaptcha(captcha) && errors === 0
          }
        }

        return errors === 0;
      }
      return true;
    }

    /**
     * @desc Validate google reCaptcha
     * @param {object} captcha - captcha object for validation
     * @return {boolean}
     */
    function validateReCaptcha(captcha) {
      var captchaToken = captcha.find('.g-recaptcha-response').val();

      if (captchaToken.length === 0) {
        captcha
          .siblings('.form-validation')
          .html('Please, prove that you are not robot.')
          .addClass('active');
        captcha
          .closest('.form-wrap')
          .addClass('has-error');

        captcha.on('propertychange', function () {
          var $this = $(this),
            captchaToken = $this.find('.g-recaptcha-response').val();

          if (captchaToken.length > 0) {
            $this
              .closest('.form-wrap')
              .removeClass('has-error');
            $this
              .siblings('.form-validation')
              .removeClass('active')
              .html('');
            $this.off('propertychange');
          }
        });

        return false;
      }

      return true;
    }

    /**
     * @desc Initialize Google reCaptcha
     */
    window.onloadCaptchaCallback = function () {
      for (var i = 0; i < plugins.captcha.length; i++) {
        var
          $captcha = $(plugins.captcha[i]),
          resizeHandler = (function() {
            var
              frame = this.querySelector( 'iframe' ),
              inner = this.firstElementChild,
              inner2 = inner.firstElementChild,
              containerRect = null,
              frameRect = null,
              scale = null;

            inner2.style.transform = '';
            inner.style.height = 'auto';
            inner.style.width = 'auto';

            containerRect = this.getBoundingClientRect();
            frameRect = frame.getBoundingClientRect();
            scale = containerRect.width/frameRect.width;

            if ( scale < 1 ) {
              inner2.style.transform = 'scale('+ scale +')';
              inner.style.height = ( frameRect.height * scale ) + 'px';
              inner.style.width = ( frameRect.width * scale ) + 'px';
            }
          }).bind( plugins.captcha[i] );

        grecaptcha.render(
          $captcha.attr('id'),
          {
            sitekey: $captcha.attr('data-sitekey'),
            size: $captcha.attr('data-size') ? $captcha.attr('data-size') : 'normal',
            theme: $captcha.attr('data-theme') ? $captcha.attr('data-theme') : 'light',
            callback: function () {
              $('.recaptcha').trigger('propertychange');
            }
          }
        );

        $captcha.after("<span class='form-validation'></span>");

        if ( plugins.captcha[i].hasAttribute( 'data-auto-size' ) ) {
          resizeHandler();
          window.addEventListener( 'resize', resizeHandler );
        }
      }
    };

    /**
     * Google map function for getting latitude and longitude
     */
    function getLatLngObject(str, marker, map, callback) {
      var coordinates = {};
      try {
        coordinates = JSON.parse(str);
        callback(new google.maps.LatLng(
          coordinates.lat,
          coordinates.lng
        ), marker, map)
      } catch (e) {
        map.geocoder.geocode({'address': str}, function (results, status) {
          if (status === google.maps.GeocoderStatus.OK) {
            var latitude = results[0].geometry.location.lat();
            var longitude = results[0].geometry.location.lng();

            callback(new google.maps.LatLng(
              parseFloat(latitude),
              parseFloat(longitude)
            ), marker, map)
          }
        })
      }
    }

    /**
     * @desc Initialize Bootstrap tooltip with required placement
     * @param {string} tooltipPlacement
     */
    function initBootstrapTooltip(tooltipPlacement) {
      plugins.bootstrapTooltip.tooltip('dispose');

      if (window.innerWidth < 576) {
        plugins.bootstrapTooltip.tooltip({placement: 'bottom'});
      } else {
        plugins.bootstrapTooltip.tooltip({placement: tooltipPlacement});
      }
    }

    /**
     * @desc Initialize the gallery with set of images
     * @param {object} itemsToInit - jQuery object
     * @param {string} addClass - additional gallery class
     */
    function initLightGallery(itemsToInit, addClass) {
      if (!isNoviBuilder) {
        $(itemsToInit).lightGallery({
          thumbnail: $(itemsToInit).attr("data-lg-thumbnail") !== "false",
          selector: "[data-lightgallery='item']",
          autoplay: $(itemsToInit).attr("data-lg-autoplay") === "true",
          pause: parseInt($(itemsToInit).attr("data-lg-autoplay-delay")) || 5000,
          addClass: addClass,
          mode: $(itemsToInit).attr("data-lg-animation") || "lg-slide",
          loop: $(itemsToInit).attr("data-lg-loop") !== "false"
        });
      }
    }

    /**
     * @desc Initialize the gallery with dynamic addition of images
     * @param {object} itemsToInit - jQuery object
     * @param {string} addClass - additional gallery class
     */
    function initDynamicLightGallery(itemsToInit, addClass) {
      if (!isNoviBuilder) {
        $(itemsToInit).on("click", function () {
          $(itemsToInit).lightGallery({
            thumbnail: $(itemsToInit).attr("data-lg-thumbnail") !== "false",
            selector: "[data-lightgallery='item']",
            autoplay: $(itemsToInit).attr("data-lg-autoplay") === "true",
            pause: parseInt($(itemsToInit).attr("data-lg-autoplay-delay")) || 5000,
            addClass: addClass,
            mode: $(itemsToInit).attr("data-lg-animation") || "lg-slide",
            loop: $(itemsToInit).attr("data-lg-loop") !== "false",
            dynamic: true,
            dynamicEl: JSON.parse($(itemsToInit).attr("data-lg-dynamic-elements")) || []
          });
        });
      }
    }

    /**
     * @desc Initialize the gallery with one image
     * @param {object} itemToInit - jQuery object
     * @param {string} addClass - additional gallery class
     */
    function initLightGalleryItem(itemToInit, addClass) {
      itemToInit = $(itemToInit);
      if (!isNoviBuilder) {
        if (itemToInit.length && itemToInit.attr('href').split('http').length > 1) {
          addClass = 'lightgallery-iframe';
        }
        itemToInit.lightGallery({
          selector: "this",
          addClass: addClass,
          counter: false,
          iframeMaxWidth: '90%',
          youtubePlayerParams: {
            modestbranding: 1,
            showinfo: 1,
            rel: 1,
            controls: 1
          },
          vimeoPlayerParams: {
            byline: 0,
            portrait: 0
          }
        });
      }
    }

    /**
     * @desc Initialize Google maps*
     */
    function initMaps(maps) {
      var key;

      for (var i = 0; i < maps.length; i++) {
        if (maps[i].hasAttribute("data-key")) {
          key = maps[i].getAttribute("data-key");
          break;
        }
      }

      $.getScript('//maps.google.com/maps/api/js?' + (key ? 'key=' + key + '&' : '') + 'sensor=false&libraries=geometry,places&v=quarterly', function () {
        var head = document.getElementsByTagName('head')[0],
          insertBefore = head.insertBefore;

        head.insertBefore = function (newElement, referenceElement) {
          if (newElement.href && newElement.href.indexOf('//fonts.googleapis.com/css?family=Roboto') !== -1 || newElement.innerHTML.indexOf('gm-style') !== -1) {
            return;
          }
          insertBefore.call(head, newElement, referenceElement);
        };
        var geocoder = new google.maps.Geocoder;
        for (var i = 0; i < maps.length; i++) {
          var zoom = parseInt(maps[i].getAttribute("data-zoom"), 10) || 11;
          var styles = maps[i].hasAttribute('data-styles') ? JSON.parse(maps[i].getAttribute("data-styles")) : [];
          var center = maps[i].getAttribute("data-center") || "New York";

          // Initialize map
          var map = new google.maps.Map(maps[i].querySelectorAll(".google-map")[0], {
            zoom: zoom,
            styles: styles,
            scrollwheel: false,
            center: {lat: 0, lng: 0}
          });

          // Add map object to map node
          maps[i].map = map;
          maps[i].geocoder = geocoder;
          maps[i].google = google;

          // Get Center coordinates from attribute
          getLatLngObject(center, null, maps[i], function (location, markerElement, mapElement) {
            mapElement.map.setCenter(location);
          });

          // Add markers from google-map-markers array
          var markerItems = maps[i].querySelectorAll(".google-map-markers li");

          if (markerItems.length) {
            var markers = [];
            for (var j = 0; j < markerItems.length; j++) {
              var markerElement = markerItems[j];
              getLatLngObject(markerElement.getAttribute("data-location"), markerElement, maps[i], function (location, markerElement, mapElement) {
                var icon = markerElement.getAttribute("data-icon") || mapElement.getAttribute("data-icon");
                var activeIcon = markerElement.getAttribute("data-icon-active") || mapElement.getAttribute("data-icon-active");
                // NOTE: markerElement.innerHTML will not work properly in Novi Builder
                var info = markerElement.getAttribute('data-description') || markerElement.innerHTML;
                var infoWindow = new google.maps.InfoWindow({
                  content: info
                });
                markerElement.infoWindow = infoWindow;
                var markerData = {
                  position: location,
                  map: mapElement.map
                };
                if (icon) {
                  markerData.icon = icon;
                }
                var marker = new google.maps.Marker(markerData);
                markerElement.gmarker = marker;
                markers.push({markerElement: markerElement, infoWindow: infoWindow});
                marker.isActive = false;
                // Handle infoWindow close click
                google.maps.event.addListener(infoWindow, 'closeclick', (function (markerElement, mapElement) {
                  var markerIcon = null;
                  markerElement.gmarker.isActive = false;
                  markerIcon = markerElement.getAttribute("data-icon") || mapElement.getAttribute("data-icon");
                  markerElement.gmarker.setIcon(markerIcon);
                }).bind(this, markerElement, mapElement));


                // Set marker active on Click and open infoWindow
                google.maps.event.addListener(marker, 'click', (function (markerElement, mapElement) {
                  if (markerElement.infoWindow.getContent().length === 0) return;
                  var gMarker, currentMarker = markerElement.gmarker, currentInfoWindow;
                  for (var k = 0; k < markers.length; k++) {
                    var markerIcon;
                    if (markers[k].markerElement === markerElement) {
                      currentInfoWindow = markers[k].infoWindow;
                    }
                    gMarker = markers[k].markerElement.gmarker;
                    if (gMarker.isActive && markers[k].markerElement !== markerElement) {
                      gMarker.isActive = false;
                      markerIcon = markers[k].markerElement.getAttribute("data-icon") || mapElement.getAttribute("data-icon")
                      gMarker.setIcon(markerIcon);
                      markers[k].infoWindow.close();
                    }
                  }

                  currentMarker.isActive = !currentMarker.isActive;
                  if (currentMarker.isActive) {
                    if (markerIcon = markerElement.getAttribute("data-icon-active") || mapElement.getAttribute("data-icon-active")) {
                      currentMarker.setIcon(markerIcon);
                    }

                    currentInfoWindow.open(map, marker);
                  } else {
                    if (markerIcon = markerElement.getAttribute("data-icon") || mapElement.getAttribute("data-icon")) {
                      currentMarker.setIcon(markerIcon);
                    }
                    currentInfoWindow.close();
                  }
                }).bind(this, markerElement, mapElement))
              })
            }
          }
        }
      });
    }

    // Google ReCaptcha
    if (plugins.captcha.length) {
      $.getScript("//www.google.com/recaptcha/api.js?onload=onloadCaptchaCallback&render=explicit&hl=en");
    }

    // Additional class on html if mac os.
    if (navigator.platform.match(/(Mac)/i)) {
      $html.addClass("mac-os");
    }

    // Adds some loosing functionality to IE browsers (IE Polyfills)
    if (isIE) {
      if (isIE < 10) {
        $html.addClass("lt-ie-10");
      }

      if (isIE < 11) {
        $.getScript('js/pointer-events.min.js')
          .done(function () {
            $html.addClass("ie-10");
            PointerEventsPolyfill.initialize({});
          });
      }

      if (isIE === 11) {
        $html.addClass("ie-11");
      }

      if (isIE === 12) {
        $html.addClass("ie-edge");
      }
    }

    // Bootstrap Tooltips
    if (plugins.bootstrapTooltip.length) {
      var tooltipPlacement = plugins.bootstrapTooltip.attr('data-placement');
      initBootstrapTooltip(tooltipPlacement);

      $window.on('resize orientationchange', function () {
        initBootstrapTooltip(tooltipPlacement);
      })
    }

    // Stop video in bootstrapModalDialog
    if (plugins.bootstrapModalDialog.length) {
      for (var i = 0; i < plugins.bootstrapModalDialog.length; i++) {
        var modalItem = $(plugins.bootstrapModalDialog[i]);

        modalItem.on('hidden.bs.modal', $.proxy(function () {
          var activeModal = $(this),
            rdVideoInside = activeModal.find('video'),
            youTubeVideoInside = activeModal.find('iframe');

          if (rdVideoInside.length) {
            rdVideoInside[0].pause();
          }

          if (youTubeVideoInside.length) {
            var videoUrl = youTubeVideoInside.attr('src');

            youTubeVideoInside
              .attr('src', '')
              .attr('src', videoUrl);
          }
        }, modalItem))
      }
    }

    //  Bootstrap Collapse
    if (plugins.bootstrapCollapse.length) {
      for (var i = 0; i < plugins.bootstrapCollapse.length; i++) {
        var $bootstrapCollapseItem = $(plugins.bootstrapCollapse[i]);

        $bootstrapCollapseItem.on('show.bs.collapse', (function ($bootstrapCollapseItem) {
          return function () {
            $bootstrapCollapseItem.addClass('active');
          };
        })($bootstrapCollapseItem));

        $bootstrapCollapseItem.on('hide.bs.collapse', (function ($bootstrapCollapseItem) {
          return function () {
            $bootstrapCollapseItem.removeClass('active');
          };
        })($bootstrapCollapseItem));
      }
    }

    // Popovers
    if (plugins.popover.length) {
      if (window.innerWidth < 767) {
        plugins.popover.attr('data-placement', 'bottom');
        plugins.popover.popover();
      }
      else {
        plugins.popover.popover();
      }
    }

    // Copyright Year (Evaluates correct copyright year)
    if (plugins.copyrightYear.length) {
      plugins.copyrightYear.text(initialDate.getFullYear());
    }

    // Google maps
    if (plugins.maps.length) {
      lazyInit(plugins.maps, initMaps, plugins.maps);
    }

    // Add custom styling options for input[type="radio"]
    if (plugins.radio.length) {
      for (var i = 0; i < plugins.radio.length; i++) {
        $(plugins.radio[i]).addClass("radio-custom").after("<span class='radio-custom-dummy'></span>")
      }
    }

    // Add custom styling options for input[type="checkbox"]
    if (plugins.checkbox.length) {
      for (var i = 0; i < plugins.checkbox.length; i++) {
        $(plugins.checkbox[i]).addClass("checkbox-custom").after("<span class='checkbox-custom-dummy'></span>")
      }
    }

    // UI To Top
    if (isDesktop && !isNoviBuilder) {
      $().UItoTop({
        easingType: 'easeOutQuad',
        containerClass: 'ui-to-top fl-budicons-free-up119'
      });
    }

    // RD Navbar
    if (plugins.rdNavbar.length) {
      var aliaces, i, j, len, value, values;

      aliaces = ["-", "-sm-", "-md-", "-lg-", "-xl-", "-xxl-"];
      values = [0, 576, 768, 992, 1200, 1600];

      for (var z = 0; z < plugins.rdNavbar.length; z++) {
        var $rdNavbar = $(plugins.rdNavbar[z]),
          responsiveNavbar = {};

        for (i = j = 0, len = values.length; j < len; i = ++j) {
          value = values[i];
          if (!responsiveNavbar[values[i]]) {
            responsiveNavbar[values[i]] = {};
          }
          if ($rdNavbar.attr('data' + aliaces[i] + 'layout')) {
            responsiveNavbar[values[i]].layout = $rdNavbar.attr('data' + aliaces[i] + 'layout');
          }
          if ($rdNavbar.attr('data' + aliaces[i] + 'device-layout')) {
            responsiveNavbar[values[i]]['deviceLayout'] = $rdNavbar.attr('data' + aliaces[i] + 'device-layout');
          }
          if ($rdNavbar.attr('data' + aliaces[i] + 'hover-on')) {
            responsiveNavbar[values[i]]['focusOnHover'] = $rdNavbar.attr('data' + aliaces[i] + 'hover-on') === 'true';
          }
          if ($rdNavbar.attr('data' + aliaces[i] + 'auto-height')) {
            responsiveNavbar[values[i]]['autoHeight'] = $rdNavbar.attr('data' + aliaces[i] + 'auto-height') === 'true';
          }

          if ($rdNavbar.attr('data' + aliaces[i] + 'anchor-nav-offset')) {
            responsiveNavbar[values[i]]['anchorNavOffset'] = $rdNavbar.attr('data' + aliaces[i] + 'anchor-nav-offset');
          }

          if (isNoviBuilder) {
            responsiveNavbar[values[i]]['stickUp'] = false;
          } else if ($rdNavbar.attr('data' + aliaces[i] + 'stick-up')) {
            var isDemoNavbar = $rdNavbar.parents('.layout-navbar-demo').length;
            responsiveNavbar[values[i]]['stickUp'] = $rdNavbar.attr('data' + aliaces[i] + 'stick-up') === 'true' && !isDemoNavbar;
          }

          if ($rdNavbar.attr('data' + aliaces[i] + 'stick-up-offset')) {
            responsiveNavbar[values[i]]['stickUpOffset'] = $rdNavbar.attr('data' + aliaces[i] + 'stick-up-offset');
          }
        }


        $rdNavbar.RDNavbar({
          anchorNav: !isNoviBuilder,
          stickUpClone: ($rdNavbar.attr("data-stick-up-clone") && !isNoviBuilder) ? $rdNavbar.attr("data-stick-up-clone") === 'true' : false,
          responsive: responsiveNavbar,
          callbacks: {
            onStuck: function () {
              var navbarSearch = this.$element.find('.rd-search input');

              if (navbarSearch) {
                navbarSearch.val('').trigger('propertychange');
              }
            },
            onDropdownOver: function () {
              return !isNoviBuilder;
            },
            onUnstuck: function () {
              if (this.$clone === null)
                return;

              var navbarSearch = this.$clone.find('.rd-search input');

              if (navbarSearch) {
                navbarSearch.val('').trigger('propertychange');
                navbarSearch.trigger('blur');
              }

            }
          }
        });


        if ($rdNavbar.attr("data-body-class")) {
          document.body.className += ' ' + $rdNavbar.attr("data-body-class");
        }

      }
    }

    // RD Search
    if (plugins.search.length || plugins.searchResults) {
      var handler = "bat/rd-search.php";
      var defaultTemplate = '<h5 class="search-title"><a target="_top" href="#{href}" class="search-link">#{title}</a></h5>' +
        '<p>...#{token}...</p>' +
        '<p class="match"><em>Terms matched: #{count} - URL: #{href}</em></p>';
      var defaultFilter = '*.html';

      if (plugins.search.length) {
        for (var i = 0; i < plugins.search.length; i++) {
          var searchItem = $(plugins.search[i]),
            options = {
              element: searchItem,
              filter: (searchItem.attr('data-search-filter')) ? searchItem.attr('data-search-filter') : defaultFilter,
              template: (searchItem.attr('data-search-template')) ? searchItem.attr('data-search-template') : defaultTemplate,
              live: (searchItem.attr('data-search-live')) ? searchItem.attr('data-search-live') : false,
              liveCount: (searchItem.attr('data-search-live-count')) ? parseInt(searchItem.attr('data-search-live'), 10) : 4,
              current: 0, processed: 0, timer: {}
            };

          var $toggle = $('.rd-navbar-search-toggle');
          if ($toggle.length) {
            $toggle.on('click', (function (searchItem) {
              return function () {
                if (!($(this).hasClass('active'))) {
                  searchItem.find('input').val('').trigger('propertychange');
                }
              }
            })(searchItem));
          }

          if (options.live) {
            var clearHandler = false;

            searchItem.find('input').on("input propertychange", $.proxy(function () {
              this.term = this.element.find('input').val().trim();
              this.spin = this.element.find('.input-group-addon');

              clearTimeout(this.timer);

              if (this.term.length > 2) {
                this.timer = setTimeout(liveSearch(this), 200);

                if (clearHandler === false) {
                  clearHandler = true;

                  $body.on("click", function (e) {
                    if ($(e.toElement).parents('.rd-search').length === 0) {
                      $('#rd-search-results-live').addClass('cleared').html('');
                    }
                  })
                }

              } else if (this.term.length === 0) {
                $('#' + this.live).addClass('cleared').html('');
              }
            }, options, this));
          }

          searchItem.submit($.proxy(function () {
            $('<input />').attr('type', 'hidden')
              .attr('name', "filter")
              .attr('value', this.filter)
              .appendTo(this.element);
            return true;
          }, options, this))
        }
      }

      if (plugins.searchResults.length) {
        var regExp = /\?.*s=([^&]+)\&filter=([^&]+)/g;
        var match = regExp.exec(location.search);

        if (match !== null) {
          $.get(handler, {
            s: decodeURI(match[1]),
            dataType: "html",
            filter: match[2],
            template: defaultTemplate,
            live: ''
          }, function (data) {
            plugins.searchResults.html(data);
          })
        }
      }
    }

    // Swiper
    function makeInterLeaveEffectOptions(interleaveOffset) {
      return {
        effect: 'slide',
        speed: 1200,
        watchSlidesProgress: true,
        on: {
          progress: function (progress) {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              var slideProgress = swiper.slides[i].progress,
                innerOffset = swiper.width * interleaveOffset,
                innerTranslate = slideProgress * innerOffset;

              if (slideProgress > 0) {
                innerOffset = slideProgress * swiper.width;
                innerTranslate = innerOffset * interleaveOffset;
              }
              else {
                innerTranslate = Math.abs(slideProgress * swiper.width) * interleaveOffset;
                innerOffset = 0;
              }

              swiper.slides[i].style.transform = 'translate3d(' + innerOffset + 'px,0,0)';
              swiper.slides[i].getElementsByClassName('slide-inner')[0].style.transform = 'translate3d(' + innerTranslate + 'px,0,0)';
            }
          },

          touchStart: function () {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              swiper.slides[i].style.transition = "";
            }
          },

          setTransition: function (speed) {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              swiper.slides[i].style.transition = speed + "ms";
              swiper.slides[i].querySelector(".slide-inner").style.transition =
                speed + "ms";
            }
          },
          slideNextTransitionStart: function () {
            var swiper = this;
            setTimeout(function () {
              toggleSwiperCaptionAnimation(swiper);
            }, 300);
          },
          slidePrevTransitionStart: function () {
            var swiper = this;
            setTimeout(function () {
              toggleSwiperCaptionAnimation(swiper);
            }, 300);
          }
        }
      };
    }

    if (plugins.swiper.length) {
      for (var i = 0; i < plugins.swiper.length; i++) {
        var s = $(plugins.swiper[i]),
          pag = s.find(".swiper-pagination"),
          next = s.find(".swiper-button-next"),
          prev = s.find(".swiper-button-prev"),
          bar = s.find(".swiper-scrollbar"),
          swiperSlide = s.find(".swiper-slide");

        for (var j = 0; j < swiperSlide.length; j++) {
          var $this = $(swiperSlide[j]),
            url;

          if (url = $this.attr("data-slide-bg")) {
            $this.css({
              "background-image": "url(" + url + ")",
              "background-size": "cover"
            })
          }
        }

        swiperSlide.end()
          .find("[data-caption-animate]")
          .addClass("not-animated")
          .end();

        var swiperOptions = {
          autoplay: s.attr('data-autoplay') ? s.attr('data-autoplay') === "false" ? undefined : s.attr('data-autoplay') : 5000,
          direction: s.attr('data-direction') ? s.attr('data-direction') : "horizontal",
          effect: s.attr('data-slide-effect') ? s.attr('data-slide-effect') : "slide",
          speed: s.attr('data-slide-speed') ? s.attr('data-slide-speed') : 600,
          loop: isNoviBuilder ? false : s.attr('data-loop') !== "false",
          simulateTouch: s.attr('data-simulate-touch') && !isNoviBuilder ? s.attr('data-simulate-touch') === "true" : false,
          navigation: {
            nextEl: next.length ? next.get(0) : null,
            prevEl: prev.length ? prev.get(0) : null
          },
          pagination: {
            el: pag.length ? pag.get(0) : null,
            clickable: pag.length ? pag.attr("data-clickable") !== "false" : false,
            renderBullet: pag.length ? pag.attr("data-index-bullet") === "true" ? function (index, className) {
              return '<span class="' + className + '">' + ((index + 1) < 10 ? ('0' + (index + 1)) : (index + 1)) + '</span>';
            } : null : null,
          },
          scrollbar: {
            el: bar.length ? bar.get(0) : null,
            draggable: bar.length ? bar.attr("data-draggable") !== "false" : true,
            hide: bar.length ? bar.attr("data-draggable") === "false" : false
          },
          on: {
            init: function () {
              toggleSwiperInnerVideos(this);
              toggleSwiperCaptionAnimation(this);
            },

            transitionStart: function () {
              toggleSwiperInnerVideos(this);
            },
            transitionEnd: function () {
              var $buttonsWinona = $(this.slides[this.activeIndex]).find('.button-winona');
              if ($buttonsWinona.length && !isNoviBuilder) {
                initWinonaButtons($buttonsWinona);
              }
            }
          }
        };

        if (s.attr('data-custom-slide-effect') === 'inter-leave-effect') {
          var interleaveOffset = s.attr('data-inter-leave-offset') ? s.attr('data-inter-leave-offset') : -.7;
          swiperOptions = $.extend(true, swiperOptions, makeInterLeaveEffectOptions(interleaveOffset));
        }

        s = new Swiper(plugins.swiper[i], swiperOptions);

        var container = $(pag);
        if (container.hasClass('swiper-pagination-marked')) {
          container.append('<span class="swiper-pagination-mark"></span>');
        }
      }
    }

    // Owl carousel
    if (plugins.owl.length) {
      for (var i = 0; i < plugins.owl.length; i++) {
        var c = $(plugins.owl[i]);
        plugins.owl[i].owl = c;

        initOwlCarousel(c);
      }
      
      if(navigator.platform.match(/(Mac)/i)) {
        setTimeout(function() {
          $window.trigger('resize');
        }, 700);
      }
    }

    // RD Input Label
    if (plugins.rdInputLabel.length) {
      plugins.rdInputLabel.RDInputLabel();
    }

    // Regula
    if (plugins.regula.length) {
      attachFormValidator(plugins.regula);
    }

    // MailChimp Ajax subscription
    if (plugins.mailchimp.length) {
      for (i = 0; i < plugins.mailchimp.length; i++) {
        var $mailchimpItem = $(plugins.mailchimp[i]),
          $email = $mailchimpItem.find('input[type="email"]');

        // Required by MailChimp
        $mailchimpItem.attr('novalidate', 'true');
        $email.attr('name', 'EMAIL');

        $mailchimpItem.on('submit', $.proxy( function ( $email, event ) {
          event.preventDefault();

          var $this = this;

          var data = {},
            url = $this.attr('action').replace('/post?', '/post-json?').concat('&c=?'),
            dataArray = $this.serializeArray(),
            $output = $("#" + $this.attr("data-form-output"));

          for (i = 0; i < dataArray.length; i++) {
            data[dataArray[i].name] = dataArray[i].value;
          }

          $.ajax({
            data: data,
            url: url,
            dataType: 'jsonp',
            error: function (resp, text) {
              $output.html('Server error: ' + text);

              setTimeout(function () {
                $output.removeClass("active");
              }, 4000);
            },
            success: function (resp) {
              $output.html(resp.msg).addClass('active');
              $email[0].value = '';
              var $label = $('[for="'+ $email.attr( 'id' ) +'"]');
              if ( $label.length ) $label.removeClass( 'focus not-empty' );

              setTimeout(function () {
                $output.removeClass("active");
              }, 6000);
            },
            beforeSend: function (data) {
              var isNoviBuilder = window.xMode;

              var isValidated = (function () {
                var results, errors = 0;
                var elements = $this.find('[data-constraints]');
                var captcha = null;
                if (elements.length) {
                  for (var j = 0; j < elements.length; j++) {

                    var $input = $(elements[j]);
                    if ((results = $input.regula('validate')).length) {
                      for (var k = 0; k < results.length; k++) {
                        errors++;
                        $input.siblings(".form-validation").text(results[k].message).parent().addClass("has-error");
                      }
                    } else {
                      $input.siblings(".form-validation").text("").parent().removeClass("has-error")
                    }
                  }

                  if (captcha) {
                    if (captcha.length) {
                      return validateReCaptcha(captcha) && errors === 0
                    }
                  }

                  return errors === 0;
                }
                return true;
              })();

              // Stop request if builder or inputs are invalide
              if (isNoviBuilder || !isValidated)
                return false;

              $output.html('Submitting...').addClass('active');
            }
          });

          return false;
        }, $mailchimpItem, $email ));
      }
    }

    // Campaign Monitor ajax subscription
    if (plugins.campaignMonitor.length) {
      for (i = 0; i < plugins.campaignMonitor.length; i++) {
        var $campaignItem = $(plugins.campaignMonitor[i]);

        $campaignItem.on('submit', $.proxy(function (e) {
          var data = {},
            url = this.attr('action'),
            dataArray = this.serializeArray(),
            $output = $("#" + plugins.campaignMonitor.attr("data-form-output")),
            $this = $(this);

          for (i = 0; i < dataArray.length; i++) {
            data[dataArray[i].name] = dataArray[i].value;
          }

          $.ajax({
            data: data,
            url: url,
            dataType: 'jsonp',
            error: function (resp, text) {
              $output.html('Server error: ' + text);

              setTimeout(function () {
                $output.removeClass("active");
              }, 4000);
            },
            success: function (resp) {
              $output.html(resp.Message).addClass('active');

              setTimeout(function () {
                $output.removeClass("active");
              }, 6000);
            },
            beforeSend: function (data) {
              // Stop request if builder or inputs are invalide
              if (isNoviBuilder || !isValidated($this.find('[data-constraints]')))
                return false;

              $output.html('Submitting...').addClass('active');
            }
          });

          // Clear inputs after submit
          var inputs = $this[0].getElementsByTagName('input');
          for (var i = 0; i < inputs.length; i++) {
            inputs[i].value = '';
            var label = document.querySelector( '[for="'+ inputs[i].getAttribute( 'id' ) +'"]' );
            if( label ) label.classList.remove( 'focus', 'not-empty' );
          }

          return false;
        }, $campaignItem));
      }
    }

    // Select2
    if (plugins.selectFilter.length) {
      var i;
      for (i = 0; i < plugins.selectFilter.length; i++) {
        var select = $(plugins.selectFilter[i]);

        select.select2({
          placeholder: select.attr("data-placeholder") ? select.attr("data-placeholder") : false,
          minimumResultsForSearch: select.attr("data-minimum-results-search") ? select.attr("data-minimum-results-search") : -1,
          maximumSelectionSize: 3,
          dropdownCssClass: select.attr("data-class") ? select.attr("data-class") : ''
        });
      }
    }

    // RD Mailform
    if (plugins.rdMailForm.length) {
      var i, j, k,
        msg = {
          'MF000': 'Successfully sent!',
          'MF001': 'Recipients are not set!',
          'MF002': 'Form will not work locally!',
          'MF003': 'Please, define email field in your form!',
          'MF004': 'Please, define type of your form!',
          'MF254': 'Something went wrong with PHPMailer!',
          'MF255': 'Aw, snap! Something went wrong.'
        };

      for (i = 0; i < plugins.rdMailForm.length; i++) {
        var $form = $(plugins.rdMailForm[i]),
          formHasCaptcha = false;

        $form.attr('novalidate', 'novalidate').ajaxForm({
          data: {
            "form-type": $form.attr("data-form-type") || "contact",
            "counter": i
          },
          beforeSubmit: function (arr, $form, options) {
            if (isNoviBuilder)
              return;

            var form = $(plugins.rdMailForm[this.extraData.counter]),
              inputs = form.find("[data-constraints]"),
              output = $("#" + form.attr("data-form-output")),
              captcha = form.find('.recaptcha'),
              captchaFlag = true;

            output.removeClass("active error success");

            if (isValidated(inputs, captcha)) {

              // veify reCaptcha
              if (captcha.length) {
                var captchaToken = captcha.find('.g-recaptcha-response').val(),
                  captchaMsg = {
                    'CPT001': 'Please, setup you "site key" and "secret key" of reCaptcha',
                    'CPT002': 'Something wrong with google reCaptcha'
                  };

                formHasCaptcha = true;

                $.ajax({
                  method: "POST",
                  url: "bat/reCaptcha.php",
                  data: {'g-recaptcha-response': captchaToken},
                  async: false
                })
                  .done(function (responceCode) {
                    if (responceCode !== 'CPT000') {
                      if (output.hasClass("snackbars")) {
                        output.html('<p><span class="icon text-middle mdi mdi-check icon-xxs"></span><span>' + captchaMsg[responceCode] + '</span></p>')

                        setTimeout(function () {
                          output.removeClass("active");
                        }, 3500);

                        captchaFlag = false;
                      } else {
                        output.html(captchaMsg[responceCode]);
                      }

                      output.addClass("active");
                    }
                  });
              }

              if (!captchaFlag) {
                return false;
              }

              form.addClass('form-in-process');

              if (output.hasClass("snackbars")) {
                output.html('<p><span class="icon text-middle fa fa-circle-o-notch fa-spin icon-xxs"></span><span>Sending</span></p>');
                output.addClass("active");
              }
            } else {
              return false;
            }
          },
          error: function (result) {
            if (isNoviBuilder)
              return;

            var output = $("#" + $(plugins.rdMailForm[this.extraData.counter]).attr("data-form-output")),
              form = $(plugins.rdMailForm[this.extraData.counter]);

            output.text(msg[result]);
            form.removeClass('form-in-process');

            if (formHasCaptcha) {
              grecaptcha.reset();
            }
          },
          success: function (result) {
            if (isNoviBuilder)
              return;

            var form = $(plugins.rdMailForm[this.extraData.counter]),
              output = $("#" + form.attr("data-form-output")),
              select = form.find('select');

            form
              .addClass('success')
              .removeClass('form-in-process');

            if (formHasCaptcha) {
              grecaptcha.reset();
            }

            result = result.length === 5 ? result : 'MF255';
            output.text(msg[result]);

            if (result === "MF000") {
              if (output.hasClass("snackbars")) {
                output.html('<p><span class="icon text-middle mdi mdi-check icon-xxs"></span><span>' + msg[result] + '</span></p>');
              } else {
                output.addClass("active success");
              }
            } else {
              if (output.hasClass("snackbars")) {
                output.html(' <p class="snackbars-left"><span class="icon icon-xxs mdi mdi-alert-outline text-middle"></span><span>' + msg[result] + '</span></p>');
              } else {
                output.addClass("active error");
              }
            }

            form.clearForm();

            if (select.length) {
              select.select2("val", "");
            }

            form.find('input, textarea').trigger('blur');

            setTimeout(function () {
              output.removeClass("active error success");
              form.removeClass('success');
            }, 3500);
          }
        });
      }
    }

    // RD Filepicker
    if ((plugins.filePicker.length || plugins.fileDrop.length) && !isNoviBuilder) {
      var i;
      for (i = 0; i < plugins.filePicker.length; i++) {
        var $filePickerItem = $(plugins.filePicker[i]);

        $filePickerItem.RDFilepicker({
          metaFieldClass: $filePickerItem.data('meta-field-element') ? $filePickerItem.data('meta-field-element') : 'rd-file-picker-meta'
        });
      }

      for (i = 0; i < plugins.fileDrop.length; i++) {
        var $fileDropItem = $(plugins.fileDrop[i]);

        $fileDropItem.RDFilepicker({
          metaFieldClass: $fileDropItem.data('field-element') ? $fileDropItem.data('field-element') : 'rd-file-drop-meta',
          buttonClass: $fileDropItem.data('button') ? $fileDropItem.data('button') : 'rd-file-drop-btn',
          dropZoneClass: $fileDropItem.data('drop-zone') ? $fileDropItem.data('drop-zone') : 'rd-file-drop'
        });
      }
    }

    // RD Range
    if (plugins.rdRange.length) {
      plugins.rdRange.RDRange({});
    }

    // lightGallery
    if (plugins.lightGallery.length) {
      for (var i = 0; i < plugins.lightGallery.length; i++) {
        initLightGallery(plugins.lightGallery[i]);
      }
    }

    // lightGallery item
    if (plugins.lightGalleryItem.length) {
      // Filter carousel items
      var notCarouselItems = [];

      for (var z = 0; z < plugins.lightGalleryItem.length; z++) {
        if (!$(plugins.lightGalleryItem[z]).parents('.owl-carousel').length &&
          !$(plugins.lightGalleryItem[z]).parents('.swiper-slider').length &&
          !$(plugins.lightGalleryItem[z]).parents('.slick-slider').length) {
          notCarouselItems.push(plugins.lightGalleryItem[z]);
        }
      }

      plugins.lightGalleryItem = notCarouselItems;

      for (var i = 0; i < plugins.lightGalleryItem.length; i++) {
        initLightGalleryItem(plugins.lightGalleryItem[i]);
      }
    }

    // Dynamic lightGallery
    if (plugins.lightDynamicGalleryItem.length) {
      for (var i = 0; i < plugins.lightDynamicGalleryItem.length; i++) {
        initDynamicLightGallery(plugins.lightDynamicGalleryItem[i]);
      }
    }

    // WOW
    if ($html.hasClass('wow-animation') && plugins.wow.length && !isNoviBuilder && isDesktop) {
      setTimeout(function () {
        new WOW().init();
      }, pageTransitionDuration);
    }

    // Slick carousel
    if (plugins.slick.length) {
      for (var i = 0; i < plugins.slick.length; i++) {
        var $slickItem = $(plugins.slick[i]);

        $slickItem.slick({
          slidesToScroll: parseInt($slickItem.attr('data-slide-to-scroll'), 10) || 1,
          draggable: $slickItem.attr("data-draggable") === "true",
          fade: $slickItem.attr("data-fade") === "true",
          asNavFor: $slickItem.attr('data-for') || false,
          dots: $slickItem.attr("data-dots") === "true",
          infinite: isNoviBuilder ? false : $slickItem.attr("data-loop") === "true",
          focusOnSelect: true,
          arrows: $slickItem.attr("data-arrows") === "true",
          swipe: $slickItem.attr("data-swipe") === "true",
          autoplay: $slickItem.attr("data-autoplay") === "true" && !isNoviBuilder,
          autoplaySpeed: $slickItem.attr("data-autoplay-speed") ? parseInt($slickItem.attr("data-autoplay-speed")) : 3500,
          vertical: $slickItem.attr("data-vertical") === "true",
          centerMode: $slickItem.attr("data-center-mode") === "true",
          centerPadding: $slickItem.attr("data-center-padding") ? $slickItem.attr("data-center-padding") : '0.50',
          mobileFirst: true,
          responsive: [
            {
              breakpoint: 0,
              settings: {
                slidesToShow: parseInt($slickItem.attr('data-items'), 10) || 1
              }
            },
            {
              breakpoint: 575,
              settings: {
                slidesToShow: parseInt($slickItem.attr('data-sm-items'), 10) || 1
              }
            },
            {
              breakpoint: 767,
              settings: {
                slidesToShow: parseInt($slickItem.attr('data-md-items'), 10) || 1
              }
            },
            {
              breakpoint: 991,
              settings: {
                slidesToShow: parseInt($slickItem.attr('data-lg-items'), 10) || 1
              }
            },
            {
              breakpoint: 1199,
              settings: {
                slidesToShow: parseInt($slickItem.attr('data-xl-items'), 10) || 1
              }
            }
          ]
        })
          .on('afterChange', function (event, slick, currentSlide) {
            var $this = $(this),
              childCarousel = $this.attr('data-child');

            if (childCarousel) {
              $(childCarousel + ' .slick-slide').removeClass('slick-current');
              $(childCarousel).find('.slick-slide[data-slick-index="' + currentSlide + '"]').addClass('slick-current');
            }
          });

      }
    }

    // Stepper
    if (plugins.stepper.length) {
      plugins.stepper.stepper({
        labels: {
          up: "",
          down: ""
        }
      });
    }

    // jScrollPane 
    if (plugins.scroller.length && !isNoviBuilder) {
      for (var i = 0; i < plugins.scroller.length; i++) {
        var scrollerItem = $(plugins.scroller[i]);

        scrollerItem.jScrollPane({
          autoReinitialise: true
        });
      }
    }

    // Multitoggles
    function toggleElementsVisibility(targets) {
      for (var z = 0; z < targets.length; z++) {
        var hiddenElements = targets[z].querySelectorAll('[aria-hidden="true"]'),
          visibleElements = targets[z].querySelectorAll('[aria-hidden="false"]');

        for (var k = 0; k < hiddenElements.length; k++) {
          hiddenElements[k].setAttribute('aria-hidden', 'false');
        }

        for (var k = 0; k < visibleElements.length; k++) {
          visibleElements[k].setAttribute('aria-hidden', 'true');
        }
      }
    }

    if (plugins.multitoggles.length) {
      for (var i = 0; i < plugins.multitoggles.length; i++) {
        var
          node = plugins.multitoggles[i],
          toggle = new Toggle({
            node: node,
            targets: document.querySelectorAll(node.getAttribute('data-multitoggle')),
            scope: document.querySelectorAll(node.getAttribute('data-scope')),
            isolate: document.querySelectorAll(node.getAttribute('data-isolate'))
          });

        if (plugins.multitoggles[i].classList.contains('content-toggle')) {
          node.addEventListener('click', function () {
            toggleElementsVisibility(this.mt.targets);
          });
        }
      }
    }

    // Gmap Load Trigger
    if (plugins.gmapTrigger.length) {
      for (var i = 0; i < plugins.gmapTrigger.length; i++) {
        var trigger = plugins.gmapTrigger[i];
        (function () {
          trigger.addEventListener('click', function load(event) {
            initMaps($(event.target.getAttribute('data-gmap-trigger')));
            event.target.removeEventListener('click', load);
          });
        })(trigger);
      }
    }

    // Waypoint
    if (plugins.waypoint.length && !isNoviBuilder) {
      for (var i = 0; i < plugins.waypoint.length; i++) {
        var $waypoint = $(plugins.waypoint[i]);
        $waypoint.on('click', (function ($waypoint) {
          return function (e) {
            e.preventDefault();
            e.stopPropagation();
            var offset = $($waypoint.attr('data-waypoint-to')).offset().top + 2;
            if ($waypoint.attr('data-waypoint-relative-to')) {
              var relatives = document.querySelectorAll($waypoint.attr('data-waypoint-relative-to'));
              for (var j = 0; j < relatives.length; j++) {
                offset -= relatives[j].offsetHeight;
              }
            }
            if ($waypoint.attr('data-waypoint-offset')) {
              offset -= $waypoint.attr('data-waypoint-offset');
            }

            $('html, body').stop().animate({
              scrollTop: offset
            }, 800);
          }
        })($waypoint));
      }
    }

    // Countdown
    if ( plugins.countdown.length ) {
      for ( var i = 0; i < plugins.countdown.length; i++) {
        var
          node = plugins.countdown[i],
          countdown = aCountdown({
            node:  node,
            from:  node.getAttribute( 'data-from' ),
            to:    node.getAttribute( 'data-to' ),
            count: node.getAttribute( 'data-count' ),
            tick:  100,
          });
      }
    }

  });
}());
