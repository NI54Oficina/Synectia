
<?php
/**
 * Template Name: Contacto
 *
 * @package Onetone
 */
 ?>
<?php

get_header();
?>

<style media="screen">
  .left-contacto{
    background-color:#008E8E;
    padding: 50px;
  }

  .left-contacto p{
    color:white;
    font-size: 1.1em;
    /*margin-bottom: 10px;*/
  }

  .left-contacto p:last-child{
    margin-bottom: 0px;
  }

  .left-contacto p span{
    color:#004851;
    font-family: 'Roboto-black';
  }

    .header-contacto{
      background-image: url(<?php echo site_url(); ?>/wp-content/themes/onetone/img/Contacto_Banner.jpg);
      background-size: cover;
      background-position: center;
      height: 500px;
      margin-bottom: 0;
    }

    .right-contacto{
      padding: 0;
    }

    .right-contacto iframe{
      width: 100%;
      height: 100%;
    }

    .left-contacto, .right-contacto{
      margin-bottom: 0;
    }

    .header-contacto p:first-child{
      color:#004851;
      font-family: 'Roboto-black';
    }

    .header-contacto div{
      position: absolute;
      bottom: 0;
      top:0;
      margin: auto;
      height: 200px;
      padding-left: 5%;
    }

    .header-contacto p:last-child{
      color:#004851;
      font-family: 'Roboto-light';
      font-size: 2.3em;
      line-height: 35px;
    }
</style>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-contacto">
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <p>CONTACTO</p>
    <p>Contanos en qué <br> podemos ayudarte </p>
  </div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 left-contacto" hid="1">
  <p>Av. Libertador 4992 PB 1 CABA <br>(+5411) 4772 4391 / 0857</p>
  <p><span>Horarios: </span> Miércoles y Viernes 16hs</p>
  <p><span>Cobertura: </span> Particular, OSDE y otros prepagos por reintegro.</p>
  <p><span>Mail: </span> synectiacirugia@gmail.com</p>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 right-contacto" hid="1">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.5967731819333!2d-58.4386010847715!3d-34.56376348046975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5b9dbca9c35%3A0xb42d51fcdb4b378b!2sAv.+del+Libertador+4992%2C+C1426BWX+CABA!5e0!3m2!1ses!2sar!4v1501607585155" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container-buttons sacar-turno">
  <h3>Turnos Online</h3>
  <p>Conseguí un turno de la manera mas sencilla</p>
  <a href="#">CONSEGUIR TURNO</a>

</div>

<style media="screen">

  .sacar-turno{
    margin: 50px auto;
  }
  .sacar-turno h3{
    color:#FF5B35;
    font-family: 'Roboto-bold';
  }

  .sacar-turno p{
    color:#575756;
    font-family: 'Roboto-light';
    font-size: 1.2em;
  }

</style>

<?php get_footer();?>
