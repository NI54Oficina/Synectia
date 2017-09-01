<?php


//echo onetone_get_default_slider();
 ?>
 <div class="custom-select" style="display:none">
   <select id="fxselect" name="fxselect">
     <option value="-1" >Choose an effect...</option>
     <option value="fxSoftScale">Soft scale</option>
     <option value="fxPressAway">Press away</option>
     <option value="fxSideSwing">Side Swing</option>
     <option value="fxFortuneWheel" selected>Fortune wheel</option>
     <option value="fxSwipe">Swipe</option>
     <option value="fxPushReveal">Push reveal</option>
     <option value="fxSnapIn">Snap in</option>
     <option value="fxLetMeIn">Let me in</option>
     <option value="fxStickIt">Stick it</option>
     <option value="fxArchiveMe">Archive me</option>
     <option value="fxVGrowth">Vertical growth</option>
     <option value="fxSlideBehind">Slide Behind</option>
     <option value="fxSoftPulse">Soft Pulse</option>
     <option value="fxEarthquake">Earthquake</option>
     <option value="fxCliffDiving">Cliff diving</option>
   </select>
 </div>

 <div id="component" class="component component-small">
   <ul class="itemwrap">
     <!-- <li class="current"><img src="img/1.jpg" alt="img01"/></li> -->
     <li class="current"><img src="<?php echo site_url(); ?>/wp-content/themes/onetone/img/Home_Banner_1.jpg" alt="img02"/></li>
     <li><img src="<?php echo site_url(); ?>/wp-content/themes/onetone/img/Home_Banner_2.jpg" alt="img03"/></li>
     <li><img src="<?php echo site_url(); ?>/wp-content/themes/onetone/img/Home_Banner_3.jpg" alt="img04"/></li>
     <!-- <li><img src="<?php echo site_url(); ?>/wp-content/themes/onetone/img/Home_Banner_4.jpg" alt="img05"/></li> -->
   </ul>
   <nav>
     <a class="prev" href="#"></a>
     <a class="next" href="#"></a>
   </nav>
 </div>

 <style>
 .title-slider{
   position: absolute;
   left: 0;
   right: 0;
   top:43%;
   height: auto;
   margin:auto;
   color: white;
   z-index: 2;
   text-align: center;
   font-size: 2.5em;
   max-width: 700px;

 }

 .title-slider span{
   font-family: 'Roboto-bold';
 }
 </style>

 <script src="<?php echo site_url(); ?>/classie.js"></script>
 <script src="<?php echo site_url(); ?>/main.js"></script>

<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-after-slider">
    <div class="header-float">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:50px;">
        <img src="<?php echo site_url(); ?>/wp-content/themes/shapely/images/logo-nombre.png" alt="">
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding:0; margin:0">
        <p class="special-bg">“Las enfermedades y el trauma del miembro superior son muy comunes. En <b>Synectia</b> te ayudamos a que dejen de afectar tu vida”</p>

      </div>
    </div>
</div> -->
