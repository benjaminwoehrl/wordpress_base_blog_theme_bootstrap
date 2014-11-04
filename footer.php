		</div><!-- container -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<?php wp_nav_menu(array('theme_location' => 'footer-nav', 'container_class' => 'clearfix')) ?>
					</div>
					<div class="col-md-4">
						<h3>LINKS</h3>
							<?php wp_nav_menu(array('theme_location' => 'link-nav', 'container_class' => 'link_list clearfix')) ?>
					</div>
					<div class="col-md-4">
						<h3>ABOUT US</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam dignissimos
							eligendi fugit, iure nesciunt nihil nisi perspiciatis porro praesentium provident
							quod voluptas, voluptate.
						</p>
					</div>
				</div>
			</div>
		</footer>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

		<?php wp_footer(); ?>
	</body>
</html>
