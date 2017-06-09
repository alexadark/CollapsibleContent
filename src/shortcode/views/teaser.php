<div class="teaser--container">
    <div class="teaser--question"
         data-show-icon="<?php echo $attributes( [ 'show_icon' ] ); ?>"
         data-hide-icon="<?php echo $attributes( [ 'hide_icon' ] ); ?>">
        <span class="<?php echo $attributes( [ 'show_icon' ] ); ?>"
              aria-hidden="true"></span>
        <span class="screen-reader-text">Click to reveal the answer</span><?php esc_html_e(
			$attribues['visible_message'] );
		?></div>
    <div class="teaser--answer"
         style="display-none"><?php echo $hidden_content; ?></div>
</div>