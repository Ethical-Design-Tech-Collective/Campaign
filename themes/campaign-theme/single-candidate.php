<?php get_header();
while(have_posts()) {
		the_post(); ?>

		<div class="section top-section candidate no-image">
		    <div class="container">
		      <h1><?php the_title(); ?></h1>
		      <div class="profile-image"><?php the_post_thumbnail(); ?></div>
		    </div>
		</div>
		<div class="section candidate-excerpt">
		    <div class="container narrow">
		    	<p><?php echo get_the_excerpt(); ?></p>
		    	<p><?php echo get_field('social-media'); ?></p>
		    </div>
		</div>
		<div class="section extra-bottom-padding">
		    <div class="container narrow">
		    	<?php if (get_field('candidate-video')) { ?>
			    	<div class="video-cont">
			    		<div class="iframe-cont">
			    			<?php echo get_field('candidate-video'); ?>
			    		</div>
			    	</div>
		    	<?php } ?>
		      <?php the_content(); ?>
		      <p><a class="standard-button button-outline" href="<?php echo get_post_type_archive_link('candidate'); ?>"> See all candidates </a></p>
		    </div>
		</div>

<?php } get_footer(); ?>