<?php
$async = $_GET['async'];
if (!$async){?>
	<?php get_header(); ?>
	<div id="frame" class="post-frame">
	<?php include(TEMPLATEPATH . '/menu.php'); ?>
	<article class="main">	
		<section class="panel post-panel">
			<div class="panel-wrap">
				<div class="panel-content">
<?php } ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<h1><?php the_title(); ?></h1>
	<div class="category">
		Category: <?php the_category(', '); ?>					
	</div>

<div class="work-image">
		<?php if(has_post_thumbnail()): the_post_thumbnail('large'); endif; ?>
</div>
<div class="content">
	<?php the_content(); ?>
</div>
<?php comments_template(); ?>
<?php endwhile; endif; ?>

<?php if (!$async){ ?>
				</div>
			</div>
			<div class="panel-move to-top"></div>
			<div class="panel-move to-bottom"></div>
		</section>
		<section class="panel list-panel">
			<div class="panel-wrap">
				<div class="panel-content">
					Loading...
				</div>
			</div>
			<div class="panel-move to-top"></div>
			<div class="panel-move to-bottom"></div>
		</section>
	</article>
	<?php get_footer(); ?>
<?php } ?>