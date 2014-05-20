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
	<div id="frame" class="list <?php echo $categoryName;?>">
	<?php include(TEMPLATEPATH . '/menu.php'); ?>
	<article class="main">
		
		<section class="panel list illustration">
			<div class="panel-wrap">
				<div class="panel-content">
<?php } ?>

<?php if ($categoryName == 'illustration'){?>

<?php if (have_posts()) :?>
	<?php while (have_posts()) : the_post(); ?>
		<?php if(has_post_thumbnail()){
			the_post_thumbnail('thumbnail');
		}else{ ?>
			<img src="<?php bloginfo('template_url'); ?>/img/default-blog-thumbnail.jpg" />
		<?php } ?>		
		<h2>
			<a href="<?php the_permalink(); ?>" class="post-link" rel="<?php echo $categoryName;?>">					
				<?php the_title(); ?>
			</a>
		</h2>
		<div class="category">
			Category: <?php the_category(', '); ?>					
		</div>
		<?php the_excerpt(); ?>
	<?php endwhile; ?>
<?php else :?>
	<h2>Sorry, posts not found!</h2>
<?php endif; ?>

<?php }else{ ?>
	<?php if (!$async){?>
		<p>LOADING...</p>
	<?php } ?>
<?php } ?>

<?php if (!$async){?>
				</div>
			</div>
		</section>
		<section class="panel list design">
			<div class="panel-wrap">
				<div class="panel-content">
<?php } ?>

<?php if ($categoryName == 'design'){?>

<?php if (have_posts()) :?>
	<?php while (have_posts()) : the_post(); ?>
		<?php if(has_post_thumbnail()){
			the_post_thumbnail('thumbnail');
		}else{ ?>
			<img src="<?php bloginfo('template_url'); ?>/img/default-blog-thumbnail.jpg" />
		<?php } ?>		
		<h2>
			<a href="<?php the_permalink(); ?>" class="post-link" rel="<?php echo $categoryName;?>">					
				<?php the_title(); ?>
			</a>
		</h2>
		<div class="category">
			Category: <?php the_category(', '); ?>					
		</div>
		<?php the_excerpt(); ?>
	<?php endwhile; ?>
<?php else :?>
	<h2>Sorry, posts not found!</h2>
<?php endif; ?>

<?php }else{ ?>
<?php if (!$async){?>
<p>LOADING...</p>
<?php } ?>
<?php } ?>

<?php if (!$async){?>
				</div>
			</div>
		</section>
		<section class="panel list blog">
			<div class="panel-wrap">
				<div class="panel-content">
<?php } ?>

<?php if ($categoryName == 'blog'){?>

<?php if (have_posts()) :?>
	<?php while (have_posts()) : the_post(); ?>
		<?php if(has_post_thumbnail()){
			the_post_thumbnail('thumbnail');
		}else{ ?>
			<img src="<?php bloginfo('template_url'); ?>/img/default-blog-thumbnail.jpg" />
		<?php } ?>		
		<h2>
			<a href="<?php the_permalink(); ?>" class="post-link" rel="<?php echo $categoryName;?>">					
				<?php the_title(); ?>
			</a>
		</h2>
		<div class="category">
			Category: <?php the_category(', '); ?>					
		</div>
		<?php the_excerpt(); ?>
	<?php endwhile; ?>
<?php else :?>
	<h2>Sorry, posts not found!</h2>
<?php endif; ?>

<?php }else{ ?>
<?php if (!$async){?>
<p>LOADING...</p>
<?php } ?>
<?php } ?>

<?php if (!$async){ ?>
				</div>
			</div>
		</section>
		<section class="panel post illustration">
			<div class="panel-wrap">
				<div class="panel-content">
					<p>LOADING...</p>
				</div>
			</div>
		</section>
		<section class="panel post design">
			<div class="panel-wrap">
				<div class="panel-content">
					<p>LOADING...</p>
				</div>
			</div>
		</section>
		<section class="panel post blog">
			<div class="panel-wrap">
				<div class="panel-content">
					<p>LOADING...</p>
				</div>
			</div>
		</section>
	</article>	
	<?php get_footer(); ?>
<?php } ?>