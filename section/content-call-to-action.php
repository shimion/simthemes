<?php  
			$call_text = get_post_meta($post->ID, 'call_text', true);
			$call_button = get_post_meta($post->ID, 'call_button', true);
			$call_button_icon = get_post_meta($post->ID, 'call_button_icon', true);
			$call_button_text = get_post_meta($post->ID, 'call_button_text', true);
			$call_button = get_post_meta($post->ID, 'call_button', true);
			$background = get_post_meta($post->ID, 'call_bg', true);
			if ( !empty( $background ) ) {
			$background_color       = ( $background['background-color'] != '' ) ? $background['background-color'] . ' ' : '';
			$background_image       = ( $background['background-image'] != '' ) ? 'url('.$background['background-image'].') ' : '';
			$background_repeat      = ( $background['background-repeat'] != '' ) ? $background['background-repeat']. ' ' : '';
			$background_positon     = ( $background['background-position'] != '' ) ? $background['background-position']. ' ' : '';
			$background_attachment  = ( $background['background-attachment'] != '' ) ? $background['background-attachment']. ' ' : '';
			$background_size        = ( $background['background-size'] != '' ) ? 'background-size: '. $background['background-size']. ';' : '';
			}
			$call_button_color = get_post_meta($post->ID, 'call_button_color', true);
			$call_text_color = get_post_meta($post->ID, 'call_text_color', true);
			$html = '' . "\n";
			$html .= '<section class="gray-bg cta" style="background: '.$background_color.$background_image.$background_repeat.$background_attachment.$background_positon.';'."\n". $background_size .'">' . "\n";
			$html .= '<div class="container">' . "\n";
                
			$html .= '<div class="row">' . "\n";
			$html .= '<div class="col-md-8 cta-message">' . "\n";
            if($call_text): 
			$html .= '<p style="color:' . $call_text_color . '">' . translate($call_text, "SimThemes") . '</p>' . "\n";
			endif;
			$html .= '</div>' . "\n";
			$html .= '<div class="col-md-4 cta-button">' . "\n";
			if($call_button):
			$html .= '<p class="text-center"><a class="btn btn-simthemes" style="background-color:' . $call_button_color . '" href="' . translate($call_button,  "SimThemes") . '" target="_blank"><i class="fa ' . $call_button_icon . '"></i>' . translate($call_button_text, "SimThemes") . '</a>' . "\n";
		    endif;
			$html .= '</p>' ."\n";
			$html .= '</div>' ."\n";
			$html .= '</div><!--End row-->' ."\n";
			$html .= '</div><!--End container -->' ."\n";
			$html .= '</section>' ."\n";
			$html = apply_filters('filter_callto_action', $html );
			echo $html;