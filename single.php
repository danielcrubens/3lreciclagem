<?php get_template_part('template-parts/content', 'header-blog') ?>

<div class=" d-none  mt-md-5 mt-mobile">
	<?php if (has_post_thumbnail()) the_post_thumbnail('', array('class' => 'img-fluid w-100 ')); ?>
	<div class="mask  flex-center rgba-black-light">
		<div class="container-fluid">
			<div class="row align-items-end">
				<div class="single-blog ">
					<?php the_category(); ?>
				</div>
			</div>
			<h1 class=" h1-responsive white-text text-left py-3 "><?php the_title(); ?></h1>
		</div>
	</div>
</div>

<section class="mx-md-5  img-capa">
	<div class="row">
		<div class="col-md-12">
			<?php if (has_post_thumbnail()) the_post_thumbnail('', array('class' => 'img-fluid  ')); ?>			
		</div>
	</div>
</section>

<div class="container-fluid pl-lg-5 pr-lg-5 py-5 ">
	<section class="single-blog">
		<div class="row  d-flex justify-content-center">
				<div class="col-lg-10">
					<div class="row">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<div class="blog-post  text-justify ">
									<p class="text-muted">Por: <?php echo get_avatar(get_the_author_meta('ID'), 35); ?> <i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?><i class="far fa-clock ml-2"></i> <?php echo reading_time($post->ID); ?></p>
									<div class="content-single"><?php the_content(); ?></div>
								</div>
							<?php endwhile; ?>
						<?php else : get_404_template();
						endif; ?>
					</div>
				</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>