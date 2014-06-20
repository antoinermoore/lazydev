<?php
/**
 * @package lazydelivery
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php lazydelivery_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
                    
                    <?php
                        $category_list = get_the_category_list( __(' , ' ,'lazydelivery' ));
                    
                        if (lazydelivery_categorized_blog() ){
                            echo '<div class="category-list">' . $category_list . '</div>'; 
                        }
                    ?>
                    
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'lazydelivery' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		
            <?php echo get_the_tag_list('<ul><li><i class="fa fa-tag"></i>', '</li><li><i class="fa fa-tag"></i>', '</li>'); ?>
         
		<?php edit_post_link( __( 'Edit', 'lazydelivery' ), '<span class="edit-link">', '</span>' ); ?>
            
	</footer><!-- .entry-footer -->
</article>   <!-- #post-## -->