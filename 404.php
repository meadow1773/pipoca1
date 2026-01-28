<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="posts">
    <div id="post-wrapper">
        <div id="post-content">
            <h2>Oops!</h2><br />
            A p&aacute;gina que voc&ecirc; estava procurando n&atilde;o foi encontrada. <br />
            Tente pesquisar usando outra palavra-chave. <br />
            <br />
            <span class="error"><?php get_search_form($echo = true); ?></span>
        </div>
    </div>
</div>
</div>
<?php get_footer(); ?>