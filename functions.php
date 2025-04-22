<?php
$curious_includes = [
  'lib/assets.php',  // Scripts and stylesheets
  'lib/extras.php',  // Custom functions
  'lib/setup.php',   // Theme setup
  'lib/titles.php',  // Page titles
  'lib/wrapper.php'  // Theme wrapper class
];

add_filter('wpcf7_autop_or_not', '__return_false');

// woocommerce support

function mytheme_add_woocommerce_support()
{
add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

// Woocommerce supoort

// ----- add a confirm password fields match on the registration page
function wc_register_form_password_repeat() {
?>

<div class="form-group mt-3  px-3 px-lg-0">
  <label for="reg_password2" class="mb-2"><?php _e( 'Confirm password', 'woocommerce' ); ?> <span
      class="required">*</span></label>

  <input type="password" class="form-control w-100 text-primary transition font-light border-0"
    placeholder="Please Enter…" name="password2" id="reg_password2"
    value="<?php if ( ! empty( $_POST['password2'] ) ) echo esc_attr( $_POST['password2'] ); ?>">
</div>
<?php

}
add_action( 'woocommerce_register_form', 'wc_register_form_password_repeat' );

// ----- add a confirm password fields match on the registration page

// confirm password check

add_action( 'woocommerce_checkout_process', 'confirm_password_checkout_validation' );
function confirm_password_checkout_validation() {
if ( ! is_user_logged_in() && ( WC()->checkout->must_create_account || ! empty( $_POST['createaccount'] ) ) ) {
if ( strcmp( $_POST['password2'], $_POST['password2'] ) !== 0 )
wc_add_notice( __( "Passwords doesn’t match.", "woocommerce" ), 'error' );
}
}
// confirm password check

 // ----- validate password match on the registration page
 function registration_errors_validation($reg_errors, $sanitized_user_login, $user_email) {
 global $woocommerce;
 extract( $_POST );
 if ( strcmp( $password, $password2 ) !== 0 ) {
 return new WP_Error( 'registration-error', __( 'Passwords do not match.', 'woocommerce' ) );
 }
 return $reg_errors;
 }
 add_filter('woocommerce_registration_errors', 'registration_errors_validation', 10,3);

foreach ($curious_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


// function cc_mime_types($mimes) {
//     $mimes['svg'] = 'image/svg+xml';
//     return $mimes;
// }
// add_filter('upload_mimes', 'cc_mime_types');


if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
  'page_title' => 'Theme General Settings',
  'menu_title' => 'Theme Settings',
  'menu_slug' => 'theme-general-settings',
  'capability' => 'edit_posts',
  'redirect' => false
  ));

  acf_add_options_sub_page(array(
    'page_title' => 'Theme Menu Settings',
    'menu_title' => 'Submenu',
    'parent_slug' => 'theme-general-settings',
    ));
    
    }


    //----------------------------------------

function clean($string) {
  $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
  $string = str_replace('&', '-', $string); // Replaces all spaces with hyphens.
  $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
  $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

  return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
}

//-----------------------------------------



// case_study Post ======================================================

add_action( 'init', 'create_case_studies_post_type' );
function create_case_studies_post_type(){

$supports = array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail', 'page-attributes');
$item_name = 'case_studies_item';
$plural_name = 'Case Studies';
$singular_name = 'Case Study';
// $icon = '/wp-case_study/themes/aps/img/attache-case.png';

register_post_type( $item_name,
array(
'labels' => array(
'name' => __( ucfirst($plural_name)),
'singular_name' => __( ucfirst($singular_name) ),
'add_new' => 'Add new '.$singular_name,
'add_new_item' => 'Add new '.$singular_name,
'edit_item' => ' Edit'.$singular_name,
'new_item' => 'New '.$singular_name,
'all_items' => 'All '.$plural_name,
'view_item' => 'View '.$plural_name,
'search_items' => 'Search '.$plural_name,
),
'public' => true,
'has_archive' => true,

'supports' => $supports,
'rewrite' => array(
    'slug' => 'case-study'
)
)
);
}

function my_categories_case_studies() {
$plural_name = 'Case Studies';
$singular_name = 'Case Study';

$labels = array(
'name' => _x( $singular_name, 'taxonomy general name' ),
'singular_name' => _x( $singular_name.' Category', 'taxonomy singular name' ),
'search_items' => __( 'Search ' . $singular_name . ' Categories' ),
'all_items' => __( 'All ' . $singular_name . ' Categories' ),
'parent_item' => __( 'Parent ' . $singular_name . ' Category' ),
'parent_item_colon' => __( 'Parent ' . $singular_name . ' Category:' ),
'edit_item' => __( 'Edit ' . $singular_name . ' Category' ),
'update_item' => __( 'Update ' . $singular_name . ' Category' ),
'add_new_item' => __( 'Add New ' . $singular_name . ' Category' ),
'new_item_name' => __( 'New ' . $singular_name . ' Category' ),
'menu_name' => __( '' . $singular_name . ' Categories' ),
);
$args = array(
'labels' => $labels,
'hierarchical' => true,
);
register_taxonomy( 'case_studies_category', 'case_studies_item', $args );
}
add_action( 'init', 'my_categories_case_studies', 0 );


// function my_tags_case_studies() {
// $plural_name = 'Case Studies';
// $singular_name = 'Case Study';

// $labels = array(
// 'name' => _x( $singular_name, 'taxonomy general name' ),
// 'singular_name' => _x( $singular_name.' Tag', 'taxonomy singular name' ),
// 'search_items' => __( 'Search ' . $singular_name . ' Tags' ),
// 'all_items' => __( 'All ' . $singular_name . ' Tags' ),
// 'parent_item' => __( 'Parent ' . $singular_name . ' Tag' ),
// 'parent_item_colon' => __( 'Parent ' . $singular_name . ' Tag:' ),
// 'edit_item' => __( 'Edit ' . $singular_name . ' Tag' ),
// 'update_item' => __( 'Update ' . $singular_name . ' Tag' ),
// 'add_new_item' => __( 'Add New ' . $singular_name . ' Tag' ),
// 'new_item_name' => __( 'New ' . $singular_name . ' Tag' ),
// 'menu_name' => __( '' . $singular_name . ' Tags' ),
// );
// $args = array(
// 'labels' => $labels,
// 'hierarchical' => true,
// );
// register_taxonomy( 'case_studies_tag', 'case_studies_item', $args );
// }
// add_action( 'init', 'my_tags_case_studies', 0 );

