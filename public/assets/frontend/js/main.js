(function() {
	"user strict";

	  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
	  function toggleScrolled() {
		const selectBody = document.querySelector('body');
		const selectHeader = document.querySelector('#header');
		if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
		window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
	  }
	
	  document.addEventListener('scroll', toggleScrolled);
	  window.addEventListener('load', toggleScrolled);

	function aosInit() {
		AOS.init({
		  duration: 600,
		  easing: 'ease-in-out',
		  once: true,
		  mirror: false
		});
	  }
	  window.addEventListener('load', aosInit);

	    /**
   * Init typed.js
   */
  const selectTyped = document.querySelector('.typed');
  if (selectTyped) {
    let typed_strings = selectTyped.getAttribute('data-typed-items');
    typed_strings = typed_strings.split(',');
    new Typed('.typed', {
      strings: typed_strings,
      loop: true,
      typeSpeed: 100,
      backSpeed: 50,
      backDelay: 2000
    });
  }

    /**
   * Init swiper sliders
   */
	function initSwiper() {
		document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
		  let config = JSON.parse(
			swiperElement.querySelector(".swiper-config").innerHTML.trim()
		  );
	
		  if (swiperElement.classList.contains("swiper-tab")) {
			initSwiperWithCustomPagination(swiperElement, config);
		  } else {
			new Swiper(swiperElement, config);
		  }
		});
	  }
	
	  window.addEventListener("load", initSwiper);
	  
})();