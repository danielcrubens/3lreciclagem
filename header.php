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
    <nav class="navbar navbar-expand-lg navbar-dark primary-color">
      <?php the_custom_logo(); ?>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse container" id="basicExampleNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Sobre nós
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Parceiros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contato</a>
          </li>
        </ul>
    </nav>
    <!--/.Navbar-->
  </header>