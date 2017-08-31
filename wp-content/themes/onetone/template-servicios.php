
<?php
/**
 * Template Name: Servicios
 *
 * @package Onetone
 */
 ?>
<?php

get_header();
?>
<style media="screen">
  .header-servicios{
    height: 500px;
    /*height: 300px;*/
    background-image: url(<?php echo site_url(); ?>/wp-content/themes/onetone/img/Servicios_Banner.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    margin-bottom: 0;
  }

  .body-servicios{
    margin-bottom: 0;
  }



    .float-servicios p:first-child{
      font-family: 'Roboto-black';
      font-size: 20px;
      color:#004851;
      letter-spacing: 2px;
      margin-bottom: 0;
    }
    .informacion-manos{
      padding: 20px 20%;
      color:white;
      line-height: 24px;
    }

    .informacion-manos h2{
      font-family: 'Roboto-bold';
      font-size: 2.5em;
      color:white;
      margin-bottom: 20px;
    }

    .informacion-manos h2 span{
      font-family: 'Roboto-thin';
      font-size: 25px;
    }

    .informacion-manos p{
      font-size: 18px;
    }

    .secciones-mano{
      /*height: 250px;*/
      /*border: 1px solid #008E8E;*/
    }

    .contenedor-mano-descripcion{
      background-color: rgba(255,255,255,.2);
      padding: 0px 20px 0px 70px;
      max-width: 400px;
      float:right;
      position: relative;
    }

    .contenedor-mano-descripcion p.title-mano{
      color:#D5D5D6 ;
      font-family:'Roboto-black';
      /*margin-left: 20px;*/
      margin-top: 25px;
      letter-spacing: 2px;
      font-size: 19px;
    }

    .contenedor-mano-descripcion p{
      color:white;
      font-size: 1em;
      line-height: 20px;
    }



    .contenedor-mano-descripcion p span{
     color:#008E8E;
     font-family:'Roboto-black';
     font-size: 18px;
     }

    .circle-mano{
      width: 35px;
      height: 35px;
      border: 8px solid #008E8E;
      border-radius: 100%;
      background-color: white;
      position: absolute;
      left: 0;
      top:0;
      margin-left: 10px;
      margin-top: 15px;
    }


    .circle-mano-r{
      width: 35px;
      height: 35px;
      border: 8px solid #008E8E;
      border-radius: 100%;
      background-color: white;
      position: absolute;
      right: 0;
      top:0;
      margin-right: 25px;
      margin-top: 25px;
    }
	@media only screen and (max-width : 979px) {
	 .secciones-mano{position:initial !important;}
	}

</style>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-servicios">

</div>

<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:0; height:200px;"> -->

<!-- </div> -->

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 body-servicios">

  <div class="float-servicios header-bloque-verde" style=" z-index:3">
    <p class="titulo-pagina">SERVICIOS</p>
    <p class="intro-pagina">Las afecciones del miembro superior son muy frecuentes y pueden alterar <br>tus capacidades. Nosotros lo sabemos y te podemos ayudar a resolverlo. <br>Lo hacemos en forma integral y lo hacemos juntos.</p>
  </div>


  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 secciones-mano">
      <div class="contenedor-mano-descripcion">
        <div class="circle-mano"></div> <p <p class="title-mano">HOMBRO</p>
          <p><span>Procedimientos</span><br>Artroscopía, reconstrucciones ligamentarias,
            transferencias tendinosas, reemplazos
            protésicos, tratamiento del manguito rotador
            y la luxación recidivante.</p>
          <p><span>Patologías frecuentes</span><br>Fractura de clavícula, fractura de húmero,
            luxación de hombro, fracturas de escápula,
            lesiones del plexo braquial.</p>
      </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 secciones-mano seccion-mano-padding" style="position:relative;top:20px;left:-20px;">
      <div class="contenedor-mano-descripcion">
        <div class="circle-mano"></div> <p class="title-mano">CODO</p>
          <p><span>Procedimientos</span><br>Tratamiento de la inestabilidad,
            osteosíntesis, artrolisis, sinovectomías, tenoplastias.</p>
          <p><span>Patologías frecuentes</span><br>Epicondilitis (codo de tenista o golfista),
          luxaciones, fractura de paleta humeral, cúbito y radio.</p>
      </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 secciones-mano seccion-mano-padding" style="position:relative;top:-10px;left:-30px;">
      <div class="contenedor-mano-descripcion">
        <div class="circle-mano-r hidden-xs" ></div> <div class="circle-mano hidden-lg hidden-md hidden-sm" ></div>   <p class="title-mano">MUÑECA</p>
          <p><span>Procedimientos</span><br>Artroscopía, osteotomías, osteosíntesis,
          capsulodesis.</p>
          <p><span>Patologías frecuentes</span><br>Fracturas de muñeca y de escafoides,
          inestabilidades del carpo, lesiones de tendones y nervios, gangliones.</p>
      </div>
    </div>


    <div class="hidden-lg hidden-md hidden-sm col-lg-12 col-md-12 col-sm-12 col-xs-12 secciones-mano">
      <div class="contenedor-mano-descripcion">
        <div class="circle-mano" ></div>  <p class="title-mano">MANO</p>
        <p><span>Procedimientos</span><br>Tenorrafias, neurorrafias, artroplastias, artrodesis.</p>
        <p><span>Patologías frecuentes</span><br>Síndrome del tunel del carpo, enfermedad de dupuytren, artrosis, tenosinovitis digital (dedo en  gatillo o resorte), rizartrosis, tumores.   </p>
      </div>
    </div>


  </div>

  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 informacion-manos">
      <h2>Excelencia y calidad <br><span>para el diagnóstico y tratamiento</span></h2>



      <p>Para lograr el diagnóstico correcto, la patología
        del miembro superior requiere de un alto grado
        de especialización. Su tratamiento quirúrgico
        necesita de profesionales con habilidad y
        delicadeza suficientes para resolver tareas de
        alta complejidad.
        </p><p>
        Aquellas personas que necesitan un alto nivel de
        rendimiento en su miembro superior y buscan
        una atención cuidadosa y personalizada,
        encontrarán en <b>Synectia</b>  el mejor aliado. Entre
        otras herramientas innovadoras, realizamos
        artroscopías en pequeñas articulaciones y
        diferentes técnicas mínimamente invasivas.
        </p><p>
        En el caso específico de la mano, manejamos la
        complejidad de este tipo de cirugías
        programando el tratamiento de sus diferentes
        tejidos de manera integral, siempre enfocados
        en lograr mayor funcionalidad y sin perder de
        vista la importancia del aspecto estético. </p>

    </div>

    </div>

    <div class="hidden-xs col-lg-6 col-md-6 col-sm-6 col-xs-12 secciones-mano secciones-mano-float" style="">
      <div class="contenedor-mano-descripcion" style="float:left" >
        <div class="circle-mano" ></div> <p <p class="title-mano">MANO</p>
          <p><span>Procedimientos</span><br>Tenorrafias, neurorrafias, artroplastias, artrodesis.</p>
          <p><span>Patologías frecuentes</span><br>Síndrome del tunel del carpo, enfermedad de dupuytren, artrosis, tenosinovitis digital (dedo en  gatillo o resorte), rizartrosis, tumores.   </p>
      </div>
    </div>

    <div class="hidden-xs col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background:transparent; height:200px;">

    </div>



  </div>


  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-box-especialidades" style=";">

    <!-- <div class="header-float">
      <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 title-home-banner" style="text-align:left">
        <img src="<?php echo site_url(); ?>/wp-content/themes/onetone/img/logo-nombre.png" alt="">
      </div>

      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 bg-mobile-non-float" style="padding:0; margin:0">
        <p class="special-bg">“Las enfermedades y el trauma del miembro superior son muy comunes. En <b>Synectia</b> te ayudamos a que dejen de afectar tu vida”</p>

      </div>
    </div> -->



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


</div>

<?php get_footer();?>
