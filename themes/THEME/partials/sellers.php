<!-- <section class="sellers"> -->
  <h1 class="heading">Sellers</h1>
    <div class="inner">
      <?php 
        if ( is_page_template( 'template-resources.php' ) ) {
            $ppp = 3;
        } else {
            $ppp = 5;
        }
        
        $args = array(
          'post_type' => 'sellers',
          'posts_per_page' => $ppp
        );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); 
         ?>
           <article>
             <a href="<?php the_permalink(); ?>" >
               <figure class="med">  
                 <?php the_post_thumbnail('large'); ?>
               </figure>
               <h3 class="limit-height"><?php the_title(); ?></h3>
               <h4><?php html5wp_excerpt('html5wp_index'); ?></h4>
               <?php post_date(); ?>
             </a>
           </article>
          <?php endwhile; ?>
        <?php wp_reset_query(); ?>
      </div>
  <div class="clearfix"></div>
<!-- </section> -->