<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
	register_setting( 'motrton-one_options', 'motrton-one_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_theme_page( __( 'Theme Options', 'motrton-one' ), __( 'Theme Options', 'motrton-one' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

/**
 * Create arrays for our select and radio options
 */
$select_options = array(
	'0' => array(
		'value' =>	'0',
		'label' => __( 'Zero', 'motrton-one' )
	),
	'1' => array(
		'value' =>	'1',
		'label' => __( 'One', 'motrton-one' )
	),
	'2' => array(
		'value' => '2',
		'label' => __( 'Two', 'motrton-one' )
	),
	'3' => array(
		'value' => '3',
		'label' => __( 'Three', 'motrton-one' )
	),
	'4' => array(
		'value' => '4',
		'label' => __( 'Four', 'motrton-one' )
	),
	'5' => array(
		'value' => '3',
		'label' => __( 'Five', 'motrton-one' )
	)
);

$radio_options = array(
	'yes' => array(
		'value' => 'yes',
		'label' => __( 'Yes', 'motrton-one' )
	),
	'no' => array(
		'value' => 'no',
		'label' => __( 'No', 'motrton-one' )
	),
	'maybe' => array(
		'value' => 'maybe',
		'label' => __( 'Maybe', 'motrton-one' )
	)
);

/**
 * Create the options page
 */
function theme_options_do_page() {
	global $select_options, $radio_options;

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Theme Options', 'motrton-one' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'motrton-one' ); ?></strong></p></div>
		<?php endif; ?>
		<h3>Achtung! Nur editieren wenn du weisst was du tust. ;)</h3>
		<form method="post" action="options.php">
			<?php settings_fields( 'motrton-one_options' ); ?>
			<?php $options = get_option( 'motrton-one_options' ); ?>

			<table class="form-table">

				<?php
				/**
				 * A sample checkbox option
				 */
				?>
			 	<tr valign="top"><th scope="row"><?php _e( 'Add Debug info to pages?', 'motrton-one' ); ?></th>
					<td>
						<input id="motrton-one_options[debugger]" name="motrton-one_options[debugger]" type="checkbox" value="1" <?php checked( '1', $options['debugger'] ); ?> />
						<label class="description" for="motrton-one_options[debugger]"><?php _e( '', 'motrton-one' ); ?></label>
					</td>
				</tr> 

				<?php
				/**
				 * A sample text input option
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Page IDs to exclude from menu', 'motrton-one' ); ?></th>
					<td>
						<input id="motrton-one_options[excludepages]" class="regular-text" type="text" name="motrton-one_options[excludepages]" value="<?php esc_attr_e( $options['excludepages'] ); ?>" />
						<label class="description" for="motrton-one_options[excludepages]"><?php _e( '', 'motrton-one' ); ?></label>
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Page ID for Impressum', 'motrton-one' ); ?></th>
					<td>
						<input id="motrton-one_options[impressumpage]" class="regular-text" type="text" name="motrton-one_options[impressumpage]" value="<?php esc_attr_e( $options['impressumpage'] ); ?>" />
						<label class="description" for="motrton-one_options[impressumpage]"><?php _e( '', 'motrton-one' ); ?></label>
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Page ID for Contact', 'motrton-one' ); ?></th>
					<td>
						<input id="motrton-one_options[contactpage]" class="regular-text" type="text" name="motrton-one_options[contactpage]" value="<?php esc_attr_e( $options['contactpage'] ); ?>" />
						<label class="description" for="motrton-one_options[contactpage]"><?php _e( '', 'motrton-one' ); ?></label>
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Page ID for Newsletter', 'motrton-one' ); ?></th>
					<td>
						<input id="motrton-one_options[newsletterpage]" class="regular-text" type="text" name="motrton-one_options[newsletterpage]" value="<?php esc_attr_e( $options['newsletterpage'] ); ?>" />
						<label class="description" for="motrton-one_options[newsletterpage]"><?php _e( '', 'motrton-one' ); ?></label>
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Page ID for Register', 'motrton-one' ); ?></th>
					<td>
						<input id="motrton-one_options[registerpage]" class="regular-text" type="text" name="motrton-one_options[registerpage]" value="<?php esc_attr_e( $options['registerpage'] ); ?>" />
						<label class="description" for="motrton-one_options[registerpage]"><?php _e( '', 'motrton-one' ); ?></label>
					</td>
				</tr>
				<?php
				/**
				 * A sample select input option
				 */
				?>
				<!-- <tr valign="top"><th scope="row"><?php _e( 'Select input', 'motrton-one' ); ?></th>
					<td>
						<select name="motrton-one_options[selectinput]">
							<?php
								$selected = $options['selectinput'];
								$p = '';
								$r = '';

								foreach ( $select_options as $option ) {
									$label = $option['label'];
									if ( $selected == $option['value'] ) // Make default first in list
										$p = "\n\t<option style=\"padding-right: 10px;\" selected='selected' value='" . esc_attr( $option['value'] ) . "'>$label</option>";
									else
										$r .= "\n\t<option style=\"padding-right: 10px;\" value='" . esc_attr( $option['value'] ) . "'>$label</option>";
								}
								echo $p . $r;
							?>
						</select>
						<label class="description" for="motrton-one_options[selectinput]"><?php _e( 'Sample select input', 'motrton-one' ); ?></label>
					</td>
				</tr> -->

				<?php
				/**
				 * A sample of radio buttons
				 */
				?>
		<!-- 		<tr valign="top"><th scope="row"><?php _e( 'Radio buttons', 'motrton-one' ); ?></th>
					<td>
						<fieldset><legend class="screen-reader-text"><span><?php _e( 'Radio buttons', 'motrton-one' ); ?></span></legend>
						<?php
							if ( ! isset( $checked ) )
								$checked = '';
							foreach ( $radio_options as $option ) {
								$radio_setting = $options['radioinput'];

								if ( '' != $radio_setting ) {
									if ( $options['radioinput'] == $option['value'] ) {
										$checked = "checked=\"checked\"";
									} else {
										$checked = '';
									}
								}
								?>
								<label class="description"><input type="radio" name="motrton-one_options[radioinput]" value="<?php esc_attr_e( $option['value'] ); ?>" <?php echo $checked; ?> /> <?php echo $option['label']; ?></label><br />
								<?php
							}
						?>
						</fieldset>
					</td>
				</tr> -->

				<?php
				/**
				 * A sample textarea option
				 */
				?>
		<!-- 		<tr valign="top"><th scope="row"><?php _e( 'A textbox', 'motrton-one' ); ?></th>
					<td>
						<textarea id="motrton-one_options[sometextarea]" class="large-text" cols="50" rows="10" name="motrton-one_options[sometextarea]"><?php echo esc_textarea( $options['sometextarea'] ); ?></textarea>
						<label class="description" for="motrton-one_options[sometextarea]"><?php _e( 'Sample text box', 'motrton-one' ); ?></label>
					</td>
				</tr> -->
			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'motrton-one' ); ?>" />
			</p>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {
	global $select_options, $radio_options;

	// Our checkbox value is either 0 or 1
	if ( ! isset( $input['option1'] ) )
		$input['option1'] = null;
	$input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );

	// Say our text option must be safe text with no HTML tags
	$input['sometext'] = wp_filter_nohtml_kses( $input['sometext'] );

	// Our select option must actually be in our array of select options
	if ( ! array_key_exists( $input['selectinput'], $select_options ) )
		$input['selectinput'] = null;

	// Our radio option must actually be in our array of radio options
	if ( ! isset( $input['radioinput'] ) )
		$input['radioinput'] = null;
	if ( ! array_key_exists( $input['radioinput'], $radio_options ) )
		$input['radioinput'] = null;

	// Say our textarea option must be safe text with the allowed tags for posts
	$input['sometextarea'] = wp_filter_post_kses( $input['sometextarea'] );

	return $input;
}

// adapted from http://planetozh.com/blog/2009/05/handling-plugins-options-in-wordpress-28-with-register_setting/