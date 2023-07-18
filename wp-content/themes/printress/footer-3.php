<?php $printress_redux_demo = get_option('redux_demo');?> 
    <footer>
		<div class="bd-footer__top black-bg pt-100">
			<div class="container">
				<div class="bd-footer3__wrapper pb-50">
					<div class="row">
						<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
							<?php dynamic_sidebar( 'footer-1' ); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="bd-footer__bottom3 theme-bg pt-25 pb-5">
			<div class="container">
				<div class="bd-footer__bottom3 d-flex flex-wrap align-items-center justify-content-between">
					<div class="bd-footer_bottom3 mb-20">
						<a href="<?php echo esc_url(home_url('/')); ?>">
							<?php if (isset($printress_redux_demo['logo_sticky']['url']) && $printress_redux_demo['logo_sticky']['url'] != '') {?>
								<img src="<?php echo esc_url($printress_redux_demo['logo_sticky']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>">
							<?php } else{ ?>
								<img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo-white-2.png" alt="<?php bloginfo( 'name' ); ?>">
							<?php } ?>
						</a>
					</div>
					<div class="bd-footer__copy-text3 mb-20 text-center">
						<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['footer_copyright']));?>
					</div>
					<div class="bd-footer-social three mb-20">
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
								<li><a href="<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['Nfooter_social_4']));?>"><i class="fab fa-youtube"></i></a></li>
							<?php } ?>
							<?php if(isset($printress_redux_demo['footer_social_5']) && $printress_redux_demo['footer_social_5']!=''){?>
								<li><a href="<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['footer_social_5']));?>"><i class="fab fa-linkedin"></i></a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div id="loading">
		<div id="loading-center">
			<div id="loading-center-absolute">
				<div class="loading-icon text-center d-flex flex-column align-items-center justify-content-center">
					<?php if (isset($printress_redux_demo['img_loading_1']['url']) && $printress_redux_demo['img_loading_1']['url'] != '') {?>
						<img src="<?php echo esc_url($printress_redux_demo['img_loading_1']['url']); ?>" >
					<?php } else{ ?>
						<img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo-black.png">
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