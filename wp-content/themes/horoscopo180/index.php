<?php
/**
*	Template Name: Blog Index
*	Description: The template for displaying the Blog index /blog.
*/
	get_header();
	$page_id = get_option( 'page_for_posts' );
	$theme_uri = get_stylesheet_directory_uri();
?>

<div class="row">

	<div class="col-md-12">
		<section class="div01-top d-inline-block w-100">
			<div class="container">
				<div class="row row-cols-1 h-top row-cols-md-3 g-4 g-lg-5">


					
						<?php while (have_rows('characteristics')) : the_row();?>
							<div  class="col">
								<div class="itemGrid">
									<img src="<?php the_sub_field('image_characteristics'); ?>" alt="">
								</div>
								<div class="itemGridText">
									<?php the_sub_field('title_characteristics', 'option'); ?>
								</div>
								<div class="itemGridText">
									<?php the_sub_field('text_characteristics', 'option'); ?>
								</div>
							</div>
						<?php endwhile; ?>
					



					<div class="col">
						<a href="#" class="comon-felature01 d-grid align-content-center w-100" data-aos="fade-up">
							<div class="c-img mx-auto mb-2">
								<img alt="sop" src="<?php echo $theme_uri; ?>/images/3776970.png">
							</div>
							<h5 class="text-white"> Know About Horoscope </h5>
							<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
								Lorem Ipsum has been the industry's standard dummy</p>
						</a>
					</div>
					<div class="col">
						<a href="#" class="comon-felature01 d-grid align-content-center w-100" data-aos="fade-down">
							<div class="c-img mx-auto mb-2">
								<img alt="sop" src="<?php echo $theme_uri; ?>/images/815838.png">
							</div>
							<h5 class="text-white"> Chart Comparisons </h5>
							<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
								Lorem Ipsum has been the industry's standard dummy</p>
						</a>
					</div>
					<div class="col">
						<a href="#" class="comon-felature01 d-grid align-content-center w-100" data-aos="fade-up">
							<div class="c-img mx-auto mb-2">
								<img alt="sop" src="<?php echo $theme_uri; ?>/images/1408347.png">
							</div>
							<h5 class="text-white"> Tarot Reading </h5>
							<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
								Lorem Ipsum has been the industry's standard dummy</p>
						</a>
					</div>

				</div>
			</div>
		</section>
	</div><!-- /.col -->

	<div class="col-md-12">
		<section class="choose-div-signu  d-inline-block w-100">
			<div class="container">
			<div class="comon-heading text-center">
				<h5 class="sub-heading" data-aos="fade-down"> Zodiac Sign </h5>
				<h2 class="text-white comon-heading mt-3" data-aos="fade-down"> Know Yourself Through Your Sign </h2>
			</div>
			<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-6 gy-5 g-lg-5 mt-4" data-aos="fade-up">
				<div class="col">
					<a href="#" class="text-center comon-zodic w-100 d-grid align-content-center justify-content-center">
						
						<div class="round-imog">
						<img alt="al" src="<?php echo $theme_uri; ?>/images/round.png">
						<div class="img-out diamond1">
							<img alt="Aries" src="<?php echo $theme_uri; ?>/images/10350949.png">
						</div>
						</div>
						<div class="textr-dels mt-3">
						<h5 class="text-white"> Aries </h5>
						<p class="mt-2"> Mar 21 - Apr 19</p>
						</div>
					</a>

					
				</div>

				<div class="col">
					<a href="#" class="text-center comon-zodic w-100 d-grid align-content-center justify-content-center">
					
					<div class="round-imog">
						<img alt="al" src="<?php echo $theme_uri; ?>/images/round.png">
						<div class="img-out diamond1">
						<img alt="Aries" src="<?php echo $theme_uri; ?>/images/9009939.png">
						</div>
					</div>
					<div class="textr-dels mt-3">
						<h5 class="text-white"> Taurus </h5>
						<p class="mt-2"> Apr 20 - May 20</p>
					</div>
					</a>

					
				</div>

				<div class="col">
				<a href="#" class="text-center comon-zodic w-100 d-grid align-content-center justify-content-center">
					
					<div class="round-imog">
					<img alt="al" src="<?php echo $theme_uri; ?>/images/round.png">
					<div class="img-out diamond1">
						<img alt="Aries" src="<?php echo $theme_uri; ?>/images/47271.png">
					</div>
					</div>
					<div class="textr-dels mt-3">
						<h5 class="text-white"> Gemini </h5>
						<p class="mt-2"> May 21 - Jun 20</p>
					</div>
				</a>

				
				</div>

				
				<div class="col">
				<a href="#" class="text-center comon-zodic w-100 d-grid align-content-center justify-content-center">
					
					<div class="round-imog">
					<img alt="al" src="<?php echo $theme_uri; ?>/images/round.png">
					<div class="img-out diamond1">
						<img alt="Aries" src="<?php echo $theme_uri; ?>/images/3201854.png">
					</div>
					</div>

					<div class="textr-dels mt-3">
						<h5 class="text-white"> Cancer </h5>
						<p class="mt-2"> Jun 21 - Jul 22 </p>
					</div>
				</a>
				</div>

				<div class="col">
				<a href="#" class="text-center comon-zodic w-100 d-grid align-content-center justify-content-center">
					
					<div class="round-imog">
					<img alt="al" src="<?php echo $theme_uri; ?>/images/round.png">
					<div class="img-out diamond1">
						<img alt="Aries" src="<?php echo $theme_uri; ?>/images/10350961.png">
					</div>
					</div>
					<div class="textr-dels mt-3">
						<h5 class="text-white"> Leo </h5>
						<p class="mt-2"> Jul 23 - Aug 22 </p>
					</div>
				</a>
				</div>


				<div class="col">
				<a href="#" class="text-center comon-zodic w-100 d-grid align-content-center justify-content-center">
					
					<div class="round-imog">
					<img alt="al" src="<?php echo $theme_uri; ?>/images/round.png">
					<div class="img-out diamond1">
						<img alt="Aries" src="<?php echo $theme_uri; ?>/images/47148.png">
					</div>
					</div>
					<div class="textr-dels mt-3">
						<h5 class="text-white"> Virgo </h5>
						<p class="mt-2"> Aug 23 - Sep 22 </p>
					</div>
				</a>
				</div>

				<div class="col">
				<a href="#" class="text-center comon-zodic w-100 d-grid align-content-center justify-content-center">
					
					<div class="round-imog">
					<img alt="al" src="<?php echo $theme_uri; ?>/images/round.png">
					<div class="img-out diamond1">
						<img alt="Aries" src="<?php echo $theme_uri; ?>/images/10350969.png">
					</div>
					</div>
					<div class="textr-dels mt-3">
						<h5 class="text-white"> Libra
						</h5>
						<p class="mt-2"> Sep 23 - Oct 22  </p>
					</div>
				</a>
				</div>
				


				<div class="col">
				<a href="#" class="text-center comon-zodic w-100 d-grid align-content-center justify-content-center">
					
					<div class="round-imog">
					<img alt="al" src="<?php echo $theme_uri; ?>/images/round.png">
					<div class="img-out diamond1">
						<img alt="Aries" src="<?php echo $theme_uri; ?>/images/8062843.png">
					</div>
					</div>
					<div class="textr-dels mt-3">
						<h5 class="text-white"> Scorpio </h5>
						<p class="mt-2"> Oct 23 - Nov 21 </p>
					</div>
				</a>
				</div>

				<div class="col">
				<a href="#" class="text-center comon-zodic w-100 d-grid align-content-center justify-content-center">
					
					<div class="round-imog">
					<img alt="al" src="<?php echo $theme_uri; ?>/images/round.png">
					<div class="img-out diamond1">
						<img alt="Aries" src="<?php echo $theme_uri; ?>/images/75522.png">
					</div>
					</div>
					<div class="textr-dels mt-3">
						<h5 class="text-white"> Sagittarius </h5>
						<p class="mt-2"> Nov 22 - Dec 21</p>
					</div>
				</a>
				</div>


				<div class="col">
				<a href="#" class="text-center comon-zodic w-100 d-grid align-content-center justify-content-center">
					
					<div class="round-imog">
					<img alt="al" src="<?php echo $theme_uri; ?>/images/round.png">
					<div class="img-out diamond1">
						<img alt="Aries" src="<?php echo $theme_uri; ?>/images/9009955.png">
					</div>
					</div>
					<div class="textr-dels mt-3">
						<h5 class="text-white"> Capricorn </h5>
						<p class="mt-2"> Dec 22 - Jan 19 </p>
					</div>
				</a>
				</div>

				<div class="col">
				<a href="#" class="text-center comon-zodic w-100 d-grid align-content-center justify-content-center">
					
					<div class="round-imog">
					<img alt="al" src="<?php echo $theme_uri; ?>/images/round.png">
					<div class="img-out diamond1">
						<img alt="Aries" src="<?php echo $theme_uri; ?>/images/47246.png">
					</div>
					</div>
					<div class="textr-dels mt-3">
						<h5 class="text-white"> Aquarius </h5>
						<p class="mt-2"> Jan 20 - Feb 18 </p>
					</div>
				</a>
				</div>

				<div class="col">
				<a href="#" class="text-center comon-zodic w-100 d-grid align-content-center justify-content-center">
					
					<div class="round-imog">
					<img alt="al" src="<?php echo $theme_uri; ?>/images/round.png">
					<div class="img-out diamond1">
						<img alt="Aries" src="<?php echo $theme_uri; ?>/images/7125116.png">
					</div>
					</div>
					<div class="textr-dels mt-3">
						<h5 class="text-white"> Pisces </h5>
						<p class="mt-2"> Feb 19 - Mar 20 </p>
					</div>
				</a>
				</div>
			</div> 
			</div>
     	</section>
	</div><!-- /.col -->

	<div class="col-md-12"><!-- LISTA DE POST -->
		<?php
			get_template_part( 'archive', 'loop' );
		?>
	</div><!-- /.col -->
</div><!-- /.row -->
<?php
get_footer();
