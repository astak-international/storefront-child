<div class="container mx-auto py-3 flex gap-4">
    <a href="/">
        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png' ?>" alt="footer-logo" width="20"
            height="auto" />

    </a>
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'default',
        )
    );
    ?>
</div>