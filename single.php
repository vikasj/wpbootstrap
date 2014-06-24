<?php get_header(); ?>

<div class="row">
  <div class="col-md-8">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="well">
      <h1><?php the_title(); ?></h1>
      <?php echo get_the_post_thumbnail($page->ID, 'large'); ?>
      <p><em><?php the_time('l, F jS, Y'); ?></em></p>
      <?php the_content(); ?>
    </div>
    <hr>

    <?php comments_template(); ?>

  <?php endwhile; else: ?>
  <p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>
</div>

<div class="col-md-4">
  <?php get_sidebar(); ?>   
</div>
</div>

<?php get_footer(); ?>