
  <h1 class="heading">Buyers</h1>
  <div class="inner">
    <?php 
      if ( is_page_template( 'template-resources.php' ) ) {
          $ppp = 1;
      } else {
          $ppp = 5;
      }
      
      $args = array(
        'post_type' => 'buyers',
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
             <?php //echo gds_dynamic_excerpt(24,30,350); ?>

             <?php post_date(); ?>
           </a>
         </article>
      <?php endwhile; ?>
      
    <?php 
      if ( is_page_template( 'template-resources.php' ) ) {
        $args = array(
          'post_type' => 'buyers',
          'posts_per_page' => $ppp,
          'offset' => 1
        );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); 
         ?>
           <article>
             <a href="<?php the_permalink(); ?>" >
               <figure >
                 <?php the_post_thumbnail('large'); ?>
               </figure>
               <h3><?php the_title(); ?></h3>
               <h4><?php html5wp_excerpt('index_long'); ?></h4>
               <?php post_date(); ?>
             </a>
           </article>
        <?php endwhile; ?>
      <?php wp_reset_query(); 
      } ?>
  </div>
  <div class="clearfix"></div>

