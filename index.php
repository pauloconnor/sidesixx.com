<?php get_header(); ?>
	<div id="content">
		<?php if ( ! dynamic_sidebar( 'Alert' ) ) : ?>
			<!--Wigitized 'Alert' for the home page-->
		<?php endif ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); unset($previousday);?>
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
      					                                      data-text="I just read a post on SideSixx.com" 
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
			</div>

		<?php endwhile; else: ?>
			<div class="no-results">
				<p><strong>There has been an error.</strong></p>
				<p>We apologize for any inconvenience, please <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>">return to the home page</a> or use the search form below.</p>
				<?php get_search_form(); ?> <!-- outputs the default Wordpress search form-->
			</div><!--noResults-->
		<?php endif; ?>
			
		<nav class="oldernewer">
			<div class="older">
				<p>
					<?php next_posts_link('&laquo; Older Entries') ?>
				</p>
			</div><!--.older-->
			<div class="newer">
				<p>
					<?php previous_posts_link('Newer Entries &raquo;') ?>
				</p>
			</div><!--.older-->
		</nav><!--.oldernewer-->

	</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
