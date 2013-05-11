<?php get_header(); ?>
<div id="content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
      <h2 class="post-title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
      <?php edit_post_link('<small>Edit this entry</small>','',''); ?>
      <div class="post-meta">
          <!--Categories:--> <?php //the_category(', ') ?>
          <div class="social-counts">
             <span class="author"><?php the_author_posts_link() ?></span> 
             <span class="comments-count"><a href="<?php comments_link(); ?>">Discussion(<fb:comments-count href=<?php the_permalink() ?>></fb:comments-count>)</a> <?php //comments_popup_link('Discussion(0)', 'Discussion(1)', 'Discussion(%)'); ?></span>
             <div class="social-buttons">
               <div class="twitter-share-button">
               	<!--<a href="http://twitter.com/share" class="twitter-share-button" 
                                                    data-text="<?php the_title(); ?>" 
                                                    data-count="horizontal" 
                                                    data-via="sidesixx" 
                                                    data-url="<?php the_permalink(); ?>">Tweet
                </a>-->
                 <a href="http://twitter.com/share?url=<?php urlencode(the_permalink()); ?>&amp;text=<?php the_title(); ?>&amp;text=<?php the_title(); ?>&amp;via=sidesixx" class="twitter-share-button">Tweet</a>
               </div>
               &nbsp;
               <div class="facebook-like-button">
					<fb:like href="<?php urlencode(the_permalink()); ?>" layout="button_count" show_faces="false" width="65"></fb:like>

                 <!--<iframe src="http://www.facebook.com/plugins/like.php?href=<?php urlencode(the_permalink()); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=250&amp;action=like&amp;colorscheme=light&amp;height=21" 
                             scrolling="no" 
                             frameborder="0" 
                             style="border:none; 
                             overflow:hidden; 
                             width:78px; 
                             height:21px;" 
                             allowTransparency="true">
                 </iframe>-->
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
       <?php the_content(); ?>
      </div>
      
      <div class="pagination">
          <?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
        </div><!--.pagination-->
      <div class="post-categories"><?php the_tags('Filed Under: ', ', ', ''); ?></div>
    </div>
</div>
<nav class="oldernewer">
		<div class="older">
			<p>
			<?php previous_post_link('%link', '&laquo; Previous post') ?> <!-- outputs a link to the previous post, if there is one -->			
			</p>
		</div><!--.older-->
		<div class="newer">
			<p>
			<?php next_post_link('%link', 'Next Post &raquo;') ?> <!-- outputs a link to the next post, if there is one -->			
			</p>
		</div><!--.older-->
	</nav><!--.oldernewer-->
		
		
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

		<?php comments_template( '', true ); ?>

	<?php endwhile; ?><!--end loop-->
</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>