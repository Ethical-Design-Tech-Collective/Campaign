<?php get_header();
while(have_posts()) {
		the_post(); ?>
		<div class="section more-padding">
		    <div class="container narrow">
		      <div class="details-with-icons">
		      	<h1><?php the_title(); ?></h1>
		        <h3 class="date">
		          <i class="far fa-calendar-alt"></i><?php $eventDate = new DateTime(get_field('event_date')); echo $eventDate->format('d F Y'); ?>
		        </h3>
		        <h3>
		          <i class="fas fa-map-marker-alt"></i><?php echo get_field('event_location'); ?>
		        </h3>
		      </div>
		      <?php the_content(); ?>
		      <p><a class="standard-button button-outline" href="<?php echo get_post_type_archive_link('event'); ?>"> See all events </a></p>
		    </div>
		</div>

<?php } get_footer(); ?>