<?php $printress_redux_demo = get_option('redux_demo');?> 
    <footer>
		<div class="bd-footer-2-wrapper p-relative bg-css pt-150 bd-footer-2-padd"  data-background="<?php echo esc_url($printress_redux_demo['footer_bg']['url']); ?>">
			<div class="bd-info p-absolute bd-info-positon wow fadeInUp" data-wow-delay=".3s">
				<div class="container">
					<div class="bd-info__wrapper black-bg border-radius-6 bd-shadow">
						<div class="row align-items-center">
							<div class="col-xxl-2 d-none d-xxl-block">
								<div class="bd-info__logo mb-25">
									<a href="<?php echo esc_url(home_url('/')); ?>">
										<?php if (isset($printress_redux_demo['logo_white']['url']) && $printress_redux_demo['logo_white']['url'] != '') {?>
											<img src="<?php echo esc_url($printress_redux_demo['logo_white']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>">
										<?php } else{ ?>
											<img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo-white.png" alt="<?php bloginfo( 'name' ); ?>">
										<?php } ?>
									</a>
								</div>
							</div>
							<div class="col-xxl-7 col-lg-8">
								<div class="bd-info__item-wrapper d-flex flex-wrap justify-content-center">
									<?php if(isset($printress_redux_demo['header_phone_number']) && $printress_redux_demo['header_phone_number']!=''){?>
										<div class="bd-info__item mb-25">
											<div class="bd-info__icon">
												<i class="flaticon-telephone-call"></i>
											</div>
											<div class="bd-info__text">
												<span class="bd-info__sub-title"><?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_phone_text']));?></span>
												<h4 class="bd-info__title"><a href="tel:<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_phone_number']));?>"><?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_phone_number']));?></a></h4>
											</div>
										</div>
									<?php } ?>
									<?php if(isset($printress_redux_demo['header_mail_address']) && $printress_redux_demo['header_mail_address']!=''){?>
										<div class="bd-info__item mb-25">
											<div class="bd-info__icon">
												<i class="flaticon-envelope"></i>
											</div>
											<div class="bd-info__text">
												<span class="bd-info__sub-title"><?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_mail_text']));?></span>
												<h4 class="bd-info__title"><a href="mailto:<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_mail_address']));?>"><?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_mail_address']));?></a></h4>
											</div>
										</div>
									<?php } ?>
									<?php if(isset($printress_redux_demo['header_office_address']) && $printress_redux_demo['header_office_address']!=''){?>
										<div class="bd-info__item mb-25">
											<div class="bd-info__icon">
												<i class="flaticon-map-pin"></i>
											</div>
											<div class="bd-info__text">
												<span class="bd-info__sub-title"><?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_address_text']));?></span>
												<h4 class="bd-info__title"><a href="<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_address_link']));?>"><?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_office_address']));?></a></h4>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
							<div class="col-xxl-3 col-lg-4">
								<div class="bd-info__social text-start text-lg-end mb-25">
									<ul>
										<?php if(isset($printress_redux_demo['footer_social_1']) && $printress_redux_demo['footer_social_1']!=''){?>
											<li><a href="<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['footer_social_1']));?>"><i class="fab fa-facebook-f"></i></a></li>
										<?php } ?>
										<?php if(isset($printress_redux_demo['footer_social_2']) && $printress_redux_demo['footer_social_2']!=''){?>
											<li><a href="<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['footer_social_2']));?>"><i class="fab fa-twitter"></i></a></li>
										<?php } ?>
										<?php if(isset($printress_redux_demo['footer_social_3']) && $printress_redux_demo['footer_social_3']!=''){?>
											<li><a href="<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['footer_social_3']));?>"><i class="fab fa-behance"></i></a></li>
										<?php } ?>
										<?php if(isset($printress_redux_demo['footer_social_4']) && $printress_redux_demo['footer_social_4']!=''){?>
											<li><a href="<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['footer_social_4']));?>"><i class="fab fa-youtube"></i></a></li>
										<?php } ?>
										<?php if(isset($printress_redux_demo['footer_social_5']) && $printress_redux_demo['footer_social_5']!=''){?>
											<li><a href="<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['footer_social_5']));?>"><i class="fab fa-linkedin"></i></a></li>
										<?php } ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bd-footer__top">
				<div class="container">
					<div class="bd-footer2__wrapper bd-footer__widget2 pb-50">
						<div class="row">
							<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
								<?php dynamic_sidebar( 'footer-1' ); ?>
							<?php endif; ?>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="bd-footer__copy-text two text-center">
								<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['footer_copyright']));?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div id="loading">
		<div id="loading-center">
			<div id="loading-center-absolute">
				<div class="loading-icon text-center d-flex flex-column align-items-center justify-content-center">
					<?php if (isset($printress_redux_demo['logo_black']['url']) && $printress_redux_demo['logo_black']['url'] != '') {?>
						<img src="<?php echo esc_url($printress_redux_demo['logo_black']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>">
					<?php } else{ ?>
						<img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo-black.png" alt="<?php bloginfo( 'name' ); ?>">
					<?php } ?>
					<img class="loading-logo" src="<?php echo get_template_directory_uri();?>/assets/img/logo/preloader.svg">
				</div>
			</div>
		</div>
	</div>
	<div class="progress-wrap">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
		</svg>
	</div>
	<?php wp_footer(); ?>
</body>
</html>