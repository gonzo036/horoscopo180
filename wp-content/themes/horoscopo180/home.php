<?php
/**
 * Template Name: Home
 * Description: Page template with Sidebar on the left side.
 *
 */

get_header();
$theme_uri = get_stylesheet_directory_uri();

the_post();
?>
	<div class="container">

		<section class="banner">
			<div class="bannerTextHome">

				<span> Cada día tu horóscopo gratis </span>
				<h1> Esta por empezar
					<span> El viaje de tu vida </span>
				</h1>
				<p> El horóscopo de hoy gratis, las claves del destino en Amor, Dinero y Salud para los signos del zodiaco: Aries, Tauro, Géminis, Cáncer, Leo, Virgo, Libra, Escorpio, Sagitario, Capricornio, Piscis.</p>
				<a class="start">
					<span class="text">Quieres empezar</span>
				</a>
			</div>
		</section>

		<section class="zodiac">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1>Selecciona tu signo zodical</h1>
                        <p>Atrevete conocer que preparan los astros para ti</p>
                        <div class="as_zodiac_inner text-left">
                            <div class="row as_verticle_center">
                                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                                    <ul class="as_sign_ul">
                                        <li class="as_sign_box">
                                            <a href="zodiac_single.html">
                                                <span class="as_sign">
                                                <img src="<?php echo $theme_uri; ?>/images/sign1.svg" alt="">
                                                </span>
                                                <div>
                                                    <h5>Aries</h5>
                                                    <p>Mar 21 - Apr 19</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="as_sign_box">
                                            <a href="zodiac_single.html">
                                                <span class="as_sign">
                                                <img src="<?php echo $theme_uri; ?>/images/sign2.svg" alt="">
                                                </span>
                                                <div>
                                                    <h5>Taurus </h5>
                                                    <p>Mar 21 - Apr 19</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="as_sign_box">
                                            <a href="zodiac_single.html">
                                                <span class="as_sign">
                                                <img src="<?php echo $theme_uri; ?>/images/sign3.svg" alt="">
                                                </span>
                                                <div>
                                                    <h5>Gemini</h5>
                                                    <p>Mar 21 - Apr 19</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="as_sign_box">
                                            <a href="zodiac_single.html">
                                                <span class="as_sign">
                                                <img src="<?php echo $theme_uri; ?>/images/sign4.svg" alt="">
                                                </span>
                                                <div>
                                                    <h5>Cancer</h5>
                                                    <p>Mar 21 - Apr 19</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="as_sign_box">
                                            <a href="zodiac_single.html">
                                                <span class="as_sign">
                                                <img src="<?php echo $theme_uri; ?>/images/sign5.svg" alt="">
                                                </span>
                                                <div>
                                                    <h5>Leo</h5>
                                                    <p>Mar 21 - Apr 19</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="as_sign_box">
                                            <a href="zodiac_single.html">
                                                <span class="as_sign">
                                                <img src="<?php echo $theme_uri; ?>/images/sign6.svg" alt="">
                                                </span>
                                                <div>
                                                    <h5>Virgo</h5>
                                                    <p>Mar 21 - Apr 19</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 d-flex align-items-center justify-content-center">
                                    <div class="as_sign_img text-center">
                                        <img src="<?php echo $theme_uri; ?>/images/zodiac.png" alt="" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                                    <ul class="as_sign_ul as_sign_ul_right">
                                        <li class="as_sign_box">
                                            <a href="zodiac_single.html">
                                                <span class="as_sign">
                                                <img src="<?php echo $theme_uri; ?>/images/sign7.svg" alt="">
                                                </span>
                                                <div>
                                                    <h5>Libra</h5>
                                                    <p>Mar 21 - Apr 19</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="as_sign_box">
                                            <a href="zodiac_single.html">
                                                <span class="as_sign">
                                                <img src="<?php echo $theme_uri; ?>/images/sign8.svg" alt="">
                                                </span>
                                                <div>
                                                    <h5>Scorpio</h5>
                                                    <p>Mar 21 - Apr 19</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="as_sign_box">
                                            <a href="zodiac_single.html">
                                                <span class="as_sign">
                                                <img src="<?php echo $theme_uri; ?>/images/sign9.svg" alt="">
                                                </span>
                                                <div>
                                                    <h5>Sagittarius</h5>
                                                    <p>Mar 21 - Apr 19</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="as_sign_box">
                                            <a href="zodiac_single.html">
                                                <span class="as_sign">
                                                <img src="<?php echo $theme_uri; ?>/images/sign10.svg" alt="">
                                                </span>
                                                <div>
                                                    <h5>Capricorn</h5>
                                                    <p>Mar 21 - Apr 19</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="as_sign_box">
                                            <a href="zodiac_single.html">
                                                <span class="as_sign">
                                                <img src="<?php echo $theme_uri; ?>/images/sign11.svg" alt="">
                                                </span>
                                                <div>
                                                    <h5>Capricorn</h5>
                                                    <p>Mar 21 - Apr 19</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="as_sign_box">
                                            <a href="zodiac_single.html">
                                                <span class="as_sign">
                                                <img src="<?php echo $theme_uri; ?>/images/sign12.svg" alt="">
                                                </span>
                                                <div>
                                                    <h5>Pisces</h5>
                                                    <p>Mar 21 - Apr 19</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

		<section class="row services">
			<?php while (have_rows('characteristics')) : the_row();?>
				<div class="col-lg-4 col-md-12 characteristics">
					<div class="itemImage">
						<img src="<?php the_sub_field('image_characteristics'); ?>" alt="">
					</div>
					<h3 class="itemTitle">
						<?php the_sub_field('title_characteristics', 'option'); ?>
					</h3>
					<p class="itemText">
						<?php the_sub_field('text_characteristics', 'option'); ?>
					</p>
				</div><!-- /.col -->
			<?php endwhile; ?>
		</section>><!-- /.row -->
		

	</div>

<?php
get_footer();
