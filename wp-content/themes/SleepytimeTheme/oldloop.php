<?php // Template Name : Blog ?>

<?php get_header(); ?>

<div class="row">


		<ul class="thumbnails">
		<?php 
			//set count outside loop
			$count = (int)0;
			//start post loop
			if ( have_posts() ) : while ( have_posts() ) : the_post();
		?>


		<?php 
			//set the span to default span12
			$span = 'col-md-6';
			//if the count is 2 or 3 change span to span3. (put whichever conditions you want here)
			if($count == 2 || $count ==3){
				$span = 'col-md-3';
			}
			//if the count is equal to 3 or higher (which it should not be) then reset count to 0.
			if($count >= 3){
				$count = 0;
			}
			//if its not 3 or higher, increase the count.
			else{
				$count++;
			}
		 ?>

		 <li class="<?php echo $span; ?>">
		 	<a class="thumbnail" href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('large'); ?>
		 	</a>
		 </li>








  

<?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

	</ul>
</div>

<?php get_footer(); ?>