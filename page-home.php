<?php
/**
* Template Name: Page - Home
* @package greenfinch
*/

get_header(); ?>

<section class="templ--page-main">

	<section>
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-12">
					<?php get_template_part('template-parts/hero-slider-home'); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="org--content-default">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-10">
					<section class="mol--content-default">
						Main content
					</section>
				</div>
			</div>
		</div>
	</section>
	<section class="org--content-alchemy">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-10">
					<section class="mol--content-alchemy">
						<div class="row">
							<div class="col-12 col-md-6">
								<h2>Inst</h2>
								<p><a href="https://merchants.inst.money/user/login" target="_blank">Merchant accounts</a> offering on-ramps.</p>
								<a class="button atm--button-primary" href="/inst">
									<span>Inst</span><i class="fas fa-arrow-right"></i>
								</a>
							</div>
							<div class="col-12 col-md-6">
								<h2>Alchemy Pay</h2>
								<p><a href="https://alchemypay.readme.io/docs/merchant-access-and-integration-guide" target="_blank">Business accounts</a> offering on-ramps.</p>
								<a class="button atm--button-primary" href="/alchemy-pay">
									<span>Alchemy Pay</span><i class="fas fa-arrow-right"></i>
								</a>
							</div>	
						</div>
					</section>
				</div>
			</div>
		</div>
	</section>
	<section class="org--content-newsletter" style="background-image: url(<?php the_field('newsletter_texture','option'); ?>); background-repeat: repeat-x;">
		<div class="container-fluid">
			<?php get_template_part('template-parts/email-newsletter'); ?>
		</div>
	</section>

</section>

<?php get_footer(); ?>