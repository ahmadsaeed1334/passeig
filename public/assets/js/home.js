// Function to handle the end of the video
function handleVideoEnd() {
  // Slide up the content container
  document.getElementById('contentContainer').style.bottom = '0';

  // Enable scrolling
  document.body.style.overflowY = 'scroll';

  // Animate all child elements of the content container with a fade-in-left effect
  gsap.from('#contentContainer > *', {
    opacity: 0,
    x: 500,
    duration: 0,
    stagger: 0.2 // Optional: adds delay between the start of each animation
  });
}

document.body.style.overflow = 'hidden';

// GSAP Animation with ScrollTrigger
gsap.registerPlugin(ScrollTrigger);
document.addEventListener('scroll', function() {
    var fadeElements = document.querySelectorAll('.fade-left, .fade-right');
    var scrollPosition = window.scrollY + window.innerHeight;

    fadeElements.forEach(function(el) {
      if (scrollPosition > el.offsetTop + el.offsetHeight / 4) {
        el.classList.add('visible');
      }
    });
  });

  document.dispatchEvent(new Event('scroll'));

  document.addEventListener("DOMContentLoaded", function () {
    const serviceSections = document.querySelectorAll(".fade-right-left");

    serviceSections.forEach((section) => {
        section.addEventListener("mouseover", function () {
            if (!this.classList.contains("hovered")) {
                this.classList.add("hovered");
            }
        });

        section.addEventListener('animationend', function () {
            section.classList.add('visible');
        });
    });

    document.addEventListener('scroll', function() {
        var fadeElements = document.querySelectorAll('.fade-left, .fade-right ,.fade-in-up');
        var scrollPosition = window.scrollY + window.innerHeight;

        fadeElements.forEach(function(el) {
            if (scrollPosition > el.offsetTop + el.offsetHeight / 4) { // Trigger at half the time
                el.classList.add('visible');
                el.closest('.new-services').classList.add('visible');
            }
        });
    });

  });
  document.addEventListener("DOMContentLoaded", function () {
    const aboutUsSection = document.querySelector(".fade-up");

    aboutUsSection.addEventListener("mouseover", function () {
        if (!this.classList.contains("hovered")) {
            this.classList.add("hovered");
        }
    });

    aboutUsSection.addEventListener('animationend', function () {
        aboutUsSection.classList.add('visible');
    });

    document.addEventListener('scroll', function() {
        var fadeElements = document.querySelectorAll('.fade-in-up');
        var scrollPosition = window.scrollY + window.innerHeight;

        fadeElements.forEach(function(el) {
            if (scrollPosition > el.offsetTop + el.offsetHeight / 4) { // Trigger at half the time
                el.classList.add('visible');
                el.closest('.new-service').classList.add('visible');
            }
        });
    });
});

$(document).ready(function() {
  $('.customer-logos').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    arrows: false,
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
        slidesToShow: 3
      }
    }]
  });
});


    document.dispatchEvent(new Event('scroll'));




    document.addEventListener("DOMContentLoaded", function () {
        const blogSection = document.querySelector(".blogs-section");
        const blogCards = document.querySelectorAll(".blog-card");

        blogSection.addEventListener("mouseover", function () {
            blogCards.forEach((card, index) => {
                if (!card.classList.contains("visible-blog")) {
                    card.classList.add("visible-blog");
                    if (index === 0) {
                        card.classList.add("hovered-blog-left");
                    } else if (index === 1) {
                        card.classList.add("hovered-blog-up");
                    } else if (index === 2) {
                        card.classList.add("hovered-blog-right");
                    }
                }
                if (!card.classList.contains("hovered")) {
                    card.classList.add("hovered");
                }
            });
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
        const blogSection = document.querySelector(".product-section");
        const blogCards = document.querySelectorAll(".product-card");

        blogSection.addEventListener("mouseover", function () {
            blogCards.forEach((card, index) => {
                if (!card.classList.contains("visible-product")) {
                    card.classList.add("visible-product");
                    if (index === 0) {
                        card.classList.add("hovered-product-left");
                    } else if (index === 1) {
                        card.classList.add("hovered-product-up");
                    } else if (index === 2) {
                        card.classList.add("hovered-product-right");
                    }
                }
                if (!card.classList.contains("hovered-product")) {
                    card.classList.add("hovered-product");
                }
            });
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
        const leavesSection = document.querySelector(".leaves-section");
        const leavesImages = document.querySelectorAll(".leave-img");
        let animationTriggered = false;

        leavesSection.addEventListener("mouseover", function () {
            if (!animationTriggered) {
                leavesImages.forEach((img, index) => {
                    if (index === 0 || index === 1) {
                        img.classList.add("hovered-leaves-left");
                    } else if (index === 2 || index === 3 || index === 4 || index === 5) {
                        img.classList.add("hovered-leaves-up");
                    } else if (index === 6 || index === 7) {
                        img.classList.add("hovered-leaves-right");
                    }
                });
                animationTriggered = true;
            }
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        window.scrollTo(0, 0);
        gsap.timeline()
            .fromTo(".load_animation", {
                duration: 1.5,
                clipPath: 'inset(84% 43% 0 42% round 120px)',
                ease: "power2.inOut"
            },
            {
                duration: 1.5,
                clipPath: 'inset(48% 43% 0 42% round 120px)',
                ease: "power2.inOut"
            })
            .to(".load_animation", {
                duration: 1.5,
                delay: 0.4,
                clipPath: 'inset(0% 0% 0% 0% round 0px)',
                ease: "power2.inOut"
            });
      });
