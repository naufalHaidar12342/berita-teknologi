<?= $this->extend('partial-layout/template'); ?>
<?= $this->section('page-content'); ?>

<!-- <section class="hero is-link is-medium">
    <div class="hero-body">
        <div class="container has-text-centered">
            <p class="title">
                Half height hero
            </p>
            <p class="subtitle">
                Half height subtitle
            </p>
        </div>
    </div>
</section> -->
<div class="container my-5">

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

                        Breadcrumb
                    </span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="m-5 content">
        <div class="has-text-centered">
            <h2 class="title is-2">
                Half height hero
            </h2>
            <p class="subtitle">
                Half height subtitle
            </p>
        </div>
        <figure class="">
            <img src="/images/merry-christmas.jpg" style="border-radius: 4px; margin-bottom: 1.5rem;" width="720px" height="400px">
            <figcaption>
                Figure 1: Some beautiful placeholders
            </figcaption>
        </figure>
        <p>

            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex beatae illo quis dignissimos officiis iste consequatur optio est perferendis nostrum iusto quasi minima nulla praesentium, atque harum facilis. Sint, eius?
        </p>
        <p>

            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex beatae illo quis dignissimos officiis iste consequatur optio est perferendis nostrum iusto quasi minima nulla praesentium, atque harum facilis. Sint, eius?
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

</div>
<?= $this->endSection(); ?>