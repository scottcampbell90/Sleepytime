<?php // Template Name : Blog ?>

<?php get_header(); ?>
   
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="row">
		<div class="col-md-6">
			<div class="media">
			  <div class="hidden-xs">
			    <a href="<?php the_permalink(); ?>">
			      <?php the_post_thumbnail('thumbnail'); ?>
			    </a>
			  </div>
			  <div class="media-body">
			    <a href="<?php the_permalink(); ?>"><h2 class="media-heading"><?php the_title(); ?></h2></a>
			    <?php the_excerpt(); ?>
			    <a href="<?php the_permalink(); ?>" class="btn btn-small btn-default">Read More</a>
			  </div>
			</div> 
		</div>
	</div>

	
  

<?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>