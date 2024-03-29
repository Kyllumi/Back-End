<?php
// Root path/URI.
define('HONRIX_TEMPLATE_DIR', get_template_directory());
define('HONRIX_TEMPLATE_URI', get_template_directory_uri());
define('HONRIX_INC_DIR', HONRIX_TEMPLATE_DIR . '/inc');
define('HONRIX_INC_URI', HONRIX_TEMPLATE_URI . '/inc');
if (!function_exists('honrix_setup')) :
    function honrix_setup()
    {


        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
        add_theme_support('title-tag');

        $args = array(
            'default-text-color' => '000',
            'width'              => 1000,
            'height'             => 250,
            'flex-width'         => true,
            'flex-height'        => true,
        );
        add_theme_support('custom-header', $args);

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on appside, use a find and replace
		 * to change 'honrix' to the name of your theme in all the template files.
		 */
        load_theme_textdomain('honrix', HONRIX_TEMPLATE_DIR . '/languages');

        // This theme uses wp_nav_menu() in three location.
        register_nav_menus(
            array(
                'main-menu' => esc_html__('Main Menu', 'honrix'),
                'mobile-menu' => esc_html__('Mobile Menu', 'honrix'),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
                'navigation-widgets',
            )
        );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height' => 300,
                'width' => 250,
                'flex-width' => true,
                'flex-height' => true,
                'unlink-homepage-logo' => true,
            )
        );

        add_theme_support('wp-block-styles');

        // Add support for responsive embedded content.
        add_theme_support('responsive-embeds');

        add_theme_support('register_block_style');

        add_theme_support('register_block_pattern');

        add_theme_support('add_editor_style()');

        if (class_exists('WooCommerce')) {
            /* woocommerce */
            add_theme_support('woocommerce');
            add_theme_support('wc-product-gallery-zoom');
            add_theme_support('wc-product-gallery-lightbox');
            add_theme_support('wc-product-gallery-slider');
        }

        // Add support for full and wide align images.
        add_theme_support('align-wide');

        // Add support for editor styles.
        add_theme_support('editor-styles');

        $editor_stylesheet_path = 'assets/css/editor-style.css';
        // Note, the is_IE global variable is defined by WordPress and is used
        // to detect if the current browser is internet explorer.

        global $is_IE;
        if ($is_IE) {
            $editor_stylesheet_path = './assets/css/ie-editor.css';
        }
        // Enqueue editor styles.
        add_editor_style($editor_stylesheet_path);

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'honrix_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );
    }
    add_action('after_setup_theme', 'honrix_setup');
endif;

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
if (!function_exists('honrix_content_width')) {
    function honrix_content_width()
    {
        $GLOBALS['content_width'] = apply_filters('honrix_content_width', 1170);
    }
    add_action('after_setup_theme', 'honrix_content_width', 0);
}

require_once HONRIX_TEMPLATE_DIR . '/inc/enqueue.php';
require_once HONRIX_TEMPLATE_DIR . '/inc/honrix_menu_walker.php';
require_once HONRIX_TEMPLATE_DIR . '/inc/custom-header.php';
require_once HONRIX_TEMPLATE_DIR . '/inc/template-tags.php';
require_once HONRIX_TEMPLATE_DIR . '/inc/dynamic_style.php';
require_once HONRIX_TEMPLATE_DIR . '/inc/widget-areas.php';
require_once HONRIX_TEMPLATE_DIR . '/inc/template-functions.php';
require_once HONRIX_TEMPLATE_DIR . '/inc/getting-start.php';
require_once HONRIX_TEMPLATE_DIR . '/inc/customize/customize.php';
require_once HONRIX_TEMPLATE_DIR . '/widgets/init.php';
require_once HONRIX_TEMPLATE_DIR . '/framework/tgmp/class-tgm-plugin-activation.php';
require_once HONRIX_TEMPLATE_DIR . '/inc/recommended_plugins.php';
require_once HONRIX_TEMPLATE_DIR . '/inc/welcome.php';

if (!function_exists('honrix_custom_excerpt_length')) {
    function honrix_custom_excerpt_length($excerpt)
    {
        if (has_excerpt()) {
            $excerpt = wp_trim_words(get_the_excerpt(), apply_filters("excerpt_length", esc_attr(get_theme_mod('honrix_archive_content_length', '20'))));
        }
        return $excerpt;
    }
    add_filter("the_excerpt", "honrix_custom_excerpt_length", 999);
}


