			<!--Footer-->
			<footer>
				<div class="container">
					<div class="row">
					<hr>
					<p class="copyright">&copy; AppsByMax Inc. 2016 - 2018 - All Rights Reserved.</p>
					<div class="social-media-links">
						<?php if( get_option('linkedin')) { ?><a href="<?php echo get_option('linkedin'); ?>"><i class="fab fa-linkedin"></i></a><?php } ?>
						<?php if( get_option('twitter')) { ?><a href="<?php echo get_option('twitter'); ?>"><i class="fab fa-twitter"></i></a><?php } ?>
						<?php if( get_option('facebook')) { ?><a href="<?php echo get_option('facebook'); ?>"><i class="fab fa-facebook-square"></i></a><?php } ?>
						<?php if( get_option('instagram')) { ?><a href="<?php echo get_option('instagram'); ?>"><i class="fab fa-instagram"></i></a><?php } ?>
					</div>
				</div>
			<!--/Footer-->
			</footer>
		<!--/Primary Container-->
		</div>
		<?php wp_footer(); ?>
	</body>
</html>