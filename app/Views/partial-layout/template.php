<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="Situs berita berfokus pada teknologi.">

    <!-- bulma css -->
    <link rel="stylesheet" href="/css/bulma/css/bulma-min.css">

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

        @media (min-width: 1024px) {
            .navbar-item {
                color: white;
            }

            .navbar-dropdown>.navbar-item {
                color: black;
            }

            .has-dropdown>.navbar-item {
                color: white;
            }
        }
    </style>
</head>

<body>
    <!-- hero carousel (slideshow berukuran hero section)  -->
    <section class="hero is-large has-carousel">
        <div class="hero-carousel " id="carousel-demo">
            <div class='has-background is-active'>
                <img class="is-background" src="https://akcdn.detik.net.id/visual/2021/07/16/bus-listrik-jadi-kunci-agenda-hijau-joe-biden-3_169.jpeg?w=650" alt="" />

            </div>
            <div class='has-background'>
                <img class="is-background" src="https://media.newyorker.com/photos/6184133adedf5ef2f7919966/master/pass/Chayka-Meta.jpg" alt="" />

            </div>
            <div class='has-background'>
                <img class="is-background" src="https://i.cbc.ca/1.6259219.1637669324!/cpImage/httpImage/image.jpg_gen/derivatives/16x9_780/space-telescope.jpg" alt="" />
            </div>
            <div class='has-background'>
                <img class="is-background" src="https://cdn1-production-images-kly.akamaized.net/Phh9edE1LyCL58aYCQUrQOhPSUo=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3601146/original/095768600_1634111006-EIS_II.jpg" alt="" />
            </div>
            <div class='has-background'>
                <img class="is-background" src="https://im.indiatimes.in/content/2021/Jun/AMP-58_60b89e68b3684.jpg?w=725&h=543" alt="" />
            </div>
        </div>
        <div class="hero-head">
            <!-- navbar -->
            <nav class="navbar is-transparent " role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="navbar-item" href="/">
                        <img src="/images/tchn-logo.png" width="120" height="30">
                    </a>

                    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbar-mobile">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>

                <div id="navbar-mobile" class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item ">
                            <i class="fa-solid fa-desktop mr-2"></i>
                            PC
                        </a>

                        <a class="navbar-item ">
                            <i class="fa-solid fa-gamepad mr-2"></i>
                            Console
                        </a>
                    </div>

                    <!-- navbar di flex end (bagian kanan layar) -->
                    <div class="navbar-end">
                        <div class="navbar-item">
                            <div class="field has-addons">
                                <!-- input untuk search -->
                                <div class="control">
                                    <input class="input" type="text" placeholder="Cari berita disini...">
                                </div>
                                <!-- button untuk submit -->
                                <div class="control">
                                    <a class="button is-link">
                                        Search
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </nav>
        </div>
        <div class="hero-body has-text-centered">
            <h1 class="title has-text-light">Tech News 1</h1>
            <h2 class="subtitle has-text-light"> <i>Sumber berita yang mudah dipahami.</i> </h2>
        </div>
    </section>

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
            slidesToShow: 1,
            loop: true,
            autoplay: true,
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