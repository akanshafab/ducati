                <div class="column new_column">
                <div class="d-card-imgtext">
                    <a href="<?php the_permalink();?>" class='picturewrap'>
                    <?php
                        // Specifying width of 400 (px) and height of 200 (px).
                        $srcset = wp_get_attachment_image_srcset(get_post_thumbnail_id());
                      //  echo $srcset;
                        ?>
                       
                        <picture class="picture">
                            <source data-srcset="<?php the_post_thumbnail_url('medium');?>" media="(min-width: 739px)">
                            <source data-srcset="<?php the_post_thumbnail_url('medium');?>" media="(min-width: 0px)">
                            <img class="lazyloaded" srcset="<?php echo esc_attr( $srcset ); ?>" data-srcset="<?php echo esc_attr( $srcset ); ?>" data-object-fit="cover"> </picture>
                    </a>
                    <div class="content content_ducati">
                    <?php //$categories= get_the_category(); print_r($categories);
                    $args=array(
                        'orderby' => 'ID',
                        'order'   => 'ASC'
                        );
                    $post_categories = wp_get_post_categories($post->ID,$args);
                   // $cats = array();
                        $i=sizeof($post_categories)-1;
                    foreach($post_categories as $key=> $c){
                        $cat = get_category( $c );
                       // $cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
                       ?>
                       <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" class="title ducati_block_display"><?php echo esc_html( $cat->name ); if($i> $key){echo ', ';}?></a>
                        <?php
                    }
                   // $categories = get_the_category();
                //    if ( ! empty( $categories ) ) {
                  //      foreach($categories as $category){
                    //    echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>';
                      //  }
                //    }
                    ?>
                   <!--  <a href="/au/en/news/private-test-at-jerez-de-la-frontera-spain-cancelled-due-to-rain" class="title"></a> --> 
                    <a href="<?php the_permalink();?>" class="text ducati_block_display"><?php the_title();?> </a>
                        <div class="footer">
                            <div class="date"><?php echo get_the_date(); ?></div>
                            <div class="icons"> </div>
                        </div>
                    </div>
                </div>
            </div>