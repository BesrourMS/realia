<?php if ( empty( $instance['hide_baths'] ) ) : ?>
	<div class="form-group">
		<?php if ( $input_titles == 'labels' ) : ?>
			<label for="<?php echo esc_attr( $args['widget_id'] ); ?>_baths"><?php echo __( 'Baths', 'realia' ); ?></label>
		<?php endif; ?>

		<input type="text" name="filter-baths"
		       <?php if( $input_titles == 'placeholders' ) : ?>placeholder="<?php echo __( 'Baths', 'realia' ); ?>"<?php endif; ?>
		       class="form-control" value="<?php echo ! empty( $_GET['filter-baths'] ) ? $_GET['filter-baths'] : ''; ?>"
		       id="<?php echo esc_attr( $args['widget_id'] ); ?>_baths">
	</div><!-- /.form-group -->
<?php endif; ?>