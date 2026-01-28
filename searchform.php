<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="text" class="field" name="s" id="s" value="" placeholder="Pesquise cr&iacute;ticas, not&iacute;cias e colunas..." />
    <input type="image" class="submit" id="searchsubmit" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/search.png" />
</form>