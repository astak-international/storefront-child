<?php
function register_astak_menus()
{
    register_nav_menus(
        array(
            'default' => __('Default Menu'),
        )
    );
}
add_action('init', 'register_astak_menus');

function astak_enqueue_styles()
{
    wp_enqueue_style("root", get_stylesheet_directory_uri() . "/assets/css/root.css");
    wp_enqueue_style("tailwind", get_stylesheet_directory_uri() . "/assets/css/tailwind.css");
    wp_enqueue_style("navbar", get_stylesheet_directory_uri() . "/assets/css/navbar.css");
    wp_enqueue_style("footer", get_stylesheet_directory_uri() . "/assets/css/footer.css");
}
add_action('init', 'astak_enqueue_styles');


// function remove_storefront_page_header()
// {
//     // to remove title from all but shop page
//     remove_action('storefront_page', 'storefront_page_header', 10);
// }
// add_action('init', 'remove_storefront_page_header');

// function astak_hide_shop_page_title($title)
// {
//     if (is_shop())
//         $title = false;
//     return $title;
// }
// add_filter('woocommerce_show_page_title', 'astak_hide_shop_page_title');


// function astak_remove_default_sorting_storefront()
// {
//     remove_action('woocommerce_after_shop_loop', 'woocommerce_catalog_ordering', 10);
// }
// add_action('init', 'astak_remove_default_sorting_storefront');


// add_action('get_header', 'bbloomer_remove_storefront_sidebar');

// function bbloomer_remove_storefront_sidebar()
// {
//     if (is_product()) {
//         remove_action('storefront_sidebar', 'storefront_get_sidebar', 10);
//         wp_enqueue_style("hide-sidebar", get_stylesheet_directory_uri() . "/assets/css/hide-sidebar.css");
//     }
// }