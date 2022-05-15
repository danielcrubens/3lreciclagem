<?php 
get_header() ?>

<main class="mt-0 pt-5  d-none">
  <div class="container-fluid ">
    <section class="text-center">
      <div class="row mb-4 wow fadeIn ">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
            <div class=" col-lg-6 py-0  ">
              <div class=" overlay zoom ">
                <div class="view view-cascade overlay ">
                  <a href="<?php the_permalink(); ?>">
                 <?php the_post_thumbnail('', array('class' => 'img-fluid')); ?> 

                   <!--  <?php if ( has_post_thumbnail()) the_post_thumbnail('home-thumb', array('class' => 'img-fluid ')); ?> -->
                  </a>
                </div>
                <div class="card-body z-depth-2  box-blog  text-left  ">
                  <h4 class="grey-darken-2 font-weight-bold"> <a href="<?php the_permalink(); ?>"> <?php title_limite(); ?></a></h4>
                  <p class="card-text "><?php the_excerpt(); ?></p>
                  <a href="<?php the_permalink(); ?>">
                  </a>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php else : get_404_template();
        endif; ?>
    </section>
    <div class="blog-pagination border-0 d-flex justify-content-center">
      <?php echo bootstrap_pagination(); ?>
    </div>
  </div>
</main>