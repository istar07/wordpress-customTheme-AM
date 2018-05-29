<?php get_header(); ?>

					<div class="container">
						<section class="product-header text-center">
					    	<a href="<?php echo get_post_type_archive_link( 'products' ); ?>"><h1 class="product-page-title">Products & Services</h1></a>
					    	<hr>
					    </section>
					
					<div class="row">

				        <div class="col-sm-12">

				        	<?php 
								if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				  	
									<?php $attachments = get_children( array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image') );

										if ( $attachments ) { ?>
								
				          <div class="product">
				          <!--product-->
				            <h1 class="product-post-title"><? the_title(); ?></h1>

				            <section class="product-screenshot col-md-3">
				            <!--product-screenshot-->

				            <?php
				            		$post_content = $post->post_content;
									preg_match('/\[gallery.*ids=.(.*).\]/', $post_content, $ids);
									$array_id = explode(",", $ids[1]);

				            		echo do_shortcode('[gallery type="slideshow" link="none" size="full" ids="' . implode(',', $array_id) . '"]'); ?>
				            <!--/product-screenshot-->
				            </section>

				            <div class="col-md-9">
				            	<div class="product-post-description">
					            <!--product-description-->
						            <?php the_content(  ); ?>

						            <?php if(metadata_exists( 'post', get_the_ID(), 'app-store-link' )) {?>

						            <a href="<?php echo get_post_meta(get_the_ID(), 'app-store-link', TRUE);?>"><img class="img-responsive" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Download_on_the_App_Store_Badge.svg/200px-Download_on_the_App_Store_Badge.svg.png"></a>

						            <?php }?>
					        	</div>
					        </div>
				          </div>

				          <?php } else {?>

				          <div class="product">
				          <!--product-->
				            <h1 class="product-post-title"><? the_title(); ?></h1>

				            

				            <div class="col-md-9">
				            	<div class="product-post-description">
					            <!--product-description-->
						            <?php the_content(  ); ?>

						            <?php if(metadata_exists( 'post', get_the_ID(), 'app-store-link' )) {?>

						            <a href="<?php echo get_post_meta(get_the_ID(), 'app-store-link', TRUE);?>"><img class="img-responsive" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Download_on_the_App_Store_Badge.svg/200px-Download_on_the_App_Store_Badge.svg.png"></a>

						            <?php }?>
					        	</div>
					        </div>
				          </div>

				          <?php }?>

				          
				        </div>

					</div>

		    </div>
				  
								<?php endwhile; endif; 
							?>

				        	

<?php get_footer(); ?>