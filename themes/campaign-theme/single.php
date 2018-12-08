<?php get_header();
while(have_posts()) {
		the_post(); ?>

		<div class="section top-section" style="background-image: url(<?php echo get_theme_file_uri('/images/bg2-de.jpg')?>);">
		    <div class="container narrow">
		      <h1><?php the_title(); ?></h1>
		    </div>
		</div>
		<div class="section">
		    <div class="container narrow">
		    	<p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></p>

		      <?php the_content(); ?>
		      <p><a href="<?php echo site_url('/blog'); ?>"> Blog home </a></p>
		    </div>
		</div>

<?php } get_footer(); ?>