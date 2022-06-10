/**
* Template Name: Bootslander - v4.3.0
* Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";
  
  $(document).ready(function(){
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
      });

      $("#mainform").validate({
        rules: {
          fullname : {
            required: true,
            minlength: 3
          },
          phone: {
            required: true,
            number: true,
            min: 6
          },
          email: {
            required: true,
            email: true
          },
          message: {
            required: true
          }
        },
        submitHandler: function(form) {
            console.log('submit...');
            
            if(grecaptcha.getResponse() == "") {
              return false;
            }
            
            var form = $("#mainform");
            var url = form.attr('action');
            
            $('.oculto').css('display','inline-block');
            $('.php-email-form').find('button').prop("disabled", true);
            $.ajax({
              type: "POST",
              url: url,
              data: form.serialize(),
              success: function (data) {
                console.log("Form Submited Successfully");
                $('.oculto').css('display','none');
                $('.php-email-form').find('button').css('display','none');
                $('.sent-message').css('display','block');
                form[0].reset();
              },
              error: function (data) {
                console.log("some Error");
                $('.error-message').html('Error al enviar información');
              }
            });
        }
      });
      
  });

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }
  
  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    if (!header.classList.contains('header-scrolled')) {
      offset -= 20
    }

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /**
   * Preloader
   */
  let preloader = select('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove()
    });
  }

  /**
   * Initiate gallery lightbox 
   */
  const galleryLightbox = GLightbox({
    selector: '.gallery-lightbox'
  });

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

  $( document ).ready(function() {
    $('#cambios').modal('toggle')
  
      $('#cambios').click(function() {
      $('#cambios').modal('hide');
  });
  
});


$(function () {
  $('[data-toggle="popover"]').popover()
})

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})


//$(document).ready(function(){
//  $('.customer-logos').slick({
//      slidesToShow: 6,
//      slidesToScroll: 6,
//      autoplay: true,
//      autoplaySpeed: 1500,
//      arrows: false,
//      dots: false,
//      pauseOnHover: false,
//      responsive: [{
//          breakpoint: 768,
//          settings: {
//              slidesToShow: 4
//          }
//      }, {
//          breakpoint: 520,
//          settings: {
//              slidesToShow: 3
//          }
//      }]
//  });
//});

//var input=  document.getElementById('numero');
//input.addEventListener('input',function(){
//  if (this.value.length > 11) 
//     this.value = this.value.slice(0,11); 
//})
//
//var input=  document.getElementById('numerodos');
//input.addEventListener('input',function(){
//  if (this.value.length > 20) 
//     this.value = this.value.slice(0,20); 
//})
//
//
//var input=  document.getElementById('siete');
//input.addEventListener('input',function(){
//  if (this.value.length > 7) 
//     this.value = this.value.slice(0,7); 
//})
//
//
//
//var input=  document.getElementById('once');
//input.addEventListener('input',function(){
//  if (this.value.length > 11) 
//     this.value = this.value.slice(0,11); 
//})

})()