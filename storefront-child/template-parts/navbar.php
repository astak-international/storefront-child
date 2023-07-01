<div class="relative container mx-auto py-3 flex justify-between">
    <div class="flex gap-4">
        <a href="/">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png' ?>" alt="footer-logo"
                width="20" height="auto" />

        </a>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'default',
            )
        );
        ?>
    </div>

    <div class="flex items-center gap-4">
        <div id="astak-navbar-search-wrapper">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
                viewBox="0 0 16 16">
                <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
        </div>
        <a href="/cart" class="text-blue-darker relative">
            <div
                class="text-blue-darker absolute bg-blue-darker w-4 h-4 flex justify-center items-center rounded-full -left-2 -top-2">
                <span style="color: white" class="astak-cart-count">
                    <?php echo WC()->cart->get_cart_contents_count() ?>
                </span>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag"
                viewBox="0 0 16 16">
                <path
                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
            </svg>
        </a>
    </div>

    <div class="absolute w-full bg-white h-full mt-0 top-0">
        <div class="absolute left-0 top-1/2 -translate-y-2/4">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
                viewBox="0 0 16 16">
                <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
        </div>
        <input class="w-full h-full pl-8 outline-none border-none font-secondary" placeholder="Search ..." />
        <div class="absolute right-0 top-1/2 -translate-y-2/4">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg"
                viewBox="0 0 16 16">
                <path
                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
            </svg>
        </div>
    </div>
</div>