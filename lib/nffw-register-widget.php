<?php
/**
 * Adds NFFW_SOCIAL widget.
 */

class NFFW_SOCIAL extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */

	function __construct() {

		parent::__construct(

			'NFFW_SOCIAL', // Base ID

			__( 'New Facebook Fan Page Widget ', 'NFFW' ), // Name

			array( 'description' => __( 'New Facebook FanBox Widget', 'NFFW' ), ) // Args

		);

	}

	/**
	 * Front-end display of widget.
	 *
	 * @see NFFW_SOCIAL::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */

	public function widget( $args, $instance ) {

		echo $args['before_widget'];

		if ( ! empty( $instance['title'] ) ) {

			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];

		}

		// Check values

		if ( ! empty( $instance['NFFW_facebook_page_url'] ) ) {

			 $args['before_title'] . apply_filters( 'widget_title', $instance['NFFW_facebook_page_url'] ). $args['after_title'];

		} 

		if ( ! empty( $instance['NFFW_facebook_widget_width'] ) ) {

			 $args['before_title'] . apply_filters( 'widget_title', $instance['NFFW_facebook_widget_width'] ). $args['after_title'];

		} 

		if ( ! empty( $instance['NFFW_facebook_widget_height'] ) ) {

			 $args['before_title'] . apply_filters( 'widget_title', $instance['NFFW_facebook_widget_height'] ). $args['after_title'];

		} 

		if ( ! empty( $instance['NFFW_facebook_user_faces'] ) ) {

			 $args['before_title'] . apply_filters( 'widget_title', $instance['NFFW_facebook_user_faces'] ). $args['after_title'];

		} 

		if ( ! empty( $instance['NFFW_facebook_page_cover'] ) ) {

			 $args['before_title'] . apply_filters( 'widget_title', $instance['NFFW_facebook_page_cover'] ). $args['after_title'];

		} 

		if ( ! empty( $instance['NFFW_facebook_user_posts'] ) ) {

			 $args['before_title'] . apply_filters( 'widget_title', $instance['NFFW_facebook_user_posts'] ). $args['after_title'];

		}

		echo __( '<div class="fb-page" data-href="'.$instance['NFFW_facebook_page_url'].'" data-width="'.$instance['NFFW_facebook_widget_width'].'" data-hide-cover="'.$instance['NFFW_facebook_page_cover'].'" data-show-facepile="'.$instance['NFFW_facebook_user_faces'].'" data-show-posts="'.$instance['NFFW_facebook_user_posts'].'"><div class="fb-xfbml-parse-ignore"><blockquote cite="'.$instance['NFFW_facebook_page_url'].'"><a href="'.$instance['NFFW_facebook_page_url'].'">Facebook</a></blockquote></div></div>', 'NFFW' );

		echo $args['after_widget'];

	}

	

	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Find us on Facebook', 'NFFW' );
		$NFFW_facebook_page_url = ! empty( $instance['NFFW_facebook_page_url'] ) ? $instance['NFFW_facebook_page_url'] : __( 'https://www.facebook.com/odrasoft', 'NFFW' );
		$NFFW_facebook_widget_width = ! empty( $instance['NFFW_facebook_widget_width'] ) ? $instance['NFFW_facebook_widget_width'] : __( '340', 'NFFW' );
		$NFFW_facebook_widget_height = ! empty( $instance['NFFW_facebook_widget_height'] ) ? $instance['NFFW_facebook_widget_height'] : __( '500', 'NFFW' );
		$NFFW_facebook_user_faces = ! empty( $instance['NFFW_facebook_user_faces'] ) ? $instance['NFFW_facebook_user_faces'] : __( 'true', 'NFFW' );
		$NFFW_facebook_page_cover = ! empty( $instance['NFFW_facebook_page_cover'] ) ? $instance['NFFW_facebook_page_cover'] : __( 'false', 'NFFW' );
		$NFFW_facebook_user_posts = ! empty( $instance['NFFW_facebook_user_posts'] ) ? $instance['NFFW_facebook_user_posts'] : __( 'false', 'NFFW' );
	?>

	<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><strong><?php _e( 'Title:' ); ?></strong></label> <br /> 
		<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'NFFW_facebook_page_url' ); ?>"><strong><?php _e( 'Facebook Page Url:' ); ?></strong></label><br /> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'NFFW_facebook_page_url' ); ?>" name="<?php echo $this->get_field_name( 'NFFW_facebook_page_url' ); ?>" type="text" value="<?php echo esc_attr( $NFFW_facebook_page_url ); ?>">
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'NFFW_facebook_widget_width' ); ?>"><strong><?php _e( 'Width:' ); ?></strong></label> <br />
		<input class="widefat" id="<?php echo $this->get_field_id( 'NFFW_facebook_widget_width' ); ?>" name="<?php echo $this->get_field_name( 'NFFW_facebook_widget_width' ); ?>" type="text" value="<?php echo esc_attr( $NFFW_facebook_widget_width ); ?>" placeholder="The pixel width of the plugin. Min. is 280 & Max. is 500">
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'NFFW_facebook_widget_height' ); ?>"><strong><?php _e( 'Height:' ); ?></strong></label><br /> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'NFFW_facebook_widget_height' ); ?>" name="<?php echo $this->get_field_name( 'NFFW_facebook_widget_height' ); ?>" type="text" value="<?php echo esc_attr( $NFFW_facebook_widget_height ); ?>" placeholder="The maximum pixel height of the plugin. Min. is 130">
	</p>

	<p>
		<?php $NFFW_faces_setting = esc_attr( $NFFW_facebook_user_faces ); ?>
		<label><strong><?php _e( "Show Friend's Faces" ); ?></strong></label><br />
		<input type="radio" id="<?php echo $this->get_field_id( 'NFFW_facebook_user_faces' ); ?>-true" name="<?php echo $this->get_field_name( 'NFFW_facebook_user_faces' ); ?>" value="true" <?php if($NFFW_faces_setting == "true"){echo ' checked="checked" ';} else {echo '';} ?>/>
		<label for="<?php echo $this->get_field_id( 'NFFW_facebook_user_faces' ); ?>-true">Yes</label>
		<input type="radio" id="<?php echo $this->get_field_id( 'NFFW_facebook_user_faces' ); ?>-false" name="<?php echo $this->get_field_name( 'NFFW_facebook_user_faces' ); ?>" value="false" <?php if($NFFW_faces_setting == "false"){echo ' checked="checked" ';} else {echo '';} ?> />
		<label for="<?php echo $this->get_field_id( 'NFFW_facebook_user_faces' ); ?>-false">No</label>
	</p>

	<p>
		<?php $NFFW_cover_setting = esc_attr( $NFFW_facebook_page_cover ); ?>
		<label><strong><?php _e( 'Hide Cover Photo' ); ?></strong></label><br />
		<input type="radio" id="<?php echo $this->get_field_id( 'NFFW_facebook_page_cover' ); ?>-true" name="<?php echo $this->get_field_name( 'NFFW_facebook_page_cover' ); ?>" value="true" <?php if($NFFW_cover_setting == "true"){echo ' checked="checked" ';} else {echo '';} ?> />
		<label for="<?php echo $this->get_field_id( 'NFFW_facebook_page_cover' ); ?>-true">Yes</label>
		<input type="radio" id="<?php echo $this->get_field_id( 'NFFW_facebook_page_cover' ); ?>-false" name="<?php echo $this->get_field_name( 'NFFW_facebook_page_cover' ); ?>" value="false" <?php if($NFFW_cover_setting == "false"){echo ' checked="checked" ';} else {echo '';} ?> />
		<label for="<?php echo $this->get_field_id( 'NFFW_facebook_page_cover' ); ?>-false">No</label>
	</p>

	<p>
		<?php $NFFW_posts_setting = esc_attr( $NFFW_facebook_user_posts ); ?>
		<label><strong><?php _e( 'Show Page Posts ' ); ?></strong></label><br />
		<input type="radio" id="<?php echo $this->get_field_id( 'NFFW_facebook_user_posts' ); ?>-true" name="<?php echo $this->get_field_name( 'NFFW_facebook_user_posts' ); ?>" value="true" <?php if($NFFW_posts_setting == "true"){echo ' checked="checked" ';} else {echo '';} ?> />
		<label for="<?php echo $this->get_field_id( 'NFFW_facebook_user_posts' ); ?>-true">Yes</label>
		<input type="radio" id="<?php echo $this->get_field_id( 'NFFW_facebook_user_posts' ); ?>-false" name="<?php echo $this->get_field_name( 'NFFW_facebook_user_posts' ); ?>" value="false" <?php if($NFFW_posts_setting == "false"){echo ' checked="checked" ';} else {echo '';} ?> />
		<label for="<?php echo $this->get_field_id( 'NFFW_facebook_user_posts' ); ?>-false">No</label>
	</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see NFFW_SOCIAL::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */

	public function update( $new_instance, $old_instance ) {

		$instance = array();

		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

		$instance['NFFW_facebook_page_url'] = ( ! empty( $new_instance['NFFW_facebook_page_url'] ) ) ? strip_tags( $new_instance['NFFW_facebook_page_url'] ) : '';

		$instance['NFFW_facebook_widget_width'] = ( ! empty( $new_instance['NFFW_facebook_widget_width'] ) ) ? strip_tags( $new_instance['NFFW_facebook_widget_width'] ) : '';

		$instance['NFFW_facebook_widget_height'] = ( ! empty( $new_instance['NFFW_facebook_widget_height'] ) ) ? strip_tags( $new_instance['NFFW_facebook_widget_height'] ) : '';

		$instance['NFFW_facebook_user_faces'] = ( ! empty( $new_instance['NFFW_facebook_user_faces'] ) ) ? strip_tags( $new_instance['NFFW_facebook_user_faces'] ) : '';

		$instance['NFFW_facebook_page_cover'] = ( ! empty( $new_instance['NFFW_facebook_page_cover'] ) ) ? strip_tags( $new_instance['NFFW_facebook_page_cover'] ) : '';

		$instance['NFFW_facebook_user_posts'] = ( ! empty( $new_instance['NFFW_facebook_user_posts'] ) ) ? strip_tags( $new_instance['NFFW_facebook_user_posts'] ) : '';

		return $instance;

	}

} 

function register_NFFW_SOCIAL() {

    register_widget( 'NFFW_SOCIAL' );
} 
add_action( 'widgets_init', 'register_NFFW_SOCIAL' );