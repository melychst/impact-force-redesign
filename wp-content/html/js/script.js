(function($){
    documentReady();
    mobileNavigation();
    // agendaTabs();
  
    function documentReady() {
      jQuery(document).ready(function () {
        console.log('OK');
        // speakersSlider();
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
            console.log(targetOffset);
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
  
  })(jQuery)
   