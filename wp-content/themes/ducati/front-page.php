<?php get_header(); ?>

<!-- <div id="ducati_post">-->
    <?php
       // if(have_posts()){
       //     while(have_posts()){
       //         the_post();
       //         the_content();
       //     }
       // }
    ?>
<!-- </div>-->
<div class="d-hero-short-pre _module-space-bottom">
    <div class="d-hero-slider" data-js-hero-slider data-js-hero-slider-autoplay="10000.0">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="d-hero-banner -textright -nobglayer">
                        <picture class="picture">
                            <?php
                                $img_url = get_theme_file_uri(); 
                            ?>
                            <?php if( get_field('banner_image1') ){ ?>
                                <source srcset="<?php the_field('banner_image1'); ?>" media="(min-width: 1099px)">
                            <?php }
                             if( get_field('banner_image2') ){ ?>
                            <source srcset="<?php the_field('banner_image2'); ?>" media="(min-width: 739px)">
                            <?php }
                                if( get_field('banner_image3') ){
                            ?>
                             <source srcset="<?php the_field('banner_image3'); ?>" media="(min-width: 0px)"> 
                            <?php } if( get_field('banner_image1') ){ ?>
                                <img srcset="<?php the_field('banner_image1'); ?>" alt="" data-object-fit="cover"> 
                            <?php } ?>
                            </picture>
                        <section class="body">
                            <div class="subtitle"><?php the_field('banner_subtitle'); ?></div>
                            <h1 class="title"><?php the_field('banner_title'); ?></h1>
                            <div class="txt"><?php the_field('banner_txt'); ?></div>
                            <div class="wrapshare"> </div>
                            <div class="wrapcta">
                                <a class="d-button" href="https://configurator.ducati.com/bikes/au/en/streetfighter/?_ga&#61;2.212198164.1820952173.1609071902-296148449.1571751202" target="_blank"> <span class="txt">Configure</span> </a>
                                <a class="d-button" href="<?php the_field('banner_model_link'); ?>"> <span class="txt">Discover</span> </a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev">
                <svg class="icon icon--arrow-small-left" viewBox="0 0 12 22">
                    <use xlink:href="#arrow-small-left"></use>
                </svg>
            </div>
            <div class="swiper-button-next">
                <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
                    <use xlink:href="#arrow-small-right"></use>
                </svg>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
<div class="d-models-blocks _module-space-top">
    <header class="header">
        <h1 class="title"><?php the_field('model_range_title'); ?></h1> </header>
    <ul class="body">
        <?php
        // Check rows exists.
        if( have_rows('model') ):
            // Loop through rows.
            while( have_rows('model') ) : the_row();
                // Load sub field value.
                $sub_value = get_sub_field('select_model');
                if (has_post_thumbnail( $sub_value->ID ) ): 
                   $image = wp_get_attachment_image_src( get_post_thumbnail_id( $sub_value->ID ), 'single-post-thumbnail' ); ?>
                <?php endif; ?>
                <li class="block">
                    <a href="<?php the_permalink(); ?>" class="model">
                        <picture class="picture"> <img class="lazyload" data-srcset="<?php echo $image[0]; ?>" alt=""> </picture>
                        <?php if(get_field('configurator' , $sub_value->ID) !== 'Yes'){?>
                        <div class="subtitle"><?php echo $sub_value->post_title; ?></div>
                        <?php } ?>
                        <div class="content">
                        <?php if(get_field('configurator' , $sub_value->ID) == 'Yes'){
                                echo $sub_value->post_title;
                         } ?>
                            <?php if(get_field('model_displacement' , $sub_value->ID) !=='') {?>Displacement: <?php echo get_field('model_displacement' , $sub_value->ID) ; } ?>
                            <?php if(get_field('model_power' , $sub_value->ID)  !==''){ ?><br /> Power: <?php echo get_field('model_power' , $sub_value->ID) ;} ?>
                            <?php if(get_field('model_torque' , $sub_value->ID)  !==''){ ?><br /> Torque: <?php echo get_field('model_torque' , $sub_value->ID) ; } ?>
                            <?php if(get_field('model_seat_height' , $sub_value->ID)  !==''){ ?> <br /> Seat height: <?php echo get_field('model_seat_height' , $sub_value->ID) ; }?>
                        </div>
                    </a>
                </li>
                <?php
            // End loop.
            endwhile;
        // No value.
        else :
        // Do something...
        endif;
        ?>

    </ul>
</div>
<!-- <div class="d-models-blocks">
    <ul class="body">

    </ul>
</div> -->
<!-- <div class="d-models-blocks">
    <ul class="body">
    </ul>
</div> -->
<!-- <div class="d-models-blocks">
    <ul class="body">


    </ul>
