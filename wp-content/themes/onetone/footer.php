<?php
 $display_footer_widgets    = onetone_option('enable_footer_widget_area');
 $footer_columns            = onetone_option('footer_columns','4');
 $copyright_text            = onetone_option('copyright','');
 $display_copyright_bar     = onetone_option('display_copyright_bar','yes');

?>
<!--Footer-->
		<footer>
      <style media="screen">
        .footer-content-area{
          background-color: #004851;
          padding: 20px 30px;;
        }

        .footer-content-area img{
          width: 60%;
        }
      </style>

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer-content-area">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <img src="<?php echo site_url(); ?>/wp-content/themes/shapely/images/logo-blanco.png" alt="">

          <p><b>Cirugía en equipo</b><br> para miembro superior</p>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
          <h4 style="color:white; font-weight:bold">CONTACTO</h4>
          <p>Av. Libertador 4992 PB 1 CABA</p>
          <p>(+5411) 4772 4391 / 0857</p>
          <p style="color:white; font-weight:bold">synectiacirugia@gmail.com</p>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
          <h4 style="color:white; font-weight:bold" >TURNOS</h4>
          <p><span>Horarios: </span> Miércoles y Viernes 16hs</p>
          <p><span>Cobertura: </span> Particular, OSDE y otros</p>
          <p >prepagos por integro</p>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <img src="<?php echo site_url(); ?>/wp-content/themes/shapely/images/logo-img.png" alt="">
        </div>
      </div>


        <?php if( $display_footer_widgets == '1' ):?>
            <div class="footer-widget-area">
                <div class="container">
                    <div class="row">
                    <?php
					for( $i=1;$i<=$footer_columns; $i++ ){
					?>
                    <div class="col-md-<?php echo 12/$footer_columns; ?>">
                    <?php
							if(is_active_sidebar("footer_widget_".$i)){
	                           dynamic_sidebar("footer_widget_".$i);
                               }
							?>
                    </div>

                    <?php }?>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if( $display_copyright_bar == 'yes' ):?>

			<div class="footer-info-area" role="contentinfo">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container">

					<div class="site-info pull-left">



                     <?php echo do_shortcode($copyright_text); ?>

                        <!--    &nbsp;&nbsp; &nbsp;&nbsp; -->

  <?php
            //           if( is_home() || is_front_page()){
            //             printf(__('Designed by <a href="%s">MageeWP Themes</a>.','onetone'),esc_url('https://www.mageewp.com/'));
            //           }else{
						//  printf(__('Designed by MageeWP Themes.','onetone'));
						//   }
						  ?>


					</div>
                     <!-- <div class="site-social pull-right">
                      <?php
							echo onetone_get_social( 'footer', '','top','_blank');
							?>
                       </div> -->


				</div>
			</div>

<?php endif; ?>

		</footer>
	</div>
    <?php wp_footer();?>
</body>
</html>
