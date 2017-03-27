<!-- <section class="sellers recent-posts"> -->
  <h1 class="side-heading">Recent Posts</h1>
    <div class="inner">
      <?php 
        if ( is_page_template( 'template-buyers.php' ) ) {
          $posttype = 'buyers';
          $ppp = 3;
        }
        elseif ( is_page_template( 'template-sellers.php' ) ) {
          $posttype = 'sellers';
          $ppp = 3;
        }
        elseif ( is_page_template( 'template-agent-advice.php' ) ) {
          $posttype = 'agent_advice';
          $ppp = 1;
        }

        $args = array(
          'post_type' => $posttype,
          'posts_per_page' => $ppp
        );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); 
         ?>
           <article>
            
             <a href="<?php the_permalink(); ?>" >
               <figure class="one-third col-2">
                 <?php the_post_thumbnail('large'); ?>
               </figure>
             </a>
             <a href="<?php the_permalink(); ?>" >
              <div class="text two-thirds col-2">
                 <h3 class="limit-height"><?php the_title(); ?></h3>
                 <h4><?php html5wp_excerpt('html5wp_index'); ?></h4>
              </div>
              </a>
           </article>
          <?php endwhile; ?>
        <?php wp_reset_query(); ?>
      </div>
  <div class="clearfix"></div>
  
<!-- </section> -->