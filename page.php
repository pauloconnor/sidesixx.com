<?php get_header(); ?>

<div id="content">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
      <article>
        <div id="page-header">
          <h1 class="post-title"><?php the_title(); ?></h1>
        </div>
        <div class="post post-bar">
        <?php edit_post_link('<small>Edit this entry</small>','',''); ?>
        <?php 
        if (has_post_thumbnail())
        {
          echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; 
        }
        ?> <!-- loades the post's featured thumbnail, requires Wordpress 3.0+ -->  
        <div id="page-content">
          <?php the_content(); ?>
          <div class="pagination">
            <?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
          </div><!--.pagination-->
        </div><!--#pageContent -->
        </div>
      </article>
    </div><!--#post-# .post-->

    <?php //comments_template( '', true ); ?>

  <?php endwhile; ?>
</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
