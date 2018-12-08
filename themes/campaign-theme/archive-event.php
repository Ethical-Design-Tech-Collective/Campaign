<?php 

get_header(); ?>
<div class="section gray events more-padding">
<?php
  while(have_posts()) {
    the_post(); ?>
    <div class=" container narrow bottom-padded event-item">
      <div class="fancy-date">
        <div class="month"><?php $eventDate = new DateTime(get_field('event_date')); echo $eventDate->format('M'); ?></div>
        <div class="day"><?php $eventDate = new DateTime(get_field('event_date')); echo $eventDate->format('d'); ?></div>
      </div>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <div class="details-with-icons">
        <h4 class="date">
          <i class="far fa-calendar-alt"></i><?php $eventDate = new DateTime(get_field('event_date')); echo $eventDate->format('d F Y'); ?>
        </h4>
        <h4>
          <i class="fas fa-map-marker-alt"></i><?php echo get_field('event_location'); ?>
        </h4>
      </div>
      <div class="generic-content">
        <?php the_excerpt(); ?>
        <a class="standard-button button-outline" href="<?php the_permalink(); ?>">Read more</a>
      </div>
    </div>
  <?php }

  echo paginate_links();
?>
</div>


<?php get_footer();

?>