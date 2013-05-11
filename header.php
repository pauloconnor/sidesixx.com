<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>
	<?php if ( is_tag() ) {
			echo 'Tag Archive for &quot;'.$tag.'&quot; '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title(); echo ' - '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
		} elseif ( is_home() ) {
			bloginfo( 'name' ); echo ' '; bloginfo( 'description' );
		}  elseif ( is_404() ) {
			echo 'Error 404 Not Found - '; bloginfo( 'name' );
		} else {
			echo wp_title( ' ', false, right ); bloginfo( 'name' );
		} ?>
	</title>
	<!--
		Semi dynamic meta keywords and meta description. Google likes meta info that changes for each page.
		While these meta keywords are not ideal and the meta description could be better, they are better than nothing.
	-->
	<meta name="keywords" content="<?php wp_title(); echo ' , '; bloginfo( 'name' ); echo ' , '; bloginfo( 'description' ); ?>" />
	<meta name="description" content="<?php wp_title(); echo ' | '; bloginfo( 'description' ); ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="index" title="<?php bloginfo( 'name' ); ?>" href="<?php echo get_option('home'); ?>/" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
	<!-- Loads jQuery if it hasn't been loaded already -->
	<?php wp_enqueue_script("jquery"); ?>
	<!-- The HTML5 Shim is required for older browsers, mainly older versions IE -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<?php wp_head(); ?> <!-- this is used by many Wordpress features and for plugins to work proporly -->
</head>

<body <?php body_class(); ?>>

<?php  if (is_user_logged_in()) { ?> <!-- An option admin menu that only displays when logged in -->
<div id="if-logged-in">
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
</div><!--#if-logged-in-->
<?php } ?>
<!-- announcements --> 
<div id="announcement"> 
  </div> 
<!-- header begins --> 
<!-- header begins --> 
<div id="header"> 
    <!--<div id="ad-header"> 
      <div class="inner-wrapper"> 
      </div> 
    </div>--> 

    
</div> 
<div id="main"><!-- this encompasses the entire Web site -->
	<header>
		<div class="container">
  		<?php if( is_front_page() || is_home() ) { ?>
        <a href="<?php bloginfo('url'); ?>"><div class="logo"><img src="<?php bloginfo('template_directory'); ?>/images/header-2.png" alt="<?php bloginfo('name'); ?>" /></a> </div> 
        <!--<h1><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></h1>-->
      <?php } else { ?>
        <a href="<?php bloginfo('url'); ?>"><div class="logo"><img src="<?php bloginfo('template_directory'); ?>/images/header-2.png" alt="<?php bloginfo('name'); ?>" /></a> </div>
        <!--<h2><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></h2>-->
      <?php } ?>
		  <div id="top-nav">
			
			<!--<p><?php //bloginfo('description'); ?></p>-->
  			<!--<nav class="primary">-->
  				<?php wp_nav_menu( array('menu' => 'Header Menu', 'menu_id' => 'menu')); //wp_list_categories('title_li=&orderby=id'); ?> <!-- editable within the Wordpress backend -->
  			<!--</nav>--> <!--.primary-->
  			<div id="sub-header">
  			 <?php get_search_form(); ?>
           
        </div>
 
  			
			</div>
			<?php if ( ! dynamic_sidebar( 'Header' ) ) : ?>
				<!-- Wigitized Header -->
			<?php endif ?>
		</div><!--.container-->
	</header>
	<div class="clear"></div>
	<div class="container">