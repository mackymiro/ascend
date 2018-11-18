<?php

add_theme_support('post-thumbnails');


add_filter( 'the_content', 'nl2br' );
add_filter( 'the_excerpt', 'nl2br' );

function remove_empty_p( $content ) {
    $content = force_balance_tags( $content );
    $content = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content );
    $content = preg_replace( '~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $content );
    return $content;
}
add_filter('the_content', 'remove_empty_p', 20, 1); 

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );


add_action( 'add_meta_boxes', 'cd_meta_box_add' );
add_action( 'save_post', 'cd_meta_box_save' );


function cd_meta_box_add(){
    add_meta_box( 'my-meta-box-id', 'My Meta Box', 'cd_meta_box_cb' ,'post', 'normal', 'high' );
}


function cd_meta_box_cb($post){
	global $post;
    $values = get_post_custom( $post->ID );
	
	wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
	
	$text = isset( $values['my_meta_box_text'] ) ? $values['my_meta_box_text'] : '';
	$room = isset( $values['my_meta_box_room_price'] ) ? $values['my_meta_box_room_price'] : '';
	
	echo "<label for='my_meta_box_text'><strong>Position:</strong> </label>";
    echo "<input type='text' name='my_meta_box_text' id='my_meta_box_text' value='$text[0]' />";
	echo "<br>";
	

}


function cd_meta_box_save( $post_id ){
	// Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
     
    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
     
    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;
     
    // now we can actually save the data
    $allowed = array( 
        'a' => array( // on allow a tags
            'href' => array() // and those anchors can only have href attribute
        )
    );
     
    // Make sure your data is set before trying to save it
    if(isset($_POST['my_meta_box_text']))
		update_post_meta( $post_id, 'my_meta_box_text', wp_kses( $_POST['my_meta_box_text'], $allowed ) );
	
}


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );