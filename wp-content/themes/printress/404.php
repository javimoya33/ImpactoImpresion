<?php 
$printress_redux_demo = get_option('redux_demo');
get_header('404'); 
?>
<main>
	<section class="breadcrumb-area breadcrumb-bg d-flex align-items-center" data-background="<?php echo esc_url($printress_redux_demo['404_bg']['url']); ?>">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="breadcrumb-content text-center">
						<h2>
							<?php if(isset($printress_redux_demo['404_title']) && $printress_redux_demo['404_title']!=''){?>
							<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['404_title']));?>
							<?php }else{?>
							<?php echo esc_html__( 'Page Not Found', 'printress' );
							}?>
						</h2>
						<nav aria-label="breadcrumb">
							<span class="breadcrumb-item">
								<a href="<?php echo esc_url(home_url('/')); ?>">
									<?php if(isset($printress_redux_demo['404_button']) && $printress_redux_demo['404_button']!=''){?>
									<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['404_button']));?>
									<?php }else{?>
									<?php echo esc_html__( 'Back to home', 'printress' );
									}?>
								</a>
							</span>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer('404');
?>