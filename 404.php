<?php get_header(); ?>

			<h1 class="text-center">Oh no, you 404'd =(</h1>
			<br>
			<h3 class="text-center">Unfortunately, the page you're looking for can't be found or doesn't exist.</h3>
			<br>
			<h3 class="text-center">Try refreshing the page or use the navbar to go back to the homepage.</h3>
			<br>
			<h3 class="text-center">If you continue to see this page,</h3>
			<h3 class="text-center">fill out the form on the <a href="<?php echo  esc_url(get_permalink( get_page_by_title( 'Contact Us' ) ) );?>">"Contact Us"</a> page.</h3>
			<h3 class="text-center">We'll get back to you as soon as possible.</h3>


<?php get_footer(); ?>