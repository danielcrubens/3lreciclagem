<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!-- Favicon -->
  <?php wp_site_icon(); ?>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/mdb.min.css">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/main.css" />

  <?php wp_head(); ?>
</head>
<?php flush(); ?>

<body <?php body_class(); ?>>

  <header>
  </header>