<div class="container">
	
    <div class="d-banner-wide _module-space-top -promo">
        <a href="<?php the_permalink();?>">
            <div class="wrapper">
                <div class="text"> <span class="category"><?php the_date(); ?> <?php comments_number();?></span>
                    <h1 class="title"><?php the_title(); ?> </h1> 
                    <span class="description"><?php the_excerpt();?></span> 
                    <span class="d-link " title="Clicca qui">
                    <span><a href="<?php the_permalink();?>">Read More</a></span> </span>
                </div>
                <picture class="image"> <img class="lazyload" data-srcset="<?php the_post_thumbnail_url('medium');?>" alt="" data-object-fit="cover"> </picture>
            </div>
        </a>
    </div>
</div>