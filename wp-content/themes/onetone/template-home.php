
<?php
/**
 * Template Name: Front Page
 *
 * @package Onetone
 */
 ?>
<?php

get_header('home');
?>
<div class="post-wrap">
  <div class="container-fullwidth">
    <div class="page-inner row no-aside" style="padding-top: 0; padding-bottom: 0;">
      <div class="col-main">
        <section class="post-main" role="main" id="content">
<article class="page type-page homepage" role="article">
			<?php
			global $onetone_options,$onetone_new_version,$onetone_homepage_sections ,$onetone_animated;
			$detect = new Mobile_Detect;
			$video_background_section  = onetone_option( 'video_background_section' );
			$video_background_type     = onetone_option( 'video_background_type' );
			$video_background_type     = $video_background_type == ""?"youtube":$video_background_type;
			$section_1_content         = onetone_option( 'section_1_content' );
			$animated                  = onetone_option( 'home_animated');
			$section_1_content         = $section_1_content == 'slider'?1:$section_1_content;
			if( $animated == '1' || $animated == 'on' )
			$onetone_animated = 'onetone-animated';

			$sections_num = 15 ;

			$new_homepage_section = array();
			for($i=0;$i<$sections_num;$i++){

			$section = onetone_option('section_order_'.$i);

			if( is_numeric($section ) )
				$new_homepage_section[] = $section;
			else
				$new_homepage_section[] = $i+1;

			}

			$i = 0 ;

			foreach( $new_homepage_section as $section_part ):
			$hide_section  = onetone_option( 'section_hide_'.($section_part-1) );

			if( $hide_section != '1' && $hide_section != 'on' ){

			if( $section_part == 1 && ($section_1_content == '1' || $section_1_content == 'on' )){

				get_template_part('home-sections/section','slider');

				}else{
			//if( $video_background_section == $section_part && !$detect->isMobile() && !$detect->isTablet() )
			if( $video_background_section == $section_part  )
			   get_template_part('home-sections/section',$video_background_type.'-video');
			else
			   get_template_part('home-sections/section',$section_part);

			}

			}
			$i++;
			endforeach;
			?>
            <div class="clear"></div>
          </article>
        </section>
      </div>
    </div>
  </div>
</div>

<!-- ACA EMPIEZAN LAS SECCIONES DE HOME -->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-box-especialidades" style=";">

  <div class="header-float">
    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 title-home-banner" style="text-align:left">
      <img src="<?php echo site_url(); ?>/wp-content/themes/onetone/img/logo-nombre.png" alt="">
    </div>

    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 bg-mobile-non-float" style="padding:0; margin:0">
      <p class="special-bg">“Las enfermedades y el trauma del miembro superior son muy comunes. En <b>Synectia</b> te ayudamos a que dejen de afectar tu vida”</p>

    </div>
  </div>



        <h2 class="nuestra-especialidad-home" style="">NUESTRA ESPECIALIDAD</h2>
        <p>SERVICIOS</p>

</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box-post-especialidades" style="">

<style media="screen">
    .box-post-especialidades{
      margin-bottom: 0;
      background-color:#C1C1C3;
      padding:20px;
    }
     .header-float{
       background-color: #004851;
       width: 90%;
       position: absolute;
       top:-50%;
       height:auto;
       padding-left: 50px;
       left: 0;
       right: 0;
       margin: auto;
       z-index: 2;
     }
     .header-float img{
       display: inline-block;
       width: 200px;
     }

  .title-box-especialidades{
    background-color:#E2E2E2;
    text-align: center;
    padding-top: 100px;
    padding-bottom: 50px;
    margin-top:30px;
    margin-bottom: 0;
  }
    /*.especialidad-post-image{
        width: 100%;
        height: 200px;
        overflow: hidden;
    }

    .especialidad-post-image img{
        width: 100%;
        height: auto;
        position: relative;

    }*/

    .especialidad-post-info{
      padding: 10px 20px;
    }

</style>

