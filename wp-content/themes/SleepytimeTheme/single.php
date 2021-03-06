<?php get_header(); ?>

	
	<div class="row">
		
		<div class="col-md-8">
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			 <h1><?php the_title(); ?></h1>
			 <p>by: <?php the_author(); ?></p>
			<p>at: <em><?php the_time('l, F jS, Y'); ?></em></p>
			
			<div class="post-thumbnail">
				<?php the_post_thumbnail('full'); ?>
			</div> 

			<div class="post-content">
	  			<?php the_content(); ?>
			</div>
			
	  		<hr>
	  		<div class="col-md-10">
			<?php comments_template(); ?>
			</div>
			<?php endwhile; else: ?>
			  <p><?php _e('Sorry, this page does not exist.'); ?></p>
			<?php endif; ?>


		</div>

		<div class="col-md-4">
			
			<?php get_sidebar(); ?>

		</div>

	</div><!-- /.row -->

   



<?php get_footer(); ?>