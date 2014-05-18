<?php
$async = $_GET['async'];
if (!$async){?>
	<?php get_header(); ?>
	<div id="frame" class="list-frame">
	<?php include(TEMPLATEPATH . '/menu.php'); ?>
	<article class="main">
		<section class="panel post-panel">
			<div class="panel-wrap">
				<div class="panel-content">
					Loading...
				</div>
			</div>
			<div class="panel-move to-top"></div>
			<div class="panel-move to-bottom"></div>
		</section>
		<section class="panel list-panel">
			<div class="panel-wrap">
				<div class="panel-content">
<?php } ?>



					<h1>List</h1>
					<?php if (have_posts()) :?>
				<?php while (have_posts()) : the_post(); ?>	    
				<figure>			
					<a href="<?php the_permalink(); ?>" class="explain-work open-work" rel="<?php the_ID();?>">
						<span class="hover"></span>
						<?php if(has_post_thumbnail()): the_post_thumbnail('portfolio-thumb'); endif; ?>	
					</a>									
					<figcaption>
						<h2><a href="<?php the_permalink(); ?>" class="open-work" rel="<?php the_ID();?>"><?php the_title(); ?></a></h2>
						<div class="categories"><?php the_category(', '); ?></div>
					</figcaption>						
				</figure>	   
				<?php endwhile; ?>
				<?php else :?>
				<h2>Sorry, works not found</h2>
				<?php endif; ?>




<?php if (!$async){ ?>					
				</div>
			</div>
			<div class="panel-move to-top"></div>
			<div class="panel-move to-bottom"></div>
		</section>
	</article>	
	<?php get_footer(); ?>
<?php } ?>