<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-213462939-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-213462939-1');
</script>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!-- Favicon -->
  <?php wp_site_icon(); ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800;900&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/mdb.min.css">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/main.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">

  <?php wp_head(); ?>
</head>
<?php flush(); ?>
<body <?php body_class(); ?>>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar d-none d-lg-block">
      <div class="container ">
        <?php the_custom_logo(); ?>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div id="meuMenu" class="collapse navbar-collapse container">
          <ul class="navbar-nav ml-auto">
            <li class="d-flex align-items-center mx-lg-3 ">
              <a class="d-block links " href="#sobre">Sobre nós
              </a>
            </li>
            <li class="d-flex align-items-center mx-lg-3">
              <a class="d-block links" href="#servicos">Serviços</a>
            </li>
            <li class="d-flex align-items-center mx-lg-3 mx-lg-3">
              <a class="d-block links" href="#parceiros">Parceiros</a>
            </li>
            <li class="d-flex align-items-center mx-lg-3 mx-lg-3">
              <a class="d-block btn-3l btn-swipe angle" href="#contato"><span>Contato</span></a>
            </li>
          </ul>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar z-depth-1 d-lg-none">
      <?php the_custom_logo(); ?>
      <button class="navbar-toggler first-button" type="button" data-toggle="collapse" data-target="#mobile" aria-controls="mobile" aria-expanded="false" aria-label="Toggle navigation">
        <div class="animated-icon1"><span></span><span></span><span></span></div>
      </button>
      <div class="collapse navbar-collapse red " id="mobile">
      <ul class="navbar-nav ml-auto">
            <li class="d-flex align-items-center mx-lg-3 ">
              <a class="d-block links " href="#sobre">Sobre nós
              </a>
            </li>
            <li class="d-flex align-items-center mx-lg-3">
              <a class="d-block links" href="#servicos">Serviços</a>
            </li>
            <li class="d-flex align-items-center mx-lg-3 mx-lg-3">
              <a class="d-block links" href="#parceiros">Parceiros</a>
            </li>
            <li class="d-flex align-items-center mx-lg-3 mx-lg-3">
              <a class="d-block btn-3l btn-swipe angle" href="#contato"><span>Contato</span></a>
            </li>
          </ul>

      </div>


    </nav>
  </header>