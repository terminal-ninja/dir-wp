<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section class="content">

		<div class="inner">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article class="full" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<!-- <?php //if ( has_post_thumbnail()) : ?>
							<figure><?php //the_post_thumbnail(); ?></figure>
					<?php //endif; ?> -->
					<h1>
						<?php the_title(); ?>
					</h1>

				

					<!-- post details -->
		<!-- 			<span class="date"><?php //the_time('F j, Y'); ?> <?php //the_time('g:i a'); ?></span>
					<span class="author"><?php //_e( 'Published by', 'html5blank' ); ?> <?php //the_author_posts_link(); ?></span>

					<span class="comments"><?php //if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span> -->
					<!-- /post details -->

					<div class="text"><?php the_content(); // Dynamic Content ?></div>
				</article>
				<article class="one-third 2-col">
					<?php //get_sidebar(); ?>
				</article>

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

				</article>
				<!-- /article -->
			
			<?php endif; ?>
			
			<div class="clearfix"></div>

			<?php if( get_field('author_name') ): ?>
				<div class="author-bio">
			    <figure class="one-fifth col-2">
						<?php $image = get_field('image'); ?>
			      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			    </figure>
			    <article class="four-fifths col-2">
			    	<div class="name"><p>By, <?php the_field('author_name'); ?></p></div>
			    	<div class="bio"><?php the_field('author_bio'); ?></div>
			    </article>
				</div>
			<?php endif; ?>

		</div>



	</section>
	<!-- /section -->

  
	</main>



<?php get_footer(); ?>
