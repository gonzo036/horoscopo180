<?php
/**
 * Template Name: Home
 * Description: Page template with Sidebar on the left side.
 *
 */

get_header();

the_post();
?>

	<div class="container">

		<section class="row">
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

		<section class="as_zodiac_sign_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="as_heading as_heading_center">choose zodiac sign</h1>
                        <p class="as_font14 as_margin0">Consectetur adipiscing elit, sed do eiusmod tempor incididuesdeentiut labore <br>etesde dolore magna aliquapspendisse and the gravida.</p>
                        <div class="as_zodiac_inner text-left">
                            <div class="row as_verticle_center">
                                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                                    <ul class="as_sign_ul">
                                        <li class="as_sign_box">
                                            <a href="zodiac_single.html">
                                                <span class="as_sign">
                                                <img src="images/sign1.svg" alt="">
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
                                                <img src="images/sign2.svg" alt="">
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
                                                <img src="images/sign3.svg" alt="">
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
                                                <img src="images/sign4.svg" alt="">
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
                                                <img src="images/sign5.svg" alt="">
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
                                                <img src="images/sign6.svg" alt="">
                                                </span>
                                                <div>
                                                    <h5>Virgo</h5>
                                                    <p>Mar 21 - Apr 19</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="as_sign_img text-center">
                                        <img src="images/zodiac.png" alt="" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                                    <ul class="as_sign_ul as_sign_ul_right">
                                        <li class="as_sign_box">
                                            <a href="zodiac_single.html">
                                                <span class="as_sign">
                                                <img src="images/sign7.svg" alt="">
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
                                                <img src="images/sign8.svg" alt="">
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
                                                <img src="images/sign9.svg" alt="">
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
                                                <img src="images/sign10.svg" alt="">
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
                                                <img src="images/sign11.svg" alt="">
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
                                                <img src="images/sign12.svg" alt="">
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
	</div>

<?php
get_footer();
