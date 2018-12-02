<?php get_header(); ?>

<div id="container">

    <?php if (have_posts()) {the_post();} ?>

    <article <?php post_class( 'container-articles' ); ?>>
        <header class="container-articles-header">
            <a href="<?php the_permalink(); ?>">
                <div class="container-articles-header-title">
                    <!--タイトル-->
                    <h1><?php the_title(); ?></h1>
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
            <?php the_content(); ?>
        </div>

    </article>
</div>

<?php get_sidebar(); ?>
<?php get_footer();