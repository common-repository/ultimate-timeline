<?php
defined('ABSPATH') || die;
$post_id = $post->ID;
$timeline_settings  = get_post_meta( $post_id,'wct_story_setting',true );

include_once 'timeline-default-settings.php';

if ( is_array( $timeline_settings ) ) {
    // Story Color
    if ( isset( $timeline_settings['story_color'] ) ) {
        $story_color = esc_attr( $timeline_settings['story_color'] );
    }

    // Story Paragraph Color
    if ( isset( $timeline_settings['story_paragraph_color'] ) ) {
        $story_paragraph_color = esc_attr( $timeline_settings['story_paragraph_color'] );
    }    

    // Story Paragraph Background Color
    if ( isset( $timeline_settings['story_paragraph_bg_color'] ) ) {
        $story_paragraph_bg_color = esc_attr( $timeline_settings['story_paragraph_bg_color'] );
    }    

    // Story Title Color
    if ( isset( $timeline_settings['story_title_color'] ) ) {
        $story_title_color = esc_attr( $timeline_settings['story_title_color'] );
    }    

    // Story Date Color
    if ( isset( $timeline_settings['story_date_color'] ) ) {
        $story_date_color = esc_attr( $timeline_settings['story_date_color'] );
    }    

    // Story Date
    if ( isset( $timeline_settings['wct_story_date'] ) ) {
        $story_date = esc_attr( $timeline_settings['wct_story_date'] );
    }

   //Display Story Date
    if ( isset( $timeline_settings['display_story_date'] ) ) {
        $display_story_date = esc_attr( $timeline_settings['display_story_date'] );
    }

   //Display Story Date
    if ( isset( $timeline_settings['display_author_name'] ) ) {
        $display_author_name = esc_attr( $timeline_settings['display_author_name'] );
    }


    	// Story  Author name
    if ( isset( $timeline_settings['display_author_name'] ) ) {
        $display_author_name = (bool) $timeline_settings['display_author_name'];
    }

// Story Image
    if ( isset( $timeline_settings['display_story_image'] ) ) {
	$display_story_image = (bool) $timeline_settings['display_story_image'];
   }
      
   if ( isset( $timeline_settings['story_full_screen'] ) ) {
	$story_image_full_screen = (bool) $timeline_settings['story_full_screen'];
   }

}
?>
<div class="wct-setting-container">
<input type="hidden" name="version" value="lite">
    <?php $nonce = wp_create_nonce( 'weblizar_timeline' ); ?>
    <input type="hidden" name="weblizar_timeline_nonce" value="<?php echo esc_attr( $nonce ); ?>">
    <div class="wct-setting-general">
        <div class="row">
            <div class="col-xs-12 col-md-4 wct-setting-col">
				<span class="wct_setting_key">
					<?php esc_html_e( 'Display Story Image', 'ultimate-timeline' ); ?>
				</span>
            </div>
            <div class="col-xs-12 col-md-8 wct-setting-col">
				<span class="wct_setting_value">
                    <div class="wct-setting-helper">
						<?php esc_html_e( 'Select Yes/No option to show/hide Image inside Story.', 'ultimate-timeline' ); ?>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $display_story_image, true, true ); ?> class="form-check-input" type="radio" name="display_story_image" id="wct_display_story_image_1" value="1">
						<label class="form-check-label" for="wct_display_story_image_1">
							<span class="dashicons dashicons-yes"></span>
						</label>
					</div>

					<div class="form-check form-check-inline">
						<input <?php checked( $display_story_image, false, true ); ?> class="form-check-input" type="radio" name="display_story_image" id="wct_display_story_image_0" value="0">
						<label class="form-check-label" for="wct_display_story_image_0">
							<span class="dashicons dashicons-no"></span>
						</label>
					</div>
				</span>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-xs-12 col-md-4 wct-setting-col">
			<span class="wct_setting_key">
				<?php esc_html_e( 'Story Image', 'ultimate-timeline' ); ?>
			</span>
            </div>
            <div class="col-xs-12 col-md-8 wct-setting-col">
			<span class="wct_setting_value">
              		<div class="wct-setting-helper">
					<?php esc_html_e( 'Select Full/Small Screen option to Show Image Full Or Small inside Story.', 'ultimate-timeline' ); ?>
				</div>

				<div class="form-check form-check-inline">
					<input <?php checked( $story_image_full_screen, true, true ); ?> class="form-check-input" type="radio" name="story_image_full_screen" id="wct_story_image_full_screen_1" value="1">
					<label class="form-check-label" for="wct_story_image_full_screen_1">
						<span> <?php esc_html_e('Full Screen','ultimate-timeline') ?></span>
					</label>
				</div>
				<div class="form-check form-check-inline">
					<input <?php checked( $story_image_full_screen, false, true ); ?> class="form-check-input" type="radio" name="story_image_full_screen" id="wct_story_image_full_screen_0" value="0">
					<label class="form-check-label" for="wct_story_image_full_screen_0">
						<span> <?php esc_html_e('Small Screen','ultimate-timeline') ?></span>
					</label>
				</div>
			</span>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-xs-12 col-md-4 wct-setting-col">
			<span class="wct_setting_key">
				<?php esc_html_e( 'Display Story date', 'ultimate-timeline' ); ?>
			</span>
            </div>
            <div class="col-xs-12 col-md-8 wct-setting-col">
			<span class="wct_setting_value">
              		<div class="wct-setting-helper">
					<?php esc_html_e( 'Select Yes/No option to show/hide Date inside Story.', 'ultimate-timeline' ); ?>
				</div>

				<div class="form-check form-check-inline">
					<input <?php checked( $display_story_date, true, true ); ?> class="form-check-input" type="radio" name="display_story_date" id="wct_display_story_date_1" value="1">
					<label class="form-check-label" for="wct_display_story_date_1">
						<span class="dashicons dashicons-yes"></span>
					</label>
				</div>
				<div class="form-check form-check-inline">
					<input <?php checked( $display_story_date, false, true ); ?> class="form-check-input" type="radio" name="display_story_date" id="wct_display_story_date_0" value="0">
					<label class="form-check-label" for="wct_display_story_date_0">
						<span class="dashicons dashicons-no"></span>
					</label>
				</div>
			</span>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-xs-12 col-md-4 wct-setting-col">
			<span class="wct_setting_key">
				<?php esc_html_e( 'Display Author name', 'ultimate-timeline' ); ?>
			</span>
            </div>
            <div class="col-xs-12 col-md-8 wct-setting-col">
			<span class="wct_setting_value">
              		<div class="wct-setting-helper">
					<?php esc_html_e( 'Select Yes/No option to show/hide Date inside Story.', 'ultimate-timeline' ); ?>
				</div>

				<div class="form-check form-check-inline">
					<input <?php checked( $display_author_name, true, true ); ?> class="form-check-input" type="radio" name="display_author_name" id="wct_display_author_name_1" value="1">
					<label class="form-check-label" for="wct_display_author_name_1">
						<span class="dashicons dashicons-yes"></span>
					</label>
				</div>
				<div class="form-check form-check-inline">
					<input <?php checked( $display_author_name, false, true ); ?> class="form-check-input" type="radio" name="display_author_name" id="wct_display_author_name_0" value="0">
					<label class="form-check-label" for="wct_display_author_name_0">
						<span class="dashicons dashicons-no"></span>
					</label>
				</div>
			</span>
            </div>
        </div>
    </div>

    <div class="wct-timeline-setting mt-4">
        <div class="row">
            <div class="col-xs-12 col-md-4 wct-setting-col">
				<span class="wct_setting_key">
					<?php esc_html_e( 'Story Title BG Color', 'ultimate-timeline' ); ?>
				</span>
            </div>
            <div class="col-xs-12 col-md-8 wct-setting-col">
			<span class="wct_setting_value">
				<div class="form-group">
                        		<div class="wct-setting-helper mb-1"><?php esc_html_e( 'Choose color for your Story.', 'ultimate-timeline' ); ?></div>
                            	<input name="story_color" type="text" class="color-picker" id="wct_story_color" value="<?php echo esc_attr( $story_color ); ?>">
				</div>
			</span>
            </div>
            <div class="col-xs-12 col-md-4 wct-setting-col">
			<span class="wct_setting_key">
				<?php esc_html_e( 'Story Title Color', 'ultimate-timeline' ); ?>
			</span>
            </div>
            <div class="col-xs-12 col-md-8 wct-setting-col">
			<span class="wct_setting_value">
				<div class="form-group">
                     		<div class="wct-setting-helper mb-1"><?php esc_html_e( 'Choose color for your Story.', 'ultimate-timeline' ); ?></div>
                            	<input name="story_title_color" type="text" class="color-picker" id="wct_story_title_color" value="<?php echo esc_attr( $story_title_color ); ?>">
				</div>
			</span>
            </div>
            <div class="col-xs-12 col-md-4 wct-setting-col">
			<span class="wct_setting_key">
				<?php esc_html_e( 'Story Date Color', 'ultimate-timeline' ); ?>
			</span>
            </div>
            <div class="col-xs-12 col-md-8 wct-setting-col">
			<span class="wct_setting_value">
				<div class="form-group">
                     		<div class="wct-setting-helper mb-1"><?php esc_html_e( 'Choose color for your Story.', 'ultimate-timeline' ); ?></div>
                            	<input name="story_date_color" type="text" class="color-picker" id="wct_story_date_color" value="<?php echo esc_attr( $story_date_color ); ?>">
				</div>
			</span>
            </div>
            <div class="col-xs-12 col-md-4 wct-setting-col">
			<span class="wct_setting_key">
				<?php esc_html_e( 'Story Paregraph color', 'ultimate-timeline' ); ?>
			</span>
            </div>
            <div class="col-xs-12 col-md-8 wct-setting-col">
			<span class="wct_setting_value">
				<div class="form-group">
                     		<div class="wct-setting-helper mb-1"><?php esc_html_e( 'Choose color for your Story.', 'ultimate-timeline' ); ?></div>
                            	<input name="story_paragraph_color" type="text" class="color-picker" id="wct_story_paragraph_color" value="<?php echo esc_attr( $story_paragraph_color ); ?>">
				</div>
			</span>
            </div>
            <div class="col-xs-12 col-md-4 wct-setting-col">
			<span class="wct_setting_key">
				<?php esc_html_e( 'Story Paregraph background color', 'ultimate-timeline' ); ?>
			</span>
            </div>
            <div class="col-xs-12 col-md-8 wct-setting-col">
			<span class="wct_setting_value">
				<div class="form-group">
                     		<div class="wct-setting-helper mb-1"><?php esc_html_e( 'Choose color for your Story.', 'ultimate-timeline' ); ?></div>
                            	<input name="story_paragraph_bg_color" type="text" class="color-picker" id="wct_story_paragraph_bg_color" value="<?php echo esc_attr( $story_paragraph_bg_color ); ?>">
				</div>
			</span>
            </div>
        </div>
	 
        <div class="row">
            <div class="col-xs-12 col-md-4 wct-setting-col">
				<span class="wct_setting_key">
					<?php esc_html_e( 'Story Date', 'ultimate-timeline' ); ?>
				</span>
            </div>
            <div class="col-xs-12 col-md-8 wct-setting-col">
				<span class="wct_setting_value">
					<div class="form-group">
                        <div class="wct-setting-helper mb-1">
						    <?php esc_html_e( 'Please select story Story Date / Year / Time using datepicker only. Date Format( mm/dd/yy hh:mm )', 'ultimate-timeline' ); ?>
					    </div>
                        <input type="text" name="wct_story_date" class="form-control col-md-12" id="wct_story_date" value="<?php echo esc_attr( $story_date ); ?>">
					</div>

				</span>
            </div>
        </div>
    </div>

    <a href="#" class="wtc-smooth-up" title="<?php esc_html_e( 'Back to top', 'ultimate-timeline' ); ?>"></a>
</div>