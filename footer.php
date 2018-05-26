
		
		
		
		<div class="main_comtein footre_part">
			<div class="contein_bar">
				<div class="footer_left">
					<nav>
					
					<?php
					$argsb = array(
										'theme_location' => 'Footer',
										'menu_class'     => 'Footer-menu',
									 );
									 
									 
									 
									wp_nav_menu( $argsb ); 
								?>
								
					</nav>
				</div>
				
			</div>
		</div>
		
		
		
		
		
		<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js"></script>

<script type="text/javascript">

var menu = $(".menu");
$(window).resize(function(){
	$(".menu-toggle").removeClass("active");
	if($(window).innerWidth() > 767){
		menu.show();
	} else {
		menu.hide();
	}
});
$(".menu-toggle").click(function(){
	$(this).toggleClass("active");
	menu.slideToggle();
})
$(".open-submenu").click(function(){
	$(this).toggleClass("active");
	$(this).next("ul").slideToggle();
	$(this).children(".arrow").toggleClass("down up");
});

</script>
		
		
		<?php wp_footer(); ?>
	</body>
</html>