</div> -->
<!-- start -->
<?php
        $wpb_all_query = new WP_Query(array('post_type'=>'promotions', 'post_status'=>'publish', 'posts_per_page'=>-1)); 
        // print_r($wpb_all_query);?>
        <?php if ( $wpb_all_query->have_posts() ) { ?>
 

 
            <!-- the loop -->
            
            <?php
            //$i=0;
             while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); 
                 if (has_post_thumbnail( $post->ID ) ): 
                   $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <?php endif; ?>
                <div class="d-banner-wide _module-space-top -promo">
                    <a href="<?php echo $promotions_link; echo get_post_permalink($post->ID);?>">
                        <div class="wrapper">
                            <div class="text"> <span class="category"><?php the_field('promotions_category'); ?></span>
                                <h1 class="title"><?php the_field('promotions_title'); ?> </h1> 
                                <span class="description"><?php the_field('promotions_description'); ?></span> 
                                <span class="d-link " title="Clicca qui">
                                <span><?php the_field('label'); ?></span> </span>
                            </div>
                            <picture class="image"> <img class="lazyload" data-srcset="<?php echo $image[0];?>" alt="" data-object-fit="cover"> </picture>
                        </div>
                    </a>
                </div>
            <?php 
               // if($i>=3){
                 //   break;
               // }
            endwhile; ?>
            <!-- end of the loop -->
         <?php wp_reset_postdata(); ?>
         
        <?php }else { ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php }?>

<!-- <div class="d-banner-wide _module-space-top _module-space-bottom">
    <a href="/au/en/world/myducati-app" target="_blank">
        <div class="wrapper">
            <div class="text"> <span class="category"></span>
                <h3 class="title">The MyDucati world now has an app</h3> <span class="description">With MyDucati App you have the entire Ducati world at your fingertips and can access special content. Download it now and explore the full range of services to enjoy a customised experience wherever you are.</span> <span class="d-link " title="Clicca qui">
    
    <span>FIND OUT MORE </span> </span>
            </div>
            <picture class="image"> <img class="lazyload" data-srcset="<?php echo $img_url.'/assets/images/MyDucati-ENG-01-banner-wide-663x249.png';?>" alt="" data-object-fit="cover"> </picture>
        </div>
    </a>
</div> -->


<!-- end -->
<?php
    $wpb_all_query = new WP_Query(array('post_type'=>'discover_section', 'post_status'=>'publish', 'posts_per_page'=>-1)); 
    // print_r($wpb_all_query);
    if ( $wpb_all_query->have_posts() ) { 
        while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); 
            if (has_post_thumbnail( $post->ID ) ): 
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
            endif; ?>
            <div class="d-banner-full _module-space-top">
                <div class="body">
                    <picture>
                        <source data-srcset="<?php echo $image[0];?>" media="(max-width: 979px)"> <img class="lazyload" data-srcset="<?php echo $image[0];?>"> </picture>
                    <div class="content">
                        <h1 class="title">
                                
                                <?php the_title();?>
                            </h1>
                        <p class="text"><?php echo the_field('description');?></p>
                        <a class="d-link " href="<?php echo $promotions_link; echo get_post_permalink($post->ID);?>" title="Clicca qui"> <span><?php echo the_field('label');?></span> </a>
                    </div>
                    <a class="d-button" href="<?php echo $promotions_link; echo get_post_permalink($post->ID);?>"> <span class="txt"><?php echo the_field('label');?></span> </a>
                </div>
            </div>
            <?php endwhile; ?>
            <!-- end of the loop -->
         <?php wp_reset_postdata(); ?>
         
        <?php }else { ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php }?>
<div class="d-grid-imgtext _module-space-top">
    <div class="body">
<?php
$wpb_all_query = new WP_Query(array('post_type'=>'homepage_posts', 'post_status'=>'publish', 'posts_per_page'=>-1)); 
// print_r($wpb_all_query);
if ( $wpb_all_query->have_posts() ) { 
while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); 
    if (has_post_thumbnail( $post->ID ) ): 
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
    endif; ?>
        <div class="column">
            <div class="d-card-imgtext" data-js-card-products>
                <a href="<?php echo the_field('url');?>" target="_blank" class="picturewrap">
                    <picture class="picture">
                        <source data-srcset="<?php echo $image[0];?>" media="(min-width: 740px)">
                        <source data-srcset="<?php echo $image[0];?>" media="(min-width: 0px)"> <img class="lazyload" data-srcset="<?php echo $image[0];?>" data-object-fit="cover"> </picture>
                </a>
                <div class="content"> <a href="<?php echo the_field('url');?>" target="_blank" class="title"><?php the_title();?></a> <a href="<?php echo the_field('url');?>" target="_blank" class="text"><?php $content = get_the_content( 'Read more' );echo apply_filters( 'the_content', $content ); ?></a> </div>
            </div>
        </div>
    <?php endwhile; ?>
    <!-- end of the loop -->
 <?php wp_reset_postdata(); ?>
 
<?php }else { ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php }?>
    </div>
