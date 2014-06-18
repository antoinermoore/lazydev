<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package lazydelivery
 */

get_header(); ?>
<div id="full-head" >
    <section id="header-reveal">
        <div class="header-text">
            <h3>Lazy Delivery brings the store to your door. Groceries, office and pet supplies, and other essentials.
                <br/>Easy. Speedy. Affordable.</h3>
            <nav class="header-order">
                <ul>
                    <li><span><a href="/instant">Instant Delivery</a></span></li>
                    <li><span><a href="/scheduled">Scheduled Delivery</a></span></li>
                </ul>
            </nav>
        </div>
    </section>
</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
                    <div id="feature-box">
                        <div class="box box-1">
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('home-1')) : else : ?>  

                    <?php endif; ?>
                        </div> 
                        <div class="box box-2">
                 <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('home-2')) : else : ?>  

                    <?php endif; ?>
                        </div>
                        <div class="box box-3">
                 <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('home-3')) : else : ?>  

                    <?php endif; ?>
                        </div>
                    </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

        