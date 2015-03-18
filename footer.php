	<footer id="footer">
		<nav id="menu-footer-wrapper">
			<ul id="menu-footer">
				<li><span><?php printf(__("© Eurallia Finance %s", "extra"), date("Y")); ?></span></li>
				<?php
				/**********************
				 *
				 * NAVIGATION
				 *
				 *********************/
				$args = array(
					'theme_location' 	=> 'footer',
					'menu_class'		=> 'menu-footer',
					'menu_id'			=> 'menu-footer',
					'items_wrap'      => '%3$s',
					'container'			=> false
				);
				wp_nav_menu($args); ?>
			</ul>
		</nav><!-- .menu-footer-wrapper -->
	</footer><!-- #footer -->

</div><!-- #wrapper -->

<?php wp_footer(); ?>

</body>
</html>