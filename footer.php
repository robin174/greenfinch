<?php
/**
* Displays all of the <head> section and everything up till <div id="main">
* @package greenfinch
*/ 
?>
		</main><!-- end main -->
		<?php if(get_field('f_con_background', 'option')) : ?>
			<footer style="background-image: url(<?php the_field('f_con_background', 'option'); ?>);background-repeat: repeat;">
		<?php else : ?>
			<footer>
		<?php endif; ?>
			<div class="org--footer-inner"style="background:<?php the_field('f_con_overlay','option'); ?>">
				<div class="container-fluid">
	                <div class="row">
	                	<div class="col-12">
	                		<div class="org__unit-logo">
	                			 <div class="row">
	                				<div class="col-12">
	                					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-greenfinch.svg" alt="Greenfinch logo">
	                				</div>
	                			</div>
	                		</div>
	                		<div class="org__unit">
	                			<div class="row">
	                				<div class="col-12 col-md-6">
	                					<p><?php the_field('f_con_description', 'option'); ?></p>
	                				</div>
	                				<div class="col-12 col-md-6">
	                					<section>
	                						<h4>Email</h4>
											<span><a href="mailto:<?php the_field('f_con_email', 'option'); ?>" target="_blank" title="Email <?php the_title();?>"><?php the_field('f_con_email', 'option'); ?></a></span>
										</section>
										<section>
											<h4>Social</h4>
											<!-- Discord -->
											<?php if( get_field('f_con_discord', 'option') ): ?>
												<a href="<?php the_field('f_con_discord', 'option'); ?>" target="_blank" title="<?php bloginfo( 'name' ); ?> on Discord" target="_blank"><i class="fa-brands fa-2x fa-discord"></i></a>
											<?php else: ?>
												<i class="fa-brands fa-2x fa-dicord inactive"></i>
											<?php endif; ?>
											<!-- Twitter -->
											<?php if( get_field('f_con_twitter', 'option') ): ?>
												<a href="<?php the_field('f_con_twitter', 'option'); ?>" target="_blank" title="<?php bloginfo( 'name' ); ?> on X" target="_blank"><i class="fa-brands fa-2x fa-x-twitter"></i></a>
											<?php else: ?>
												<i class="fa-brands fa-2x fa-x-twitter inactive"></i>
											<?php endif; ?>
											<!-- GitHub -->
											<?php if( get_field('f_con_twitter', 'option') ): ?>
												<a href="<?php the_field('f_con_twitter', 'option'); ?>" target="_blank" title="<?php bloginfo( 'name' ); ?> on Twitter" target="_blank"><i class="fa-brands fa-2x fa-github"></i></a>
											<?php else: ?>
												<i class="fa-brands fa-2x fa-github inactive"></i>
											<?php endif; ?>
											<!-- LinkedIn -->
											<?php if( get_field('f_con_linkedin', 'option') ): ?>
												<a href="<?php the_field('f_con_linkedin', 'option'); ?>" target="_blank" title="<?php bloginfo( 'name' ); ?> on LinkedIn" target="_blank"><i class="fa-brands fa-2x fa-linkedin"></i></a>
											<?php else: ?>
												<i class="fa-brands fa-2x fa-linkedin inactive"></i>
											<?php endif; ?>
										</section>
	                				</div>
	                			</div>
	                		</div>
	                		<div class="org__unit_copyright">
	                			<div class="row">
				    				<div class="col-12">
				    					<p class="atm__copyright">&copy;&nbsp;<?php echo date('Y'); ?>&nbsp;<?php the_field('f_con_copyright', 'option'); ?></p>
				    				</div>
				                </div>
	                		</div>
	                	</div>
	                </div>
            	</div>
			</div>
		</footer>
		<!-- 
			<script defer data-domain="greenfinch.app" src="https://plausible.io/js/script.js"></script>
		-->
		<?php wp_footer(); ?>
	</body>
</html>