// case_study Post ===========================================================================


// blog_post Post ======================================================

add_action( 'init', 'create_blog_posts_post_type' );
function create_blog_posts_post_type(){

$supports = array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail', 'page-attributes');
$item_name = 'blog_posts_item';
$plural_name = 'Blog Posts';
$singular_name = 'Blog Post';
// $icon = '/wp-blog_post/themes/aps/img/attache-case.png';

register_post_type( $item_name,
array(
'labels' => array(
'name' => __( ucfirst($plural_name)),
'singular_name' => __( ucfirst($singular_name) ),
'add_new' => 'Add new '.$singular_name,
'add_new_item' => 'Add new '.$singular_name,
'edit_item' => ' Edit'.$singular_name,
'new_item' => 'New '.$singular_name,
'all_items' => 'All '.$plural_name,
'view_item' => 'View '.$plural_name,
'search_items' => 'Search '.$plural_name,
),
'public' => true,
'has_archive' => true,

'supports' => $supports,
'rewrite' => array(
    'slug' => 'blog'
)
)
);
}

function my_categories_blog_posts() {
$plural_name = 'Blog Posts';
$singular_name = 'Blog Post';

$labels = array(
'name' => _x( $singular_name, 'taxonomy general name' ),
'singular_name' => _x( $singular_name.' Category', 'taxonomy singular name' ),
'search_items' => __( 'Search ' . $singular_name . ' Categories' ),
'all_items' => __( 'All ' . $singular_name . ' Categories' ),
'parent_item' => __( 'Parent ' . $singular_name . ' Category' ),
'parent_item_colon' => __( 'Parent ' . $singular_name . ' Category:' ),
'edit_item' => __( 'Edit ' . $singular_name . ' Category' ),
'update_item' => __( 'Update ' . $singular_name . ' Category' ),
'add_new_item' => __( 'Add New ' . $singular_name . ' Category' ),
'new_item_name' => __( 'New ' . $singular_name . ' Category' ),
'menu_name' => __( '' . $singular_name . ' Categories' ),
);
$args = array(
'labels' => $labels,
'hierarchical' => true,
);
register_taxonomy( 'blog_posts_category', 'blog_posts_item', $args );
}
add_action( 'init', 'my_categories_blog_posts', 0 );


// function my_tags_blog_posts() {
// $plural_name = 'Blog Posts';
// $singular_name = 'Blog Post';

// $labels = array(
// 'name' => _x( $singular_name, 'taxonomy general name' ),
// 'singular_name' => _x( $singular_name.' Tag', 'taxonomy singular name' ),
// 'search_items' => __( 'Search ' . $singular_name . ' Tags' ),
// 'all_items' => __( 'All ' . $singular_name . ' Tags' ),
// 'parent_item' => __( 'Parent ' . $singular_name . ' Tag' ),
// 'parent_item_colon' => __( 'Parent ' . $singular_name . ' Tag:' ),
// 'edit_item' => __( 'Edit ' . $singular_name . ' Tag' ),
// 'update_item' => __( 'Update ' . $singular_name . ' Tag' ),
// 'add_new_item' => __( 'Add New ' . $singular_name . ' Tag' ),
// 'new_item_name' => __( 'New ' . $singular_name . ' Tag' ),
// 'menu_name' => __( '' . $singular_name . ' Tags' ),
// );
// $args = array(
// 'labels' => $labels,
// 'hierarchical' => true,
// );
// register_taxonomy( 'blog_posts_post_tag', 'blog_posts_post_item', $args );
// }
// add_action( 'init', 'my_tags_blog_posts', 0 );

// blog_post Post ===========================================================================



// question Post ======================================================

add_action( 'init', 'create_questions_post_type' );
function create_questions_post_type(){

$supports = array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail', 'page-attributes');
$item_name = 'questions_post_item';
$plural_name = 'Questions';
$singular_name = 'Question';
// $icon = '/wp-question/themes/aps/img/attache-case.png';

register_post_type( $item_name,
array(
'labels' => array(
'name' => __( ucfirst($plural_name)),
'singular_name' => __( ucfirst($singular_name) ),
'add_new' => 'Add new '.$singular_name,
'add_new_item' => 'Add new '.$singular_name,
'edit_item' => ' Edit'.$singular_name,
'new_item' => 'New '.$singular_name,
'all_items' => 'All '.$plural_name,
'view_item' => 'View '.$plural_name,
'search_items' => 'Search '.$plural_name,
),
'public' => true,
'has_archive' => true,

'supports' => $supports,
'rewrite' => array(
    'slug' => 'faq'
)
)
);
}

function my_categories_questions() {
$plural_name = 'Questions';
$singular_name = 'Question';

$labels = array(
'name' => _x( $singular_name, 'taxonomy general name' ),
'singular_name' => _x( $singular_name.' Category', 'taxonomy singular name' ),
'search_items' => __( 'Search ' . $singular_name . ' Categories' ),
'all_items' => __( 'All ' . $singular_name . ' Categories' ),
'parent_item' => __( 'Parent ' . $singular_name . ' Category' ),
'parent_item_colon' => __( 'Parent ' . $singular_name . ' Category:' ),
'edit_item' => __( 'Edit ' . $singular_name . ' Category' ),
'update_item' => __( 'Update ' . $singular_name . ' Category' ),
'add_new_item' => __( 'Add New ' . $singular_name . ' Category' ),
'new_item_name' => __( 'New ' . $singular_name . ' Category' ),
'menu_name' => __( '' . $singular_name . ' Categories' ),
);
$args = array(
'labels' => $labels,
'hierarchical' => true,
);
register_taxonomy( 'questions_post_category', 'questions_post_item', $args );
}
add_action( 'init', 'my_categories_questions', 0 );

// question Post ===========================================================================

