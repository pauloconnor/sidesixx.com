	<div id="tweet-dialog" title="Tweet">
		<IFRAME id="tweet-frame" style="border: 0px;" src="" width="800px" height="500px" ></iframe>
	</div>
	</div><!--.container-->
	<div class="clear"></div>
	</div><!--#main-->
	
	<div id="footer">
		<!--<div class="container">-->
		<div id="footer-nav">
			<a href="<?php bloginfo('url'); ?>"><div id="footer-banner"></div></a>
			<div id="footer-menu">
				<?php wp_nav_menu( array('menu' => 'Footer Menu', 'menu_id' => 'menu')); ?>
				<?php //wp_nav_menu( array('menu' => 'Footer Menu','menu_id' => 'menu' )); ?> <!-- editable within the Wordpress backend -->
			</div>
			<div id="footer-social">
				<div class="social-media-icon"> 
					<a target="_blank" href="http://www.facebook.com/pages/Sidesixx/155160954533827"><img class="icon" src="<?php bloginfo('template_directory'); ?>/images/icons/facebook.png" /></a> 
				</div> 
				<div class="social-media-icon"> 
					<a target="_blank" href="http://twitter.com/sidesixx"><img class="icon" src="<?php bloginfo('template_directory'); ?>/images/icons/twitter.png" /></a> 
				</div> 
				<div class="social-media-icon"> 
					<a target="_blank" href="<?php bloginfo('rss2_url'); ?>"><img class="icon" src="<?php bloginfo('template_directory'); ?>/images/icons/rss.png" /></a> 
				</div>
				<!--<div class="social-media-icon"> 
					<a target="_blank" href="<?php bloginfo('rss2_url'); ?>"><img class="icon" src="<?php bloginfo('template_directory'); ?>/images/icons/reddit.png" /></a> 
				</div>
				<div class="social-media-icon"> 
					<a target="_blank" href="<?php bloginfo('rss2_url'); ?>"><img class="icon" src="<?php bloginfo('template_directory'); ?>/images/icons/digg.png" /></a> 
				</div>-->
				&nbsp;
			</div>
      <div id="footer-info"> Copyright &copy; <?php echo date("Y") ?> <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>">Sidesixx.com</a> All Rights Reserved.</div>			
			</div>
	</div>

<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work properly -->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/jquery.hoverIntent.minified.js"></script>
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<script type="text/javascript">
		jQuery.noConflict();		

//JQuery
  jQuery("#tweet-dialog").dialog({
  bgiframe : true,
    autoOpen : false,
    draggable : false,
    width : 750,
    modal : true,
    buttons : {
      Close : function() {
        $(this).dialog('close');
      }
    },
    close : function() {
    }
  });

	jQuery(".entry").hoverIntent({
		over: makeTall,
		timeout: 100,
		out: makeShort
	});
	
	function makeTall(){ 
		jQuery(this).find('.thumbnail-text').animate({"marginTop": "-145px"},400).addClass('active');
		/*.find('.thumbnail_text').animate({"height":500},200);*/
		/*jQuery('.entry').not(this).animate({opacity:0.3},100);
		jQuery('.hide').not(this).animate({opacity:0.3},100);
		jQuery(this).css('opacity','1');*/
	}

	function makeShort(){ 
		/*jQuery(this).css('z-index','1').find('.thumbnail_text').animate({"height":75},200);
		jQuery('.hide').not(this).animate({opacity:1},100);*/
		jQuery('.entry').find('.thumbnail-text').removeClass('active').animate({"marginTop":0},200);
		
	} 

</script>

<script>
		  window.fbAsyncInit = function() {
		    FB.init({appId: '208310049185764', status: true, cookie: true,
		             xfbml: true});
		  };
		  (function() {
		    var e = document.createElement('script'); e.async = true;
		    e.src = document.location.protocol +
		      '//connect.facebook.net/en_US/all.js';
		    document.getElementById('fb-root').appendChild(e);
		  }());
		</script>
		
		<script>
			function tweet(url) {
				$("#tweet-frame").attr("src", url);
				$('#tweet-dialog').dialog('open');
			}
		</script>

<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

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