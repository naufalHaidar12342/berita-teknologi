<?= $this->extend('partial-layout/template'); ?>
<?= $this->section('page-content'); ?>

<div class="container">

    <div class="columns is-multiline mt-4">
        <div class="column is-full">
            <div class="box">
                <article class="media">
                    <div class="media-left">
                        <figure class="image is-64x64">
                            <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                        </figure>
                    </div>

                    <div class="media-content">
                        <div class="content">
                            <div class="level">
                                <div class="level-left">
                                    <p> <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small></p>
                                </div>
                                <div class="level-right">
                                    <div class="tags level-item">
                                        <a class="tag ">aaaa</a>
                                        <a class="tag ">aagg</a>
                                    </div>
                                </div>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                            </p>
                        </div>
                        <nav class="level is-mobile">
                            <div class="level-left">
                                <a class="level-item" aria-label="reply">
                                    <span class="icon is-small">
                                        <i class="fas fa-reply" aria-hidden="true"></i>
                                    </span>
                                </a>
                                <a class="level-item" aria-label="retweet">
                                    <span class="icon is-small">
                                        <i class="fas fa-retweet" aria-hidden="true"></i>
                                    </span>
                                </a>
                                <a class="level-item" aria-label="like">
                                    <span class="icon is-small">
                                        <i class="fas fa-heart" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="level-right">
                                <div class="tags level-item">
                                    <a class="tag ">aaaa</a>
                                    <a class="tag ">aagg</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </article>
            </div>
        </div>

        <div class="column is-full">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa ipsam et doloremque, autem porro nam voluptas quod sapiente iusto est optio temporibus quisquam sed officiis illo eos, error facere! Tenetur.
        </div>
        <div class="column is-full">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt rem non quibusdam quas enim quo deleniti mollitia illo iste aspernatur voluptate perferendis possimus, maiores doloremque iusto recusandae quasi sed at?
        </div>
        <div class="column is-full">
            lorem
        </div>
    </div>
</div>




<?= $this->endSection(); ?>