<?php
/**
 * The template for displaying all WooCommerce pages.
 *
 * @package zerif-lite
 */
get_header(); ?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->

<div class="sidebar-wrap col-md-2 content-right-wrap">
    <div id="woocommerce-sidebar" class="widget-area" role="complementary" style="margin-left: 15px;">
    <?php
    if ( is_active_sidebar( 'area-tienda' ) ) :
    dynamic_sidebar( 'area-tienda' );
    endif;
    ?>
    </div>
</div>

<div id="content" class="site-content">

	<div class="container">

		<div class="content-left-wrap col-md-10">

			<div id="primary" class="content-area">

				<main id="main" class="site-main" style="margin-left: 95px;">

					<?php woocommerce_content(); ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .content-left-wrap -->

	</div><!-- .container -->

<?php get_footer(); ?>
