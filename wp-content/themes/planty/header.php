	



<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="header" >
		<div class="logo">
			<a href="#">
				<img src="http://localhost/planty/wp-content/uploads/2023/04/Logo-2.png" alt="Logo_planty">
			</a>
			<p>energy drink</p>

		</div>
		<div class="navigation_commande">
			<nav><?php wp_nav_menu()?> </nav>
			<a href="http://localhost/planty/commander" class="button">
				Commander
			</a>
		</div>
	</header>








