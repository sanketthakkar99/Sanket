<?php

/*
Plugin Name: Sanket
Plugin URI: http://raghuvanshiinfosoft.000webhostapp.com/
Description: Test Widget 
Version: 1.0
Author: SANKET
Author URI: http://raghuvanshiinfosoft.000webhostapp.com/
License: none

*/
class show_recent_post extends WP_Widget
{
	public function __construct() {
	{
		parent::__construct(false, $name = __('SANKET WIDGET'));
	}
	}
	function form()
	{
		
	}
	function update()
	{
		
	}
	function widget($args, $instance )
	{
	?>
	<div class="widget popular-posts">
	<h2>Widget For Show Posts</h2>
	<ul>
	<?php
		$query_args =  array('numberposts' => 10,
	'offset' => 0,
	'category' => 0,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_type' => 'post',
	'post_status' => 'publish',
	'suppress_filters' => true);
		$query = new WP_Query($query_args);
		while( $query->have_posts()) : $query->the_post();
	?>
	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	<?php endwhile; ?>
	</ul>
	</div>
	<?php
	}
	
}
add_action('widgets_init', function(){
	register_widget('show_recent_post');
}) 
?>
