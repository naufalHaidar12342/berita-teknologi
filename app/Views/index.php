<?= $this->extend('partial-layout/template'); ?>
<?= $this->section('page-content'); ?>

<div class="container mb-5">

    <div class="columns is-multiline mt-4">
        <div class="column is-full">
            <div class="tile is-ancestor">
                <div class="tile is-parent">
                    <article class="tile is-child ">
                        <div class="content">
                            <figure class="image is-2by1">
                                <img src="/images/merry-christmas.jpg" style="border-radius: 4px;">
                            </figure>
                        </div>
                    </article>
                </div>
                <div class="tile is-parent ">
                    <article class="tile is-child notification is-link is-light">
                        <div class="content">
                            <p class="title">Tall tile</p>
                            <p class="subtitle">With even more content</p>
                            <div class="content">
                                <!-- Content -->
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est unde, commodi consequuntur eveniet officia quasi totam obcaecati quis doloribus assumenda, iste enim vel laudantium! Autem temporibus omnis id aut incidunt.
                            </div>
                        </div>
                        <nav class="level is-mobile">
                            <div class="level-left">
                                <a class="level-item button has-background-white" style="color:currentColor" aria-label="reply" href="/tech-news/read-full">
                                    <span class="icon is-small mr-1">
                                        <i class="fa-solid fa-book-open-reader"></i>
                                    </span>
                                    Read
                                </a>

                            </div>
                            <div class="level-right">
                                <div class="tags level-item ">
                                    <a class="tag has-background-white" style="text-decoration: none;">
                                        <span class="icon is-small mr-1">
                                            <i class="fas fa-desktop"></i>
                                        </span>
                                        ayymd
                                    </a>
                                    <a class="tag has-background-white" style="text-decoration: none;">
                                        <span class="icon is-small mr-1">
                                            <i class="fas fa-gamepad"></i>
                                        </span>
                                        aagg
                                    </a>
                                </div>
                            </div>
                        </nav>

                    </article>
                </div>
            </div>
        </div>

    </div>
</div>




<?= $this->endSection(); ?>