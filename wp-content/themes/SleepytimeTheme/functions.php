<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '<div class="sidebar-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'name' => 'Footer Widgets',
		'id' => 'footer-widgets',
		'description' => 'Place widgets for the footer here',
		'before_widget' => '<div class="col-sm-4 footer-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));


add_theme_support( 'post-thumbnails' ); 




//Bootstrap Comment template

function comment_feed($comment, $args, $depth){
	$GLOBAL['comment'] = $comment;

	?>
	
	<div class="media">
		<div class="media-left">
			<a class="media-object" href="<?php echo get_comment_author(); ?>"><?php echo get_avatar(); ?></a>
		</div>
		<div class="media-body">
			<a href="<?php echo get_comment_author(); ?>">
				<h5 class="media-heading"><?php echo get_comment_author(); ?></h5>
			</a>

			<small class="media-left"><?php comment_date(); ?> at <?php comment_time(); ?></small>
			
			<?php comment_text(); ?>
			
			<?php comment_reply_link( array_merge($args, array(
				
				'reply_text' => __('<strong>reply</strong>'),
				'depth'      => $depth,
				'max-depth'  => $args['max_depth'],

			))); ?>



		</div>

	</div>
<hr />

	<?php 
}
//filter for adding class to avatar thumnail
add_filter('get_avatar', 'add_avatar_class');

function add_avatar_class($class){

	$class = str_replace("class='avatar", "class='img-circle", $class);

	return $class;
}

//add bootstrap btn style to reply link

add_filter('comment_reply_link', 'add_reply_link_class');

function add_reply_link_class($class){

	$class = str_replace("class='comment-reply-link", "class='btn btn-default pull-right", $class);

	return $class;

}






?>