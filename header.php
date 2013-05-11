<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- TradeDoubler site verification 2024047 -->

	<title>
	<?php 
	//Pre SEO Plugin Time
	/*if ( is_tag() ) {
			echo 'Tag Archive for &quot;'.$tag.'&quot; '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title(); echo ' - '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
		} elseif ( is_home() ) {
			bloginfo( 'name' ); //echo ' '; //bloginfo( 'description' );
		}  elseif ( is_404() ) {
			echo 'Error 404 Not Found - '; bloginfo( 'name' );
		} else {
			echo wp_title( ' ', false, right ); bloginfo( 'name' );
		} */
		
	//Post SEO Plugin Time
	wp_title('');?>
		
	</title>
	<!--
		Semi dynamic meta keywords and meta description. Google likes meta info that changes for each page.
		While these meta keywords are not ideal and the meta description could be better, they are better than nothing.
	-->
	<!--<meta name="keywords" content="<?php wp_title(); echo ' , '; bloginfo( 'name' ); echo ' , '; bloginfo( 'description' ); ?> Music blog metal festival metallica gigs" /> -->
	<!--<meta name="description" content="<?php wp_title(); echo ' | '; bloginfo( 'description' ); ?>" /> -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="google-site-verification" content="rEgEGaxmKt4lZ3FvXzPZWoNll5_koFTUToenfa377y4" />
	<meta name="abstract" content="">
	<meta name="author" content="Sidesixx.com">
	<meta name="publisher" content="sidesixx.com">
	<meta name="copyright" content="sidesixx.com">
	<meta name="rating" content="General">
	<meta name="creation_Date" content="30/01/2011">
	<meta name="expires" content="">
	<meta name="revisit-after" content="2 days">
	<meta name="doc-rights" content="Copywritten work">
	<meta name="doc-class" content="Completed">
	<meta name="MSSmartTagsPreventParsing" content="true"> 

	<!-- Start Facebook Opengraph -->
	<meta property="og:site_name" content="<?php bloginfo('name') ?>"/>
	<meta property="fb:page_id" content="155160954533827" />
	<meta property="fb:app_id" content="208310049185764">
	<meta property="fb:admins" content="542100401,625764672"/>
	<?php if (is_single () ) {
		 global $post;
	?>
	
	<meta property="og:title" content="<?php the_title(); ?>"/>
	<meta property="og:type" content="article"/>
	<meta property="og:url" content="<?php the_permalink(); ?>"/>
	<meta property="og:image" content="<?php echo wp_get_attachment_thumb_url( get_post_thumbnail_id( $post->ID ) ); ?>"/>
	<meta property="og:description" content="<?php echo substr(strip_tags($post->post_content), 0, 250); ?>..." /> 
	<link rel="image_src" href="<?php echo wp_get_attachment_thumb_url( get_post_thumbnail_id( $post->ID ) ); ?>"/>
	<?php } else {?>
		
	<meta property="og:title" content="<?php bloginfo( 'name' ); ?>"/>
	<meta property="og:type" content="blog"/>
	<meta property="og:url" content="<?php bloginfo('url'); ?>"/>
	<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/images/head_logo_v2.png"/>
	<meta property="og:description" content="<?php bloginfo( 'description' ); ?>" />
	<link rel="image_src" href="<?php bloginfo('template_directory'); ?>/images/head_logo_v2.png" />

	<?php } ?>
	
	<!-- End Facebook Opengraph -->

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="index" title="<?php bloginfo( 'name' ); ?>" href="<?php echo get_option('home'); ?>/" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
	
	<!-- Loads jQuery if it hasn't been loaded already -->
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_enqueue_script("jquery_ui"); ?>
	
	
	<!-- The HTML5 Shim is required for older browsers, mainly older versions IE -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<?php 
		wp_head(); 
	?> <!-- this is used by many Wordpress features and for plugins to work proporly -->
</head>

<body <?php body_class(); ?>>

<?php  if (is_user_logged_in()) { ?> <!-- An option admin menu that only displays when logged in -->
<!--<div id="if-logged-in">
	<div class="container">
		<p class="left">
			<a href="<?php bloginfo('url'); ?>/wp-admin/">Control Panel</a>
			<a href="<?php bloginfo('url'); ?>/wp-admin/edit.php">Posts</a>
			<a href="<?php bloginfo('url'); ?>/wp-admin/edit.php?post_type=page">Pages</a>
			<a href="<?php bloginfo('url'); ?>/wp-admin/edit-comments.php">Comments</a>
			<a href="<?php bloginfo('url'); ?>/wp-admin/upload.php">Media Library</a> 
		</p>
		<p class="right">
			<a href="<?php bloginfo('url'); ?>/wp-admin/options-general.php">Settings</a>
			<a href="<?php bloginfo('url'); ?>/wp-admin/profile.php">Profile</a>
			<?php wp_loginout() ?>
		</p>
	</div>
</div>--><!--#if-logged-in-->

<?php } ?>
<!-- header begins --> 
<div class="main"><!-- this encompasses the entire Web site -->
	<header>
        <div id="top-bit">
        	<div id="top-logo">
        		<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/head_logo_v2.png" width=150 height=150 /></a>
        		<div class="leader-board"><script type="text/javascript"><!--
google_ad_client = "ca-pub-7469229883189621";
/* Banner */
google_ad_slot = "8100332485";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
        	</div>
         
        
        <!--<h1><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></h1>-->
      


		<div id="top-nav">
			<!--<p><?php //bloginfo('description'); ?></p>-->
			<!--<nav class="primary">-->
			<?php wp_nav_menu( array('menu' => 'Header Menu', 'menu_id' => 'menu')); //wp_list_categories('title_li=&orderby=id'); ?> <!-- editable within the Wordpress backend -->
			<!--</nav>--> <!--.primary-->
			<div id="sub-header">
				<div class="social-media-icon"> 
					<a target="_blank" href="http://www.facebook.com/pages/Sidesixx/155160954533827"><img class="icon" src="<?php bloginfo('template_directory'); ?>/images/icons/facebook.png" /></a> 
				</div> 
				<div class="social-media-icon"> 
					<a target="_blank" href="http://twitter.com/sidesixx"><img class="icon" src="<?php bloginfo('template_directory'); ?>/images/icons/twitter.png" /></a> 
				</div> 
				<div class="social-media-icon"> 
					<a target="_blank" href="<?php bloginfo('rss2_url'); ?>"><img class="icon" src="<?php bloginfo('template_directory'); ?>/images/icons/rss.png" /></a> 
				</div>
			
			</div>
		</div>
		<?php if ( ! dynamic_sidebar( 'Header' ) ) : ?>
			<!-- Wigitized Header -->
		<?php endif ?>
		</div>
	</header>
	<div class="clear"></div>
    <div id="fb-root"></div>
		
	<div id="container">
		<div class="main">
