<?php /* Template Name: Homepage */ 
      get_header(); 
	  

$args=array(
	'category_name' => events, 'posts_per_page' => 3, 'caller_get_posts'=> 1,  'meta_key' => 'calendar_date', 'orderby' => 'meta_value', 'order' => 'ASC'  
);

$my_query = null;
$my_query = new WP_Query($args); 


$bannerargs=array(
	'category_name' => featured, 'posts_per_page' => -1, 'orderby'   => 'menu_order', 'order'  => 'ASC'  
);

$banner_query = null;
$banner_query = new WP_Query($bannerargs); 


?>

		<div id="content" class="promo-area row" >
        	<div class="eight columns">
            	<div class="flexslider">
                  <ul class="slides">
                    <?php if( $banner_query->have_posts() ) { ?>
     			  	  <?php while ($banner_query->have_posts()) : $banner_query->the_post(); ?>
                    <li>
                    	<?php if ( get_post_meta($post->ID, 'slider_image', true) ) { ?>
                        	<?php 
								$attachment_id = get_field('slider_image');
								$size = 'slider'; 
								$image = wp_get_attachment_image_src( $attachment_id, slider );
							?>
        						<img src="<?php echo $image[0]; ?>"  >
               			<?php } ?> 
        					
               			
                        <div class="slide-story">
                  		    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    	    <div><?php the_field('story_excerpt'); ?></div>
                  	    </div>
                    </li>
                   <?php endwhile; } // End the loop ?>
				   <?php wp_reset_query(); ?>
                  </ul>
                </div>
            </div>
			<div class="promo-content four columns">
            	<div class="divider-shadow">
                	<img src="<?php echo get_template_directory_uri(); ?>/images/slider-shadow3.png" />
                </div>
            	<?php while (have_posts()) : the_post(); ?>
            		<?php the_content(); ?>
                <?php endwhile; // End the loop ?>
            </div>
		</div>
        <div class="spacer"></div>
        <div class="home-secondary row">
        	<div class="home-events columns">
            	<div class="secondary-image">
                	<img src="<?php echo get_template_directory_uri(); ?>/images/events-bg.jpg" />
                </div>
                <div class="secondary-title">
                	Events
                </div>
               
                <?php if( $my_query->have_posts() ) { ?>
      
     			  <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <?php $date = get_field('calendar_date'); ?>
                	<div class="story">
                            <div class="date two columns">
                                    <div class="month"><?php echo date("M", strtotime($date)); ?></div>
                                    <div class="day"><?php echo date("d", strtotime($date)); ?></div>
                            </div>
                            <div class="story-title ten columns"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                    </div>
                	
                <?php endwhile; } // End the loop ?>
				<?php wp_reset_query(); ?>
            </div>
            <div class="home-contact columns">
            	<div class="secondary-image">
                	<img src="<?php echo get_template_directory_uri(); ?>/images/contact-bg.jpg" />
                </div>
                <div class="secondary-title">
                	Contact
                </div>
                <div class="contact-form">
                	<?php echo do_shortcode('[contact-form-7 id="72" title="Homepage"]'); ?>
                </div>
            </div>
            <div class="home-news columns">
            	<div class="secondary-image">
                	<img src="<?php echo get_template_directory_uri(); ?>/images/news-bg.jpg" />
                </div>
                <div class="secondary-title">
                	News
                </div>
                <?php query_posts( array( 'category_name' => news, 'posts_per_page' => 5 ) ); ?>
				<?php while (have_posts()) : the_post(); ?>
                	<div class="story">
                          <!--  <div class="date two columns">
                                    <div class="month"><?php the_time('M'); ?></div>
                                    <div class="day"><?php the_time('j'); ?></div> 
                           
                            	</div>
                          -->
                            <div class="story-title twelve columns"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                    </div>
                	
                <?php endwhile; // End the loop ?>
				<?php wp_reset_query(); ?>
            
            </div>
        </div>
		
		
<?php get_footer(); ?>