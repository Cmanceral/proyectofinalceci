<?php
/*
Plugin Name: Replace Featured Image with Video
Plugin URI: http://www.purpleturtle.pro
Description: Replace Featured Image with Video is a simple plugin to replace the featured image in your wordpress post or page with a video. Supports Youtube, Dailymotion, Vimeo and many other sites that provide embedd code.. just don't forget to edit the embedd code to the size of your featured image. This plugin will override any existing featured image so removal or deletion is not necessary.
 Version: 1.6
 Author: Purple Turtle Productions
 Author URI: http://www.w3bdesign.ca/
*/


if( WP_ADMIN )
{
	add_action( 'save_post',  'save_related_video_item' );
	add_action( 'admin_menu', 'add_fv_box_fields' );
}

function add_fv_box_fields() {
    add_meta_box( 'docs_list', __( 'Featured Video', 'related-video' ), 'admin_fv_box_html', 'page', 'side' );
}


function admin_fv_box_html()
{
    global $post;

    $rel_video = get_post_meta( $post->ID, '_related-video', true );
?>
    <div><p>Enter the video embed code:</p>
    <textarea name="rel_video" class="widefat" style="height:220px;"><?php echo $rel_video; ?></textarea>
    <input type="hidden" name="docs_check_nonce" id="docs_check_nonce" value="<?php echo wp_create_nonce( plugin_basename(__FILE__) ); ?>" />
    </div>
<?php
}


function save_related_video_item(){

    global $post;

	if( $post_id==null )
	{
		$post_id = $post->ID;
	}

        // security check, return the post id if access denied
        if ( !wp_verify_nonce( $_POST['docs_check_nonce'], plugin_basename(__FILE__) )) {
           return $post_id;
	}

	// return post id and bypass autosaves as well
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
		return $post_id;
	}

	// checking the current user permissions ....
	if ( $_POST['post_type'] == 'page' ) {
		if ( !current_user_can( 'edit_page', $post_id ) )
			return $post_id;
	} else {
		if ( !current_user_can( 'edit_post', $post_id ) )
			return $post_id;
	}

	// So we passed everything ...

        if ( isset($_POST['rel_video']) ) {
            // clean all doc meta, we are going to add all current ones again and the new ones ...
	    delete_post_meta($post_id, '_related-video');

	    $rel_video = $_POST['rel_video'];
	    add_post_meta( $post_id, '_related-video', $rel_video );
        }
	return;
}



?>