<?php get_header(); ?>
<div class="sidebar-title-s">Destaques</div>
<div id="slider">
  <center style="margin-right: 20px;"><?php echo do_shortcode('[responsive_slider]'); ?></center>
</div>
<?php get_search_form($echo = true); ?>
<div class="sidebar-title-s">Posts Recentes</div>
<br />
<div id="posts-h">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div id="post-wrapper-h">
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
          <a href="<?php the_permalink() ?>">
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail();
            } else {
            }
            ?>
          </a>
          <div id="post-content">
            <?php the_excerpt(); ?>
            <br />
            <a href="<?php the_permalink() ?>">Continue lendo...</a>
          </div>
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