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
<body>
	<header>
		<div class="bd-header__position p-absolute white-bg-2">
			<div class="bd-header__wrapper p-relative">
				<div class="bd-header__top bd-header__top2 d-none d-md-block">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-sm-6">
								<div class="bd-header__top2-left d-flex align-items-center">
									<div class="bd-header__lang three">
										<div class="nice-select">
											<span>English</span>
											<ul class="list">
												<li data-value="EN" class="option selected focus">EN</li>
												<li data-value="CH" class="option">CH</li>
												<li data-value="AM" class="option">AM</li>
											</ul>
										</div>
									</div>
									<div class="bd-header__page">
										<ul>
											<li><a href="<?php echo esc_url(home_url('/')); ?>?page_id=129">Privacy & Policy</a></li>
											<li><a href="<?php echo esc_url(home_url('/')); ?>?page_id=125">Careers</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="bd-header__social-link f-right">
									<ul>
										<?php if(isset($printress_redux_demo['header_social_1']) && $printress_redux_demo['header_social_1']!=''){?>
											<li><a href="<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_social_1']));?>"><i class="fab fa-facebook-f"></i></a></li>
										<?php } ?>
										<?php if(isset($printress_redux_demo['header_social_2']) && $printress_redux_demo['header_social_2']!=''){?>
											<li><a href="<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_social_2']));?>"><i class="fab fa-twitter"></i></a></li>
										<?php } ?>
										<?php if(isset($printress_redux_demo['header_social_3']) && $printress_redux_demo['header_social_3']!=''){?>
											<li><a href="<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_social_3']));?>"><i class="fab fa-behance"></i></a></li>
										<?php } ?>
										<?php if(isset($printress_redux_demo['header_social_4']) && $printress_redux_demo['header_social_4']!=''){?>
											<li><a href="<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_social_4']));?>"><i class="fab fa-youtube"></i></a></li>
										<?php } ?>
										<?php if(isset($printress_redux_demo['header_social_5']) && $printress_redux_demo['header_social_5']!=''){?>
											<li><a href="<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_social_5']));?>"><i class="fab fa-linkedin"></i></a></li>
										<?php } ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bd-header__bottom bd-header__bottom2 d-none d-lg-block">
					<div class="bd-header__bottom-wrapper">
						<div class="container">
							<div class="white-bg bd-shadow border-radius-6 pl-20 pr-20">
								<div class="row align-items-center justify-content-center">
									<div class="col-xxl-2 col-xl-3 col-lg-2">
										<div class="logo">
											<a href="<?php echo esc_url(home_url('/')); ?>">
												<?php if (isset($printress_redux_demo['logo_black']['url']) && $printress_redux_demo['logo_black']['url'] != '') {?>
													<img src="<?php echo esc_url($printress_redux_demo['logo_black']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>">
												<?php } else{ ?>
													<img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo-black.png" alt="<?php bloginfo( 'name' ); ?>">
												<?php } ?>
											</a>
										</div>
									</div>
									<div class="col-xxl-8 col-xl-9 col-lg-10">
										<div class="main-menu main-menu2 t-center">
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
									<?php if(isset($printress_redux_demo['header_text_button']) && $printress_redux_demo['header_text_button']!='' && ($printress_redux_demo['header_link_button']) && $printress_redux_demo['header_link_button']!=''){?>
										<div class="col-xxl-2 d-none d-xxl-block">
											<div class="bd-header__top1-btn">
												<a class="theme-btn" href="<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_link_button']));?>"><?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_text_button']));?><i class="fal fa-arrow-alt-right"></i></a>
											</div>
										</div>
									<?php } ?>
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
									<a href="<?php echo esc_url(home_url('/')); ?>">
										<?php if (isset($printress_redux_demo['logo_black']['url']) && $printress_redux_demo['logo_black']['url'] != '') {?>
											<img src="<?php echo esc_url($printress_redux_demo['logo_black']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>">
										<?php } else{ ?>
											<img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo-black.png" alt="<?php bloginfo( 'name' ); ?>">
										<?php } ?>
									</a>
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
							<a href="<?php echo esc_url(home_url('/')); ?>">
								<?php if (isset($printress_redux_demo['logo_black']['url']) && $printress_redux_demo['logo_black']['url'] != '') {?>
									<img src="<?php echo esc_url($printress_redux_demo['logo_black']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>">
								<?php } else{ ?>
									<img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo-black.png" alt="<?php bloginfo( 'name' ); ?>">
								<?php } ?>
							</a>
						</div>
						<div class="sidebar__close">
							<button class="sidebar__close-btn" id="sidebar__close-btn">
								<i class="fal fa-times"></i>
							</button>
						</div>
					</div>
					<div class="sidebar__search mb-30">
						<form action="#">
							<div class="bd-single__input mb-20">
								<input name="s" type="text" placeholder="Search Here">
							</div>
							<button type="submit"><i class="far fa-search"></i></button>
						</form>
					</div>
					<div class="mobile-menu fix mb-30 mean-container">
					</div>
					<div class="sidebar__contact mb-20">
						<div class="sidebar__info fix">
							<?php if(isset($printress_redux_demo['header_phone_number']) && $printress_redux_demo['header_phone_number']!=''){?>
								<div class="sidebar__info-item">
									<div class="sidebar__info-icon">
										<i class="flaticon-telephone-call"></i>
									</div>
									<div class="sidebar__info-text">
										<span><?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_phone_text']));?></span>
										<h4><a href="tel:<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_phone_number']));?>"><?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_phone_number']));?></a></h4>
									</div>
								</div>
							<?php } ?>
							<?php if(isset($printress_redux_demo['header_mail_address']) && $printress_redux_demo['header_mail_address']!=''){?>
								<div class="sidebar__info-item">
									<div class="sidebar__info-icon">
										<i class="flaticon-envelope"></i>
									</div>
									<div class="sidebar__info-text">
										<span><?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_mail_text']));?></span>
										<h4><a href="mailto:<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_mail_address']));?>"><?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_mail_address']));?></a></h4>
									</div>
								</div>
							<?php } ?>
							<?php if(isset($printress_redux_demo['header_office_address']) && $printress_redux_demo['header_office_address']!=''){?>
								<div class="sidebar__info-item">
									<div class="sidebar__info-icon">
										<i class="flaticon-map-pin"></i>
									</div>
									<div class="sidebar__info-text">
										<span><?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_address_text']));?></span>
										<h4><a href="<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_address_link']));?>"><?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_office_address']));?></a></h4>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
					<div class="sidebar__social">
						<ul>
							<?php if(isset($printress_redux_demo['header_social_1']) && $printress_redux_demo['header_social_1']!=''){?>
								<li><a href="<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_social_1']));?>"><i class="fab fa-facebook-f"></i></a></li>
							<?php } ?>
							<?php if(isset($printress_redux_demo['header_social_2']) && $printress_redux_demo['header_social_2']!=''){?>
								<li><a href="<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_social_2']));?>"><i class="fab fa-twitter"></i></a></li>
							<?php } ?>
							<?php if(isset($printress_redux_demo['header_social_3']) && $printress_redux_demo['header_social_3']!=''){?>
								<li><a href="<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_social_3']));?>"><i class="fab fa-behance"></i></a></li>
							<?php } ?>
							<?php if(isset($printress_redux_demo['header_social_4']) && $printress_redux_demo['header_social_4']!=''){?>
								<li><a href="<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_social_4']));?>"><i class="fab fa-youtube"></i></a></li>
							<?php } ?>
							<?php if(isset($printress_redux_demo['header_social_5']) && $printress_redux_demo['header_social_5']!=''){?>
								<li><a href="<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_social_5']));?>"><i class="fab fa-linkedin"></i></a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="body-overlay"></div>
		<div class="bd-sticky menu-sticky white-bg menu-hide">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-2 col-lg-2 col-6">
						<div class="bd-sticky__logo">
							<a href="<?php echo esc_url(home_url('/')); ?>">
								<?php if (isset($printress_redux_demo['logo_black']['url']) && $printress_redux_demo['logo_black']['url'] != '') {?>
									<img src="<?php echo esc_url($printress_redux_demo['logo_black']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>">
								<?php } else{ ?>
									<img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo-black.png" alt="<?php bloginfo( 'name' ); ?>">
								<?php } ?>
							</a>
						</div>
					</div>
					<div class="col-xl-7 col-lg-10 col-6">
						<div class="main-menu main-menu2 d-none d-lg-block t-center">
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
									);
								?>
							</nav>
						</div>
						<div class="header__toggle-btn sidebar-toggle-btn text-end d-block d-lg-none">
							<div class="header__bar">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
					</div>
					<div class="col-xl-3 d-none d-xl-block">
						<?php if(isset($printress_redux_demo['header_text_button']) && $printress_redux_demo['header_text_button']!='' && ($printress_redux_demo['header_link_button']) && $printress_redux_demo['header_link_button']!=''){?>
							<div class="sticky__black-btn text-end mt-10">
								<a class="theme-btn" href="<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_link_button']));?>"><?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_text_button']));?><i class="fal fa-arrow-alt-right"></i></a>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<div class="body-overlay"></div>
	</header>