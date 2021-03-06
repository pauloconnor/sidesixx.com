<?php get_header(); ?>
<div id="content">
  <div id="page-header">
  	<h1><?php the_search_query(); ?></h1>
  	<!-- displays the category's description from the Wordpress admin -->
  	<?php //echo category_description(); ?>
	</div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php 
      if ($post_count % 5 == 0 && $post_count > 0) 
      {
		?>
		  <div class="post_in_stream">
		  	<div class="post_center">
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
		  </div>
	  <?php 
      } 
	    $post_count++;
    ?>
    <div class="post post-bar">
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
                   <iframe src="http://www.facebook.com/plugins/like.php?href=<?php urlencode(the_permalink()); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=250&amp;action=like&amp;colorscheme=light&amp;height=21" 
                               scrolling="no" 
                               frameborder="0" 
                               style="border:none; 
                               overflow:hidden; 
                               width:78px; 
                               height:21px;" 
                               allowTransparency="true">
                   </iframe>
                 </div>
                 <div class="google-plus-one">
					<g:plusone size="medium" href="<?php urlencode(the_permalink()); ?>"></g:plusone>
               </div>
            </div>
            
            </div>
            <p>
              <?php the_date($d); ?> at <?php the_time($d) ?> 
            </p>
            <?php //if (the_tags('Tags: ', ', ', ' ')); ?>
        </div><!--.postMeta-->
        <div class="post-holder">
        <?php 
        if (has_post_thumbnail())
        {
          echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; 
        }
        ?> <!-- loades the post's featured thumbnail, requires Wordpress 3.0+ -->
        <div class="post-content">
         <?php the_excerpt('<div class="post-readmore">Read more</div>'); ?>
         <?php ngg_excerpt(); ?> 

        </div>
        <div class="post-categories"><?php the_tags('Filed Under: ', ', ', ''); ?></div>
        </div>
      </div>
	
		
	<?php endwhile; else: ?>
		  <div class="post">
        <h3 class="post-title">Something went wrong...</h3>

        <div class="post-content">
          Looks like we can't find any results for that search. That sucks! Never fear though, we have plenty of other content over <a href="<?php bloginfo('url'); ?>">here</a>
        </div>
        <br />
      </div>
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
	
</div><!-- #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