<?php
      $category_id = get_cat_ID('Especialidad');
      // $category_id= $categories[0]->cat_ID;

      $posts=get_posts( array('numberposts' => -1, "post_type"=>"post", 'category'=>$category_id ) );

      foreach($posts as $post){  ?>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"  >
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:white; padding:0;">
            <div class="especialidad-post-image" style="position:relative">
              <?php //the_post_thumbnail('full'); ?>
              <?php

              $urlFirst=get_the_post_thumbnail_url();

              $imageid = MultiPostThumbnails::get_post_thumbnail_id('post', 'secondary-image', $post->ID);
              $imageurl = wp_get_attachment_image_src($imageid);


              $imagenes= array();

              array_push($imagenes,$urlFirst);

              if($imageurl!=null){ array_push($imagenes,$imageurl[0]);};



             echo onetone_get_slider_paramethers($imagenes);
            // [owl-carousel category="Uncategorized" singleItem="true" items="1" autoPlay="true"];
              // if (class_exists('MultiPostThumbnails')) :
              //
              // MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image');
              //
              // endif;

            // echo   onetone_get_default_slider();
               ?>

               <!-- <div class="hidden-xs container-circulos-hover">
                  <div class="circulo-hover"></div>
                  <div class="circulo-hover"></div>
               </div> -->
            </div>

            <div class="especialidad-post-info" hid="3">
              <p style="color:#008E8E; line-height:28px;font-family:'Roboto-bold'"><?php the_title(); ?></p>
              <div style="color:#575756; font-family:'Roboto-Light'; line-height:20px;" hid="2"><?php echo  $post->post_content ?></div>
            </div>



          </div>




        </div>

<style media="screen">

.container-circulos-hover{
  position: absolute;
  bottom: 30px;
  left: 0;
  right: 0;
  text-align: center;
  margin: auto;
}
  .circulo-hover{
      height: 12px;
      margin: auto 4px;
      width: 12px;
      background-color:#008e8e;
      border-radius: 100%;
      display: inline-flex;
  }

  .circulo-hover:nth-child(2){
opacity: .54;
  }
</style>

<?php } wp_reset_postdata();   ?>

</div>


<!-- <section id="home" class="section homepage-slider onetone-home"><div class="title-slider"><span>Cirugía en equipo </span> <br class="hidden-lg hidden-md hidden-sm"> para miembro superior</div><div id="onetone-owl-slider" class="owl-carousel owl-loaded owl-drag"> <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2274px, 0px, 0px); transition: 0.25s; width: 5306px;"><div class="owl-item cloned" style="width: 758px;"><div class="item"><img src="http://localhost/synectia-web/wp-content/uploads/2017/07/Home_Banner_2.jpg" alt="Slide image 2"><div class="inner"><div class="caption"><div class="caption-inner"></div></div></div></div></div><div class="owl-item cloned" style="width: 758px;"><div class="item"><img src="http://localhost/synectia-web/wp-content/uploads/2017/07/Home_Banner_3.jpg" alt="Slide image 3"><div class="inner"><div class="caption"><div class="caption-inner"></div></div></div></div></div><div class="owl-item" style="width: 758px;"><div class="item"><img src="http://localhost/synectia-web/wp-content/uploads/2017/07/Home_Banner_1.jpg" alt="Slide image 1"><div class="inner"><div class="caption"><div class="caption-inner"></div></div></div></div></div><div class="owl-item active" style="width: 758px;"><div class="item"><img src="http://localhost/synectia-web/wp-content/uploads/2017/07/Home_Banner_2.jpg" alt="Slide image 2"><div class="inner"><div class="caption"><div class="caption-inner"></div></div></div></div></div><div class="owl-item" style="width: 758px;"><div class="item"><img src="http://localhost/synectia-web/wp-content/uploads/2017/07/Home_Banner_3.jpg" alt="Slide image 3"><div class="inner"><div class="caption"><div class="caption-inner"></div></div></div></div></div><div class="owl-item cloned" style="width: 758px;"><div class="item"><img src="http://localhost/synectia-web/wp-content/uploads/2017/07/Home_Banner_1.jpg" alt="Slide image 1"><div class="inner"><div class="caption"><div class="caption-inner"></div></div></div></div></div><div class="owl-item cloned" style="width: 758px;"><div class="item"><img src="http://localhost/synectia-web/wp-content/uploads/2017/07/Home_Banner_2.jpg" alt="Slide image 2"><div class="inner"><div class="caption"><div class="caption-inner"></div></div></div></div></div></div></div><div class="owl-nav"><div class="owl-prev">prev</div><div class="owl-next">next</div></div><div class="owl-dots"><div class="owl-dot"><span></span></div><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div></section> -->




<style media="screen">
  .box-slogan{
    background-image: url(<?php echo site_url(); ?>/wp-content/themes/onetone/img/Home_TeamCierre.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    /*border-top: 15px solid #004851;*/
    height: 500px;
    background-position: center top;
    margin-bottom: 30px;
  }

  .box-slogan > div{

  }
</style>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box-slogan" class="">
  <div class="" style="height:20px; background-color:#004851; position:absolute; top:0; width:100%; left:0;"> </div>
  <div class="" style="height:20px; background-color:#00A4A4; position:absolute; top:0; width:30%; left:0;  border-top-right-radius:10px;  border-bottom-right-radius:10px;"></div>



    <div class="cover-white-transparent">
      <style>
        .cover-white-transparent{
          position: absolute;
          top:0;
          left: 0;
          height: 100%;
          width: 100%;
          /*background: linear-gradient(to top, rgba(255,255,255,1) 15%,rgba(255,255,255,0) 100%)*/
        }
      </style>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-banner-footer-home" style="">
        <p style="font-size:2.2em; font-family:'Roboto-Light'; color:#00A4A4; line-height:40px">Trabajamos <br> en equipo para<br>mejorar tu<br> calidad de vida  </p>
    </div>
</div>




<!-- ACA TERMINAN LAS SECCIONES DE HOME -->
<?php get_footer();?>
