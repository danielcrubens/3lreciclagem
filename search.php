<?php get_header(); ?>
<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-left pt-0">
      </div>
    </div>
  </div>
</div>

<div class="container ">
  <div class="row">
    <div class="col-12">
      <?php
      // Se houver resultados exibe o conteúdo, se não exibe um formuládio de buscas
      if (is_search()) :
        $total_results = $wp_query->found_posts;
        echo "<h2 class='mb-0 h2-responsive grey-darken-2-text font-weight-normal text-center py-5'>" . sprintf(__('%s resultado(s) para "%s"', 'nobreplay'), $total_results, get_search_query()) . "</h2>";
      endif;
      ?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="container">
            <a href="<?php echo get_site_url() ?>/blog/<?php echo $post->guid; ?>">
              <h2 class=" h2-responsive" style="text-align: center;"><?php the_title(); ?></h2>


            </a>
            <div class="d-flex justify-content-center">
              <?php the_excerpt(); ?>
            </div>
          </div>
        <?php endwhile; ?>
      <?php else :
        echo "<p  class='text-center grey-text font-weight-normal '>Sua busca não econtrou resultados. Use o formulário abaixo para refazer a busca.</p>";
        get_search_form();
      endif; ?>
    </div>
  </div>
</div>
<div class="blog-pagination border-0 d-flex justify-content-center">
      <?php echo bootstrap_pagination(); ?>
    </div>
<?php get_footer(); ?>