</div>
<?php
$wpb_all_query = new WP_Query(array('post_type'=>'homepagevideos', 'post_status'=>'publish', 'posts_per_page'=>-1)); 
// print_r($wpb_all_query);
if ( $wpb_all_query->have_posts() ) { 
while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); 
    if (has_post_thumbnail( $post->ID ) ): 
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
    endif; ?>
    <div class="d-hero-video">
        <picture class="picture">
            <source srcset="<?php echo $image[0];?>" media="(min-width: 1099px)">
            <source srcset="<?php echo $image[0];?>" media="(min-width: 739px)">
            <source srcset="<?php echo $image[0]?>" media="(min-width: 0px)"> 
            <img srcset="<?php echo $image[0];?>" alt="" data-object-fit="cover"> </picture>
        <div class="video-wrap">
            <video playsinline autoplay muted loop poster="<?php echo $img_url.'/assets/images/The-Red-Adventure-Hero-1600x1000-v02.jpg';?>" class="video">
                <source src="<?php echo the_field('video_url');?>" type="video/webm">
                <source src="<?php echo the_field('mp4_video_url');?>" type="video/mp4"> </video>
        </div>
        <section class="body">
            <div class="subtitle"><?php the_title();?></div>
            <h2 class="title"><?php $content = get_the_content( 'Read more' );echo apply_filters( 'the_content', $content ); ?></h2>
            <div class="wrapshare"> </div>
            <div class="wrapcta">
                <a class="d-button" href="#hero-video-RedAdventure" rel="modal:open"> <span class="txt"><?php the_field('button_label');?> </span> </a>
            </div>
        </section>
        <div id="hero-video-RedAdventure" class="modal-wrapinline">
            <div class="d-modal-video -fullscreenmodal" data-js-modal-video>
                <a href="#" class="modalclose" rel="modal:close">
                    <svg class="icon icon--modal-close" viewBox="0 0 20 22">
                        <use xlink:href="#modal-close"></use>
                    </svg>
                </a>
                <div class="video-wrap"></div>
                <script class="video-tpl" type="text/template">
                    <iframe width="100%" height="100%" src="" frameborder="0" allowfullscreen></iframe>
                </script>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <!-- end of the loop -->
 <?php wp_reset_postdata(); ?>
 
<?php }else { ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php }?>
<!-- <div id="price-info" class="modal-wrapinline">
    <div class="d-modal-info -smallmodal ">
        <a href="#" class="modalclose" rel="modal:close">
            <svg class="icon icon--modal-close" viewBox="0 0 20 22">
                <use xlink:href="#modal-close"></use>
            </svg>
        </a>
        <div class="modaltitle"></div>
        <p class="modaltext"> Australia: The Australian ride away price is based on the manufacturer suggested retail price (MSRP) for a private buyer, 12 months registration, 12 months CTP, stamp duty and recommended dealer delivery fee in Australia. Actual ride away price may differ depending on dealer, state of registration and individual circumstances. Contact your authorised Ducati dealer to confirm pricing. Ducati reserves the right to vary the ride away price at any time.
            <br>
            <br>
            <br> New Zealand: The New Zealand price is based on the manufacturer suggested retail price (MSRP). This excludes all other costs associated such as dealer delivery, registration and taxes. Contact your authorised Ducati dealer to confirm pricing. Ducati reserves the right to vary the pricing at any time. </p>
    </div>
</div> -->
<div class="d-box-newsletter" data-js-box-newsletter>
    <div class="body">
        <div class="d-loader -negative">
            <div class="spinner"></div>
        </div>
        <div class="content">
            <?php echo do_shortcode('[contact-form-7 id="260" title="Contact form 1"]');?>
<!--             <form action="#" novalidate>
                <h1 class="nl-title">
                    Subscribe to the Ducati newsletter
                </h1>
                <div class="nl-privacy">
                    <p>By entering your email address you will always be up to date with the latest Ducati news and promotions.</p>
                    <p>At any time you can complete your registration and create your profile on Ducati.com to receive personalised communications and access all features. </p>
                </div>
                <div class="nl-checkbox">
                    <div>
                        <label for="nl-cb">
                            <input type="checkbox" name="nl-cb" id="nl-cb" class="nl-cb"> <span>
                                I declare that I have read the <a href="https://www.ducati.com/au/en/home/privacy" target="_blank" rel="nofollow noopener noreferrer">privacy policy</a> drafted pursuant to <strong>art. 13 of EU Regulation 2016/679</strong> on the protection of personal data (&#34;<em>Regulation</em>&#34;) and I authorise the processing of my email address for the purposes specified therein. <br /><br />

                            </span> </label>
                    </div> <span class="nl-error -cb">
                        You consent to the processing
                    </span> </div>
                <div class="nl-mail">
                    <div>
                        <input type="email" class="nl-input-email" placeholder="Your email address">
                        <button class="d-button" type="submit"> <span class="txt">Subscribe now</span> </button>
                    </div> <span class="nl-error -email">
                        Enter a valid email address
                    </span> </div>
                <div class="nl-success" style="display: none">
                    <p> Thank you for subscribing. </p>
                </div>
            </form> -->
        </div>
    </div>
</div>
<?php 
get_footer();
?>