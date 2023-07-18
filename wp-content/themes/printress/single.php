<?php
$printress_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php 
while (have_posts()): the_post();
?>
<main>
	<section class="page-title-area breadcrumb-spacing" data-background="<?php echo esc_url($printress_redux_demo['blog_bg']['url']); ?>">
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
	<section class="bd-blog__area bd-blog__area1 pt-135 pb-60">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-7">
					<div class="bd-blog__box-wrap">
						<div class="bd-blog__box mb-60">
							<article>
								<div class="bd-blog__item p-relative">
									<?php if ( has_post_thumbnail() ) { ?>
										<div class="bd-blog__thum w-img">
											<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
										</div>
									<?php } ?>
									<div class="bd-blog__content white-bg-2 bd-blog-padding">
										<div class="bd-blog__category">
											<?php echo get_the_category_list(); ?>
										</div>
										<h3 class="bd-blog__title-xl mb-25"><?php the_title(); ?></h3>
										<div class="bd-blog__meta two">
											<span><i class="far fa-user"></i> By <?php echo get_the_author_posts_link(); ?></span>
											<span><i class="far fa-comments"></i> <?php comments_number( esc_html__('0 Comments', 'printress'), esc_html__('1 Comment', 'printress'), esc_html__('% Comments', 'printress') ); ?></span>
											<span><i class="far fa-calendar-alt"></i> <?php echo get_the_date('jS F Y'); ?></span>
										</div>
										<?php the_content(); ?>
										<div class="bd-blog__tag mb-40">
											<h3 class="bd-blog__title-md mb-15">Releted Tags</h3>
											<div class="tag-wrap">
												<?php echo get_the_tag_list(); ?>
											</div>
										</div>
										<div class="bd-post-comments">
											<?php comments_template();?>
										</div>
									</div>
								</div>
							</article>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-5">
					<div class="bd-blog__sidebar">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php endwhile; ?>
<?php get_footer(); ?>