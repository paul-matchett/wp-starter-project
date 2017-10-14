<?php

// queries the posts table to return post id for image url, 
// then fetches thumbnail from postmeta
function get_attachment_image_src_from_image_url($image_url, $image_size)
{
	global $wpdb;
	$query = "SELECT id, guid FROM  wp_posts where guid = '".$image_url."' limit 0, 1";
	$myrows = $wpdb->get_results($query);
	
	$img = wp_get_attachment_image_src($myrows[0]->id, $image_size);
	
	return $img[0];
}

// Banner Image
function get_banner_url($image_url)
{
	return get_attachment_image_src_from_image_url($image_url, 'pageBanner');
}

// Treatment Before / After Image
function get_treatment_image_size($image_url)
{
	return get_attachment_image_src_from_image_url($image_url, 'treatmentImage');
}

// Treatment Before / After Image
function get_signature_image_size($image_url)
{
	return get_attachment_image_src_from_image_url($image_url, 'signature');
}

// Member Image 
function get_member_image_size($image_url)
{
	return get_attachment_image_src_from_image_url($image_url, 'member');
}

function get_testimonial_image_size($image_url)
{
	return get_attachment_image_src_from_image_url($image_url, 'testimonial');
}

function get_post_list_url($image_url)
{
	return get_attachment_image_src_from_image_url($image_url, 'postList');
}





// gets the associated string from the image inside the media library
function get_string_from_image_url($image_url, $string)
{
	global $wpdb;
	$query = "SELECT $string FROM  wp_posts where guid = '".$image_url."' limit 0, 1";
	$myrows = $wpdb->get_results($query);
	
	return ($myrows[0]->$string);
}
function get_title_from_image_url($image_url)
{
	return get_string_from_image_url($image_url, 'post_title');
}
function get_description_from_image_url($image_url)
{
	return get_string_from_image_url($image_url, 'post_content');
}
function get_caption_from_image_url($image_url)
{	
	return get_string_from_image_url($image_url, 'post_excerpt');
}



?>