// finish Post ======================================================

add_action( 'init', 'create_finishes_post_type' );
function create_finishes_post_type(){

$supports = array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail', 'page-attributes');
$item_name = 'finishes_post_item';
$plural_name = 'Finishes';
$singular_name = 'Finish';
// $icon = '/wp-finish/themes/aps/img/attache-case.png';

register_post_type( $item_name,
array(
'labels' => array(
'name' => __( ucfirst($plural_name)),
'singular_name' => __( ucfirst($singular_name) ),
'add_new' => 'Add new '.$singular_name,
'add_new_item' => 'Add new '.$singular_name,
'edit_item' => ' Edit'.$singular_name,
'new_item' => 'New '.$singular_name,
'all_items' => 'All '.$plural_name,
'view_item' => 'View '.$plural_name,
'search_items' => 'Search '.$plural_name,
),
'public' => true,
'has_archive' => true,

'supports' => $supports,
)
);
}

function my_categories_finishes() {
$plural_name = 'Finishes';
$singular_name = 'Finish';

$labels = array(
'name' => _x( $singular_name, 'taxonomy general name' ),
'singular_name' => _x( $singular_name.' Category', 'taxonomy singular name' ),
'search_items' => __( 'Search ' . $singular_name . ' Categories' ),
'all_items' => __( 'All ' . $singular_name . ' Categories' ),
'parent_item' => __( 'Parent ' . $singular_name . ' Category' ),
'parent_item_colon' => __( 'Parent ' . $singular_name . ' Category:' ),
'edit_item' => __( 'Edit ' . $singular_name . ' Category' ),
'update_item' => __( 'Update ' . $singular_name . ' Category' ),
'add_new_item' => __( 'Add New ' . $singular_name . ' Category' ),
'new_item_name' => __( 'New ' . $singular_name . ' Category' ),
'menu_name' => __( '' . $singular_name . ' Categories' ),
);
$args = array(
'labels' => $labels,
'hierarchical' => true,
);
register_taxonomy( 'finishes_post_category', 'finishes_post_item', $args );
}
add_action( 'init', 'my_categories_finishes', 0 );

// finish Post ===========================================================================


add_filter('woocommerce_enqueue_styles', 'jk_dequeue_styles');
function jk_dequeue_styles($enqueue_styles)
{
  unset($enqueue_styles['woocommerce-general']);  // Remove the gloss
  unset($enqueue_styles['woocommerce-layout']);    // Remove the layout
  unset($enqueue_styles['woocommerce-smallscreen']);  // Remove the smallscreen optimisation
  return $enqueue_styles;
}



add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {
  

        $fields['billing']['billing_email']['placeholder'] = 'Email address...';
        $fields['billing']['billing_email']['priority'] = 4;
        
        $fields['billing']['billing_first_name']['placeholder'] = 'First name...';
        $fields['billing']['billing_first_name']['class'][0] = 'half-field pe-lg-2';
        
        $fields['billing']['billing_last_name']['placeholder'] = 'Last name...';
        $fields['billing']['billing_last_name']['class'][0] = 'half-field ps-lg-2';

        $fields['billing']['billing_company']['placeholder'] = 'Company Name (optional)...'; 

        $fields['billing']['billing_address_1']['placeholder'] = 'House Number...';
        $fields['billing']['billing_address_1']['class'][0] = 'half-field pe-lg-2';         
        
        $fields['billing']['billing_address_2']['class'][0] = 'half-field ps-lg-2';

        $fields['billing']['billing_phone']['class'][0] = 'half-field ps-lg-2';

        $fields['billing']['billing_postcode']['placeholder'] = 'Postcode...';
        $fields['billing']['billing_postcode']['class'][0] = 'half-field pe-lg-2';
        $fields['billing']['billing_postcode']['priority'] = 55;

        $fields['billing']['billing_city']['placeholder'] = 'Town/City...';
        $fields['billing']['billing_city']['priority'] = 60;

        $fields['billing']['billing_phone']['placeholder'] = 'Phone number...';

         






        $fields['shipping']['shipping_email']['placeholder'] = 'Email address...';
        $fields['shipping']['shipping_email']['class'][0] = 'field-border-bottom';
        $fields['shipping']['shipping_email']['priority'] = 4;
        $fields['shipping']['shipping_email']['required'] = true;
        
        $fields['shipping']['shipping_first_name']['placeholder'] = 'First name...';
        $fields['shipping']['shipping_first_name']['class'][0] = 'half-field pe-lg-2';
        
        $fields['shipping']['shipping_last_name']['placeholder'] = 'Last name...';
        $fields['shipping']['shipping_last_name']['class'][0] = 'half-field ps-lg-2';

        $fields['shipping']['shipping_company']['placeholder'] = 'Company Name (optional)...'; 

        $fields['shipping']['shipping_address_1']['placeholder'] = 'House Number...';
        $fields['shipping']['shipping_address_1']['class'][0] = 'half-field pe-lg-2';         
        
        $fields['shipping']['shipping_address_2']['class'][0] = 'half-field ps-lg-2';

        $fields['shipping']['shipping_phone']['class'][0] = 'half-field pe-lg-2';

        $fields['shipping']['shipping_postcode']['placeholder'] = 'Postcode...';
        $fields['shipping']['shipping_postcode']['class'][0] = 'half-field ps-lg-2';
        $fields['shipping']['shipping_postcode']['priority'] = 55;

        $fields['shipping']['shipping_city']['placeholder'] = 'Town/City...';
        $fields['shipping']['shipping_city']['priority'] = 60;

        $fields['shipping']['shipping_phone']['placeholder'] = 'Phone number...';


        //  $fields['shipping']['shipping_email']['placeholder'] = 'Email address...';
        //  $fields['shipping']['shipping_first_name']['placeholder'] = 'First name...';
        //  $fields['shipping']['shipping_last_name']['placeholder'] = 'Last name...';
        //  $fields['shipping']['shipping_address_1']['placeholder'] = 'Street address...';
        //  $fields['shipping']['shipping_city']['placeholder'] = 'Town/City...';
        //  $fields['shipping']['shipping_postcode']['placeholder'] = 'Postcode...';
        //  $fields['shipping']['shipping_phone']['placeholder'] = 'Phone number...';


        //  unset($fields['billing']['billing_company']); 
         unset($fields['billing']['billing_state']); 
         unset($fields['shipping']['shipping_state']); 

    


     return $fields;
}