if (!function_exists('honrix_check_post_title')) {
    function honrix_check_post_title($post_title)
    {
        return !empty($post_title) ? $post_title : __('Untitled', 'honrix');
    }
}

if (!function_exists('honrix_hex_to_rgb')) {
    function honrix_hex_to_rgb($hex)
    {
        list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
        return array($r, $g, $b);
    }
}

if (!function_exists('honrix_skip_link_focus_fix')) {
    /**
     * Fix skip link focus in IE11.
     *
     * This does not enqueue the script because it is tiny and because it is only for IE11,
     * thus it does not warrant having an entire dedicated blocking script being loaded.
     *
     * @link https://git.io/vWdr2
     */
    function honrix_skip_link_focus_fix()
    {

        // If SCRIPT_DEBUG is defined and true, print the unminified file.
        if (defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) {
            echo '<script>';
            include HONRIX_TEMPLATE_DIR . '/assets/js/skip-link-focus-fix.js';
            echo '</script>';
        }

        // The following is minified via `npx terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
?>
        <script>
            /(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", (function() {
                var t, e = location.hash.substring(1);
                /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus())
            }), !1);
        </script>
    <?php
    }

    add_action('wp_print_footer_scripts', 'honrix_skip_link_focus_fix');
}

/******* demo importer */
if (!function_exists('honrix_import_files')) {
    function honrix_import_files()
    {
        return [
            [
                'import_file_name'           => __('Honrix', 'honrix'),
                'import_file_url'            => 'https://honarsystems.com/theme/honrix/demo-content/honrix-content.xml',
                'import_widget_file_url'     => 'https://honarsystems.com/theme/honrix/demo-content/honrix-widgets.wie',
                'import_customizer_file_url' => 'https://honarsystems.com/theme/honrix/demo-content/honrix-customizer.dat',
            ],
        ];
    }
    add_filter('ocdi/import_files', 'honrix_import_files');

    function hs_zolog_ocdi_after_import_setup()
    {
        // Assign menus to their locations.
        $main_menu = get_term_by('name', 'Main Menu', 'nav_menu');

        set_theme_mod(
            'nav_menu_locations',
            [
                'main-menu' => $main_menu->term_id,
            ]
        );
    }
    add_action('ocdi/after_import', 'hs_zolog_ocdi_after_import_setup');
}

/*
 * Custom Comment Form
 */
if (!function_exists('honrix_custom_comment_list')) {
    function honrix_custom_comment_list($comment, $args, $depth)
    {
    ?>
        <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
            <div id="div-comment-<?php comment_ID(); ?>" class="comment-body d-flex p-2 pb-4 mb-3 border">
                <?php
                if (0 != $args['avatar_size']) :
                    $avatar = get_avatar($comment, $args['avatar_size']);
                    if ($avatar) :
                ?>
                        <div class="avatar-image me-3">
                            <?php echo get_avatar($comment, $args['avatar_size']); ?>
                        </div>
                <?php endif;
                endif; ?>
                <div class="comment-author">
                    <div class="comment-metadata d-flex">
                        <div class="name w-75 fs-6 text-capitalize">
                            <?php echo wp_kses(get_comment_author_link(), array('a' => array('href' => array()))); ?>
                            <span class="comment-date ms-3">
                                <a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>">
                                    <?php
                                    $time_string = '<small><span class="date"><i class="far fa-calendar me-1"></i><time class="entry-date published updated" datetime="%1$s">%2$s</time></span></small>';
                                    $time_string = sprintf(
                                        $time_string,
                                        esc_attr(get_comment_date(DATE_W3C)),
                                        esc_html(get_comment_date("j M, Y"))
                                    );
                                    echo wp_kses_post($time_string); ?>

                                </a>
                                <?php edit_comment_link(esc_html__('(Edit)', 'honrix'), '<span class="edit-link ms-3">', '</span>'); ?>
                            </span>
                        </div>
                        <div class="comment-reply w-25 text-end">
                            <?php
                            comment_reply_link(array_merge($args, array(
                                'reply_text' => __('<i class="fas fa-reply"></i>', 'honrix'),
                                'depth'      => $depth,
                                'max_depth'  => $args['max_depth']
                            )));
                            ?>
                        </div>
                    </div>

                    <div class="comment-content entry-content">
                        <?php comment_text(); ?>
                    </div>
                </div>

            </div>
            <div class="comment-footer">
                <?php if ('0' == $comment->comment_approved) : ?>
                    <p class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'honrix'); ?></p>
                <?php endif; ?>
            </div>
        <?php
    }
}

