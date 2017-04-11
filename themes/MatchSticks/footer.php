        <!-- footer -->
      <?php if ( is_user_logged_in() ) : ?>
        <section class="edit-link">
          <div class=""><a href="<?php echo get_edit_post_link(); ?>" target="_blank" >Edit This Page</a></div>
        </section>
      <?php endif; ?>
      <footer class="footer" role="contentinfo" id="contact">


        <section class="top">
          <div class="inner">
            <item class="one-third col-2"><?php the_field('news_letter_text', 11); ?></item>
            <item class="two-thirds col-2"><div class="_form_1"></div><script src="https://ahprop.activehosted.com/f/embed.php?id=1" type="text/javascript" charset="utf-8"></script></item>
          </div>
        </section>

      <div class="middle">
        <section>
          <item class="one-fifth col-3">
            <?php the_field('footer_col_1', 11); ?>
          </item>
          <item class="three-fifths col-3">
            <?php the_field('footer_col_2', 11); ?>
          </item>
          <item class="one-fifth col-3">
            <?php the_field('footer_col_3', 11); ?>
            <div class="social">
              <?php if( have_rows('social_contact', 11) ): 
              while ( have_rows('social_contact', 11) ) : the_row(); ?>  
                <a href=" <?php the_sub_field('link'); ?>" target="_blank">
                  <?php $image = get_sub_field('icon'); 
                      echo '<figure><img src="' . $image['url'] . '" alt="' . $image['alt'] . '" /></figure>'; ?>
                </a>
              <?php endwhile; 
            endif; ?>                 
            </div>
          </item>
        </section>
      </div>

        <section class="bottom">
          <div class="container center">
            <p class="copyright">
              Website powered by Adrienne Hersch Properties | &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
            </p>
          </div>
        </section>

      </footer>
      <!-- /footer -->

    
    <!-- /wrapper -->

    <?php wp_footer(); ?>

    <!-- scripts-->
  
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.2.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/scrollreveal.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/smoothscroll.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.slimmenu.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

  </body>
</html>
