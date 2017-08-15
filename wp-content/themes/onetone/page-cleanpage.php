<?php
/**
 * Template Name: Clean Page
 * This template will only display the content you entered in the page editor
 */
?>

    <?php
    global $post;
	if(isset($_POST["offset"])){
		$offset=$_POST["offset"];
	}else{
		$offset=0;
	}
	if(isset($_POST["category"])){
		$category=$_POST["category"];
	}else{
		$category=0;
	}

    $myposts = get_posts( array(
        'posts_per_page' => 10,
        'offset'         => $offset,
		"category" => $category
    ) );


    if ( $myposts ) {
        foreach ( $myposts as $post ) :
            setup_postdata( $post ); ?>

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

                      $content_parts = get_extended( $content );

                      echo $content_parts['main']."..."; ?>

                  </p>
                </div>

              </div>

            </div>
            </a>
        <?php
        endforeach;
        wp_reset_postdata();
    }
    ?>
