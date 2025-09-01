 <script src="https://kit.fontawesome.com/ce4d8f7c0c.js" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/jquery-migrate-3.4.1.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.isotope.v3.0.2.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrollIt.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/select2.js"></script>
    <script src="js/datepicker.js"></script>
    <script src="js/YouTubePopUp.js"></script>
    <script src="js/custom.js"></script>

    <script>

        // Showing only 2 testimonial carousel
        (function ($) {
            const $carousel = $('.testimonials .owl-carousel');

            // If already initialized, destroy first (avoids duplicated/old settings)
            if ($carousel.hasClass('owl-loaded')) {
                $carousel.trigger('destroy.owl.carousel');
                $carousel.removeClass('owl-loaded owl-hidden');
                // unwrap stage markup that Owl injected
                $carousel.find('.owl-stage-outer').children().unwrap();
            }

            // Re-initialize for exactly 2 items (1 on mobile)
            $carousel.owlCarousel({
                items: 2,
                margin: 30,
                loop: false,
                nav: true,
                dots: true,
                smartSpeed: 450,
                autoWidth: false,     // IMPORTANT: keep false so Owl controls widths
                responsive: {
                    0: { items: 1 },  // phones
                    768: { items: 2 }   // tablet/desktop
                }
            });

            // If images load later or container was hidden, refresh once more
            $(window).on('load', function () {
                $carousel.trigger('refresh.owl.carousel');
            });
        })(jQuery);

        // Statics Counter
        document.addEventListener("DOMContentLoaded", () => {
            const counters = document.querySelectorAll(".counter");

            counters.forEach(counter => {
                let count = 0;
                const target = +counter.getAttribute("data-target");
                const speed = 20;

                const updateCounter = () => {
                    if (count < target) {
                        count++;
                        counter.textContent = count + "+";
                        setTimeout(updateCounter, speed);
                    } else {
                        counter.textContent = target + "+";
                    }
                };

                updateCounter();
            });
        });


        // POP UP Form
        function openPopup() {
            document.getElementById("popupForm").style.display = "flex";
        }
        function closePopup() {
            document.getElementById("popupForm").style.display = "none";
        }


        // Navbar
         window.addEventListener("scroll", function () {
                let navbar = document.querySelector(".navbar");
                navbar.classList.toggle("scrolled", window.scrollY > 50);
            });
    </script>