<?= $this->extend('partial-layout/template'); ?>
<?= $this->section('page-content'); ?>

<div class="container mb-5">
    <div class="columns is-multiline mt-4">

        <?php foreach ($news_to_read as $news) : ?>

            <div class="column is-full">
                <div class="tile is-ancestor">
                    <div class="tile is-parent">
                        <article class="tile is-child ">
                            <div class="content">
                                <figure class="image is-2by1">
                                    <img src="<?= $news['cover_post']; ?>" style="border-radius: 4px;">
                                </figure>
                            </div>
                        </article>
                    </div>
                    <div class="tile is-parent ">
                        <article class="tile is-child notification is-link is-light">
                            <div class="content">
                                <p class="title"><?= $news['judul_post']; ?></p>
                                <p class="subtitle">
                                    oleh <?= $news['author_of_post']; ?>.
                                    <i class="fas fa-calendar-alt ml-2 mr-1"></i>
                                    <?= date_format(date_create($news['created_at']), 'l, j F Y H:i'); ?>
                                </p>
                                <div class="content">
                                    <!-- Content -->
                                    <?= $news['short_desc']; ?>
                                </div>
                            </div>
                            <nav class="level is-mobile">
                                <div class="level-left">
                                    <a class="level-item button has-background-white" style="color:currentColor" aria-label="reply" href="/tech-news/read-full/<?= $news['post_slugs']; ?>">
                                        <span class="icon is-small mr-1">
                                            <i class="fa-solid fa-book-open-reader"></i>
                                        </span>
                                        Read more
                                    </a>

                                </div>
                                <div class="level-right">
                                    <div class="tags level-item ">
                                        <a class="tag has-background-white" style="text-decoration: none;">
                                            <span class="icon is-small mr-1">
                                                <i class="fas fa-desktop"></i>
                                            </span>
                                            <?= $news['kategori_post']; ?>
                                        </a>

                                    </div>
                                </div>
                            </nav>

                        </article>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

</div>

<?= $this->endSection(); ?>