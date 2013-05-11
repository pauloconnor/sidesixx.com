<div id="sidebar">
	<div id="social-media-icons" class="widget-external">
		<?php  get_search_form();?>
	</div>
	<?php 
  ///////////////////////////////
  // Google Ad OR Competition ///
  ///////////////////////////////
  
  rewind_posts();
	global $post;
	//$myposts = get_posts('numberposts=1&orderby=date&order=DESC&category=928');
	$myposts = query_posts( array( 'category__and' => array(35,926), 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'ASC' ) );
	if (!empty($myposts)) {
		foreach($myposts as $post) : setup_postdata($post);
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		?>
		<li class="widget-external">
			<a href="<?php the_permalink() ?>" title="<?php  the_title();?>" rel="bookmark">
			<div class="competition-image-holder">
				<div class="competition-header">
					<?php  the_title();?>
				</div>
				<img class="competition-image" src="<?php  echo $image[0];?>"/>
			</div> </a>
		</li>
		<?php     endforeach;?>
	<?php     } else { ?>
		<li class="widget-external">
			<script type="text/javascript"><!--
google_ad_client = "ca-pub-7469229883189621";
/* Sidebar_200 */
google_ad_slot = "6717228153";
google_ad_width = 200;
google_ad_height = 200;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
			<!--<img src="http://www.google.com/images/adsense/en_us/200x200.jpg" />-->
		</li>
	<?php     }?>

	<?php  //if ( ! dynamic_sidebar( 'Sidebar' )) :?>
	<?php if ( !function_exists('dynamic_sidebar') || ! dynamic_sidebar('Sidebar') ) :
	?>
	<?php  endif;?>

	<li class="widget-external">
		<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FSidesixx%2F155160954533827&amp;width=200&amp;colorscheme=light&amp;show_faces=true&amp;stream=false&amp;header=false&amp;height=330"
		scrolling="no"
		frameborder="0"
		style="border:none; overflow:hidden; width:200px; height:340px;"
		allowTransparency="true"></iframe>
	</li>
	<li class="widget-external">
		<script src="http://widgets.twimg.com/j/2/widget.js"></script>
		<script>
			new TWTR.Widget({
				version : 2,
				type : 'profile',
				rpp : 4,
				interval : 6000,
				width : 200,
				height : 300,
				theme : {
					shell : {
						background : '#231f20',
						color : '#ffffff'
					},
					tweets : {
						background : '#d6d9db',
						color : '#000000',
						links : '#ff8420'
					}
				},
				features : {
					scrollbar : true,
					loop : false,
					live : true,
					hashtags : true,
					timestamp : true,
					avatars : false,
					behavior : 'all'
				}
			}).render().setUser('sidesixx').start();

		</script>
	</li>
	<li class="widget-external fill">
		<!--<img src="https://www.google.com/adsense/static/en_US/images/wideskyscraper_img.jpg" />-->
	</li>
	<!--<li id="sidebar-nav" class="widget menu">
	<h3>Navigation</h3>
	<ul>
	<?php wp_nav_menu( array('menu' => 'Sidebar Menu' )); ?>
	</ul>
	</li>-->
	<!-- This should all be handled by the Sidebar menu...
	<li class="widget">
	<h3>Tags</h3>
	<?php wp_tag_cloud( $args ); ?>
	</li>

	<li id="sidebar-archives" class="widget">
	<h3>Recent Posts</h3>
	<ul>
	<?php wp_get_archives('title_li=&type=postbypost&limit=10'); ?>
	</ul>
	</li>-->
</div>
<?php //endif;?>
</div><!--sidebar-->