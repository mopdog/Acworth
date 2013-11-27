<?php /* Template Name: News */  
get_header();  

$args=array( 'category' => 'news', 'post_status' => 'publish', 'posts_per_page' => -1 );

$my_query = null;
$my_query = new WP_Query($args); ?>
  
		<!-- Row for main content area -->
        <div class="row subpage-row">
            <div id="content" class="single-page eight columns">
                <div class="post-box news-page">
                    <?php if( $my_query->have_posts() ) :
						    while ($my_query->have_posts()) : $my_query->the_post(); 
					  ?>
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
                        
                    <?php endwhile; // End the loop 
							 endif; 
					  ?>
                </div>
            </div><!-- End Content row -->
            <div class="row">
            	<?php get_sidebar(); ?>
            </div>
        </div>
		
<?php get_footer(); ?>