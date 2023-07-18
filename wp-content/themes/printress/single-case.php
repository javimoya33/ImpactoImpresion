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
	<section class="bd-case-details-area pt-120 pb-85">
		<div class="container">
			<div class="bd-case-details-wrapper wow fadeInUp" data-wow-delay=".3s">
				<div class="bd-case-thumb br-img-6 w-img">
					<img src="<?php the_post_thumbnail_url(); ?>" alt="case">
				</div>
				<div class="bd-case-meta-wrapper">
					<div class="bd-case-meta">
						<div class="meta-list">
							<div class="meta-item">
								<span>Author:</span>
								<p><?php echo get_the_author_posts_link(); ?></p>
							</div>
							<div class="meta-item">
								<span>Date:</span>
								<p><?php echo get_the_date('F j, Y'); ?></p>
							</div>
							<div class="meta-item">
								<span>Category:</span>
								<p>Digital Marketing</p>
							</div>
						</div>
					</div>
				</div>
				<?php the_content(); ?>
			</div>
		</div>
	</section>
</main>
<?php endwhile; ?>
<?php get_footer(); ?>