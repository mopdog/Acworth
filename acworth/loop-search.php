<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if (!have_posts()) : ?>
	<div class="notice">
		<p class="bottom"><?php _e('Sorry, no results were found.', 'reverie'); ?></p>
	</div>
	<?php get_search_form(); ?>	
<?php endif; ?>

<?php /* Start loop */ ?>
<div class="search-results">
	<?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>	
            </header>
            <?php if ( has_post_thumbnail() ) { ?>
                   <div class="excerpt-thumbnail four columns">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                   </div>
                   <div class="entry-content eight columns">
                        <?php the_excerpt('Continue reading...'); ?>
                        <a class="read-more" href="<?php the_permalink(); ?>">read more</a> 
                   </div>
           <?php } else{ ?> 
                    <div class="entry-content twelve columns">
                        <?php the_excerpt('Continue reading...'); ?>
                      <a class="read-more" href="<?php the_permalink(); ?>">read more</a> 
                    </div>
           <?php } ?>
            <div class="clear"></div>
        </article>
    	
    <?php endwhile; // End the loop ?>
</div>
<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
<nav id="post-nav">
	<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
	<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
</nav>
<?php } ?>