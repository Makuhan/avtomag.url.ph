<?php get_header(); ?>

	<main role="main">

<div class="main">
		<!-- section -->
		<section>

			



                            <div class="container-top">
				<div class="container">
                                <div class="container_12">
                                    <div class="wrapper">
                                        <article class="grid_8">
                                            <div class="indent-left">

                                               <h2><?php the_title(); ?></h2>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php $dat=get_image_path(); ?>
				<br class="clear">

				<?php edit_post_link(); ?>
				<?php echo "<img src=".$dat[0]." width=100% id='imk'/>"; 
				echo '<label id="lab" style="position: absolute; top:100px;right:500px;">Male</label>';
				?>
			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>
                                            </div>
                                         
                                        </article>

                                       <?php get_sidebar(); ?>
                                    </div>
                                </div>
			</div>
                            </div>
                        </div>






		</section>
		<!-- /section -->

	</main>


<?php get_footer(); ?>