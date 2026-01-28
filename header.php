<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta http-equiv="content-language" content="pt-br" />
  <title><?php wp_title('&#124;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <meta name="google-site-verification" content="osdAnEvXAtB3RgBR-cC-bjM-Ve113SNFC6V6WXTkRoM" />
  <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/favicon.ico">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="content">
    <div id="header">
      <div class="logo"><a href="<?php echo esc_url(home_url()); ?>"><img style="border: none; background: none; padding: 0; margin: 0;" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/header.png" /></a></div>
      <div class="menu"><?php wp_nav_menu(); ?></div>
      <div id="fb-root"></div>
      <script>
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s);
          js.id = id;
          js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=653351564722728&version=v2.0";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>
    </div>
    <div id="content-wrapper">