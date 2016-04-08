<p>
	<label for="<?php echo esc_attr( $this->get_field_id('class') ); ?>"><?php _e( 'Widget class', 'fulcrum_site'); ?>:</label><br />
	<input type="text" id="<?php echo esc_attr( $this->get_field_id('class')); ?>" name="<?php echo esc_attr( $this->get_field_name( 'class' ) ); ?>" value="<?php echo esc_attr( $instance['class'] ); ?>" class="widefat" />
</p>