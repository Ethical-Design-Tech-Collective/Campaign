<?php get_header(); 
while(have_posts()) {
    the_post(); ?>

<div class="section give-page-section more-padding">
  <div class="container narrow">
      <?php the_content(); ?>
    </div>
</div>

<?php } get_footer(); ?>