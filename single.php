<?php
$async = $_GET['async'];

$category_id_illustration = get_cat_ID('Illustration');
$category_id_design = get_cat_ID('Design');

if (in_category($category_id_illustration)|| post_is_in_descendant_category($category_id_illustration)) {
	$categoryName = 'illustration';
} else if (in_category($category_id_design)|| post_is_in_descendant_category($category_id_design)) {
	$categoryName = 'design';
}else{
	$categoryName = 'blog';
}

if (!$async){?>
	<?php get_header(); ?>
	<div id="frame" class="post <?php echo $categoryName;?>">
	<?php include(TEMPLATEPATH . '/menu.php'); ?>
	<article class="main">
		<section class="panel list illustration">
			<div class="panel-wrap">
				<div class="panel-content">
					<p>LOADING...</p>
				</div>
			</div>
		</section>
		<section class="panel list design">
			<div class="panel-wrap">
				<div class="panel-content">
					<p>LOADING...</p>
				</div>
			</div>
		</section>
		<section class="panel list blog">
			<div class="panel-wrap">
				<div class="panel-content">
					<p>LOADING...</p>
				</div>
			</div>
		</section>
		<section class="panel post illustration">
			<div class="panel-wrap">
				<div class="panel-content">
<?php } ?>

<?php if ($categoryName == 'illustration'){?>
	
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
	<div class="category">
		Category: <?php the_category(', '); ?>					
	</div>
	<?php the_content(); ?>
	<?php comments_template(); ?>	
<?php endwhile; endif; ?>

<?php }else{ ?>
<?php if (!$async){?>
					<p>LOADING...</p>
<?php } ?>
<?php } ?>
<?php if (!$async){?>
				</div>
			</div>
		</section>
		<section class="panel post design">
			<div class="panel-wrap">
				<div class="panel-content">
<?php } ?>

<?php if ($categoryName == 'design'){?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
	<div class="category">
		Category: <?php the_category(', '); ?>					
	</div>
	<?php the_content(); ?>
	<?php comments_template(); ?>	
<?php endwhile; endif; ?>

<?php }else{ ?>
<?php if (!$async){?>
					<p>LOADING...</p>
<?php } ?>
<?php } ?>
<?php if (!$async){?>
				</div>
			</div>
		</section>
		<section class="panel post blog">
			<div class="panel-wrap">
				<div class="panel-content">
<?php } ?>

<?php if ($categoryName == 'blog'){?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
	<div class="category">
		Category: <?php the_category(', '); ?>					
	</div>
	<?php the_content(); ?>
	<?php comments_template(); ?>	
<?php endwhile; endif; ?>

<?php }else{ ?>
<?php if (!$async){?>
					<p>LOADING...</p>
<?php } ?>
<?php } ?>

<?php if (!$async){ ?>					
				</div>
			</div>
		</section>		
	</article>	
	<?php get_footer(); ?>
<?php } ?>