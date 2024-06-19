<?php

$image = get_field('image');
$subtitle = get_field('sub_title');
$title = get_field('title');
$username = get_field('user_name');
$date = get_field('date');

echo '<div class="marathone-item">
        <div class="container">';
		if( !empty( $image ) ) {
		    echo '<div class="row-cl"><img src="' . $image . '"  class="marathone-img" /></div>';
		} 
		echo '<div class="row-cln">';
		if( !empty( $subtitle ) ) {
		    echo '<h6 class="subtitle">' . esc_html($subtitle) . '</h6>';
		}
		if( !empty( $title ) ) {
		    echo '<h3 class="title">' . esc_html($title) . '</h3>';
		}
		if( !empty($username) || !empty($date) ) {
		    echo '<ul class="date-time">';
		    if( !empty($username) ) {
		        echo '<li>' . esc_html($username) . '</li>';
		    }
		    if( !empty($date) ) {
		        echo '<li>' . esc_html($date) . '</li>';
		    }
		    echo '</ul>';
		}
		echo '</div>';
		echo '</div>';
	echo '</div>';

?>
