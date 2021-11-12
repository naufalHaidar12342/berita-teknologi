<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="Situs berita berfokus pada teknologi.">

    <!-- bulma css -->
    <link rel="stylesheet" href="/css/bulma/css/bulma.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title; ?></title>
    <!-- fontawesome-->
    <link rel="stylesheet" href="/fontawesome-6.0.0-beta2/css/all.min.css">

    <!-- bulma carousel -->
    <link rel="stylesheet" href="/css/carousel-css/bulma-carousel.min.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar is-transparent" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
                <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navigation-bar" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item">
                    <i class="fa-solid fa-earth-asia fa-flip"></i>Home
                </a>

                <a class="navbar-item">

                    Documentation
                </a>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        More
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item">
                            <i class="fa-solid fa-align-justify"></i>
                            About
                        </a>
                        <a class="navbar-item">
                            Jobs
                        </a>
                        <a class="navbar-item">
                            Contact
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item">
                            Report an issue
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </nav>

    <!-- Start Hero Carousel -->
    <section class="hero is-medium has-carousel">
        <div id="carousel-demo" class="hero-carousel">
            <div class="slider" tabindex="0">
                <div class="slider-container" style="opacity: 1; width: 100%; height: 353px;">
                    <div class="slider-item is-current" data-slider-index="0" style="width: 100%; transition: none 0s ease 0s; position: absolute; left: 0px; top: 0px; bottom: 0px; opacity: 1; z-index: -1;">
                        <div class="has-background is-active">
                            <img src="/images/merry-christmas.jpg" alt="" class="is-background">
                        </div>
                    </div>
                    <div class="slider-item is-slide-previous is-slide-next" data-slider-index="1" style="width: 1483px; position: absolute; left: 0px; top: 0px; bottom: 0px; z-index: -2; opacity: 0;">
                        <div class="has-background">
                            <img src="https://wikiki.github.io/images/singer.jpg" alt="" class="is-background">
                        </div>
                    </div>
                    <div class="slider-item" data-slider-index="2" style="width: 1483px; position: absolute; left: 0px; top: 0px; bottom: 0px; z-index: -2; opacity: 0;">
                        <div class="has-background is-active">
                            <img src="/images/merry-christmas.jpg" alt="" class="is-background">
                        </div>
                    </div>
                    <div class="slider-item" data-slider-index="3" style="width: 1483px; position: absolute; left: 0px; top: 0px; bottom: 0px; z-index: -2; opacity: 0;">
                        <div class="has-background is-active">
                            <img src="/images/merry-christmas.jpg" alt="" class="is-background">
                        </div>
                    </div>
                    <div class="slider-navigation-previous">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                </div>
                <!-- Slide Content -->

            </div>
            <div class="item-2">
                <!-- Slide Content -->
            </div>
            <div class="item-3">
                <!-- Slide Content -->
            </div>
        </div>
        <div class="hero-head"></div>
        <div class="hero-body">
            <div class="has-text-centered">
                <p class="title">Intel Kembali Menantang AMD</p>
                <p class="subtitle">Apakah Intel mampu menggoyahkan posisi AMD yang tengah unggul saat ini?</p>
            </div>
        </div>
        <div class="hero-foot">
            <div class="has-text-centered">
            </div>
        </div>
    </section>
    <!-- End Hero Carousel -->

    <?= $this->renderSection('page-content'); ?>

    <!-- js untuk tombol navbar mobile -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // Get all "navbar-burger" elements
            const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

            // Check if there are any navbar burgers
            if ($navbarBurgers.length > 0) {

                // Add a click event on each of them
                $navbarBurgers.forEach(el => {
                    el.addEventListener('click', () => {

                        // Get the target from the "data-target" attribute
                        const target = el.dataset.target;
                        const $target = document.getElementById(target);

                        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                        el.classList.toggle('is-active');
                        $target.classList.toggle('is-active');

                    });
                });
            }

        });
    </script>
    <script src="/js/carousel-js/bulma-carousel.min.js"></script>

    <script>
        bulmaCarousel.attach('#carousel-demo', {
            slidesToScroll: 1,
            slidesToShow: 4
        });
    </script>
    <script>
        // Initialize all div with carousel class
        var carousels = bulmaCarousel.attach('.carousel', options);

        // Loop on each carousel initialized
        for (var i = 0; i < carousels.length; i++) {
            // Add listener to  event
            carousels[i].on('before:show', state => {
                console.log(state);
            });
        }

        // Access to bulmaCarousel instance of an element
        var element = document.querySelector('#my-element');
        if (element && element.bulmaCarousel) {
            // bulmaCarousel instance is available as element.bulmaCarousel
            element.bulmaCarousel.on('before-show', function(state) {
                console.log(state);
            });
        }
    </script>
</body>

</html>