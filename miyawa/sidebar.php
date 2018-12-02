<?php wp_nav_menu([
    'theme_location' => 'header-nav',
    'container' => 'nav',
    'container_class' => 'header-nav',
    'container_id' => 'header-nav',
    'fallback_cb' => ''
]); ?>

<aside id="sidebar" class="widget-area">
    <?php dynamic_sidebar(); ?>
</aside><!-- #secondary -->
