(function($){
  documentReady();
  mobileNavigation();
  reportSlider();
  reportSliderMobile();
  projectsSlider();
  pilarsSlider();
  newsSlider();
  blogHeroSlider();
  impactSlider();
  advisorSlider();
  volunteersSlider();
  teamSlider();
  additionalContent();
  advocacyTabs();

  function documentReady() {
    jQuery(document).ready(function () {
      console.log('OK');
      speakersSlider();
    });
  }

  function speakersSlider() {
    var slider = $('#speakers-slider');
    if (slider.length > 0) {
      console.log('Slider..');
      slider.owlCarousel({
        items: 2,
        loop: true,
        nav: false,
        dots: false,
        margin: 30,
        responsive: {
          768: {
            items: 6,
            margin: 18,
          },
          1024: {
            items: 6,
            margin: 32,
          },
        },
      });

      $('.next-slide').click(function () {
        slider.trigger('next.owl.carousel');
      });
      // Go to the previous item
      $('.prev-slide').click(function () {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        slider.trigger('prev.owl.carousel', [300]);
      });
    }
  }

  $(document).ready(function () {
    $('a[href*=#]').click(function () {
      if (
        location.pathname.replace(/^\//, '') ==
          this.pathname.replace(/^\//, '') &&
        location.hostname == this.hostname
      ) {
        var $target = $(this.hash);
        $target =
          ($target.length && $target) || $('[id=' + this.hash.slice(1) + ']');
        if ($target.length) {
          var targetOffset = $target.offset().top - 100;
          $('html,body').animate({ scrollTop: targetOffset }, 1000);
          return false;
        }
      }
    });
  });

  function mobileNavigation() {
    jQuery('.mobile-burger').on('click', function () {
      jQuery('.mobile-navigation').addClass('active');
      jQuery('body').addClass('hidden');
    });

    jQuery('.burger-close').on('click', function () {
      jQuery('.mobile-navigation').removeClass('active');
      jQuery('body').removeClass('hidden');
    });

    jQuery('.mobile-navigation a').on('click', () => {
      jQuery('.mobile-navigation').removeClass('active');
      jQuery('body').removeClass('hidden');
    });
  }

  function reportSlider() {
    var slider = $('#report-slider');
    if (slider.length > 0) {
      console.log('Slider..');
      slider.owlCarousel({
        items: 2,
        loop: true,
        nav: false,
        dots: false,
        margin: 92,
      });

      var sliderNavigation = jQuery('#report-slider-navigation');
      jQuery('.next-slide', sliderNavigation).click(function () {
        slider.trigger('next.owl.carousel');
      });
      jQuery('.prev-slide', sliderNavigation).click(function () {
        slider.trigger('prev.owl.carousel');
      });
    }
  }

  function reportSliderMobile() {
    var slider = $('#report-slider-mobile');
    if (slider.length > 0) {
      slider.owlCarousel({
        items: 1,
        loop: true,
        nav: false,
        dots: false,
      });

      var sliderNavigation = jQuery('#report-slider-navigation');
      jQuery('.next-slide', sliderNavigation).click(function () {
        slider.trigger('next.owl.carousel');
      });
      // Go to the previous item
      jQuery('.prev-slide', sliderNavigation).click(function () {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        slider.trigger('prev.owl.carousel');
      });
    }
  }

  function projectsSlider() {
    var slider = $('#projects-slider');
    if (slider.length > 0) {
      console.log('Slider..');
      slider.owlCarousel({
        items: 3,
        loop: true,
        nav: false,
        dots: false,
        margin: 10,
        autoWidth: true,
        mouseDrag: false,
        touchDrag: false,
        responsive: {
          768: {
            margin: 40,
          },
        },
      });

      var sliderNavigation = jQuery('#projects-slider-navigation');
      jQuery('.next-slide', sliderNavigation).click(function () {
        slider.trigger('next.owl.carousel');
        var dataCurrentSlide = parseInt(slider.attr('data-current-slide'));
        setNextSlide(dataCurrentSlide, 'next');
        changeSliderItems();
      });

      jQuery('.prev-slide', sliderNavigation).click(function () {
        slider.trigger('prev.owl.carousel');
        var dataCurrentSlide = parseInt(slider.attr('data-current-slide'));
        setNextSlide(dataCurrentSlide, 'prev');
        changeSliderItems();
      });
    }
  }

  function setNextSlide(currenSlide, direction) {
    var slideCount =  parseInt(jQuery('#projects-slider').attr('data-slide-count'));
    if (direction == 'next') {
      nextSlideNumber = currenSlide + 1;
      if (nextSlideNumber == (slideCount + 1)) {
        nextSlideNumber = 1;
        jQuery('#projects-slider').attr('data-active-slide-count', 0);
      } else {
        jQuery('#projects-slider').attr('data-active-slide-count', 1);
      }
    }

    if (direction == 'prev') {
      nextSlideNumber = currenSlide - 1;
      if (nextSlideNumber == 0) {
        nextSlideNumber = slideCount;
      }

      if ((nextSlideNumber == 1) || (nextSlideNumber == slideCount)) {
        jQuery('#projects-slider').attr('data-active-slide-count', 0);
      } else {
        jQuery('#projects-slider').attr('data-active-slide-count', 1);
      }
    }

    var current = '0' + nextSlideNumber;
    if (nextSlideNumber > 9) {
      current = nextSlideNumber;
    }

    jQuery('#projects-slider').attr('data-current-slide', nextSlideNumber);
    jQuery('#projects-slider-navigation span.current').text(current);
  }

  function changeSliderItems() {
    var slider = jQuery('#projects-slider');
    setTimeout(function () {
      jQuery('.slide-item', slider).removeClass('active');

      var dataActiveSlideCount = parseInt(slider.attr('data-active-slide-count'));

      var allActiveItems = jQuery('.owl-item.active', slider);
      var firsItemActive = allActiveItems.first();
      jQuery('.slide-item', firsItemActive).addClass('active');

      var allItems = jQuery('.owl-item', slider);

      for (let index = 0; index < dataActiveSlideCount; index++) {
        var currentElem = jQuery(allItems[index]);
        jQuery('.slide-item', currentElem).addClass('active');
      }
    }, 50);
  }

  function pilarsSlider() {
    var slider = $('#pillars-slider');
    if (slider.length > 0) {
      slider.owlCarousel({
        items: 1,
        loop: true,
        nav: false,
        dots: false,
      });

      var sliderNavigation = jQuery('#pillars-slider-navigtion');
      jQuery('.next-slide', sliderNavigation).click(function () {
        slider.trigger('next.owl.carousel');
        var current_slide_color = jQuery('.owl-item.active .slide-item').data(
          'slide-color'
        );
        sliderNavigation.attr('data-color-nav', current_slide_color);
      });
      // Go to the previous item
      jQuery('.prev-slide', sliderNavigation).click(function () {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        slider.trigger('prev.owl.carousel');
        var current_slide_color = jQuery('.owl-item.active .slide-item').data(
          'slide-color'
        );
        sliderNavigation.attr('data-color-nav', current_slide_color);
      });
    }
  }

  function newsSlider() {
    var slider = $('#news-slider');
    if (slider.length > 0) {
      slider.owlCarousel({
        items: 1,
        loop: true,
        nav: false,
        dots: false,
      });

      var sliderNavigation = jQuery('#news-slider-navigation');
      jQuery('.next-slide', sliderNavigation).click(function () {
        slider.trigger('next.owl.carousel');
      });
      // Go to the previous item
      jQuery('.prev-slide', sliderNavigation).click(function () {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        slider.trigger('prev.owl.carousel');
      });
    }
  }

  function blogHeroSlider() {
    var slider = $('#blog-hero-slider');
    if (slider.length > 0) {
      slider.owlCarousel({
        items: 1,
        loop: true,
        nav: false,
        dots: false,
      });

      var sliderNavigation = jQuery('#blog-hero-slider-navigation');
      jQuery('.next-slide', sliderNavigation).click(function () {
        slider.trigger('next.owl.carousel');
      });
      // Go to the previous item
      jQuery('.prev-slide', sliderNavigation).click(function () {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        slider.trigger('prev.owl.carousel');
      });
    }
  }

  function impactSlider() {
    var slider = $('#impact-slider');
    if (slider.length > 0) {
      slider.owlCarousel({
        items: 3,
        loop: true,
        nav: false,
        dots: false,
        margin: 15,
        responsive: {
          768: {
            margin: 20,
          },
          1200: {
            margin: 32,
          },
        },
      });

      var sliderNavigation = jQuery('#impact-slider-navigation');
      jQuery('.next-slide', sliderNavigation).click(function () {
        slider.trigger('next.owl.carousel');
      });
      jQuery('.prev-slide', sliderNavigation).click(function () {
        slider.trigger('prev.owl.carousel');
      });
    }
  }

  function advisorSlider() {
    var slider = $('#advisor-slider');
    if (slider.length > 0) {
      slider.owlCarousel({
        items: 2,
        loop: true,
        nav: false,
        dots: false,
        margin: 23,
        responsive: {
          768: {
            margin: 17,
          },
          991: {
            margin: 32,
            items: 4,
          },
        },
      });

      var sliderNavigation = jQuery('#advisor-slider-navigation');
      jQuery('.next-slide', sliderNavigation).click(function () {
        slider.trigger('next.owl.carousel');
      });
      jQuery('.prev-slide', sliderNavigation).click(function () {
        slider.trigger('prev.owl.carousel');
      });
    }
  }

  function teamSlider() {
    var slider = $('#team-slider');
    if (slider.length > 0 && jQuery(window).width() < 768) {
      slider.owlCarousel({
        items: 2,
        loop: true,
        nav: false,
        dots: false,
        margin: 28,
      });

      var sliderNavigation = jQuery('#team-slider-navigation');
      jQuery('.next-slide', sliderNavigation).click(function () {
        slider.trigger('next.owl.carousel');
      });
      jQuery('.prev-slide', sliderNavigation).click(function () {
        slider.trigger('prev.owl.carousel');
      });
    }
  }

  function volunteersSlider() {
    var slider = $('#volunteers-slider');
    if (slider.length > 0) {
      slider.owlCarousel({
        items: 2,
        loop: true,
        nav: false,
        dots: false,
        margin: 26,
        responsive: {
          768: {
            margin: 80,
          },
          991: {
            margin: 135,
            items: 3,
          },
        },
      });

      var sliderNavigation = jQuery('#volunteers-slider-navigation');
      jQuery('.next-slide', sliderNavigation).click(function () {
        slider.trigger('next.owl.carousel');
      });
      jQuery('.prev-slide', sliderNavigation).click(function () {
        slider.trigger('prev.owl.carousel');
      });
    }
  }

  function additionalContent() {
    jQuery('[data-content-btn-id]').on('click', function (e) {
      e.preventDefault();
      var id = jQuery(this).data('content-btn-id');
      jQuery(this).toggleClass('active');
      jQuery('[data-content-id=' + id + ']').toggleClass('active');
    });
  }

  function advocacyTabs() {
    jQuery('.tab-name').on('click', function () {
      var tabName = jQuery(this).data('tab-name');
      console.log(tabName);
      if (jQuery(this).hasClass('active')) {
        return;
      }

      jQuery('.tab-name').removeClass('active');
      jQuery(this).addClass('active');

      jQuery('.tab-content').removeClass('active');
      jQuery('[data-tab-content=' + tabName + ']').addClass('active');
    });
  }

})(jQuery)
