<?php
/**
 * Display users Twitter account info
 * Template Name: Twitter *
 * @package storefront
 */
get_header();
do_action( 'woocommerce_account_navigation' );
?>
    <div class="woocommerce-MyAccount-content">
        Twitter info:
        <?php
            echo do_shortcode('[user_info]');
        ?>
    </div>
<?php
get_footer();
