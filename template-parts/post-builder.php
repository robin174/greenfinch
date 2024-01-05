<!-- All Post Builder -->
<?php while(has_sub_field('post_builder')): ?>

	<?php if(get_row_layout() == 'post_subheading_h3'): // Subheading: h3 ?>
		<div class="row justify-content-center">
			<div class="col-11 col-md-9 col-lg-6"> 
				<div class="mol--post-text">
					<h3 class="bb__h3"><?php the_sub_field('unit_subheading_h3');?></h3>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'post_subheading_h4'): // Subheading: h4 ?>
		<div class="row justify-content-center">
			<div class="col-11 col-md-9 col-lg-6"> 
				<div class="mol--post-text">
					<h3 class="bb__h4"><?php the_sub_field('unit_subheading_h4');?></h3>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'post_introduction'): // Paragraph Introduction ?>
		<div class="row justify-content-center">
			<div class="col-11 col-md-9 col-lg-6">
				<p class="atm--post-intro"><?php the_sub_field('unit_introduction'); ?></p>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'post_paragraph'): // Paragraph ?>
		<div class="row justify-content-center">
			<div class="col-11 col-md-9 col-lg-6"><?php the_sub_field('unit_paragraph'); ?></div>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'post_image'): // Image ?>
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="mol--post-block d-flex justify-content-center">
					<figure class="atm--post-img">
						<img class="mw-100" src="<?php the_sub_field('unit_image'); ?>" alt="<?php the_sub_field('unit_image_caption'); ?>">
						<?php if(get_sub_field('unit_image_caption')) : ?>
							<figcaption><?php the_sub_field('unit_image_caption'); ?></figcaption>
						<?php endif; ?>
					</figure>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'post_code_block'): // Code block ?>
		<div class="row justify-content-center">
			<div class="col-11 col-md-9 col-lg-6">

				<pre class="wp-block-code">
					<code data-hljs-highlighted="true">
						<?php the_sub_field('unit_code_block'); ?>
					</code>
					<!-- 
						<code> tag is used for the piece of computer code. Usually, you include this tag inside of the <pre> tag to tell a browser, and Google that’s a block of code you want to display, not to render.
						From: https://www.codiga.io/blog/display-code-snippets-in-html/
					-->
					<!-- Options:
						https://highlightjs.org/ (using and loaded in header)
						https://github.com/EnlighterJS/EnlighterJS
						https://prismjs.com/
						https://craig.is/making/rainbows
						WP Plugin: https://wordpress.org/plugins/prismatic/
					-->
				</pre>


				
			</div>
		</div>
	<?php endif; ?>


	<?php if(get_row_layout() == 'post_video'): // Video ?>
		<!-- Video embed -->
	<?php endif; ?>

	<?php if(get_row_layout() == 'post_conclusion'): // Conclusion ?>
    	<div class="row justify-content-center">
			<div class="col-11 col-md-9 col-lg-6">
				<p><em><?php the_sub_field('unit_conclusion'); ?></em></p>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'n_post_image_two'): // Two images in a row, no captions  ?>
   		<section class="org--image-block">
	   		<div class="row g-0 justify-content-center">
				<div class="col-12 col-md-9">
					<div class="mol--image-block d-flex">
						<div class="m-1 m-md-2 flex-1 flex-md-fill">
							<div class="d-flex justify-content-center">
								<figure>
									<img class="mw-100" src="<?php the_sub_field('n_image_row_two_one'); ?>">
								</figure>
							</div>
						</div>
						<div class="m-1 m-md-2 flex-md-fill">
							<div class="d-flex justify-content-center">
								<figure>
									<img class="mw-100" src="<?php the_sub_field('n_image_row_two_two'); ?>">
								</figure>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if(get_row_layout() == 'n_post_image_three'): // Three images in a row, no captions  ?>
		<section class="org--image-block">
			<div class="row g-0 justify-content-center">
				<div class="col-12 col-md-9">
					<div class="mol--image-block d-flex">
						<div class="m-1 m-md-2 flex-1 flex-md-fill">
							<div class="d-flex justify-content-center">
								<figure>
									<img class="mw-100" src="<?php the_sub_field('n_image_row_three_one'); ?>">
								</figure>
							</div>
						</div>
						<div class="m-1 m-md-2 flex-md-fill">
							<div class="d-flex justify-content-center">
								<figure>
									<img class="mw-100" src="<?php the_sub_field('n_image_row_three_two'); ?>">
								</figure>
							</div>
						</div>
						<div class="m-1 m-md-2 flex-md-fill">
							<div class="d-flex justify-content-center">
								<figure>
									<img class="mw-100" src="<?php the_sub_field('n_image_row_three_three'); ?>">
								</figure>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>

<?php endwhile; ?>