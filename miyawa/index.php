<?php get_header(); ?>

<div id="container">

    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
            <article <?php post_class( 'container-articles' ); ?>>
                <header class="container-articles-header">
                    <a href="<?php the_permalink(); ?>">
                        <div class="container-articles-header-title">
                            <!--タイトル-->
                            <?php if (is_single()) : ?>
                                <h1><?php the_title(); ?></h1>
                            <?php else :?>
                                <h2><?php the_title(); ?></h2>
                            <?php endif; ?>
                            <!--投稿日を表示-->
                            <span class="container-articles-header-title-date">
                              <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                                <?php echo get_the_date(); ?>
                              </time>
                            </span>
                        </div>
                    </a>
                </header>

                <div class="container-articles-content">
                    <?php
                    the_content(sprintf(
                    __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'miyawa'),
                    get_the_title()
                    ));
                    ?>
                </div>
            </article>
        <?php endwhile; ?>

    <div class="pagination">
        <?php echo paginate_links([
            'type' => 'list',
            'mid_size' => '1',
            'prev_text' => '&laquo;',
            'next_text' => '&raquo;'
        ]); ?>
    </div>
    <?php endif; ?>



</div>

<?php get_sidebar(); ?>
<?php get_footer();