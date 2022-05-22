<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package supera
 */

?>
<div class="d-flex justify-content-center">
<ul class="  categorias ">
	<!-- Listagem de Categorias -->
	<?php
	$args = array(
		'orderby'    => 'id',
		'order'      => 'ASC',
		'hide_if_empty'  => true
	);
	$postCats = get_categories($args);

	foreach ($postCats as $postCat) {
		//listagem de atributos de categoria
		$category = get_the_category();
		$categoryId = $postCat->cat_ID;
		$categoryLink = $postCat->slug;
		$categoryColor = get_term_meta($categoryId, 'color', true);
		$categoryIcon = get_term_meta($categoryId, 'icon', true);
		$categoryName = get_cat_name($categoryId);
		?>
		<!-- item Categoria -->
		<li class="blogcategorias font-weight-bold orange-text " style="list-style-type: none; background-color: <?php echo $categoryColor ?>">
			<a class="item_categoria w-100 h-100 h4-responsive mx-4 font-weight-normal blue-text" href="<?php echo esc_url(home_url('/')); ?>blog/category/<?php echo $categoryLink ?>" title="Ir para esta categoria">
				<!-- icone -->
				<i class="<?php echo $categoryIcon ?> pt-3 pb-4"></i>
				<!-- nome -->
				<span class="blogcategorias"><?php echo $categoryName ?></span>
			</a>
		</li>
	<?php }
	wp_reset_postdata(); ?>
</ul>
</div>