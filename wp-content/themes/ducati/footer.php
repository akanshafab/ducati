<div class="d-footer-main" data-js-footer-main>
			    <section class="body">
			        <div class="logo">
					    <svg class="icon icon--logo-ducati" viewBox="0 0 136 26">
					      <use xlink:href="#logo-ducati"></use>
					    </svg>
					</div>
					<div class="iscroll">
            	        <?php
                           wp_nav_menu(
                               array(
                                   'menu'=>'footer',
                                    'container'=>'',
                                   'theme_location'=>'primary',
                                   'items_wrap'=>'<ul id="" class="links">%3$s</ul>'
                               )
                           );
                        
                        ?>
                    </div>
                    <div class="iscroll" <?php if(is_active_sidebar('footer-sidebar-1') || is_active_sidebar('footer-sidebar-2') || is_active_sidebar('footer-sidebar-3')){ echo 'style="display:block"';}else{ echo 'style="display:none"'; }?>>
			            <ul class="links">
			                <li class="item">
								<?php if(is_active_sidebar('footer-sidebar-1')){ dynamic_sidebar('footer-sidebar-1');} ?>
			                </li>
			                <li class="item">
			                	<?php if(is_active_sidebar('footer-sidebar-2')){ dynamic_sidebar('footer-sidebar-2'); }?>
			                </li>
			                <li class="item">
			                	<?php if(is_active_sidebar('footer-sidebar-3')){ dynamic_sidebar('footer-sidebar-3'); }?>
			                </li>
			            </ul>
			        </div>
					<div class="copyright">Copyright © 2021 Ducati Motor Holding S.p.A – A Sole Shareholder Company - A Company subject to the Management and Coordination activities of AUDI AG. All rights reserved. VAT 05113870967</div>
					<div class="flex">
			            <div class="box">
			                <a href="https://scramblerducati.com/?ori=fo_li" class="scrambler">
							    <svg class="icon icon--logo-scrambler" viewBox="0 0 80 29">
							      <use xlink:href="#logo-scrambler"></use>
							    </svg>
			                </a>
			            </div>
			            <div class="box socials">
							<a href="https://www.facebook.com/Ducati.anz" class="link">
			                    <div class="ico">
								    <svg class="icon icon--social-fb" viewBox="0 0 9 20">
								      <use xlink:href="#social-fb"></use>
								    </svg>
								</div>
			                </a>
			                <a href="https://twitter.com/ducatimotor" class="link">
			                    <div class="ico">
								    <svg class="icon icon--social-twitter" viewBox="0 0 20 20">
								      <use xlink:href="#social-twitter"></use>
								    </svg>
								</div>
			                </a>
			                <a href="https://www.instagram.com/ducatimotor/?hl&#61;it" class="link">
			                    <div class="ico">
								    <svg class="icon icon--social-instagram" viewBox="0 0 22 22">
								      <use xlink:href="#social-instagram"></use>
								    </svg>
								</div>
			                </a>
			                <a href="https://www.youtube.com/user/DucatiMotorHolding" class="link">
			                    <div class="ico">
								    <svg class="icon icon--social-yt" viewBox="0 0 23 20">
								      <use xlink:href="#social-yt"></use>
								    </svg>
								</div>
			                </a>
			            </div>
			            <div class="box">
			                <a href="#modal-languageswitch" class="country" rel="modal:open">
			                    <img src="https://assets.ducati.com/dist/0.3.5/assets/img/flags/au.png" />
			                    <span class="label">Australia</span>
			                    <span class="ico">
								    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
								      <use xlink:href="#arrow-small-right"></use>
								    </svg>
								</span>
			                </a>
			            </div>
			        </div>
				</section>
				<div id="modal-languageswitch" class="modal-wrapinline">
					<div id="languageswitch" class="d-modal-languageswitch -fullscreenmodal">
					    <a href="#" class="modalclose" rel="modal:close">
						    <svg class="icon icon--modal-close" viewBox="0 0 20 22">
						      <use xlink:href="#modal-close"></use>
						    </svg>
						</a>
					    <div class="body">
					        <div class="d-title-full">
					        	<h2 class="title">Choose your country or region</h2>
					    	</div>
							<div class="iscroll">
						 		<div class="countrylist -single-row">
						            <div class="country">
						                <img src="<?php echo get_theme_file_uri().'/assets/images/ww.png'; ?>"/>
						                <a href="https://www.ducati.com/ww/en/home" >
						                        International website
						                </a>
						           </div>
						        </div>
						        <ul class="countrylist">
						            <?php
								    $wpb_all_query = new WP_Query(array('post_type'=>'countries', 'post_status'=>'publish', 'posts_per_page'=>-1)); 
								    // print_r($wpb_all_query);
								    if ( $wpb_all_query->have_posts() ) { 
								        while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); 
								            if (has_post_thumbnail( $post->ID ) ): 
								                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
						            endif; ?>
									<li>
						                <div class="country">
						                    <img src="<?php echo $image[0];?>"/>
											<ul>
						                        <li>
						                            <a href="<?php the_field('url');?>" >
						                               <?php the_title();?>
						                            </a>
						                        </li>
						                        <?php 
													$link = get_field('add_second_country');
													if( $link ): 
													    $link_url = $link['url'];
													    $link_title = $link['title'];
													    $link_target = $link['target'] ? $link['target'] : '_self';
													    ?>
												<li>
													    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
												</li>
													<?php endif; ?>
													<?php 
													$link = get_field('add_third_link');
													if( $link ): 
													    $link_url = $link['url'];
													    $link_title = $link['title'];
													    $link_target = $link['target'] ? $link['target'] : '_self';
													    ?>
												<li>
													    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
													<?php endif; ?>
						                        </li>
											</ul>
										</div>
						            </li>
			 <?php endwhile; ?>
            <!-- end of the loop -->
         <?php wp_reset_postdata(); ?>
         
        <?php }else { ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php }?>
						        </ul>
					        </div>
					    </div>
					</div>
			    </div>
			</div>

					            
		</div>
	</div>
    <?php wp_footer(); ?>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		
	</body>
</html>
