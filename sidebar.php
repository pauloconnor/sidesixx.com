<div id="sidebar">
  <div id="social-media-icons" class="widget">
    <div class="social-media-icon"> 
      <a href="http://www.facebook.com/pages/Sidesixx/155160954533827"><img class="icon" src="<?php bloginfo('template_directory'); ?>/images/icons/facebook-logo-square-webtreatsetc-64x64.png" /></a> 
    </div> 
    <div class="social-media-icon"> 
      <a href="http://twitter.com/sidesixx"><img class="icon" src="<?php bloginfo('template_directory'); ?>/images/icons/twitter-webtreatsetc-64x64.png" /></a> 
    </div> 
    <div class="social-media-icon"> 
      <a href="<?php bloginfo('url'); ?>/feed/rss"><img class="icon" src="<?php bloginfo('template_directory'); ?>/images/icons/rss-cube-webtreatsetc-64x64.png" /></a> 
    </div> 
  </div>
	<?php if ( ! dynamic_sidebar( 'Sidebar' )) : ?>
		<li class="sidebar-placement">
		  <!--<img src="http://placehold.it/300x300&text=Ad+Space">-->
		</li>
		
		<li class="widget-external">
  		<script src="http://widgets.twimg.com/j/2/widget.js"></script>
        <script>
        new TWTR.Widget({
          version: 2,
          type: 'profile',
          rpp: 4,
          interval: 6000,
          width: 300,
          height: 300,
          theme: {
            shell: {
              background: '#7A8187',
              color: '#000000'
            },
            tweets: {
              background: '#d6d9db',
              color: '#000000',
              links: '#ff8420'
            }
          },
          features: {
            scrollbar: true,
            loop: false,
            live: true,
            hashtags: true,
            timestamp: true,
            avatars: false,
            behavior: 'all'
          }
        }).render().setUser('sidesixx').start();
        </script>
    </li>
		
		<li class="widget-external">
		  <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FSidesixx%2F155160954533827&amp;width=300&amp;colorscheme=light&amp;show_faces=true&amp;stream=false&amp;header=false&amp;height=300" 
		      scrolling="no" 
		      frameborder="0" 
		      style="border:none; overflow:hidden; width:300px; height:300px;" 
		      allowTransparency="true">
		  </iframe>
		</li>
		
		
		<!--<li id="sidebar-nav" class="widget menu">
      <h3>Navigation</h3>
      <ul>
        <?php wp_nav_menu( array('menu' => 'Sidebar Menu' )); ?> 
      </ul>
    </li>-->
    
		<li class="sidebar-placement">
        <!--<img src="http://placehold.it/300x300&text=Ad+Space">-->
    </li>
    
    <li class="widget">
      <h3>Tags</h3>
      <?php wp_tag_cloud( $args ); ?>
    </li>
    
		<li id="sidebar-archives" class="widget">
			<h3>Recent Posts</h3>
			<ul>
				<?php wp_get_archives('title_li=&type=postbypost&limit=10'); ?>
			</ul>
		</li>
		
		



	<?php endif; ?>
</div><!--sidebar-->