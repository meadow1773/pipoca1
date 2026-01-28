<?php
add_theme_support('automatic-feed-links');
if (function_exists('register_sidebar'))
	register_sidebar(array(
		'name'		=> __('Rodape'),
		'id'		=> 'side_1',
		'before_widget'	=> '<div id="gadget">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<div class="sidebar-title">',
		'after_title'	=> '</div>',
	));
if (function_exists('register_sidebar'))
	register_sidebar(array(
		'name'		=> __('Lateral'),
		'id'		=> 'side_2',
		'before_widget'	=> '',
		'after_widget'	=> '</div><br />',
		'before_title'	=> '<div class="sidebar-title-s">',
		'after_title'	=> '</div><div id="gadget-s">',
	));
if (function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails');
}
function search_no_pages($query)
{
	if ($query->is_search) {
		$query->set('post_type', 'post');
	};
	return $query;
};
add_filter('pre_get_posts', 'search_no_pages');
remove_filter('pre_term_description', 'wp_filter_kses');
function novo_tamanho_do_resumo($length)
{
	return 40;
}
add_filter('excerpt_length', 'novo_tamanho_do_resumo');