/* WooCommerce */
add_filter('woocommerce_add_to_cart_fragments', function ($fragments) {
    ob_start(); ?>
        <div class="minicart-content d-flex flex-column">
            <?php woocommerce_mini_cart(); ?>
        </div>
    <?php
    $fragments['.minicart-content'] = ob_get_clean();

    return $fragments;
});

add_filter('woocommerce_add_to_cart_fragments', function ($fragments) {
    ob_start(); ?>
        <span class="hrix-header-minicart-count">
            <?php
            if (WC()->cart->get_cart_contents_count() > 0) :
            ?>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill">
                    <?php printf(esc_html__('%d', 'honrix'), WC()->cart->get_cart_contents_count()); ?>
                </span>
            <?php
            endif; ?>
        </span>
    <?php
    $fragments['.hrix-header-minicart-count'] = ob_get_clean();

    return $fragments;
});

add_filter('woocommerce_sale_flash', 'honrix_change_sale_text');
function honrix_change_sale_text()
{
    global $product;
    if ($product->is_on_sale()) {

        if ($product->is_type('simple') || $product->is_type('external') || $product->is_type('grouped')) {

            $regular_price     = get_post_meta($product->get_id(), '_regular_price', true);
            $sale_price     = get_post_meta($product->get_id(), '_sale_price', true);

            if (!empty($sale_price)) {
                $percentage = round((($regular_price - $sale_price) / $regular_price) * 100);
                return '<span class="onsale">-' . number_format($percentage, 0, '', '') . '%</span>';
            }
        }
    }
    return '<span class="onsale">Sale!</span>';
}

remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
add_action('woocommerce_before_shop_loop_item_title', 'honrix_woocommerce_template_loop_product_thumbnail', 10);

if (!function_exists('honrix_woocommerce_template_loop_product_thumbnail')) {
    function honrix_woocommerce_template_loop_product_thumbnail()
    {
        echo honrix_woocommerce_get_product_thumbnail();
    }
}
if (!function_exists('honrix_woocommerce_get_product_thumbnail')) {
    function honrix_woocommerce_get_product_thumbnail($size = 'shop_catalog', $placeholder_width = 0, $placeholder_height = 0)
    {
        global $post, $product;
        $output = '<div class="position-relative">';

        if (has_post_thumbnail()) {
            $output .= get_the_post_thumbnail($post->ID, $size);
        } else {
            $output .= wc_placeholder_img($size);
        }
        if (defined('YITH_WCWL')) {
            $output .= do_shortcode('[yith_wcwl_add_to_wishlist]');
        }
        if ($product->get_type() == 'simple') {
            $stock = $product->get_stock_quantity();
            $stock_treshhold = $product->get_low_stock_amount();
            if (!empty($stock_treshhold)) {
                if ($stock <= $stock_treshhold) {
                    if ($stock === 0) {
                        $output .= '<div class="stock in-stock">' . __('SOLD OUT', 'honrix') . '</div>';
                    } elseif ($product->is_in_stock()) {
                        $output .= '<div class="stock in-stock">' . __('Only ', 'honrix') . $stock . __(' left in stock', 'honrix') . '</div>';
                    }
                }
            }
        }
        $output .= '</div>';
        return $output;
    }
}

remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_shop_loop_item_title', 'honrix_change_product_title', 10);
function honrix_change_product_title()
{
    global $product;
    echo '<div class="honrix-is-mobile d-flex align-items-center"><h2 class="woocommerce-loop-product__title">' . $product->get_title() . '</h2></div>';
    echo '<div class="honrix-is-pc d-flex align-items-center"><h2 class="woocommerce-loop-product__title">' . $product->get_title() . '</h2>' . (wc_review_ratings_enabled() && $product->get_average_rating() > 0 ? '<span class="hrix-products-rating d-flex align-items-center justify-content-end"><div class="star-rating" role="img"><span style="width:100%"><strong>1</strong></span></div>' . sprintf('%0.1f', $product->get_average_rating()) . '</span>' : '') . '</div>';
}
