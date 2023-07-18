<?php $printress_redux_demo = get_option('redux_demo');?> 
    <footer>
		<div class="bd-footer__bottom3 theme-bg pt-25 pb-5">
			<div class="container">
					<div class="bd-footer__copy-text3 mb-20 text-center">
						<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['footer_copyright']));?>
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