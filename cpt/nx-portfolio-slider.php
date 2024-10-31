<?php

  function nx_portfolio_slider() {
   
    $labels = array(
      'name'               => _x( 'Sliders', 'post type general name' ),
      'singular_name'      => _x( 'Slider', 'post type singular name' ),
      'add_new'            => _x( 'Add New', 'book' ),
      'add_new_item'       => __( 'Add New Slider' ),
      'edit_item'          => __( 'Edit Slider' ),
      'new_item'           => __( 'New Slider' ),
      'all_items'          => __( 'All Slider' ),
      'view_item'          => __( 'View Slider' ),
      'search_items'       => __( 'Search Slider' ),
      'not_found'          => __( 'No Sliders found' ),
      'not_found_in_trash' => __( 'No Sliders found in the Trash' ), 
      'parent_item_colon'  => true,
      'menu_name'          =>  'NX Portfolio Slider',
      
    );
    
    $menu_icon = plugins_url( 'icons/Icon.gif', __FILE__ );

    $args = array(
      'labels'        => $labels,
      'description'   => 'Holds our products and product specific data',
      'public'        => true,
      'menu_position' => 5,
      'supports'      => array( 'title', 'editor', 'thumbnail', ),
      'taxonomies' => array( 'category'),
      'has_archive'   => true,
      'menu_icon'     => $menu_icon,
    );

    register_post_type( 'nx_portfolio_slider', $args ); 
  }
  add_action( 'init', 'nx_portfolio_slider' );

 

  add_action( 'add_meta_boxes', 'nx_portfolio_slider_meta_box' );
  function nx_portfolio_slider_meta_box() {

      add_meta_box( 
          'nx_portfolio_slider_type',
          __( 'Portfolio Type', 'myplugin_textdomain' ),
          'portfolio_meta_box_cb',
          'nx_portfolio_slider',
          'side',
          'high'
      );

  }

  function portfolio_meta_box_cb( $post ) {
    
    wp_nonce_field( plugin_basename( __FILE__ ), 'portfolio_meta_box_cb_nonce' );
      $portfolio_type = get_post_meta( $post->ID, 'portfolio_type', true )
    ?>
      <label for="portfolio_type"></label>
      <input type="text" id="portfolio_type" value="<?php echo esc_attr($portfolio_type); ?>" name="portfolio_type" placeholder="enter a portfolio type" />
    <?php
   
  }

  add_action( 'save_post', 'nx_portfolio_slider_meta_box_save' );
  function nx_portfolio_slider_meta_box_save( $post_id ) {

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
    return;

    if ( !wp_verify_nonce( $_POST['portfolio_meta_box_cb_nonce'], plugin_basename( __FILE__ ) ) )
    return;

    if ( 'page' == $_POST['post_type'] ) {
      if ( !current_user_can( 'edit_page', $post_id ) )
      return;
    } else {
      if ( !current_user_can( 'edit_post', $post_id ) )
      return;
    }
    $portfolio_type = sanitize_text_field($_POST['portfolio_type']);
    update_post_meta( $post_id, 'portfolio_type', $portfolio_type );
  }