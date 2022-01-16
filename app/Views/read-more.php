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
                color: currentColor;
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
                                    <input class="input" type="text" placeholder=" 🔍 Cari berita disini...">
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

    </section>


    <div class="container my-5">
        <?php foreach ($read_full_news as $fullNews) : ?>
            <nav class="breadcrumb has-succeeds-separator m-5" aria-label="breadcrumbs">
                <ul>
                    <li>
                        <a href="/">
                            <span class="icon is-small">
                                <i class="fa-solid fa-house-chimney"></i>
                            </span>
                            <span>

                                Beranda
                            </span>
                        </a>
                    </li>
                    <li class="is-active">
                        <a href="#" aria-current="page">
                            <span class="icon is-small">
                                <i class="fa-solid fa-newspaper"></i>
                            </span>
                            <span>

                                <?= $fullNews['judul_post']; ?>
                            </span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="m-5 content">
                <div class="has-text-centered">
                    <h2 class="title is-2">
                        <?= $fullNews['judul_post']; ?>
                    </h2>
                    <p class="subtitle">
                        oleh <?= $fullNews['author_of_post']; ?> pada <?= date_format(date_create($fullNews['created_at']), 'd M Y H:i'); ?>
                    </p>
                </div>
                <figure class="gambar-berita">
                    <img src="<?= $fullNews['cover_post']; ?>" style="border-radius: 4px; margin-bottom: 1.5rem;" width="720px" height="400px">
                    <figcaption>
                        Gambar ilustrasi
                    </figcaption>
                </figure>
                <p>

                    <?= $fullNews['first_paragraph']; ?>
                </p>
                <p>

                    <?= $fullNews['second_paragraph']; ?>
                </p>
                <p>
                    <?= $fullNews['last_paragraph']; ?>
                </p>
            </div>
            <div class="is-flex is-justify-content-center ">
                <a href="/" class="button is-medium is-link is-light ">
                    <span class="icon is-small">
                        <i class="fa-solid fa-circle-arrow-left"></i>
                    </span>
                    <span>
                        <strong>Kembali</strong>
                    </span>
                </a>
            </div>
        <?php endforeach; ?>

    </div>
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