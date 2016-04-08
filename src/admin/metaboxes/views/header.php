<p>
	<label for="subtitle">
		<strong><?php _e( 'Subtitle', 'fulcrum-site' ); ?></strong>
	</label>
<td><p><input class="large-text" type="text" name="ktc_page_header[_fulcrum_subtitle]" id="subtitle" value="<?php echo esc_attr( genesis_get_custom_field( '_fulcrum_subtitle' ) ); ?>" /></p>
</p>

<p>
	<label for="_header_content">
		<strong><?php _e( 'Header Contents', 'fulcrum-site' ); ?></strong>
	</label>
	<?php
	$args = array(
		'textarea_name' => "ktc_page_header[_fulcrum_header_content]",
	);
	wp_editor( genesis_get_custom_field( '_fulcrum_header_content' ), '_fulcrum_header_content', $args );
	?>
</p>
<p class="description">
	<?php _e( 'Enter the content that you want to display in the header under the title.', 'fulcrum-site' ); ?>
</p>