			<?php get_header(); ?>
			<div class="container">
				<!--blog-header-->
				<section class="blog-header text-center">
					<?php

					$our_title = get_the_title( get_option('page_for_posts', true) );

					?>
			    	<a href="<?php echo  esc_url(get_permalink( get_page_by_title( 'Tutorials & Guides' ) ) );?>"><h1 class="blog-title"><?php echo apply_filters( 'the_title', get_the_title( get_option( 'page_for_posts' ) ) );;?></h1></a>
			    	<p class="lead blog-description"></p>
			    	<hr>
			    <!--/blog-header-->
			    </section>
			
			
			<div class="row">

		        <section class="col-sm-8 blog-list">
		        <!--blog-list-->

		          <?php if (have_posts()) : while (have_posts()) : the_post();
		
				  get_template_part('content', get_post_format()); 

				  endwhile;

				  echo paginate_links();

				  else : echo '<p>No content found</p>';
				  endif; ?>
				  
		        <!--/blog-list-->
		        </section>

		       <?php get_sidebar(); ?>

			</div>

		    </div>

			<?php get_footer(); ?>