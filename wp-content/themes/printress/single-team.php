<?php
$printress_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php 
while (have_posts()): the_post();
	$team_job = get_post_meta(get_the_ID(),'_cmb_team_job', true);
	$team_phone_1 = get_post_meta(get_the_ID(),'_cmb_team_phone_1', true);
	$team_phone_2 = get_post_meta(get_the_ID(),'_cmb_team_phone_2', true);
	$team_email_1 = get_post_meta(get_the_ID(),'_cmb_team_email_1', true);
	$team_email_2 = get_post_meta(get_the_ID(),'_cmb_team_email_2', true);
	$team_social_text = get_post_meta(get_the_ID(),'_cmb_team_social_text', true);
	$social_1 = get_post_meta(get_the_ID(),'_cmb_social_1', true);
	$social_2 = get_post_meta(get_the_ID(),'_cmb_social_2', true);
	$social_3 = get_post_meta(get_the_ID(),'_cmb_social_3', true);
	$social_4 = get_post_meta(get_the_ID(),'_cmb_social_4', true);
	$social_5 = get_post_meta(get_the_ID(),'_cmb_social_5', true);
?>
<main>
	<section class="page-title-area breadcrumb-spacing" data-background="<?php echo get_template_directory_uri();?>/assets/img/breadcrumb/breadcrumb-img.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xxl-12">
					<div class="page-title-wrapper">
						<h3 class="page-title mb-25">Team Details</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="bd-details__area bd-team__details pt-120 pb-60">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-7 order-lg-2">
					<div class="bd-details__content bd-details__content-padd mb-30">
						<div class="bd-team__biodata wow fadeInUp" data-wow-delay=".3s">
							<div class="bd-team__d-name mb-25">
								<h4 class="bd__title-xs mb-10"><?php the_title(); ?></h4>
								<span class="bd-team__designation"><?php print wp_specialchars_decode($team_job); ?></span>
							</div>
							<div class="bd-team__info mb-35 bd-team-info-space theme-bg border-radius-6 wow fadeInUp" data-wow-delay=".4s">
								<div class="bd-team-info__item text-center">
									<h4 class="bd-team-info__item--title"><?php print wp_specialchars_decode($team_phone_1); ?></h4>
									<a href="tel:<?php print wp_specialchars_decode($team_phone_2); ?>"><?php print wp_specialchars_decode($team_phone_2); ?></a>
								</div>
								<div class="bd-team-info__item text-center">
									<h4 class="bd-team-info__item--title"><?php print wp_specialchars_decode($team_email_1); ?></h4>
									<a href="mailto:raymon@gmail.com"><?php print wp_specialchars_decode($team_email_2); ?></a>
								</div>
								<div class="bd-team-info__item text-center">
									<h4 class="bd-team-info__item--title">Social</h4>
									<div class="bd-team-info-social">
										<ul>
											<?php if ('' != $social_1): ?>
												<?php print wp_specialchars_decode($social_1); ?>
											<?php endif ?>
											<?php if ('' != $social_2): ?>
												<?php print wp_specialchars_decode($social_2); ?>
											<?php endif ?>
											<?php if ('' != $social_3): ?>
												<?php print wp_specialchars_decode($social_3); ?>
											<?php endif ?>
											<?php if ('' != $social_4): ?>
												<?php print wp_specialchars_decode($social_4); ?>
											<?php endif ?>
											<?php if ('' != $social_5): ?>
												<?php print wp_specialchars_decode($social_5); ?>
											<?php endif ?>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<?php the_content(); ?>
					</div>
				</div>

				<div class="col-xl-4 col-lg-5 order-lg-1">
					<div class="bd-details__content bd-details__content-padd mb-30">
						<div class="bd-team__biodata wow fadeInUp" data-wow-delay=".3s">
							<?php if ( has_post_thumbnail() ) { ?>
								<div class="col-lg-12 bd-team__thum mb-50 w-img d-block br-img-6">
									<img src="<?php the_post_thumbnail_url(); ?>" alt="team image">
								</div>
							<?php } ?>
						</div>
					</div>
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