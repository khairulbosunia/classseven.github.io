<?php 
/*
plugin Name:ShortCode

*/
function stock_alert_shortcode($atts, $content = null){
	
	extract(shortcode_atts(
	array(
	'city' => ''
	),
	$atts
	));
	
	if($city == 'dhaka'){
		$message = '' .esc_html($city).'Dhaka is the big city in bangladesh';
	}  elseif($city = 'sylhet'){
		$message = ''.esc_html($city) .'is the beautifull city';
	}  elseif($city = 'rongpur'){
		$message = ''.esc_html($city) .'is the my city';
	}  elseif($city = 'kurigram'){
		$message = ''.esc_html($city) .'is the my home city';
	}
	else{
		$message ='you do not added city';
	}
	return $message;
	
}

add_shortcode('alert', 'stock_alert_shortcode');













function stock_alert_shcode($atts, $content = null){
	
	extract(shortcode_atts(
	array(
	'id' => '',
	'size' => 'large'
	),
	$atts
	));
	
	$img_array = wp_get_attachment_image_src($id, $size);
	
	
	return '<img src="'.$img_array[0].'"/>';
	
}

add_shortcode('image', 'stock_alert_shcode');











