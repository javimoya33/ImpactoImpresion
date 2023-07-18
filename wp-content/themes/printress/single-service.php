<?php
$printress_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php 
while (have_posts()): the_post();
?>
<main>
	<section class="page-title-area breadcrumb-spacing" data-background="<?php the_post_thumbnail_url(); ?>">
		<div class="container">
			<div class="row">
				<div class="col-xxl-12">
					<div class="page-title-wrapper">
						<h3 class="page-title mb-25"><?php the_title(); ?></h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="bd-details__area pt-120 pb-60">
		<div class="container">
			<div class="row">
				<div class="col-xl-8">
					<div class="bd-details__content mb-60">
						<div class="bd-details__content--thum br-img-6 w-img mb-50">
							<img src="<?php the_post_thumbnail_url(); ?>">
						</div>
						<h4 class="bd__title-xs mb-15"><?php the_title(); ?></h4>
						<?php the_content(); ?>
					</div>
				</div>
				<div class="col-xl-4">
					<div class="bd-details-sidebar mb-60">
						<?php get_sidebar('service'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php endwhile; ?>
<?php get_footer(); ?>