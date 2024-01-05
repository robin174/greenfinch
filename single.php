<?php
/**
* The template for displaying a single post
* @package smileplastics
*/
get_header(); ?>


<section class="templ--page-main">
	<section class="org--content-single">
		<div class="container-fluid">

			<div class="row justify-content-center">
				<div class="col-12 col-md-10 col-xl-9">
					<section>
						<!-- Post header -->
					</section>
				</div>
			</div>
			<div class="container-fluid">
				<?php get_template_part('template-parts/post-builder'); ?>
			</div>
			
		</div>
	</section>

</section>

<?php get_footer(); // to counter php close tag issue