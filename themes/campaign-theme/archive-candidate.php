<?php 

get_header(); ?>

<div class="section gray more-padding">
	<div class="container narrow bottom-padded centered">
		<h2>Unsere Kandidat<span class=asterisk>*</span>innen sind bereit für die Herausforderung: Europa demokratisieren!</h2>
	</div>
	<div class="container">
		<div class="candidates-grid">
			<?php
				while(have_posts()) {
					the_post(); ?>
					<div class="candidate">
						<div class="image-cont"><?php the_post_thumbnail('medium'); ?></div>
						<div class="info-cont">
							<h3 class="headline headline--medium headline--post-title"><?php the_title(); ?></h2>
							<p><?php echo get_field('profession'); ?></p>
							<p><a class="standard-button button-outline compact invisible" href="<?php the_permalink(); ?>">Mehr erfahren</a></p>
						</div>
					</div>
				<?php }

				echo paginate_links();
			?>
		</div>
	</div>
</div>

<?php get_footer();

?>