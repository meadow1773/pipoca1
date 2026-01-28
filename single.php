<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div id="posts">
      <div id="post-wrapper">
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="date">
            <div class="day"><?php the_time('d') ?></div>
            <div class="month"><?php the_time('M') ?></div>
            <div class="year"><?php the_time('Y') ?></div>
          </div>
          <div class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
          <div class="sub-title">Categorias&#58; <?php the_category(', ') ?> &bull; Postado por&#58; <?php the_author(); ?> <?php edit_post_link(__('Editar'), ' ( ', ' ) '); ?></div>
          <div id="post-content">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
      <br /> <br />
    <?php endwhile; ?>
    <div id="post-wrapper">
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td style="border: none;"><?php if (function_exists('get_avatar')) {
                                      echo get_avatar(get_the_author_meta('email'), '100');
                                    } ?></td>
          <td style="border: none; padding-right: 10px;">
            <div class="sidebar-title-s"><?php the_author(); ?></div><?php the_author_meta('description'); ?>
          </td>
        </tr>
      </table>
    </div>
    <?php comments_template(); ?>
    </div>
  <?php endif; ?>
  <?php get_footer(); ?>