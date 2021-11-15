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
    <style>
        .news-background {
            background-color: #f5f5f5;
            background-repeat: repeat no-repeat;
            background-size: cover;
            background-attachment: scroll, fixed;
            background-origin: padding-box, padding-box;
            background-clip: border-box, border-box;

        }
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar is-transparent is-link is-light" role="navigation" aria-label="main navigation">
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
                    <i class="fa-solid fa-earth-asia fa-spin"></i>Home
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