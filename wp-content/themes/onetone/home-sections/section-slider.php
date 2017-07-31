<?php
echo onetone_get_default_slider();
 ?>

 <style>

   .header-after-slider{
     background-color: transparent;
     padding: 50px;
     z-index: 99999;
   }

   .header-float{
     background-color: #004851;
     width: 90%;
     position: absolute;
     top:-70%;
     height:auto;
     padding-left: 50px;
   }
   .header-float img{
     display: inline-block;
     width: 200px;
   }
   .special-bg{
     background-image: url(<?php echo site_url(); ?>/wp-content/themes/shapely/images/bg-colored.png);
     background-repeat: no-repeat;
     background-position: center;
     background-size: 100% 100%;
     display: inline-block;
     padding: 50px;
     padding-right: 120px;
     width: 450px;
     float: right;
     margin:0;


   }

 </style>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-after-slider">
    <div class="header-float">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:50px;">
        <img src="<?php echo site_url(); ?>/wp-content/themes/shapely/images/logo-nombre.png" alt="">
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding:0; margin:0">
        <p class="special-bg">“Las enfermedades y el trauma del miembro superior son muy comunes. En <b>Synectia</b> te ayudamos a que dejen de afectar tu vida”</p>

      </div>
    </div>
</div>
