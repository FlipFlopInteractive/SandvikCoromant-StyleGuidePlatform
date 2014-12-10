<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

?>


<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php echo get_featured_image_as_background( $post->ID ); ?>>

	<div class="modal fade" id="search" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div class="logo"><a href="/" rel="home" title="<?php bloginfo( 'name' ); ?>"><i class="icon icon_sandvik-coromant-icon"></i></a></div>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-2"></div>
					<div class="col-md-2"></div>
					<div class="col-md-2"><a href="/" title="Close" data-dismiss="modal"><i class="icon icon_close-icon"></i></a></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
				<div class="col-md-4">
					<a href="#" title="Search" data-dismiss="modal"><h1>Search</h1></a>
				</div>
				<div class="col-md-6">
				<?php get_search_form( true ); ?>
				</div>
				</div>
			</div>
		</div>
	</div>

	<header id="header" class="site-header headroom" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<div class="logo"><a href="/" rel="home" title="<?php bloginfo( 'name' ); ?>"><i class="icon icon_sandvik-coromant-icon"></i></a></div>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-2"><a href="/?s=" title="Search"><i class="icon icon_search-icon"></i></a></div>
				<div class="col-md-2"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Info' ) ) ); ?>" title="Info"><i class="icon icon_info-icon"></i></a></div>
				<div class="col-md-2"></div>
			</div>
		</div>
	</header>

	<div id="page" class="hfeed site">
		<div id="content" class="site-content">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<?php echo render_header_menu(); ?>
				</div>
			</div>
	    </div>
	</div>

	<?php wp_footer(); ?>

</body>
</html>