function wp_nav_menu_no_ul()
{
    $options = array(
        'echo' => false,
        'container' => false,
        'theme_location' =>  'header',
        'menu' => 'Header'
    );

    $menu = wp_nav_menu($options);
    echo preg_replace(array(
        '#^<ul[^>]*>#',
        '#</ul>$#'
    ), '', $menu);

}

function default_page_menu() {
   wp_list_pages('title_li=');
} 


function add_menu_link_class( $atts, $item, $args ) {
  if (property_exists($args, 'link_class')) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );


// duplicates function


add_filter( 'post_row_actions', 'rd_duplicate_post_link', 10, 2 );
// for "page" post type
add_filter( 'page_row_actions', 'rd_duplicate_post_link', 10, 2 );


function rd_duplicate_post_link( $actions, $post ) {

	if( ! current_user_can( 'edit_posts' ) ) {
		return $actions;
	}

	$url = wp_nonce_url(
		add_query_arg(
			array(
				'action' => 'rd_duplicate_post_as_draft',
				'post' => $post->ID,
			),
			'admin.php'
		),
		basename(__FILE__),
		'duplicate_nonce'
	);

	$actions[ 'duplicate' ] = '<a href="' . $url . '" title="Duplicate this item" rel="permalink">Duplicate</a>';

	return $actions;
}

/*
 * Function creates post duplicate as a draft and redirects then to the edit post screen
 */
add_action( 'admin_action_rd_duplicate_post_as_draft', 'rd_duplicate_post_as_draft' );

function rd_duplicate_post_as_draft(){

	// check if post ID has been provided and action
	if ( empty( $_GET[ 'post' ] ) ) {
		wp_die( 'No post to duplicate has been provided!' );
	}

	// Nonce verification
	if ( ! isset( $_GET[ 'duplicate_nonce' ] ) || ! wp_verify_nonce( $_GET[ 'duplicate_nonce' ], basename( __FILE__ ) ) ) {
		return;
	}

	// Get the original post id
	$post_id = absint( $_GET[ 'post' ] );

	// And all the original post data then
	$post = get_post( $post_id );

	/*
	 * if you don't want current user to be the new post author,
	 * then change next couple of lines to this: $new_post_author = $post->post_author;
	 */
	$current_user = wp_get_current_user();
	$new_post_author = $current_user->ID;

	// if post data exists (I am sure it is, but just in a case), create the post duplicate
	if ( $post ) {

		// new post data array
		$args = array(
			'comment_status' => $post->comment_status,
			'ping_status'    => $post->ping_status,
			'post_author'    => $new_post_author,
			'post_content'   => $post->post_content,
			'post_excerpt'   => $post->post_excerpt,
			'post_name'      => $post->post_name,
			'post_parent'    => $post->post_parent,
			'post_password'  => $post->post_password,
			'post_status'    => 'draft',
			'post_title'     => $post->post_title,
			'post_type'      => $post->post_type,
			'to_ping'        => $post->to_ping,
			'menu_order'     => $post->menu_order
		);

		// insert the post by wp_insert_post() function
		$new_post_id = wp_insert_post( $args );

		/*
		 * get all current post terms ad set them to the new post draft
		 */
		$taxonomies = get_object_taxonomies( get_post_type( $post ) ); // returns array of taxonomy names for post type, ex array("category", "post_tag");
		if( $taxonomies ) {
			foreach ( $taxonomies as $taxonomy ) {
				$post_terms = wp_get_object_terms( $post_id, $taxonomy, array( 'fields' => 'slugs' ) );
				wp_set_object_terms( $new_post_id, $post_terms, $taxonomy, false );
			}
		}

		// duplicate all post meta
		$post_meta = get_post_meta( $post_id );
		if( $post_meta ) {

			foreach ( $post_meta as $meta_key => $meta_values ) {

				if( '_wp_old_slug' == $meta_key ) { // do nothing for this meta key
					continue;
				}

				foreach ( $meta_values as $meta_value ) {
					add_post_meta( $new_post_id, $meta_key, $meta_value );
				}
			}
		}

		// finally, redirect to the edit post screen for the new draft
		// wp_safe_redirect(
		// 	add_query_arg(
		// 		array(
		// 			'action' => 'edit',
		// 			'post' => $new_post_id
		// 		),
		// 		admin_url( 'post.php' )
		// 	)
		// );
		// exit;
		// or we can redirect to all posts with a message
		wp_safe_redirect(
			add_query_arg(
				array(
					'post_type' => ( 'post' !== get_post_type( $post ) ? get_post_type( $post ) : false ),
					'saved' => 'post_duplication_created' // just a custom slug here
				),
				admin_url( 'edit.php' )
			)
		);
		exit;

	} else {
		wp_die( 'Post creation failed, could not find original post.' );
	}

}

/*
 * In case we decided to add admin notices
 */
add_action( 'admin_notices', 'rudr_duplication_admin_notice' );

function rudr_duplication_admin_notice() {

	// Get the current screen
	$screen = get_current_screen();

	if ( 'edit' !== $screen->base ) {
		return;
	}

    //Checks if settings updated
    if ( isset( $_GET[ 'saved' ] ) && 'post_duplication_created' == $_GET[ 'saved' ] ) {

		 echo '<div class="notice notice-success is-dismissible"><p>Post copy created.</p></div>';
		 
    }
}




// handlebars


add_action('wp_ajax_get_handlebars_ajax', 'gethandlebarsAJAX');
add_action('wp_ajax_nopriv_get_handlebars_ajax', 'gethandlebarsAJAX');

