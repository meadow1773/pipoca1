<?php get_header(); ?>
<div id="sidebar">
  <?php echo category_description($category_id); ?>
  <?php if (is_active_sidebar('side_2')) : ?>
    <?php dynamic_sidebar('side_2'); ?>
  <?php endif; ?>
</div>
<div id="posts-h">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div id="post-wrapper-h">
        <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td class="date-h">
              <div class="day"><?php the_time('d') ?></div>
              <div class="month"><?php the_time('M') ?></div>
              <div class="year"><?php the_time('Y') ?></div>
            </td>
            <td class="post-title-h"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></td>
          </tr>
        </table>
        <div id="post-content">
          <a href="<?php the_permalink() ?>">
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail();
            } else {
            }
            ?>
          </a>
          <?php the_excerpt(); ?>
          <br />
          <a href="<?php the_permalink() ?>">Continue lendo...</a>
        </div>
      </div>
    <?php endwhile; ?>
    <div id="wp-pagenavi">
      <center><?php if (function_exists('wp_pagenavi')) {
                wp_pagenavi();
              } ?></center>
    </div>
</div>
<?php endif; ?>
<?php get_footer(); ?>