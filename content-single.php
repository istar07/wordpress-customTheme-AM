			<div class="container">
				<!--blog-header-->
				<section class="blog-header text-center">
			    	<a href="<?php echo  esc_url(get_permalink( get_page_by_title( 'Tutorials & Guides' ) ) );?>"><h1 class="blog-title"><?php echo apply_filters( 'the_title', get_the_title( get_option( 'page_for_posts' ) ) );;?></h1></a>
			    	<p class="lead blog-description"></p>
			    	<hr>
			    <!--/blog-header-->
			    </section>

			    <?php if(has_post_thumbnail() ) {?>

			    <h1 class="blog-post-title text-center"><?php the_title(); ?></h1>
		        <p class="blog-post-meta text-center"><?php the_date(); ?> by <?php the_author_posts_link(); ?></p>

			    <div class="jumbotron banner-container">
			    <!--banner-container-->
			    	<?php the_post_thumbnail( 'banner-image', array( 'class' => 'img-responsive' ) ); ?>
			    <!--/banner-container-->
			    </div>
			
			<hr>
			
			<div class="row">

		        <div class="col-sm-8 col-sm-offset-2 blog-main">
		        <!--blog-main-->

		          <article class="blog-post">
		            <!--blog-post-->
		            
		            <?php the_content(); ?>
		            
			      <!--/blog-post-->
		          </article>

		        <!--/blog-main-->
		        </div>
			</div>

		    </div>

		        <?php } else {?>
			
			<div class="row">

		        <section class="col-sm-8 col-sm-offset-2 blog-main">
		        <!--blog-main-->

		        

		          <article class="blog-post">
		          <!--blog-post-->
		            <h2 class="blog-post-title text-center"><?php the_title(); ?></h2>
		            <p class="blog-post-meta text-center"><?php the_date(); ?> by <?php the_author_posts_link(); ?></p>
		            
		            <?php the_content(); ?>

		          <!--/blog-post-->
		          </article>

		        <!--/blog-main-->
		    	</section>

			</div>

		    </div>
		    <?php }?>