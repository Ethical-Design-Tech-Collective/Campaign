<?php get_header();
while(have_posts()) {
		the_post(); ?>

<div class="section top-section" style="background-image: url(<?php echo get_theme_file_uri('/images/bg2-de.jpg')?>);">
    <div class="container narrow">
      <h1><?php the_title(); ?></h1>
    </div>
</div>

<div class="section more-padding">
    <div class="container narrow">
    	<?php the_content(); ?>

        <ul class="bold-list">
        <?php 
          $primaryPolicies = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'policy',
            'meta_key' => 'order',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_query' => array(
              array(
                'key' => 'primary_policy',
                'compare' => '==',
                'value' => true
              )
            )
          ));

          while($primaryPolicies->have_posts()) {
            $primaryPolicies->the_post(); ?>

                <li><a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a></li>

          <?php } ?>
        </ul>
    </div>
</div>

<div class="section gray more-padding">
  <div class="container narrow">
    <?php 
      $primaryPolicies = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'policy',
        'meta_key' => 'order',
        'orderby' => 'meta_value_num',
        'order' => 'ASC'
      ));

      if($primaryPolicies->have_posts()) {
        ?> <h2>Unsere Themen</h2> <?php
      }

      while($primaryPolicies->have_posts()) {
        $primaryPolicies->the_post(); ?>

          <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

    <?php } ?>
  </div>
</div>

<?php } get_footer(); ?>