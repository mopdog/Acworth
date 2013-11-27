<?php get_header(); ?>

		<!-- Row for main content area -->
        <div class="row subpage-row">
            <div id="content" class="single-page eight columns">
                <div class="post-box">
                    <?php get_template_part('loop', 'page'); ?>
                </div>
            </div><!-- End Content row -->
            <div class="row">
            	<?php get_sidebar(); ?>
            </div>
        </div>
		
<?php get_footer(); ?>