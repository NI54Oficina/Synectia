<?php
 $display_footer_widgets    = onetone_option('enable_footer_widget_area');
 $footer_columns            = onetone_option('footer_columns','4');
 $copyright_text            = onetone_option('copyright','');
 $display_copyright_bar     = onetone_option('display_copyright_bar','yes');

?>
<!--Footer-->
		<footer class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <style media="screen">
      footer{
        padding: 0 !important;
        margin: 0 !important;
      }

        .footer-content-area{
          background-color: #004851;
          padding: 20px 30px;;
        }

        .footer-content-area img{
          width: 60%;
        }

        footer h4{
          font-family: 'Roboto-black';
          color:white;
          font-size: 15px;
          line-height: 24px;
        }

        footer .inter-footer p{
          color:#008E8E;
          margin-bottom:5px;
          line-height: 25px;
        }

        footer .inter-footer p span{
          color:#008E8E;
          font-family: 'Roboto-black';
        }

      </style>

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer-content-area">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <img src="<?php echo site_url(); ?>/wp-content/themes/onetone/img/logo-blanco.png" alt="">

          <p style="font-family: 'Roboto-light'; color:#008E8E; font-size:18px"><span style="font-family: 'Roboto-bold';  color:#008E8E; font-size:18px">Cirugía en equipo</span><br> para miembro superior</p>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 inter-footer">
          <h4 >CONTACTO</h4>
          <p>Av. Libertador 4992 PB 1 CABA</p>
          <p>(+5411) 4772 4391 / 0857</p>
          <p style="color:white; font-weight:bold">synectiacirugia@gmail.com</p>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-10 inter-footer">
          <h4 class="" >TURNOS</h4>
          <p><span>Horarios: </span> Miércoles y Viernes 16hs</p>
          <p><span>Cobertura: </span> Particular, OSDE y otros</p>
          <p >prepagos por integro</p>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 logo-color-sin">
            <img src="<?php echo site_url(); ?>/wp-content/themes/onetone/img/logo-img.png" alt="">
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

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 site-info pull-left" style="font-size:16px; padding-left:25px;">



                     <?php echo do_shortcode($copyright_text); ?>

                        <!--    &nbsp;&nbsp; &nbsp;&nbsp; -->

  <?php
            //           if( is_home() || is_front_page()){
            //             printf(__('Designed by <a href="%s">MageeWP Themes</a>.','onetone'),esc_url('https://www.mageewp.com/'));
            //           }else{
						//  printf(__('Designed by MageeWP Themes.','onetone'));
						//   }
						  ?>
              <a href="#"><div class="fb-link"> <i class="fa fa-facebook" aria-hidden="true"></i>  </div></a>

              <style media="screen">
              .fb-link{text-align: center;
                background-color: #004851;
                border-radius: 100%;
                width: 30px;
                height: 30px;
                position: relative;
                float:right;
              }

              .fb-link i{
                color:white;
                font-size: 1.5em;
                margin-top: 24%;
              }

              </style>

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
