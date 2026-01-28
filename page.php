<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div id="posts">
            <div id="post-wrapper">
                <div id="page" class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
                <div id="post-content">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; ?>
        <center style="font-size: 15px; font-weight: bold; text-transform: capitalize;">
            <b><?php edit_post_link('Editar p&aacute;gina.', '<p>', '</p>'); ?></b>
        </center>
        <br /> <br />
        </div>
    <?php endif; ?>
    <?php get_footer(); ?>