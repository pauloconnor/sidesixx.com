<?php
	// enables wigitized sidebars
	if ( function_exists('register_sidebar') )

	// Sidebar Widget
	// Location: the sidebar
	register_sidebar(array('name'=>'Sidebar',
		'before_widget' => '<li class="widget">',
		'after_widget' => '</li>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Header Widget
	// Location: right after the navigation
	register_sidebar(array('name'=>'Header',
		'before_widget' => '<div id="widgit-header" class="widgit-area"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	// Footer Widget
	// Location: at the top of the footer, above the copyright
	register_sidebar(array('name'=>'Footer',
		'before_widget' => '<div id="widgit-footer" class="widgit-area"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	// The Alert Widget
	// Location: displayed on the top of the home page, right after the header, right before the loop, within the contend area
	register_sidebar(array('name'=>'Alert',
		'before_widget' => '<div id="widgit-alert" class="widgit-area"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	
	
	// post thumbnail support
	add_theme_support( 'post-thumbnails' );
	
	// custom menu support
	add_theme_support( 'menus' );
	if ( function_exists( 'register_nav_menus' ) ) {
	  	register_nav_menus(
	  		array(
	  		  'header_menu' => 'Header Menu',
	  		  'sidebar_menu' => 'Sidebar Menu',
	  		  'footer_menu' => 'Footer Menu'
	  		)
	  	);
	}
	
	// custom background support
	add_custom_background();
	
	// removes detailed login error information for security
	add_filter('login_errors',create_function('$a', "return null;"));
	
	// Removes Trackbacks from the comment cout
	add_filter('get_comments_number', 'comment_count', 0);
	function comment_count( $count ) {
		if ( ! is_admin() ) {
			global $id;
			$comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
			return count($comments_by_type['comment']);
		} else {
			return $count;
		}
	}
	
	// custom excerpt ellipses for 2.9+
	function custom_excerpt_more($more) {
		return 'Read More &raquo;';
	}
	add_filter('excerpt_more', 'custom_excerpt_more');
	// no more jumping for read more link
	function no_more_jumping($post) {
		return '<a href="'.get_permalink($post->ID).'" class="read-more">'.'Continue Reading'.'</a>';
	}
	add_filter('excerpt_more', 'no_more_jumping');
	
	// category id in body and post class
	function category_id_class($classes) {
		global $post;
		foreach((get_the_category($post->ID)) as $category)
			$classes [] = 'cat-' . $category->cat_ID . '-id';
			return $classes;
	}
	add_filter('post_class', 'category_id_class');
	add_filter('body_class', 'category_id_class');

  //Ship loading of jQuery off to the Google CDN
  function my_init_method() {
    if (!is_admin()) {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js');
        wp_enqueue_script( 'jquery' );
		wp_deregister_script( 'jquery_ui' );
        wp_register_script( 'jquery_ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/jquery-ui.min.js');
        wp_enqueue_script( 'jquery_ui' );
		
    }
  }    
 
  add_action('init', 'my_init_method');
  
  function ngg_excerpt() {
    //get the post content
    $content_data = get_the_content();
    //extract shortcode from content
    preg_match("/\[ngg([^}]*)\]/", $content_data ,$matches);
    $results = $matches[1];
    //if shortcode exists in content
    if (!empty($results)){
      //extract gallery id from shortcode
      $gallery_id = preg_replace("/[^0-9]/", '', $matches[1]);
      //make sure that NextGen is loaded
      if (function_exists(nggShowGallery)){
        //output gallery, showing only 4 images
        echo nggShowGallery( $gallery_id, 'compact' , 10 );
      }
    }
  }
  
  function insert_fb_tags() {
    global $post;
	$default_image="http://sidesixx.com/wp-content/themes/lorna/images/header-logo-orange.jpg"; //replace this with a default image on your server or an image in your media library
    if ( !is_singular()) //if it is not a post or a page
      return;
    if(!has_post_thumbnail( $post->ID )) { //the post does not have featured image, use a default image
      $thumbnail = $default_image;
    }else{
      $thumbnail = the_post_thumbnail();
    }
	echo '<!-- Start Facebook Opengraph -->';
	echo '<meta property="og:url" content="' . the_permalink() . '" /> ';
	echo '<meta property="og:title" content="' . the_title() . '" /> ';
	echo '<meta property="og:description" content="' . substr(the_content(), 0, 50) . '..." /> ';
	echo '<meta property="og:type" content="article" />' ;
	echo '<meta property="og:image" content="' . $thumbnail . '" /> ';
	echo '<meta property="og:site_name" content="SideSixx.com" /> ';
	echo '<meta property="fb:admins" content="lorna.begg,thatsmarvellous"/>';
    echo "\n";
  }
  
  function get_tweet_count($url) {
	$count = 0;
	$data = wp_remote_get('ht'.'tp://urls.api.twitter.com/1/urls/count.json?url='.urlencode($url) );
	if (!is_wp_error($data)) {
		$resp = json_decode($data['body'],true);
		if ($resp['count']) $count = $resp['count'];
	}
	return $count;
  }
  
  
  function limit_words($string, $word_limit) {
 
	// creates an array of words from $string (this will be our excerpt)
	// explode divides the excerpt up by using a space character
 
	$words = explode(' ', $string);
 
	// this next bit chops the $words array and sticks it back together
	// starting at the first word '0' and ending at the $word_limit
	// the $word_limit which is passed in the function will be the number
	// of words we want to use
	// implode glues the chopped up array back together using a space character
 
	return implode(' ', array_slice($words, 0, $word_limit));
 
  }
  
  
  
  
  
  
?>