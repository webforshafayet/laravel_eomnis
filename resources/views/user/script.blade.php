<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>

    <!-- Flickty JS -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>


    <!-- Embla Carousel -->
    <script type="text/javascript">
        var emblaNode = document.querySelector('.embla')
        var options = { loop: false }

        var embla = EmblaCarousel(emblaNode, options)
    </script>

    <script src="https://unpkg.com/embla-carousel/embla-carousel.umd.js"></script>
    <script src="https://unpkg.com/embla-carousel-autoplay/embla-carousel-autoplay.umd.js"></script>

    <script type="text/javascript">
        var emblaNode = document.querySelector('.embla')
        var options = { loop: true }
        var plugins = [EmblaCarouselAutoplay()] // Plugins

        var embla = EmblaCarousel(emblaNode, options, plugins)
    </script>

    <!-- External Script -->
    <script src="scripts/script.js"></script>
    <script src="scripts/custom.js"></script>
 <!-- checkout External Script -->
    <!-- <script src="cassets/js/jquery-1.12.4.min.js"></script>
     <script src="cassets/js/bootstrap.min.js"></script>
     <script src="cassets/js/jquery.magnific-popup.min.js"></script>
     <script src="cassets/js/owl.carousel.min.js"></script>
     <script src="cassets/js/slick.min.js"></script>
     <script src="cassets/js/jquery.mixitup.min.js"></script>
     <script src="cassets/js/wow.min.js"></script>
     <script src="cassets/js/jquery.counterup.min.js"></script>
     <script src="cassets/js/counter-potnt.js"></script>
     <script src="cassets/js/main.js"></script> -->