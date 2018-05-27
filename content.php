		          <article class="blog-post col-md-12">
		          <!--blog-post-->
		            <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		            <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author_posts_link(); ?></p>

		            <?php if(has_post_thumbnail() ) {?>

					<div class="col-md-3">
		            	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'img-responsive' ) ); ?></a>
		            </div>

		            <div class="col-md-9">
			            <?php the_content('Read More...'); ?>
			            <hr>
			        </div>

		            <?php } else { ?>
		            <?php the_content('Read More...'); ?>
		            <hr>
		            <?php } ?>
		          <!--/blog-post-->
		          </article>