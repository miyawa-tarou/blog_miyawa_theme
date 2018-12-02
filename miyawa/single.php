<?php get_header(); ?>

<div id="container">

    <?php if (have_posts()): ?>
        <?php the_post(); // 必須 ?>
        <article <?php post_class('container-articles'); ?>>
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

            <?php if( has_post_thumbnail() ): ?>
                <div class="kiji-img">
                    <?php the_post_thumbnail( 'large' ); ?>
                </div>
            <?php endif; ?>

            <div class="container-articles-content">
                <?php the_content(); ?>
            </div>

            <hr class="container-articles-footerHr" />

            <div class="container-articles-footer">
                <?php if (has_category() ): ?>
                    <div class="container-articles-footer-categories">カテゴリー：<span><?php echo get_the_category_list(', '); ?></span></div>
                <?php endif; ?>
                <?php the_tags('<div class="container-articles-footer-tags">タグ：<span>',', ','</span></div>'); ?>
            </div>

        </article>

    <?php endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer();