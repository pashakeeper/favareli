<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Favareli
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/bootstrap-grid.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- header -->
	<header class="header" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500" id="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-sm-2 col-6">
					<a href="/" class="logo wow slideInRight">
						<?php $logo = get_field('logo','option');
						 ?>
						<img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['alt'] ?>">
					</a>
				</div>
				<div class="col-lg-9 col-6 col-sm-10 ml-auto d-flex align-items-center">
					<?php wp_nav_menu( array(
						'theme_location'  => '',
						'menu'            => 'Left Top Menu English',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'nav main_menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					) ); ?>
					<div class="burger">
						<span></span>
					</div>
					<a href="https://us.favareli.com/register/" class="user">
						<img src="<?php echo get_template_directory_uri() ?>/img/user.svg" alt="">
					</a>
				</div>
			</div>
		</div>
	</header>
	<!-- end of header -->

