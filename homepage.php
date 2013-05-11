<?php
/*
 Template Name: Landing Page
 */
?>

<?php
get_header();
$post_count = 0;
// 653px
?>
<div id="content">
	<?php if ( ! dynamic_sidebar( 'Alert' ) ) :
	?>
	<!--Wigitized 'Alert' for the home page-->
	<?php     endif?>
	<?php     //if (have_posts()) : while (have_posts()) : the_post(); unset($previousday);?>
	<?php     //if ( !(in_category('4')) || !is_home() ) {?>
	<!--Featured start-->
	<div id="featured_content">
		<?php
//////////////////////////////
/// Feature Of The Week //////
//////////////////////////////
rewind_posts();
global $post;
//$myposts = get_posts('numberposts=1&orderby=date&order=DESC&category=5&category=1251');
$myposts = query_posts( array( 'category__and' => array(5,1251), 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'ASC' ) );
foreach($myposts as $post) : setup_postdata($post);
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );



		?>
		<div class="feature-section">
			<a href="<?php the_permalink() ?>" title="Feature Of The Week">
			<div class="feature-header hide">
				Feature Of The Week
			</div> </a>
			<div class="overflow feature-content entry">
				<a href="<?php the_permalink() ?>" title="<?php  the_title();?>">
					<div class="feature-thumbnail-header">
						<?php     the_title();?>
					</div>
					<div class="feature-image-holder"><img class="feature-image" src="<?php  echo $image[0];?>"/>
					</div>
					<div class="thumbnail-background">
						<div class="thumbnail-text ">
							<?php     echo limit_words(strip_tags(get_the_content()), 100);?>
						</div>
					</div> 
				</a>
			</div>
		</div>
		<?php     endforeach;?>
		<?php     //}?>

		<?php     //endif;?>

		<?php
//////////////////////////////
///// Video Of The Week //////
//////////////////////////////
rewind_posts();
global $post;
//$myposts = get_posts('numberposts=1&orderby=date&order=DESC&category=1251');
$myposts = query_posts( array( 'category__and' => array(1250,1251), 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'ASC' ) );
foreach($myposts as $post) : setup_postdata($post);
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );

		?>
		<div class="feature-section">
			<a href="<?php the_permalink() ?>" title="Video Of The Week">
			<div class="feature-header hide">
				Video Of The Week
			</div> </a>
			<div class="overflow feature-content entry">
				<a href="<?php the_permalink() ?>" title="<?php  the_title();?>">
				<div class="feature-thumbnail-header">
					<?php     the_title();?>
				</div>
				<div class="feature-image-holder"><img class="feature-image" src="<?php  echo $image[0];?>"/>
				</div>
				<div class="thumbnail-background">
					<div class="thumbnail-text ">
						<?php     echo limit_words(strip_tags(get_the_content()), 100);?>
					</div>
				</div> 
				</a>
			</div>
		</div>
		<?php     endforeach;?>
		<?php     //}?>

		<?php     //endif;?>
	</div>
	<!--Featured end-->
	<!--thumbnails start-->
	<div id="thumb_content">
		<!--
		//////////////////////////////
		//////// Latest Videos ///////
		//////////////////////////////-->
		<div class="thumb-section">
			<a href="<?php  bloginfo('url');?>/category/videos/">
			<div class="section-header hide">
				Latest Videos
			</div> </a>
			<?php
rewind_posts();
global $post;
$myposts = get_posts('numberposts=3&orderby=date&order=DESC&category=1250');
foreach($myposts as $post) : setup_postdata($post);
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
			?>

			<div class="overflow thumb-post-content entry">
				<a href="<?php the_permalink() ?>" title="<?php  the_title();?>" rel="bookmark">
				<div class="post-thumbnail-header">
					<?php     the_title();?>
				</div>
				<div class="thumbnail-image-holder ">
					<img class="thumbnail-image"  src="<?php  echo $image[0];?>" >
				</div>
				<div class="thumbnail-background">
					<div class="thumbnail-text ">
						<?php     echo limit_words(strip_tags(get_the_content()), 100);?>
					</div>
				</div>  </a>
			</div>
			<?php     endforeach;?>
			<?php     //}?>

			<?php     //endif;?>
		</div>
		<!--thumbnails end-->
		<div id="mid_ad" class="entry">
		<script type="text/javascript"><!--
					google_ad_client = "ca-pub-7469229883189621";
					/* Instream */
					google_ad_slot = "7891229067";
					google_ad_width = 468;
					google_ad_height = 60;
					//-->
					</script>
					<script type="text/javascript"
					src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
				</script>
		</div>
		<!--thumbnails start-->
		<!--
		//////////////////////////////
		////// Latest Features ///////
		//////////////////////////////-->
		<div class="thumb-section">
			<a href="<?php  bloginfo('url');?>/category/features/">
			<div class="section-header hide">
				Latest Features
			</div> </a>
			<?php
rewind_posts();
global $post;
$myposts = get_posts('numberposts=3&orderby=date&order=DESC&category=5');
foreach($myposts as $post) : setup_postdata($post);
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
			?>

			<div class="overflow thumb-post-content entry">
				<a href="<?php the_permalink() ?>" title="<?php  the_title();?>" rel="bookmark">
				<div class="post-thumbnail-header">
					<?php     the_title();?>
				</div>
				<div class="thumbnail-image-holder ">
					<img class="thumbnail-image"  src="<?php  echo $image[0];?>" >
				</div>
				<div class="thumbnail-background">
					<div class="thumbnail-text ">
						<?php     echo limit_words(strip_tags(get_the_content()), 100);?>
					</div>
				</div>  </a>
			</div>
			<?php     endforeach;?>
			<?php     //}?>

			<?php     //endif;?>
		</div>
		<!--thumbnails end-->
		<!--thumbnails start-->
		<!--
		//////////////////////////////
		//////// Latest News /////////
		//////////////////////////////-->
		<div class="thumb-section">
			<a href="<?php  bloginfo('url');?>/category/videos/">
			<div class="section-header hide">
				Latest News
			</div> </a>
			<?php
rewind_posts();
global $post;
$myposts = get_posts('numberposts=3&orderby=date&order=DESC&category=7');
foreach($myposts as $post) : setup_postdata($post);
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
			?>

			<div class="overflow thumb-post-content entry">
				<a href="<?php the_permalink() ?>" title="<?php  the_title();?>" rel="bookmark">
				<div class="post-thumbnail-header">
					<?php     the_title();?>
				</div>
				<div class="thumbnail-image-holder ">
					<img class="thumbnail-image"  src="<?php  echo $image[0];?>" >
				</div>
				<div class="thumbnail-background">
						<div class="thumbnail-text ">
							<?php     echo limit_words(strip_tags(get_the_content()), 100);?>
						</div>
					</div>  </a>
			</div>
			<?php    endforeach;?>
			<?php    //}?>

			<?php   //endif;?>
		</div>
	</div>
	<!--thumbnails end-->
</div><!--#content-->
<?php  get_sidebar();?>
<?php get_footer();?>
