
<?php
/**
 * Template Name: Novedades
 *
 * @package Onetone
 */
 ?>
<?php

get_header();
?>

<style media="screen">


  .header-novedades{
    height: 300px;
    background-image: url(<?php echo site_url(); ?>/wp-content/themes/onetone/img/Nosotros_Banner.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    margin-bottom: 0;
  }

  .container-post-novedades .float-novedades{
    position: absolute;
    width: 90%;
    left: 0;
    right: 0;
    margin:auto;
    height: 200px;
    background-color: #008E8E;
    top: -20%;
    text-align: center;
    color:white;
    font-size: 1.4em;
    font-family: 'Roboto-medium';
    padding-top: 30px;
  }

  /*.container-post-novedades .float-novedades p:first-child{
    font-family: 'Roboto-black';
    font-size: 15px;
    color:#004851;
  }*/
</style>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-novedades">

</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container-post-novedades">
  <div class="float-novedades header-bloque-verde">
      <p class="titulo-pagina">NOVEDADES</p>
      <p class="intro-pagina">Te acercamos las últimas noticias referentes <br> a nuestra especialidad</p>
  </div>

  <?php
        $category_id = get_cat_ID('Novedades');
        // $category_id= $categories[0]->cat_ID;

        $posts=get_posts( array('numberposts' => 6, "post_type"=>"post", 'category'=>$category_id ) );

        foreach($posts as $post){  ?>
          <a href="<?php echo get_permalink($post->ID) ?>">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:white; padding:0;">
              <div class="especialidad-post-image">
                <?php the_post_thumbnail('full'); ?>
              </div>

              <div class="especialidad-post-info" hid="1">
                <p style="color:#008E8E"><b><?php the_title(); ?></b></p>
                <p style="color:#575756; font-family:'Roboto-Light'; line-height:20px;">
                  <?php $content = get_post_field( 'post_content', $post->ID );

                    // Get content parts
                    $content_parts = get_extended( $content );

                    // Output part before <!--more--> tag
                    echo $content_parts['main']."..."; ?>

                </p>
              </div>

            </div>

          </div>
          </a>

  <?php } wp_reset_postdata();   ?>


</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container-buttons" style="padding:50px;">
  <a href="">VER TODAS LAS NOVEDADES</a>
</div>


<?php get_footer();?>
