
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



        <h2 style="font-family: 'Roboto-black'; color:#008E8E; font-size:2em;">NUESTRA ESPECIALIDAD</h2>
        <p>SERVICIOS</p>

</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 box-post-especialidades" style="">

<style media="screen">
    .box-post-especialidades{
      margin-bottom: 0;
      background-color:#C1C1C3;
      padding:30px;
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
    .especialidad-post-image{
        width: 100%;
        height: 200px;
        overflow: hidden;
    }

    .especialidad-post-image img{
        width: 100%;
        height: auto;
        position: relative;

    }

    .especialidad-post-info{
      padding: 10px 20px;
    }

</style>

<?php
      $category_id = get_cat_ID('Especialidad');
      // $category_id= $categories[0]->cat_ID;

      $posts=get_posts( array('numberposts' => -1, "post_type"=>"post", 'category'=>$category_id ) );

      foreach($posts as $post){  ?>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:white; padding:0;">
            <div class="especialidad-post-image">
              <?php the_post_thumbnail('full'); ?>
            </div>

            <div class="especialidad-post-info" hid="3">
              <p style="color:#008E8E; line-height:28px;font-family:'Roboto-bold'" hid="1"><?php the_title(); ?></p>
              <div style="color:#575756; font-family:'Roboto-Light'; line-height:20px;" hid="2"><?php echo  $post->post_content ?></div>
            </div>

          </div>

        </div>


<?php } wp_reset_postdata();   ?>

</div>

<style media="screen">
  .box-slogan{
    background-image: url(<?php echo site_url(); ?>/wp-content/themes/onetone/img/Home_TeamCierre.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    /*border-top: 15px solid #004851;*/
    height: 500px;
    background-position: center;
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
          background: linear-gradient(to top, rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%);
        }
      </style>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-banner-footer-home" style="">
        <p style="font-size:2.2em; font-family:'Roboto-Light'; color:#00A4A4; line-height:40px">Trabajamos <br> en equipo para<br>mejorar tu<br> calidad de vida  </p>

    </div>
</div>

<!-- ACA TERMINAN LAS SECCIONES DE HOME -->
<?php get_footer();?>
