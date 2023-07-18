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
		<div class="bd-header__position">
			<div class="bd-header__wrapper p-relative">
				<div class="bd-header__top bd-header__top1 d-none d-md-block">
					<div class="container">
						<div class="row justify-content-end">
							<div class="col-xl-1">
								<div class="logo logo-position d-none d-xl-block">
									<a href="<?php echo esc_url(home_url('/')); ?>">
										<?php if (isset($printress_redux_demo['logo_square']['url']) && $printress_redux_demo['logo_square']['url'] != '') {?>
											<img src="<?php echo esc_url($printress_redux_demo['logo_square']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>">
										<?php } else{ ?>
											<img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo.png" alt="<?php bloginfo( 'name' ); ?>">
										<?php } ?>
									</a>
								</div>
							</div>
							<div class="col-xl-11 col-lg-12">
								<div class="bd-header__top1-wrapper d-flex justify-content-between align-items-center">
									<div class="bd-header__top1-info-wrapper d-flex">
										<?php if(isset($printress_redux_demo['header_phone_number']) && $printress_redux_demo['header_phone_number']!=''){?>
											<div class="bd-header__top1-info">
												<div class="bd-header__top1-info-icon">
													<i class="flaticon-telephone-call"></i>
												</div>
												<div class="bd-header__top1-info-text">
													<span class="bd-header__top1-sub-title"><?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_phone_text']));?></span>
													<h4 class="bd-header__top1-title"><a href="tel:<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_phone_number']));?>"><?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_phone_number']));?></a></h4>
												</div>
											</div>
										<?php } ?>
										<?php if(isset($printress_redux_demo['header_mail_address']) && $printress_redux_demo['header_mail_address']!=''){?>
											<div class="bd-header__top1-info">
												<div class="bd-header__top1-info-icon">
													<i class="flaticon-envelope"></i>
												</div>
												<div class="bd-header__top1-info-text">
													<span class="bd-header__top1-sub-title"><?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_mail_text']));?></span>
													<h4 class="bd-header__top1-title"><a href="mailto:<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_mail_address']));?>"><?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_mail_address']));?></a></h4>
												</div>
											</div>
										<?php } ?>
										<?php if(isset($printress_redux_demo['header_office_address']) && $printress_redux_demo['header_office_address']!=''){?>
											<div class="bd-header__top1-info">
												<div class="bd-header__top1-info-icon">
													<i class="flaticon-map-pin"></i>
												</div>
												<div class="bd-header__top1-info-text">
													<span class="bd-header__top1-sub-title"><?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_address_text']));?></span>
													<h4 class="bd-header__top1-title"><a href="<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_address_link']));?>"><?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_office_address']));?></a></h4>
												</div>
											</div>
										<?php } ?>
									</div>
									<?php if(isset($printress_redux_demo['header_text_button']) && $printress_redux_demo['header_text_button']!='' && ($printress_redux_demo['header_link_button']) && $printress_redux_demo['header_link_button']!=''){?>
										<div class="bd-header__top1-btn gray">
											<a class="theme-btn" href="<?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_link_button']));?>"><?php echo wp_specialchars_decode(esc_attr($printress_redux_demo['header_text_button']));?><i class="fal fa-arrow-alt-right"></i></a>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bd-header__bottom bd-header__bottom1 bd-header__transparent ">
					<div class="bd-header__bottom-wrapper ">
						<div class="container">
							<div class="bd-header__content white-bg">
								<div class="row justify-content-end">
									<div class="col-xl-10 col-lg-12">
										<div class="d-flex justify-content-between align-items-center bd-header__bottom-order">
											<div class="bd-header__bottom--logo d-xl-none">
												<?php if (isset($printress_redux_demo['logo_black']['url']) && $printress_redux_demo['logo_black']['url'] != '') {?>
													<img src="<?php echo esc_url($printress_redux_demo['logo_black']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>">
												<?php } else{ ?>
													<img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo-black.png" alt="<?php bloginfo( 'name' ); ?>">
												<?php } ?>
											</div>
											<div class="main-menu main-menu1">
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
											<div class="bd-header__icon-wrapper d-none d-xl-block">
												<div class="d-flex align-items-center">
													<div class="bd-header__social-link pr-50">
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
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bd-mobile__header bd-mobile__header-padding  d-block d-lg-none">
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
								<div class="header__toggle-btn sidebar-toggle-btn text-end d-block d-lg-none mt-10">
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
							<div class="bd-single__input">
								<input type="text" placeholder="Search Here">
							</div>
							<button type="submit"><i class="far fa-search"></i></button>
						</form>
					</div>
					<div class="mobile-menu fix mb-30 mean-container"></div>
					<div class="sidebar__contact mb-20">
						<div class="sidebar__info fix">
							<div class="sidebar__info-item">
								<div class="sidebar__info-icon">
									<i class="flaticon-telephone-call"></i>
								</div>
								<div class="sidebar__info-text">
									<span>Call us now</span>
									<h4><a href="tel:00211232000">00 211 232 000</a></h4>
								</div>
							</div>
							<div class="sidebar__info-item">
								<div class="sidebar__info-icon">
									<i class="flaticon-envelope"></i>
								</div>
								<div class="sidebar__info-text">
									<span>Email Address</span>
									<h4><a href="mailto:info@webmail.com">info@webmail.com</a></h4>
								</div>
							</div>
							<div class="sidebar__info-item">
								<div class="sidebar__info-icon">
									<i class="flaticon-map-pin"></i>
								</div>
								<div class="sidebar__info-text">
									<span>Office Address</span>
									<h4><a href="https://www.google.com/maps/search/Humble+Tower,+NYC/@40.7355986,-74.0092433,14z/data=!3m1!4b1">Humble Tower, NYC</a></h4>
								</div>
							</div>
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
						<div class="main-menu main-menu1 t-right d-none d-lg-block">
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
						<div class="header__toggle-btn sidebar-toggle-btn text-end d-block mt-10 d-lg-none">
							<div class="header__bar">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
					</div>
					<div class="col-xl-3 d-none d-xl-block">
						<div class="bd-header__icon-wrapper justify-content-end d-flex align-items-center">
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
		</div>
		<div class="body-overlay"></div>
	</header>