function gethandlebarsAJAX()
{
        global $wpdb, $post;
        //$offset = (int)$_POST['offset'];
        $cat = $_POST['cat'];
        $sort = $_POST['sort'];
        $loadMore = $_POST['loadMoreAmount'];

        if ($cat) {
            $tax_array[] = array(
            'taxonomy' => 'case_studies_category',
            'field' => 'id',
            'terms' => $cat,
            'operator' => 'IN',
            );
        }


        $args = array(
        'post_type' => 'case_studies_item',
        'posts_per_page' => $loadMore,
        'tax_query' => $tax_array,
        'order' => 'DESC',
        'orderby' => 'date',
        );



        $callback['handlebars'] = array();

        $the_query = new WP_Query($args);

        if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();

            $categories = get_the_terms( $post->id, 'case_studies_category' );

                $cats = '';
                foreach($categories as $category):
                    $cats .= $category->name.', ';
                endforeach;


                $callback['handlebars'][] = array(
                'title' => html_entity_decode(wp_trim_words(get_the_title(), 6, '...')),
                'image' => get_the_post_thumbnail_url(get_the_ID(), 'large'),
                'link' => get_the_permalink(),
                'description' => wp_trim_words(get_the_content(), 15, '...'),
                'ID' => get_the_ID(),
                'cats' => $cats,
                );
            endwhile;
        endif;


        echo json_encode($callback);

        wp_die();
}



// handlebars


add_action('wp_ajax_get_blog_ajax', 'getBlogAJAX');
add_action('wp_ajax_nopriv_get_blog_ajax', 'getBlogAJAX');

function getBlogAJAX() {
    global $wpdb, $post;

    // Retrieve AJAX posted variables
    $cat = $_POST['cat'];
    $sort = $_POST['sort'];
    $loadMore = $_POST['loadMoreAmount'];
    $offset = $_POST['offset'];

    // Taxonomy query array
    $tax_array = array();
    if ($cat) {
        $tax_array[] = array(
            'taxonomy' => 'blog_posts_category',
            'field'    => 'id',
            'terms'    => $cat,
            'operator' => 'IN',
        );
    }

    // WP_Query arguments
    $args = array(
        'post_type'      => 'blog_posts_item',
        'posts_per_page' => 6,
        'tax_query'      => $tax_array,
        'offset'         => $offset,
        'order'          => 'DESC',
        'orderby'        => 'date',
        'post_status' => 'publish',
    );

    // Initialize return array
    $callback['handlebars-blog'] = array();

    // Execute query
    $the_query = new WP_Query($args);

    // Check if posts are available
    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();

            // Retrieve categories for the post
            $categories = get_the_terms($post->id, 'blog_posts_category');
            $cats = '';
            foreach ($categories as $category) {
                $cats .= $category->name . ', ';
            }

            $image = get_template_directory_uri(  ) . '/assets/images/image-placeholder.jpg';

            if(has_post_thumbnail( $post->id )){
                $image = get_the_post_thumbnail_url(get_the_ID(), 'large');
            }

            // Construct data for each post
            $callback['handlebars-blog'][] = array(
                'title'       => html_entity_decode(wp_trim_words(get_the_title(), 3, '...')),
                'image'       => $image,
                'link'        => get_the_permalink(),
                'description' => wp_trim_words(get_the_content(), 15, '...'),
                'ID'          => get_the_ID(),
                'cats'        => rtrim($cats, ', '),
            );

        endwhile;
    endif;

    $callback['noMorePosts'] = false;

    if(count($callback['handlebars-blog']) < 6){
        $callback['noMorePosts'] = true;
    }

    // Output the JSON encoded data
    echo json_encode($callback);

    // Terminate AJAX execution
    wp_die();
}



function title_filter( $where, &$wp_query )
{
    global $wpdb;
    // 2. pull the custom query in here:
    if ( $search_term = $wp_query->get( 'search_prod_title' ) ) {
        $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( like_escape( $search_term ) ) . '%\'';
    }
    return $where;
}

// searchbox handlebars


add_action('wp_ajax_get_questions_ajax', 'getquestionsAJAX');
add_action('wp_ajax_nopriv_get_questions_ajax', 'getquestionsAJAX');

function getquestionsAJAX()
{
    global $wpdb, $post;
    //$offset = (int)$_POST['offset'];
    $cat = $_POST['cat'];
    $search = $_POST['search'];

        if ($cat) {
            $tax_array[] = array(
                'taxonomy' => 'questions_post_category',
                'field' => 'id',
                'terms' => $cat,
                'operator' => 'IN',
            );
        }

        

            $args = array(
                  'post_type' => 'questions_post_item',
                  'posts_per_page' => -1,
                  'tax_query' => $tax_array,
                  'orderby'   => 'title',
                  'order' => 'DESC',
              );    
              
              if ($search) {
                $args['search_prod_title'] = $search;
              }

              add_filter( 'posts_where', 'title_filter', 10, 2 );


    $callback['questions'] = array();

    //var_dump($args);

    $the_query = new WP_Query($args);


    // var_dump($the_query);


    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
          $callback['questions'][] = array(
              'title' => html_entity_decode(get_the_title()),
              'image' => get_the_post_thumbnail_url(get_the_ID(), 'large'),
              'link' => get_the_permalink(),
              'description' => get_the_content(),
              'ID' => get_the_ID(),
          );
        endwhile;
    endif;



    echo json_encode($callback);





    wp_die();
}

///////////////////////////////
// 2. VALIDATE FIELDS
  
add_filter( 'woocommerce_registration_errors', 'bbloomer_validate_name_fields', 10, 3 );
  
function bbloomer_validate_name_fields( $errors, $username, $email ) {
    if ( isset( $_POST['billing_first_name'] ) && empty( $_POST['billing_first_name'] ) ) {
        $errors->add( 'billing_first_name_error', __( '<strong>Error</strong>: First name is required!', 'woocommerce' ) );
    }
    if ( isset( $_POST['billing_last_name'] ) && empty( $_POST['billing_last_name'] ) ) {
        $errors->add( 'billing_last_name_error', __( '<strong>Error</strong>: Last name is required!.', 'woocommerce' ) );
    }
    return $errors;
}


add_action( 'woocommerce_created_customer', 'bbloomer_save_name_fields' );
  
