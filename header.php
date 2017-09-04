<?php /* * The Header for our theme. */?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		<?php wp_title(); ?>
	</title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if( get_field('google_search_console', 'option') ): the_field('google_search_console', 'option'); endif; ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo esc_url( get_template_directory_uri() );?>/stylesheets/screen.css" rel="stylesheet" type="text/css"/>
	<!--[if IE]>
        <link href="/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <![endif]-->
	<?php wp_head(); ?>
</head>
<?php flush(); ?>
<body <?php body_class(); ?>>
	<?php do_action( 'before' ); if( get_field('facebook_feed', 'option') ): the_field('facebook_feed', 'option'); endif; ?>
	<div class="page-wrap">
		<div class="container-fluid header-container">
			<div class="row">
				<?php if( get_field('header_style', 'option') == 'Desktop' ): ?>
				<header class="desktop">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-12">
								<?php $logo = get_field('logo', 'option'); 
							if( get_field('logo', 'option') ): echo '<a class="main-logo" href="'.home_url().'" rel="home" title="'.esc_attr( get_bloginfo( 'name', 'display' ) ).'"><img src="' .$logo. '" alt="'.esc_attr( get_bloginfo( 'name', 'display' ) ).'" class="img-responsive main-logo-link" /></a>'; endif; ?>
							</div>
							<div class="col-md-9 col-sm-9 col-xs-12">
								
								<?php $phone = get_field('phone_number', 'option');
							$phoneurl = preg_replace('/[^\p{L}\p{N}\s]/u', '', $phone);
							if( get_field('phone_number', 'option') ): echo ('<a class="phone-number" href="tel:'.$phoneurl.'"/>'.$phone.'</a>'); endif; ?>
							<?php get_template_part ('includes/social'); ?>
								<?php wp_nav_menu( array(
									'menu'              => 'header-menu',
									'theme_location'    => 'header-menu',
									'depth'             => 3,
									'container'         => 'div',
									'container_class'   => 'collapse ',
									'container_id'      => 'bs-example-navbar-collapse-1',
									'menu_class'        => 'nav navbar-nav',
									'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
									'walker'            => new wp_bootstrap_navwalker())
								);
							 // get_search_form (); ?>
							 
							</div>
						</div>
					</div>
				</header>
				<?php endif; if( get_field('header_style', 'option') == 'Mobile' ): ?>
				<header class="mobile">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-4 col-xs-12">
								<?php $logo = get_field('logo', 'option'); 
							if( get_field('logo', 'option') ): echo '<a class="main-logo" href="'.home_url().'" rel="home" title="'.esc_attr( get_bloginfo( 'name', 'display' ) ).'"><img src="' .$logo. '" alt="'.esc_attr( get_bloginfo( 'name', 'display' ) ).'"/></a>'; endif; ?>
							</div>
							<div class="col-md-9 col-sm-8 col-xs-12">
								<?php $phone = get_field('phone_number', 'option');
							$phoneurl = preg_replace('/[^\p{L}\p{N}\s]/u', '', $phone);
							if( get_field('phone_number', 'option') ): echo ('<a class="phone-number" href="tel:'.$phoneurl.'"/>'.$phone.'</a>'); endif; ?>
								<div class="row">
									<div class="col-md-12 col-xs-12">
										<nav class="navbar" role="navigation">
											<div class="container">
												<div class="navbar-header">
													<span class="menu-text">MENU</span><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-menu">
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
												</div>
												<?php wp_nav_menu( array(
														'menu'              => 'header-menu',
														'theme_location'    => 'header-menu',
														'depth'             => 3,
														'container_class'   => 'collapse ',
														'container_id'      => 'nav-menu',
														'menu_class'        => 'nav navbar-nav',
														'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
														'walker'            => new wp_bootstrap_navwalker(),
												)); // get_search_form (); ?>
											</div>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
				</header>
				<?php endif; ?>
			</div>
		</div>