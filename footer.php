 <footer class="site-footer">
	<nav id="site-navigation" class="menu-2">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-2',
				'menu_id'        => 'site-menu',
				'depth'          => 1,
				'fallback_cb'    => false,
			) );
			?>
	</nav><!-- .menu-2 -->

	<?php wp_footer(); ?>
</footer><!-- .site-footer -->