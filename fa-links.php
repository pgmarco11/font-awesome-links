<?php
/**
 * Plugin Name: Font Awesome Social Links 
 * Description: Easily add Social links into your WordPress posts, pages, and custom post types with Font Awesome Icons
 * Version: 1.0.0
 */

/**
 * Do not load this file directly.
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/**
 * Adds widget.
 */
class fa_slinks_widget extends WP_Widget {

		/**
	 * Register widget with WordPress.
	 */

	public function __construct(){	
		
		parent::__construct( 'fasl_widget', 'Font Awesome Social Links Widget', array(
			'classname' => 'fa_slinks_widget',
			'description' => __('Display nice looking font awesome social links'))
		);

		
	}


	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */

	public function faw_assets(){


	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance){
		
		return $new_instance;

	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */

	public function form($instance){

		$title = '';

		$tw_icon = '';
		$tw_link = '';

		$fa_icon = '';
		$fa_link = '';

		$pi_icon = '';
		$pi_link = '';

		$li_icon = '';
		$li_link = '';


		if( !empty( $instance['title'] ) ) { $title = $instance['title']; }

		if( !empty( $instance['tw_link'] ) ) { $tw_link= $instance['tw_link']; }
		if( !empty( $instance['fa_link'] ) ) { $fa_link= $instance['fa_link']; }
		if( !empty( $instance['pi_link'] ) ) { $pi_link= $instance['pi_link']; }
		if( !empty( $instance['li_link'] ) ) { $li_link= $instance['li_link']; }

		if( !empty( $instance['tw_icon'] ) ) { $tw_icon = $instance['tw_icon']; }
		if( !empty( $instance['fa_icon'] ) ) { $fa_icon = $instance['fa_icon']; }
		if( !empty( $instance['pi_icon'] ) ) { $pi_icon = $instance['pi_icon']; }
		if( !empty( $instance['li_icon'] ) ) { $li_icon = $instance['li_icon']; }

	?>


	<p>
		<label for="<?php echo esc_attr( $this->get_field_name('title')); ?>">
				<?php _e('Title:'); ?>
		</label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr_e( $title ); ?>"/></br>
	</p>


	<p>
		<label for="<?php echo esc_attr( $this->get_field_name('fa_icon')); ?>">
				<?php _e('Facebook Font Awesome Icon:'); ?>
		</label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'fa_icon' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'fa_icon' ) ); ?>" type="text" value="<?php echo esc_attr_e( $fa_icon ); ?>"/></br>
		<a href="http://fontawesome.io/icons/" target="_blank">Font Awesome Icons</a>
	</p>

	<p>
		<label for="<?php echo esc_attr( $this->get_field_name('fa_link')); ?>">
				<?php _e('FaceBook Link:'); ?>
		</label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'fa_link' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'fa_link' ) ); ?>" type="text" value="<?php echo esc_attr_e( $fa_link ); ?>"/>
	</p>

		<p>
		<label for="<?php echo esc_attr( $this->get_field_name('tw_icon')); ?>">
				<?php _e('Twitter Font Awesome Icon:'); ?>
		</label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'tw_icon' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'tw_icon' ) ); ?>" type="text" value="<?php echo esc_attr_e( $tw_icon ); ?>"/></br>
		<a href="http://fontawesome.io/icons/" target="_blank">Font Awesome Icons</a>
	</p>

	<p>
		<label for="<?php echo esc_attr( $this->get_field_name('tw_link')); ?>">
				<?php _e('Twitter Link:'); ?>
		</label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'tw_link' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'tw_link' ) ); ?>" type="text" value="<?php echo esc_attr_e( $tw_link ); ?>"/>
	</p>

		<p>
		<label for="<?php echo esc_attr( $this->get_field_name('li_icon')); ?>">
				<?php _e('LinkedIn Font Awesome Icon:'); ?>
		</label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'li_icon' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'li_icon' ) ); ?>" type="text" value="<?php echo esc_attr_e( $li_icon ); ?>"/></br>
		<a href="http://fontawesome.io/icons/" target="_blank">Font Awesome Icons</a>
	</p>

	<p>
		<label for="<?php echo esc_attr( $this->get_field_name('li_link')); ?>">
				<?php _e('LinkedIn Link:'); ?>
		</label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'li_link' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'li_link' ) ); ?>" type="text" value="<?php echo esc_attr_e( $li_link ); ?>"/>
	</p>

		<p>
		<label for="<?php echo esc_attr( $this->get_field_name('pi_icon')); ?>">
				<?php _e('Pinterest Font Awesome Icon:'); ?>
		</label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'pi_icon' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'pi_icon' ) ); ?>" type="text" value="<?php echo esc_attr_e( $pi_icon ); ?>"/></br>
		<a href="http://fontawesome.io/icons/" target="_blank">Font Awesome Icons</a>
	</p>

	<p>
		<label for="<?php echo esc_attr( $this->get_field_name('pi_link')); ?>">
				<?php _e('Pinterest Link:'); ?>
		</label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'pi_link' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'pi_link' ) ); ?>" type="text" value="<?php echo esc_attr_e( $pi_link ); ?>"/>
	</p>


	<?php

		}

	public function widget($args, $instance){

			echo $args['before_widget'];

	?>
	
				<?php if( !empty( $instance['title'] ) ) {  
		
				echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		
				} ?>
					<ul class="social-icon clearfix unstyled">
						<?php if( !empty( $instance['tw_link'] ) ) { ?>
						<li>
						<a href="<?php echo esc_url( $instance['tw_link'] ); ?>" data-toggle="tooltip" title="Twitter"><?php if( !empty( $instance['tw_icon'] ) ) { 
							echo sprintf( $instance['tw_icon'] ); }
						?>
						</a>
						</li>
						<?php } if( !empty( $instance['fa_link'] ) ) { ?>
						<li>
						<a href="<?php echo esc_url( $instance['fa_link'] ); ?>" data-toggle="tooltip" title="Facebook"><?php if( !empty( $instance['fa_icon'] ) ) { 
							echo sprintf( $instance['fa_icon'] ); } 
						?>
						</a>
						</li>
						<?php } if( !empty( $instance['li_link'] ) ) { ?>
						<li>
						<a href="<?php echo esc_url( $instance['li_link'] ); ?>" data-toggle="tooltip" title="LinkedIn"><?php if( !empty( $instance['li_icon'] ) ) { 
							echo sprintf( $instance['li_icon'] ); } 
						?>
						</a>
						</li>
						<?php } if( !empty( $instance['pi_link'] ) ) { ?>
						<li>
						<a href="<?php echo esc_url( $instance['pi_link'] ); ?>" data-toggle="tooltip" title="Pinterest"><?php if( !empty( $instance['pi_icon'] ) ) { 
							echo sprintf( $instance['pi_icon'] ); } 
						?>
						</a>
						</li>
						<?php } ?>
								
					</ul>
	

	<?php

			echo $args['after_widget'];

	}

}

add_action( 'widgets_init', create_function('', 'return register_widget("fa_slinks_widget");') );

?>