<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<?php $printress_redux_demo = get_option('redux_demo'); ?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {?>
		<link rel="shortcut icon" type="image/x-icon" href="<?php if(isset($printress_redux_demo['favicon']['url'])){?><?php echo esc_url($printress_redux_demo['favicon']['url']); ?><?php }?>">
	<?php }?>
	<?php wp_head(); ?>
</head>
<body class="error-page">
	<header>
		<div class="white-bg-2">
			<div class="bd-header__wrapper p-relative">
				<div class="bd-header__bottom white-bg bd-header__bottom2 d-none d-lg-block">
					<div class="bd-header__bottom-wrapper">
						<div class="container">
							<div class="row align-items-center justify-content-center">
								<div class="col-xxl-2 col-xl-2 col-lg-2">
									<div class="logo">
										<?php if (isset($printress_redux_demo['logo_black']['url']) && $printress_redux_demo['logo_black']['url'] != '') {?>
											<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($printress_redux_demo['logo_black']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>"></a>
										<?php } else{ ?>
											<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo-black.png" alt="<?php bloginfo( 'name' ); ?>"></a>
										<?php } ?>
									</div>
								</div>
								<div class="col-xxl-8 col-xl-7 col-lg-10">
									<div class="main-menu inner-page-menu text-lg-end text-xl-center">
										<nav id="mobile-menu">
											<?php
												wp_nav_menu(
												array(
													'theme_location'    => 'primary',
													'container'         => '',
													'menu_class'        => '',
													'menu_id'           => '',
													'menu'              => '',
													'container_class'   => '',
													'container_id'      => '',
													'echo'              => true,
													'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
													'walker'            => new printress_wp_bootstrap_navwalker(),
													'before'            => '',
													'after'             => '',
													'link_before'       => '',
													'link_after'        => '',
													'items_wrap'        => '<ul class="%2$s">%3$s',
													'depth'             => 0,
													)
												);
											?>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bd-mobile__header pt-15 pb-10 d-block d-lg-none">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-6">
								<div class="bd-mobile__logo">
									<?php if (isset($printress_redux_demo['logo_black']['url']) && $printress_redux_demo['logo_black']['url'] != '') {?>
										<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($printress_redux_demo['logo_black']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>"></a>
									<?php } else{ ?>
										<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo-black.png" alt="<?php bloginfo( 'name' ); ?>"></a>
									<?php } ?>
								</div>
							</div>
							<div class="col-6">
								<div class="header__toggle-btn sidebar-toggle-btn text-end d-block d-lg-none">
									<div class="header__bar">
										<span></span>
										<span></span>
										<span></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sidebar__area">
			<div class="sidebar__wrapper">
				<div class="sidebar__content">
					<div class="sidebar__content-top p-relative">
						<div class="sidebar__logo mb-50">
							<?php if (isset($printress_redux_demo['logo_black']['url']) && $printress_redux_demo['logo_black']['url'] != '') {?>
								<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($printress_redux_demo['logo_black']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>"></a>
							<?php } else{ ?>
								<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo-black.png" alt="<?php bloginfo( 'name' ); ?>"></a>
							<?php } ?>
						</div>
						<div class="sidebar__close">
							<button class="sidebar__close-btn" id="sidebar__close-btn">
								<i class="fal fa-times"></i>
							</button>
						</div>
					</div>
					<div class="mobile-menu fix mb-30 mean-container"> 
					</div>
				</div>
			</div>
		</div>
		<div class="body-overlay"></div>
		<div class="bd-sticky menu-sticky white-bg menu-hide">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xxl-2 col-xl-2 col-lg-2 col-6">
						<div class="bd-sticky__logo">
							<?php if (isset($printress_redux_demo['logo_black']['url']) && $printress_redux_demo['logo_black']['url'] != '') {?>
								<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($printress_redux_demo['logo_black']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>"></a>
							<?php } else{ ?>
								<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo-black.png" alt="<?php bloginfo( 'name' ); ?>"></a>
							<?php } ?>
						</div>
					</div>
					<div class="col-xxl-8 col-xl-7 col-lg-10 col-6">
						<div class="main-menu d-none inner-page-menu d-lg-block text-lg-end text-xl-center">
							<nav>
								<?php
									wp_nav_menu(
									array(
										'theme_location'    => 'primary',
										'container'         => '',
										'menu_class'        => '',
										'menu_id'           => '',
										'menu'              => '',
										'container_class'   => '',
										'container_id'      => '',
										'echo'              => true,
										'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
										'walker'            => new printress_wp_bootstrap_navwalker(),
										'before'            => '',
										'after'             => '',
										'link_before'       => '',
										'link_after'        => '',
										'items_wrap'        => '<ul class="%2$s">%3$s',
										'depth'             => 0,
									)
								); ?>
							</nav>
						</div>
					</div>
					<div class="col-xxl-2 col-xl-3 d-none d-xl-block">
						<div class="header__toggle-btn sidebar-toggle-btn text-end d-block">
							<div class="header__bar">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>