
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
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#C1C1C3;">

<style media="screen">
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

            <div class="especialidad-post-info">
              <p style="color:#008E8E"><b><?php the_title(); ?></b></p>
              <p style="color:#575756"><?php echo  $post->post_content ?></p>
            </div>

          </div>

        </div>


<?php } wp_reset_postdata();   ?>

</div>

<!-- ACA TERMINAN LAS SECCIONES DE HOME -->
<?php get_footer();?>
