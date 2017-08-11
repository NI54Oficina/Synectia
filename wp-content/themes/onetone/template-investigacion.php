
<?php
/**
 * Template Name:Docencia e Investigación
 *
 * @package Onetone
 */
 ?>
<?php

get_header();
?>


<style media="screen">

  .header-investigacion{
    height: 500px;
    /*height: 300px;*/
    background-image: url(<?php echo site_url(); ?>/wp-content/themes/onetone/img/Docenciaeinvestigacion_banner.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    margin-bottom: 0;
    padding-left: 5%;
  }

  .header-investigacion p{
    width: 400px;
    position: absolute;
    top:0;
    bottom: 0;
    margin: auto;
    height: 200px;
    font-size: 2.2em;
    color:#004851;
    font-family: 'Roboto-light';
    line-height: 40px;

  }

  .slogan-investigacion{
    height: 200px;
    background-color: #008E8E;
    text-align: center;
    color:white;
    font-size: 1.4em;
    font-family: 'Roboto-medium';
    padding-top: 30px;
    margin-bottom: 0;
  }

  .slogan-investigacion p:first-child{
    font-family: 'Roboto-black';
    font-size: 15px;
    color:#004851;
  }

  .container-post-investigacion{
    background-color: #D5D5D6;
    padding: 50px;
  }

  .container-button-postular{
      text-align: center;
      color:white;
      padding: 20px;
  }

  .container-button-postular a{
      background-color: #008E8E;
      border: 1px solid transparent;
      color:white;
      padding: 5px 70px;
  }

  .container-button-postular a:hover{
      background-color:white;
      border-color:#008E8E;
      color:#008E8E;;
  }

  .consultas-investigacion h3{
    color:#FF5B35;
    font-family: 'Roboto-bold';
    font-size: 2em;
  }

  .consultas-investigacion {
    text-align: center;
  }

  .consultas-investigacion p {
    color:#575756;
    font-size: 1.3em;
    font-family: 'Roboto-light';
  }

  .barra-investigacion, .categorias-mobile{
    background-color: #004851;
    padding: 0 50px;
    margin-bottom: 0;
    color:white;

  }

  .barra-investigacion > div, .categorias-mobile{
    margin-bottom: 0;
  }

  .barra-investigacion p, .categorias-mobile p{
    margin: 0;
    display: inline-block;
      font-family: 'Roboto-black';
  }

  .barra-investigacion p:first-child, .categorias-mobile p:first-child{
    background-color:#FF5B35;
    padding:10px 15px ;
    margin-right: 10px;
  }
</style>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-investigacion">
  <p>En Synectia ayudamos a nuevos profesionales a formarse en nuestra especialidad.</p>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 slogan-investigacion">
  <p style="margin-bottom:0;">DOCENCIA E INVESTIGACION</p>
  <p style="line-height:48px;">Aquellos que compartan nuestra pasión, <br> pueden acceder a tres tipos de programas educativos</p>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 barra-investigacion hidden-xs">
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
      <p>1</p>   <p> FELLOWSHIP </p>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
      <p>2</p>   <p> PASANTÍA </p>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
      <p>3</p>   <p> ROTACIÓN </p>
  </div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container-post-investigacion">
  <?php
        $category_id = get_cat_ID('Docencia e Investigacion');
        // $category_id= $categories[0]->cat_ID;

        $posts=get_posts( array('numberposts' => 3, "post_type"=>"post", 'category'=>$category_id ) );
        $id=1;
        foreach($posts as $post){  ?>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-lg hidden-sm hidden-md categorias-mobile" style="margin-bottom:20px;">
              <p><?php echo $id; ?></p>   <p> ROTACIÓN </p>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" hid="2">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:white; padding:0;">
              <div class="especialidad-post-image">
                <?php the_post_thumbnail('full'); ?>
              </div>

              <div class="especialidad-post-info" >
                <p style="color:#008E8E"><b><?php the_title(); ?></b></p>
                <div style="color:#575756; font-family:'Roboto-Light'; line-height:20px; padding:0; font-size:14px"  hid="1">
                  <?php echo $post->post_content ?>

                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container-button-postular">
                  <a href="/<?php echo get_field('link_postulacion', $post->ID) ?>">POSTULARME</a>
                </div>
              </div>

            </div>

          </div>


  <?php $id++;} wp_reset_postdata();   ?>

</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 consultas-investigacion">
    <h3>Consultas</h3>
    <p>fellowshiphebacirugiademano@gmail.com</p>
</div>

<?php get_footer();?>
