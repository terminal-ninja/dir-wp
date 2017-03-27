<section class="hero-slider">
  <div class="hero-carousel">
    <ul class="bxslider">
      <?php
        if (is_singular( 'buyers' ) ) {
            $a = 110;

        }
        elseif (is_singular( 'sellers' ) ) {
             $a = 113;
        }
        elseif (is_singular( 'agent_advice' ) ) {
             $a = 115;
        }
        elseif ( is_search() ) {
            $a = 11;
        }

        if( have_rows('custom_slider', $a) ):
            while ( have_rows('custom_slider', $a) ) : the_row(); ?>
              <li style="background-image: url('<?php the_sub_field('background'); ?>');">
                <div class="gradient"></div>  
                <div class="overlay">
                  <?php $image = get_sub_field('logo'); 
                      echo '<figure><img src="' . $image['url'] . '" alt="' . $image['alt'] . '" /></figure>';
                  ?>
                  <div class="inner">
                    <h2><?php the_sub_field('heading'); ?></h2>
                    <h3><?php the_sub_field('text_area'); ?></h3>
                  </div>
                </div>
              </li>
         <?php endwhile;
        else :
         endif;
      ?>
    </ul>
  </div>
</section>