<?php 
/*
 * Template Name: Blog Grid Width Sidebar Page
 * Description: A Page Template with a Page Builder design.
 */
$printress_redux_demo = get_option('redux_demo');
get_header(); 
?>
<main>
	<section class="page-title-area breadcrumb-spacing" data-background="<?php echo esc_url($printress_redux_demo['blog_bg']['url']); ?>">
		<div class="container">
			<div class="row">
				<div class="col-xxl-12">
					<div class="page-title-wrapper">
						<h3 class="page-title mb-25">
							<?php if(isset($printress_redux_demo['blog_title']) && $printress_redux_demo['blog_title']!=''){?>
							<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['blog_title']));?>
							<?php }else{?>
							<?php echo esc_html__( 'Blog', 'printress' );
							}?>
						</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="bd-blog__area bd-blog__area1 pt-135 pb-60">
		<div class="container">
			<div class="row">
				<div class="col-xl-8">
					<div class="bd-blog__box-wrap mb-60">
						<div class="row">
							<?php 
							$post_number = 6;
							$wp_query = new \WP_Query(array('posts_per_page' => $post_number, 'post_type' => 'post','paged' => $paged,  'orderby' => 'ID', 'order' => 'ASC'));
								while($wp_query->have_posts()): $wp_query->the_post(); 
									$blog_content = get_post_meta(get_the_ID(),'_cmb_content_excerpt', true);
									$title_recent = get_post_meta(get_the_ID(),'_cmb_title_excerpt', true);
							?>
								<div class="col-md-6">
									<div class="bd-blog__box mb-40">
										<article>
											<div class="bd-blog__item p-relative">
												<div class="bd-blog__thum w-img">
													<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>"></a>
												</div>
												<div class="bd-blog__content white-bg-2 three">
													<div class="bd-blog__category">
														<?php echo get_the_category_list(); ?>
													</div>
													<div class="bd-blog__meta">
														<span class="bd-blog__date"><?php echo get_the_date('F j, Y'); ?></span>
														<span class="bd-blog__admin">By <?php echo get_the_author_posts_link(); ?></span>
													</div>
													<h3 class="bd-blog__title"><a href="<?php the_permalink(); ?>">
														<?php if ('' != $title_recent) {?>
															<?php print wp_specialchars_decode($title_recent); ?>
														<?php } else {?>
															<?php the_title(); ?>  
														<?php } ?>
													</a></h3>
												</div>
											</div>
										</article>
									</div>
								</div>
							<?php endwhile; ?>
						 </div>
						<div class="row">
							<div class="col-12">
								<?php printress_pagination(); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4">
					<div class="bd-blog__sidebar">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
?>