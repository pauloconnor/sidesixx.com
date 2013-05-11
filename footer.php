	</div><!--.container-->
	<div class="clear"></div>
	<div id="footer">
		<div class="container">
		<div id="footer-nav">
      <?php wp_nav_menu( array('menu' => 'Footer Menu', 'menu_id' => 'menu')); ?>
      <ul class="menu">
        <li><?php wp_register(); ?></li>
        <li><?php wp_loginout(); ?></li>
        <li><?php wp_meta(); ?></li>
      </ul>
      <?php //wp_nav_menu( array('menu' => 'Footer Menu','menu_id' => 'menu' )); ?> <!-- editable within the Wordpress backend -->
    
      <div id="footer-info">  &copy; <?php echo date("Y") ?> <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a>. All Rights Reserved.</div>			
			<!--<p>
				<a href="<?php bloginfo('rss2_url'); ?>" rel="nofollow">Entries (RSS)</a> | <a href="<?php bloginfo('comments_rss2_url'); ?>" rel="nofollow">Comments (RSS)</a>
			</p>-->
			<!--
				The Whiteboard Framework is free to use. You are only required to keep a link in the CSS. We do not require a link on the site, though we do greatly appreciate it.
			-->
			<!--<p>
				Designed by <a href="mailto:paul@thissite.com">Paul O'Connor</a> on the <a href="http://whiteboardframework.com/">Whiteboard Framework for Wordpress</a>. Powered by <a href="http://wordpress.org">Wordpress</a>.
			</p>-->
			</div>
		</div><!--.container-->
	</div>
</div><!--#main-->
<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work properly -->

<!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet
       change the UA-XXXXX-X to be your site's ID -->
<script>
 var _gaq = [['_setAccount', 'UA-20654687-1'], ['_trackPageview']];
 (function(d, t) {
  var g = d.createElement(t),
      s = d.getElementsByTagName(t)[0];
  g.async = true;
  g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g, s);
 })(document, 'script');
</script>
</body>
</html>