<?php 
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
				<div class="col-xl-8 col-lg-7">
					<div class="bd-blog__box-wrap">
						<?php  
						$wp_query = new \WP_Query(array('post_type' => 'post','paged' => $paged,  'orderby' => 'ID', 'order' => 'ASC'));
							while($wp_query->have_posts()): $wp_query->the_post(); 
								$blog_content = get_post_meta(get_the_ID(),'_cmb_content_excerpt', true);
						?>
							<div class="bd-blog__box mb-60">
								<article>
									<div class="bd-blog__item p-relative">
										<div class="bd-blog__thum w-img">
											<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>"></a>
										</div>
										<div class="bd-blog__content white-bg-2 bd-blog-padding">
											<div class="bd-blog__category">
												<?php echo get_the_category_list(); ?>
											</div>
											<h3 class="bd-blog__title-xl mb-25"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
											<div class="bd-blog__meta two mb-30">
												<span><i class="far fa-user"></i> By <?php echo get_the_author_posts_link(); ?></span>
												<span><i class="far fa-comments"></i> <?php comments_number( esc_html__('0 Comments', 'printress'), esc_html__('1 Comment', 'printress'), esc_html__('% Comments', 'printress') ); ?></span>
												<span><i class="far fa-calendar-alt"></i> <?php echo get_the_date('jS F Y'); ?></span>
											</div>
											<div class="bd-blog__text mb-35">
												<?php if ( '' !== wp_specialchars_decode($blog_content)): ?>
													<p><?php print wp_specialchars_decode($blog_content); ?></p>
												<?php else:?>
													<p>
														<?php if(isset($printress_redux_demo['blog_excerpt'])){?>
														<?php echo esc_attr(printress_excerpt($printress_redux_demo['blog_excerpt'])); ?>
														<?php }else{?>
														<?php echo esc_attr(printress_excerpt(40)); 
														}?>
													</p>
												<?php endif ?>
											</div>
											<div class="bd-blog-bottom">
												<a class="theme-btn" href="<?php the_permalink(); ?>">Learn More <i class="fal fa-arrow-alt-right"></i></a>
											</div>
										</div>
									</div>
								</article>
							</div>
						<?php endwhile; ?>
					</div>
					<div class="pagination-wrap">
                    	<?php printress_pagination();?>
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
<?php
get_footer();
?>