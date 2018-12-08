<?php get_header(); 
while(have_posts()) {
		the_post(); ?>

<div class="section top-section" style="background-image: url(<?php echo get_theme_file_uri('/images/bg2-de.jpg')?>);">
	<div class="container narrow">
		<h1><?php the_title(); ?></h1>
	</div>
</div>
<div class="section colored-titles more-padding">
    <div class="container narrow">
      <?php the_content(); ?>
    </div>
</div>

<?php } get_footer(); ?>