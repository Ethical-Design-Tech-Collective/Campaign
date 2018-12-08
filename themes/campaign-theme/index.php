<?php 

get_header(); ?>

<div class="section top-section" style="background-image: url(<?php echo get_theme_file_uri('/images/bg2-de.jpg')?>);">
    <div class="container narrow">
      <h1>Latest News</h1>
    </div>
  </div>

<div class="section news">
<?php
	while(have_posts()) {
		the_post(); ?>
		<div class=" container bottom-padded news-item">
			<img src="<?php the_post_thumbnail_url(); ?>">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p><?php the_time('d F Y'); ?></p>
			<div class="generic-content">
				<?php the_excerpt(); ?>
				<a class="standard-button button-outline" href="<?php the_permalink(); ?>">Read more</a>
			</div>
		</div>
		<div class="separator"></div>
	<?php }

	echo paginate_links();
?>
</div>

<?php get_footer();

?>