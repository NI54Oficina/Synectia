<?php
/**
 * Template Name: Home Page
 *
 * Displays the Home page with Parallax effects.
 *
 */
?>

<?php get_header(); ?>
<?php


if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'sidebar-home' ) ) : ?>
	<div class="container p24 wp-caption-text">
		<h5><?php echo esc_html__( 'This is the "Home Sidebar Section", add some widgets to it to change it.', 'shapely' ); ?></h5>

		<p><?php the_content(); ?></p>
	</<div>
<?php endif; ?>

<div id="onetone-owl-slider" class="owl-carousel owl-loaded owl-drag"><div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-4047px, 0px, 0px); transition: 0.25s; width: 10792px;"><div class="owl-item cloned" style="width: 1349px;"><div class="item"><img src="https://demo.mageewp.com/onetone2/wp-content/themes/onetone/images/banner-3.jpg" alt="Slide image 3"><div class="inner"><div class="caption"><div class="caption-inner"><h1>Open-source.</h1>
Vestibulum auctor nisl vel lectus ullamcorper sed pellentesque dolor eleifend.
<br><a class="btn" target="_self" href="#">Contribute</a></div></div></div></div></div><div class="owl-item cloned" style="width: 1349px;"><div class="item"><img src="https://demo.mageewp.com/onetone2/wp-content/themes/onetone/images/banner-4.jpg" alt="Slide image 4"><div class="inner"><div class="caption"><div class="caption-inner"><h1>Uh, that's about it.</h1>
I just wanted to show you another slide.<br><a class="btn" target="_self" href="#">Download</a></div></div></div></div></div><div class="owl-item" style="width: 1349px;"><div class="item"><img src="https://demo.mageewp.com/onetone2/wp-content/themes/onetone/images/banner-1.jpg" alt="Slide image 1"><div class="inner"><div class="caption"><div class="caption-inner"><h1>The jQuery slider that just slides.</h1>
No fancy effects or unnecessary markup.<br><a class="btn" target="_self" href="#">Download</a></div></div></div></div></div><div class="owl-item active" style="width: 1349px;"><div class="item"><img src="https://demo.mageewp.com/onetone2/wp-content/themes/onetone/images/banner-2.jpg" alt="Slide image 2"><div class="inner"><div class="caption"><div class="caption-inner"><h1>Fluid, flexible, fantastically minimal.</h1>
Use any HTML in your slides, extend with CSS. You have full control.<br><a class="btn" target="_self" href="#">Download</a></div></div></div></div></div><div class="owl-item" style="width: 1349px;"><div class="item"><img src="https://demo.mageewp.com/onetone2/wp-content/themes/onetone/images/banner-3.jpg" alt="Slide image 3"><div class="inner"><div class="caption"><div class="caption-inner"><h1>Open-source.</h1>
Vestibulum auctor nisl vel lectus ullamcorper sed pellentesque dolor eleifend.
<br><a class="btn" target="_self" href="#">Contribute</a></div></div></div></div></div><div class="owl-item" style="width: 1349px;"><div class="item"><img src="https://demo.mageewp.com/onetone2/wp-content/themes/onetone/images/banner-4.jpg" alt="Slide image 4"><div class="inner"><div class="caption"><div class="caption-inner"><h1>Uh, that's about it.</h1>
I just wanted to show you another slide.<br><a class="btn" target="_self" href="#">Download</a></div></div></div></div></div><div class="owl-item cloned" style="width: 1349px;"><div class="item"><img src="https://demo.mageewp.com/onetone2/wp-content/themes/onetone/images/banner-1.jpg" alt="Slide image 1"><div class="inner"><div class="caption"><div class="caption-inner"><h1>The jQuery slider that just slides.</h1>
No fancy effects or unnecessary markup.<br><a class="btn" target="_self" href="#">Download</a></div></div></div></div></div><div class="owl-item cloned" style="width: 1349px;"><div class="item"><img src="https://demo.mageewp.com/onetone2/wp-content/themes/onetone/images/banner-2.jpg" alt="Slide image 2"><div class="inner"><div class="caption"><div class="caption-inner"><h1>Fluid, flexible, fantastically minimal.</h1>
Use any HTML in your slides, extend with CSS. You have full control.<br><a class="btn" target="_self" href="#">Download</a></div></div></div></div></div></div></div><div class="owl-nav"><div class="owl-prev">prev</div><div class="owl-next">next</div></div><div class="owl-dots"><div class="owl-dot"><span></span></div><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div>


<?php get_footer(); ?>
