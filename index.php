<?php get_header(); ?>
<div class=" mt-5">
  <div class="container pt-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 mt-5 text-center">
        <div class=" container pl-0 pr-0">
          <form role="search" method="get" action="<?php echo home_url('/'); ?>" class="my-4 ">
            <div class="input-group sm-form flex-center">
              <input type="search" class="form-control rounded" value="<?php echo get_search_query(); ?>" name="s" placeholder="O que procura?" required>
              <div class="input-group-append">
                <button class="btn btn-sm btn-3l btn-swipe angle mx-0" type="submit"><i class="fas fa-search fa-2x pl-2 pr-2 white-text" aria-hidden="true"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<main class="mt-0 pt-0 blog">
  <div class="container">
    <section class="text-center">
      <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!--     <?php get_template_part('content'); ?> -->
            <div class="col-lg-4 col-md-6 mb-4 mt-4">
              <div class=" view zoom z-depth-3 rounded ">

                <?php the_post_thumbnail('post-thumbnail', array('class' => ' img-fluid')); ?>
                <div class="mask rgba-stylish-strong">
                  <div class="text-white text-center py-lg-5 py-0 my-0">
                    <h4 class="h4-responsive ">
                      <a href="<?php the_permalink(); ?>" class="text-white"><strong class=""><?php the_title(); ?></strong></a>
                    </h4>
                    <div class="index-blog ">
                      <?php the_category(); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php else : get_404_template();
        endif; ?>
      </div>
      <!--Pagination-->
      <div class="blog-pagination py-3 d-flex justify-content-center">
        <?php echo bootstrap_pagination(); ?>
      </div>
      <!--Pagination-->
    </section>

  </div>
</main>


<?php get_footer(); ?>
<style>
  .news-tile .card-title {
    /*       display: flex;
      align-items: center;
      justify-content: center; */
    background: red;
  }

  .rgba-stylish-strong {
    background-color: rgba(62, 69, 81, .5);
  }
</style>