			<?php get_header(); ?>
			<div class="container">
				<section class="product-header text-center">
			    	<a href="<?php echo get_post_type_archive_link( 'products' ); ?>"><h1 class="product-page-title">Products & Services</h1></a>
			    	<hr>
			    </section>
			
			
			<div class="row">

		        <section class="product-list">
		        <!--product-list-->
		        	<div class="grid">
		        	<div class="grid-sizer col-md-3 col-sm-6 col-xs-12"></div>
						
						<?php if(have_posts()) : while(have_posts()) : the_post();?>
			        	<div class="grid-item col-md-3 col-sm-6 col-xs-12">
			        		<div class="product-list-item">
			        		<!--product-list-item-->
			        			<div class="product-thumbnail">
			        				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'banner-image', array( 'class' => 'img-responsive' ) ); ?></a>
			        			</div>
			        			<div class="product-description">
				        			<a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
				        			<hr>
				        			<p>
				        				<?php the_content('Read More...'); ?>
				        			</p>
			        			</div>
			        		<!--/product-list-item-->
			        		</div>
			        	</div>
			        	<?php endwhile;

			        	else : echo '<p>No content found</p>';

			        	 endif;?>

			        	
		        	</div>
		        	<div class="pager">
		        		<?php echo paginate_links(); ?>
		        	</div>
		        <!--/product-list-->
		        </section>
		        

			</div>

		    </div>
		    <?php get_footer(); ?>