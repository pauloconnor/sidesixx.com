<?php get_header(); ?>
<div id="content">
	<?php
		if(isset($_GET['author_name'])) :
			$curauth = get_userdatabylogin($author_name);
	    else :
			$curauth = get_userdata(intval($author));
		endif;
	?>
	<div id="page-header">
  	<div class="author">
  		<h1><?php echo $curauth->display_name; ?></h1>
  		<div class="avatar">
  			<!-- Displays the Gravatar based on the author's email address. Visit Gravatar.com for info on Gravatars -->
  			<?php if(function_exists('get_avatar')) { echo get_avatar( $curauth->user_email, $size = '180' ); } ?>
  		</div>
  		
  		<!-- Displays the author's description from their Wordpress profile -->
  		<?php if($curauth->description !="") { ?>
  			<div class="author-description"><?php echo $curauth->description; ?></a></div>
  		<?php } ?>
  	</div><!--.author-->
  </div><!--#page-header-->
	<div id="recent-author-posts">
		<h2>Recent Posts</h2>
  </div>
		<!-- Displays the most recent posts by that author -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php static $count = 0;
				if ($count == "5") // Number of posts to display
	            	{ break; }
				else { ?>
			  <div class="post">
          <h2 class="post-title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
          
          <div class="post-meta">
              <!--Categories:--> <?php //the_category(', ') ?>
              <div class="social-counts">
                 <span class="author"><?php the_author_posts_link() ?></span> 
                 <span class="comments-count"> <?php comments_popup_link('Discussion(0)', 'Discussion(1)', 'Discussion(%)'); ?></span>
                 <div class="social-buttons">
                   <div class="twitter-share-button">
                     <a href="http://twitter.com/share" class="twitter-share-button" 
                                                        data-text="<?php the_title(); ?>" 
                                                        data-count="horizontal" data-via="sidesixx" 
                                                        data-text="<?php the_title(); ?>" 
                                                        data-url="<?php the_permalink(); ?>">Tweet
                     </a>
                     <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
                   </div>
                   &nbsp;
                   <div class="facebook-like-button">
                     <iframe src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink(); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=250&amp;action=like&amp;colorscheme=light&amp;height=21" 
                                 scrolling="no" 
                                 frameborder="0" 
                                 style="border:none; 
                                 overflow:hidden; 
                                 width:78px; 
                                 height:21px;" 
                                 allowTransparency="true">
                     </iframe>
                   </div>
              </div>
              
              </div>
              <p>
                <?php the_date($d); ?> at <?php the_time($d) ?> 
              </p>
              <?php //if (the_tags('Tags: ', ', ', ' ')); ?>
          </div><!--.postMeta-->
          <?php echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; ?> <!-- loades the post's featured thumbnail, requires Wordpress 3.0+ -->
            <div class="post-content">
             <?php the_excerpt('<div class="post-readmore">Read more</div>'); ?>
            </div>
            <div class="post-categories"><?php the_tags('Filed Under: ', ', ', ''); ?></div>
        </div><!--#recentPosts-->

			<?php $count++; } ?>
		<?php endwhile; else: ?>
				<p>
					No posts yet.
				</p>
		<?php endif; ?>
    <br />
  	<div id="recent-author-comments">
  		<h2>Recent Comments</h2>
    </div>
  			<?php
  				$number=5; // number of recent comments to display
  				$comments = $wpdb->get_results("SELECT * FROM $wpdb->comments WHERE comment_approved = '1' and comment_author_email='$curauth->user_email' ORDER BY comment_date_gmt DESC LIMIT $number");
  			?>
		  <div class="post">
  			<ul>
  				<?php
  					if ( $comments ) : foreach ( (array) $comments as $comment) :
  					echo  '<li class="recentcomments">' . sprintf(__('%1$s on %2$s'), get_comment_date(), '<a href="'. get_comment_link($comment->comment_ID) . '">' . get_the_title($comment->comment_post_ID) . '</a>') . '</li>';
  				endforeach; else: ?>
                  	<p>
                  		No comments yet.
                  	</p>
  				<?php endif; ?>
       </ul>
  	</div><!--#recentAuthorComments-->
</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>