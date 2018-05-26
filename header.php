<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php bloginfo( 'name' ); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>
		
		
<nav>
	<div class="navbar clear">
		<a href="<?php echo home_url(); ?>" class="logo"><?php bloginfo( 'name' ); ?></a>
		
		
		<div class="menu-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></div>
		<div class="menu">
			
			<nav>
				<?php
									$argsb = array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 );
									 
									 
									 
									wp_nav_menu( $argsb ); 
								?>
								
								
								
			</nav>					
			
			<!-- .main-navigation 
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="">lifestyle</a></li>
				<li>
					<span class="open-submenu">Food<span class="arrow down"></span></span>
					<ul>
						<li><a href="">almenupont 1</a></li>
						<li><a href="">almenupont 2</a></li>
						<li><a href="">almenupont 3</a></li>
						<li><a href="">almenupont 4</a></li>
					</ul>
				</li>
				<li><a href="">Nature</a></li>
				<li><a href="">photography</a></li>
			</ul>
			-->
		</div>
		
		
		
		
		
		
	
	</div>
</nav>	
