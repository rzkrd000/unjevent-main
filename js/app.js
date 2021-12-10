// Animate on Scroll
AOS.init({
  duration: 1000,
})

// Tooltip
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

// Pricing
var headerMonthly = document.getElementsByClassName("header-monthly")
var headerAnnual = document.getElementsByClassName("header-annual")
var priceMonthly = document.getElementsByClassName("price-monthly")
var priceAnnual = document.getElementsByClassName("price-annual")
var durationMonth = document.getElementsByClassName("duration-month")
var durationYear = document.getElementsByClassName("duration-year")

function checker(checked) {
  checked ? showAnnual() : showMonthly()
}

function showAnnual() {
  headerMonthly[0].style.display = "none"
  headerAnnual[0].style.display = "inline-block"
  priceMonthly[0].style.display = "none"
  priceAnnual[0].style.display = "inline-block"
  durationMonth[0].style.display = "none"
  durationYear[0].style.display = "inline-block"
}

function showMonthly() {
  headerMonthly[0].style.display = "inline-block"
  headerAnnual[0].style.display = "none"
  priceMonthly[0].style.display = "inline-block"
  priceAnnual[0].style.display = "none"
  durationMonth[0].style.display = "inline-block"
  durationYear[0].style.display = "none"
}

//slider js
$(document).ready(function() {
  $('.logo-carousel').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    arrows: true,
    dots: false,
    pauseOnHover: false,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 4
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 2
      }
    }]
  });
});