function bbloomer_save_name_fields( $customer_id ) {
    if ( isset( $_POST['billing_first_name'] ) ) {
        update_user_meta( $customer_id, 'billing_first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
        update_user_meta( $customer_id, 'first_name', sanitize_text_field($_POST['billing_first_name']) );
    }
    if ( isset( $_POST['billing_last_name'] ) ) {
        update_user_meta( $customer_id, 'billing_last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
        update_user_meta( $customer_id, 'last_name', sanitize_text_field($_POST['billing_last_name']) );
    }
  
}


// add_action( 'woocommerce_before_add_to_cart_form', 'add_select2_to_city' );
// function add_select2_to_city(){
//     wc_enqueue_js( "$('.variations select').selectWoo();");
// }

// Save Secure Location and Delivery Instructions fields
add_action( 'woocommerce_checkout_update_order_meta', 'save_custom_checkout_fields', 10, 1 );
function save_custom_checkout_fields( $order_id ) {
    // Save Secure Location field
    if ( isset( $_POST['secure_location_1'] ) ) {
        update_post_meta( $order_id, '_secure_location_1', sanitize_text_field( $_POST['secure_location_1'] ) );
    }

    // Save Delivery Instructions field
    if ( isset( $_POST['delivery_instructions'] ) ) {
        update_post_meta( $order_id, '_delivery_instructions', sanitize_textarea_field( $_POST['delivery_instructions'] ) );
    }
}

function custom_my_account_menu_items( $items ) {
    unset($items['downloads']);
    return $items;
}
add_filter( 'woocommerce_account_menu_items', 'custom_my_account_menu_items' );


add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields_2' );

function custom_override_checkout_fields_2( $fields ) {
    // Add Secure Location field
    // $fields['billing']['secure_location_1'] = array(
    //     'type'          => 'select',
    //     'label'         => __('Want to leave in a secure location?', 'woocommerce'),
    //     'required'      => false,
    //     'options'       => array(
    //         ''   => __('...', 'woocommerce'),
    //         'With neighbours'   => __('With neighbours', 'woocommerce'),
    //         'By front door'     => __('By front door', 'woocommerce'),
    //         'By side door'      => __('By side door', 'woocommerce'),
    //         'By back door'      => __('By back door', 'woocommerce'),
    //         'In porch'          => __('In porch', 'woocommerce'),
    //         'On doorstep'       => __('On doorstep', 'woocommerce'),
    //         'At front of house' => __('At front of house', 'woocommerce'),
    //         'At side of house'  => __('At side of house', 'woocommerce'),
    //         'At rear of house'  => __('At rear of house', 'woocommerce'),
    //         'In greenhouse'     => __('In greenhouse', 'woocommerce'),
    //         'By side gate'      => __('By side gate', 'woocommerce'),
    //         'In garage'         => __('In garage', 'woocommerce')
    //     ),
    //     'input_class'   => ['select-dropdown'],
    //     'class'         => array('form-row-wide', 'woocommerce-input-wrapper'),
    //     'priority'      => 120,
    // );

    // Add Delivery Instructions field
    // $fields['billing']['delivery_instructions'] = array(
    //     'type'          => 'textarea',
    //     'label'         => __('Delivery Instructions', 'woocommerce'),
    //     'required'      => false,
    //     'class'         => array('form-row-wide', 'woocommerce-input-wrapper'),
    //     'priority'      => 100,
    //     'placeholder'   => 'Delivery Instructions'
    //  );

    return $fields;
}



function post_remove ()      //creating functions post_remove for removing menu item
{ 
   remove_menu_page('edit.php');
}

add_action('admin_menu', 'post_remove');   //adding action for triggering function call







// Display custom fields on order page in admin
add_action( 'woocommerce_admin_order_data_after_billing_address', 'display_custom_checkout_fields_in_admin_order', 20, 1 );
function display_custom_checkout_fields_in_admin_order( $order ) {
    // Get the order ID
    $order_id = $order->get_id();

    // Get the Secure Location field value
    $secure_location = get_post_meta( $order_id, '_secure_location_1', true );


    if ( ! empty( $secure_location ) ) {
        echo '<p><strong>' . __( 'Secure Location', 'woocommerce' ) . ':</strong> ' . $secure_location . '</p>';
    }

    // Get the Delivery Instructions field value
    $delivery_instructions = get_post_meta( $order_id, '_delivery_instructions', true );
    if ( ! empty( $delivery_instructions ) ) {
        echo '<p><strong>' . __( 'Delivery Instructions', 'woocommerce' ) . ':</strong><br>' . $delivery_instructions . '</p>';
    }
}

// Add a new role called "pending" with the same capabilities as "customer"
function add_pending_role() {
    $customer_role = get_role( 'customer' ); // Get the customer role object

    if ( null !== $customer_role ) {
        // Retrieve the capabilities of the customer role
        $customer_capabilities = $customer_role->capabilities;

        // Add the new role "pending" with the same capabilities as "customer"
        add_role( 'pending', __( 'Pending Trading Account Approval' ), $customer_capabilities );
    }
}
add_action( 'init', 'add_pending_role' );


add_action('wpcf7_mail_sent', 'my_custom_mail_sent' );
 
function my_custom_mail_sent( $contact_form ){
     // to get form id
     $form_id = $contact_form->id();
     // to get submission data
    $submission = WPCF7_Submission::get_instance(); 
    $posted_data = $submission->get_posted_data();

    if($form_id === 212) {


        $name = $posted_data['Name'] ?? null;
        $number = $posted_data['Number']  ?? null;
        $email = $posted_data['Email']  ?? null;
        $company_name = $posted_data['CompanyName']  ?? null;

        if($name && $number && $email && $company_name){

            $user = get_user_by( 'email', $email );

            if(!$user){
                            // User data
                $user_data = array(
                    'user_login' => sanitize_title($name) . '_' . time(), 
                    'user_pass' => null,
                    'user_email' => $email, 
                    'role' => 'pending',
                    'first_name'  => $name,
                );

                try {
                    $user_id = wp_insert_user($user_data);

                    update_user_meta( $user_id, 'company_name', $company_name );
                    update_user_meta( $user_id, 'trade_account', 1 );
                } catch (\Throwable $th) {
                    //throw $th;
                }
               

            }




        }
    }
}


add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields_3' );

function custom_override_checkout_fields_3( $fields ) {
    // Add Secure Location field
    // $fields['shipping']['secure_location_1'] = array(
    //     'type'          => 'select',
    //     'label'         => __('Want to leave in a secure location?', 'woocommerce'),
    //     'required'      => false,
    //     'options'       => array(
    //         ''   => __('...', 'woocommerce'),
    //         'With neighbours'   => __('With neighbours', 'woocommerce'),
    //         'By front door'     => __('By front door', 'woocommerce'),
    //         'By side door'      => __('By side door', 'woocommerce'),
    //         'By back door'      => __('By back door', 'woocommerce'),
    //         'In porch'          => __('In porch', 'woocommerce'),
    //         'On doorstep'       => __('On doorstep', 'woocommerce'),
    //         'At front of house' => __('At front of house', 'woocommerce'),
    //         'At side of house'  => __('At side of house', 'woocommerce'),
    //         'At rear of house'  => __('At rear of house', 'woocommerce'),
    //         'In greenhouse'     => __('In greenhouse', 'woocommerce'),
    //         'By side gate'      => __('By side gate', 'woocommerce'),
    //         'In garage'         => __('In garage', 'woocommerce')
    //     ),
    //     'input_class'   => ['select-dropdown'],
    //     'class'         => array('form-row-wide', 'woocommerce-input-wrapper'),
    //     'priority'      => 120,
    // );

    // Add Delivery Instructions field
    // $fields['shipping']['delivery_instructions'] = array(
    //     'type'          => 'textarea',
    //     'label'         => __('Delivery Instructions', 'woocommerce'),
    //     'required'      => false,
    //     'class'         => array('form-row-wide', 'woocommerce-input-wrapper'),
    //     'priority'      => 100,
    //     'placeholder'   => 'Delivery Instructions'
    //  );

    return $fields;
}


function custom_checkout_fields_order( $fields ) {
    // Backup the current billing and shipping fields
    $billing_fields = $fields['billing'];
    $shipping_fields = $fields['shipping'];

    // Swap the billing and shipping fields
    $fields['billing'] = $shipping_fields;
    $fields['shipping'] = $billing_fields;

    return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'custom_checkout_fields_order' );





remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form');



add_action('woocommerce_checkout_create_order', 'copy_shipping_to_billing_if_empty', 20, 2);

function copy_shipping_to_billing_if_empty($order, $data) {

    $billing_address_1 = $order->get_billing_address_1();
    // Check if billing address is empty
    if (empty($billing_address_1)) {

        $order_email = $order->get_meta('_shipping_email');
        $order_phone = $order->get_meta('_shipping_phone');

        // Copy shipping address to billing address
        $order->set_billing_first_name($order->get_shipping_first_name());
        $order->set_billing_email($order_email);
        $order->set_billing_phone($order_phone);
        $order->set_billing_last_name($order->get_shipping_last_name());
        $order->set_billing_company($order->get_shipping_company());
        $order->set_billing_address_1($order->get_shipping_address_1());
        $order->set_billing_address_2($order->get_shipping_address_2());
        $order->set_billing_city($order->get_shipping_city());
        $order->set_billing_state($order->get_shipping_state());
        $order->set_billing_postcode($order->get_shipping_postcode());
        $order->set_billing_country($order->get_shipping_country());
    }
}







// Display shipping email field in the admin order view
add_action('woocommerce_admin_order_data_after_shipping_address', 'add_shipping_email_to_admin_order_view');

function add_shipping_email_to_admin_order_view($order) {
    // Get the current value of the shipping email
    $shipping_email = get_post_meta($order->get_id(), '_shipping_email', true);

    // Use WooCommerce's function to output the input field
    woocommerce_wp_text_input(array(
        'id' => '_shipping_email',
        'label' => __('Shipping Email', 'woocommerce'),
        'value' => $shipping_email,
        'type' => 'email',
        'wrapper_class' => 'form-field-wide'
    ));
}


// Save the shipping email field
add_action('woocommerce_process_shop_order_meta', 'save_shipping_email_field', 45, 2);

function save_shipping_email_field($post_id, $post) {
    // Save the shipping email if it exists in the POST data
    if (isset($_POST['_shipping_email'])) {
        update_post_meta($post_id, '_shipping_email', sanitize_email($_POST['_shipping_email']));
    }
}

  
  
  // step 1 add a location rule type
  add_filter('acf/location/rule_types', 'acf_wc_product_type_rule_type');
  function acf_wc_product_type_rule_type($choices) {
    // first add the "Product" Category if it does not exist
    // this will be a place to put all custom rules assocaited with woocommerce
    // the reason for checking to see if it exists or not first
    // is just in case another custom rule is added
    if (!isset($choices['Product'])) {
      $choices['Product'] = array();
    }
    // now add the 'Category' rule to it
    if (!isset($choices['Product']['product_cat'])) {
      // product_cat is the taxonomy name for woocommerce products
      $choices['Product']['product_cat_term'] = 'Product Category Term';
    }
    return $choices;
  }
  
  // step 2 skip custom rule operators, not needed
  
  
  // step 3 add custom rule values
  add_filter('acf/location/rule_values/product_cat_term', 'acf_wc_product_type_rule_values');
  function acf_wc_product_type_rule_values($choices) {
    // basically we need to get an list of all product categories
    // and put the into an array for choices
    $args = array(
      'taxonomy' => 'product_cat',
      'hide_empty' => false
    );
    $terms = get_terms($args);
    foreach ($terms as $term) {
      $choices[$term->term_id] = $term->name;
    }
    return $choices;
  }
  
  // step 4, rule match
  add_filter('acf/location/rule_match/product_cat_term', 'acf_wc_product_type_rule_match', 10, 3);
  function acf_wc_product_type_rule_match($match, $rule, $options) {
    if (!isset($_GET['tag_ID'])) {
      // tag id is not set
      return $match;
    }
    if ($rule['operator'] == '==') {
      $match = ($rule['value'] == $_GET['tag_ID']);
    } else {
      $match = !($rule['value'] == $_GET['tag_ID']);
    }
    return $match;
  }


  // Add the checkbox to the checkout page
// add_action('woocommerce_before_checkout_billing_form', 'add_create_account_checkbox');

// function add_create_account_checkbox($checkout) {
//     woocommerce_form_field('create_account_checkbox', array(
//         'type' => 'checkbox',
//         'class' => array('form-row-wide checkbox text-uppercase bodyXS font-primary fw-600 custom-account-fields'),
//         'label' => __('Please select, if you want to create an account?', 'woocommerce'),
//         'required' => false,
//     ), $checkout->get_value('create_account_checkbox'));
// }


// // Process the checkbox value
// add_action('woocommerce_checkout_update_order_meta', 'save_create_account_checkbox_value');

// function save_create_account_checkbox_value($order_id) {
//     if (!empty($_POST['create_account_checkbox'])) {
//         update_post_meta($order_id, '_create_account_checkbox', sanitize_text_field($_POST['create_account_checkbox']));
//     }
// }

// Add BCC to WooCommerce order complete email
add_filter( 'woocommerce_email_headers', 'add_trustpilot_bcc_to_order_complete_email', 10, 3 );

function add_trustpilot_bcc_to_order_complete_email( $headers, $email_id, $order ) {
    
    // Check if the email being sent is the 'customer_completed_order' email
    if ( $email_id === 'customer_completed_order' && $order instanceof WC_Order ) {
        
        // Define the Trustpilot BCC email address
        $bcc_email = 'www.everedge.co.uk+830a366b20@invite.trustpilot.com';

        // Add the BCC header
        $headers .= 'Bcc: ' . $bcc_email . "\r\n";
    }

    return $headers;
}



// Save Shipping Phone Number to order meta data
add_action( 'woocommerce_checkout_create_order', 'save_shipping_phone_order_meta', 10, 2 );

function save_shipping_phone_order_meta( $order, $data ) {
    if ( isset( $_POST['shipping_phone'] ) ) {
        $order->update_meta_data( 'shipping_phone', sanitize_text_field( $_POST['shipping_phone'] ) );
    }
}


add_action('wp_head', 'add_custom_schema_for_specific_product');

function add_custom_schema_for_specific_product() {
    if (is_product() && get_the_ID() == 811) {
        ?>
        <script type="application/ld+json">
        {
        "@context": "https://schema.org/",
        "@type": "Product",
        "@id": "https://www.everedge.co.uk/product/titan-heavy-duty-garden-edging/#product",
        "name": "TITAN",
        "url": "https://www.everedge.co.uk/product/titan-heavy-duty-garden-edging/",
        "description": "EverEdge Titan is a heavy-duty steel edging that is often used on commercial projects and long driveways/paths, but comes into its own when the site has poor ground conditions (Type 1 or 2 MOT sub-base, rubble, etc). Titan is supplied in 2.5 metre lengths. Minimum order - 25m (10 pieces) - for smaller orders, consider our Titan Mini range. 6.0mm thickness available on request - minimum order 20 pieces. This is supplied in 3 metre lengths with back plates. For information on our new rolled-top Titan option, click here. To order Titan online a trade account is needed. For non-trade customers, please call or email for prices and availability.",
        "image": "https://www.everedge.co.uk/wp-content/uploads/2023/12/In-Green-5-crop-scaled-e1718977691861.jpg",
        "sku": "TITAN",
        "offers": {
            "@type": "AggregateOffer",
            "lowPrice": "46.92",
            "highPrice": "103.98",
            "offerCount": 21,
            "priceCurrency": "GBP",
            "availability": "http://schema.org/InStock",
            "url": "https://www.everedge.co.uk/product/titan-heavy-duty-garden-edging/",
            "seller": {
            "@type": "Organization",
            "name": "EverEdge",
            "url": "https://www.everedge.co.uk"
            }
        },
        "brand": {
            "@type": "Brand",
            "name": "EverEdge"
        },
        "category": "Commercial Steel Edging",
        "material": "Steel",
        "weight": "varies based on length and thickness",
        "additionalProperty": [
            {
            "@type": "PropertyValue",
            "name": "Length",
            "value": "2.5 meters"
            },
            {
            "@type": "PropertyValue",
            "name": "Minimum Order",
            "value": "25 meters (10 pieces)"
            },
            {
            "@type": "PropertyValue",
            "name": "Available Thickness",
            "value": "6.0mm thickness available upon request"
            }
        ]
        }
        </script>

        <?php
    }

    if (is_front_page()) { ?>
        <script type="application/ld+json">
            {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "EverEdge",
            "url": "https://www.everedge.co.uk/",
            "logo": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsVHSDvz_jhOZSiIV1e6Tn8WcThPh6bdsTzA&s",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+44 01630 417120",
                "contactType": "Customer Service",
                "areaServed": "GB",
                "availableLanguage": ["English"]
            },
            "sameAs": [
                "https://www.facebook.com/UK.EverEdge/", 
                "https://www.instagram.com/everedge_uk/",
                "https://x.com/everedge"
            ]
            }
            </script>

            <script type="application/ld+json">
            {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "EverEdge",
            "image": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsVHSDvz_jhOZSiIV1e6Tn8WcThPh6bdsTzA&s",
            "@id": "https://www.everedge.co.uk/",
            "url": "https://www.everedge.co.uk/",
            "telephone": "+44 01630 417120",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "93 The Lloyd",
                "addressLocality": "Hales, Market Drayton",
                "postalCode": "TF9 2PS",
                "addressCountry": "GB"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 52.89656448364258,
                "longitude": -2.420090436935425
            },
            "openingHours": "Mo-Fr 08:30-17:00",
            "sameAs": [
                "https://www.facebook.com/UK.EverEdge/", 
                "https://www.instagram.com/everedge_uk/",
                "https://x.com/everedge"
            ]
            }
            </script>

            <script type="application/ld+json">
            {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "EverEdge",
            "url": "https://www.everedge.co.uk/",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://www.everedge.co.uk/?s={search_term_string}",
                "query-input": "required name=search_term_string"
            }
            }
            </script> 
            
        <?php
    }
}





