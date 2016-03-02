<?php get_header(); ?>

		<div class="main">   
			<div class="slider-wrapper">
                         <div class="slider">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/slider-img1.jpg" alt="" />
				<?php masterslider(2); ?>
				 <ul class="items">
                                <li>
                                   
 
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/slider-img2.jpg" alt="" />
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/slider-img3.jpg" alt="" />
                                </li>
                            </ul>
                        </div>
                       
                                                                      
                    </div> 


		




	<main role="main">
		<!-- section -->
		<section>



<div class="container-top">
<div class="container">
				<div class="container_12">
                                    <div class="wrapper">
                                        <article class="grid_8">
                                            <div class="indent-left">

			<!--<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>-->

			<br class="clear">

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
					</div>
					</article>
					<?php get_sidebar(); ?>

					</div>
				</div>
</div></div>


		</section>
		<!-- /section -->
	</main>
</div>


<?php get_footer(); ?>
