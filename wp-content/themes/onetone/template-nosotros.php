
<?php
/**
 * Template Name: Nosotros
 *
 * @package Onetone
 */
 ?>
<?php

get_header();
?>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-nosotros" >
    <p>NOSOTROS</p>
    <p >Analizamos en forma conjunta cada caso. Sumamos <br>aptitud y experiencia junto a tecnología y procedimientos <br>de vanguardia para conseguir el mejor tratamiento.</p>

</div>
    <style media="screen">

      .header-nosotros{
        padding: 10% 50px 0px 50px;
        background-image:url(<?php echo site_url(); ?>/wp-content/themes/onetone/img/Nosotros_Banner.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        margin-bottom: 0;
        text-align: center;
      }

      .header-nosotros p{
        color:white;
        font-family: 'Roboto-medium';
        margin-bottom: 0px;
      }

      .header-nosotros p:last-child{
        font-size: 2em;
      }

      .container-medicos{
        padding: 0;
      }

      .container-medicos > div{
        height: 220px;
      }
      .informacion-dr{
        background-color: #D5D5D6;
        padding: 20px;
      }
      .informacion-dr h2{
        color:#008E8E;
        font-family: 'Roboto-bold';
        font-size: 1.7em;
      }

      .informacion-dr P{
        margin-bottom: 0px;
        color:#575756;
        font-family: 'Roboto-light';
      }

      .imagen-dr img{
        text-align: center;
      }

      .imagen-dr{
        overflow: hidden;
        position: relative;
      }


    </style>



    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left:50px; padding-right:50px;">
       <?php
        $category_id = get_cat_ID('Nosotros');


         $posts=get_posts( array('numberposts' => -1, "post_type"=>"post", 'category'=>$category_id, 'order' => 'ASC' ) );
          $int=0;
         foreach($posts as $post){ 


           if($int % 2 != 0){?>

             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 container-medicos" hid="2">

               <div class="imagen-dr" >
                 <?php the_post_thumbnail('full'); ?>
               </div>

                 <div class="informacion-dr">
                   <h2><a href="<?php echo $post->guid ?>"> <?php the_title(); ?></a> </h2>
                   <?php echo get_field('informacion_doctor', $post->ID)?>
                 </div>


             </div>

          <?php  }else{?>



          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 container-medicos" hid="2">
              <div class="informacion-dr" >
                <h2><a href="<?php echo $post->guid ?>"> <?php the_title(); ?></a> </h2>
                <?php echo get_field('informacion_doctor', $post->ID)?>
              </div>

              <div class="imagen-dr" >
                <?php the_post_thumbnail('full'); ?>
              </div>
          </div>

      <?php } $int++; }  wp_reset_postdata(); ?>



      </div>


<style media="screen">
  .importancia-equipo h3{
    color:#FF5B35;
    font-family: 'Roboto-bold'
  }

  .importancia-equipo  p{
    font-family: 'Roboto-light';
    color:#575756;
    padding-top: 20px;
    font-size: 1.2em;
    line-height: 25px;
  }
  .importancia-equipo .float-orange{
    width: 20px;
    border: 3px solid #FF5B35;
  }

</style>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 importancia-equipo">
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

    <div class="" style="padding-bottom:20px;">
      <h3>¿Qué hacemos?</h3>
      <div class="float-orange"></div>
    </div>

    <img src="<?php echo site_url(); ?>/wp-content/themes/onetone/img/Nosotros_QUE HACEMOS.jpg" alt="">

    <p>En síntesis, realizamos el tratamiento clínico y quirúrgico de toda patología
que afecte a cualquier área o segmento del miembro superior, ya sea en
etapa aguda, crónica o secuelas.</p>
  </div>

  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="" style="padding-bottom:20px;">
      <h3>¿La importancia del equipo</h3>
      <div class="float-orange"></div>
    </div>

    <img src="<?php echo site_url(); ?>/wp-content/themes/onetone/img/Nosotros_IMPORTANCIA EQUIPO.jpg" alt="">

    <p>Trabajar en equipo nos hace más efectivos, más precisos y reduce la
posibilidad de errores. Nos complementamos científicamente y sumamos
nuestras habilidades. El resultado: un servicio diferente, adaptado a cada caso.</p>
  </div>
</div>

<style >
  .banner-inferior{
    background-image: url(<?php echo site_url(); ?>/wp-content/themes/onetone/img/Nosotros_TeamCierre.jpg);
    height: 450px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center;
  }

  .banner-inferior p{
    position: absolute;
    bottom:20%;
    color: white;
    font-size: 1.7em;
    left: 0;
    right: 0;
    margin:auto;
    line-height: 25px;
    font-family: 'Roboto-thin';
  }

</style>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner-inferior">
    <p>Cirugia  en equipo: <br><b>Un servicio diferente. Caso por caso.</b></p>
</div>


<?php get_footer();?>