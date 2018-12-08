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
		      <?php the_content(); ?>
		      <p><a class="standard-button button-outline" href="<?php echo site_url('/policies') ?>"> Alle Programmpunkte </a></p>
		    </div>
		</div>
<?php } get_footer(); ?>