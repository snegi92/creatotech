<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tomarosalon
 */
$header = get_field('header', 'option');
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php if(is_array($header) && !empty($header)):?>
	<header class="site_header">
		<div class="container-fluid">
			<div class="row d-flex justify-content-between">
				<div class="col-md-9">
					<div class="header_logo_col">
						<a href="<?php echo home_url();?>"><img src="<?php echo $header['logo']['url'];?>"></a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="header_btn_col">
						<a class="book_btn" href="<?php echo $header['button_link']['url'];?>"><?php echo $header['button_text'];?></a>
						<nav role="navigation">
						  <div id="menuToggle">
						    <input type="checkbox" />
						    <span></span>
						    <span></span>
						    <span></span>
						    <?php
						    if(has_nav_menu( 'menu-1' )){
						    	wp_nav_menu( 
							    	array(  
							    		'theme_location' => 'menu-1',
							    		'menu_id' => 'menusidebar',
							    		'menu_class' => 'pri_menu_side',
							    		'container' => ''
							    	) );
						    }
						    ?>
						  </div>
						</nav>
					</div>

				</div>
			</div>
		</div>
	</header>
<?php endif;?>