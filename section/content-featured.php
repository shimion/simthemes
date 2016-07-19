
<?php
$featured_title = get_post_meta($post->ID, 'featured_title', true);
$featured_text = get_post_meta($post->ID, 'featured_text', true);
$featured_height = get_post_meta($post->ID, 'featured_height', true);
$featured_title_color = get_post_meta($post->ID, 'featured_title_color', true);
$featured_size = get_post_meta($post->ID, 'featured_size', true);

$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); $url = $thumb['0'];
$html .= '' . "\n";
$html .= '<div class="featured-image" style="background:url(' . $url . ') no-repeat center center fixed; height:' . $featured_height . ' ">' . "\n";
$html .= '	<div class="container">' . "\n";
$html .= '    	<div class="fitured-inner" style="height: ' . $featured_height . '">' . "\n";
$html .= '        	<div class="fitured-inner-inner">' . "\n";
               if($featured_title): 
$html .= '			   <h1 style="color:' . $featured_title_color . '; font-size:' . $featured_size . '">' . translate($featured_title, "SimThemes") . '</h1>' . "\n";
				 endif; 
                if($featured_text):
$html .= '				<p>' . translate($featured_text, "SimThemes") . '</p>' . "\n";
				 endif;
$html .= '            </div>    ' . "\n";
                
$html .= '        </div>' . "\n";
$html .= '    </div>' . "\n";
$html .= '</div>' . "\n";

echo apply_filters('filter_featured', $html);

