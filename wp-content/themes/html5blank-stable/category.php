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
			<h2><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h2>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>


</article>

                                       <?php get_sidebar(); ?>
                                    </div>
                                </div>
			</div>
                            </div>
                        </div>

		</section>
		<!-- /section -->
</div>
	</main>



<?php get_footer(); ?>
