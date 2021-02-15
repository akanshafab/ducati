<?php 
   /* Template Name: News Template */ 
    get_header();
?>
<div class="d-news-filters">
    <div class="d-search-bar" data-js-search-bar>
        <form action="#">
            <div class="search-bar" id="news">
                <svg class="icon icon--search" viewBox="0 0 16 16">
                    <use xlink:href="#search"></use>
                </svg>
                <div class="d-input-search" data-js-quicksearch>
                    <input type="text" name="q" value="" placeholder="Search news" autocomplete="off">
                    <div class="quickresults">
                        <ul class="resultlist"> </ul>
                    </div>
                </div>
                <div class="box-submit">
                    <button type="submit" disabled>Search</button>
                </div>
            </div>
        </form>
    </div>
    <div class="d-grid-filters" data-js-grid-filters>
        <div class="body">
            <a class="d-button -ghost-grey -filters" href="#" data-js-grid-filters-btn> <span class="txt">Filters</span> <span class="icon-right">
            
    <svg class="icon icon--filters" viewBox="0 0 15.0 15.0">
      <use xlink:href="#filters"></use>
    </svg>
        </span> </a>
            <div data-js-grid-filters-wrap>
                <div>
                    <div class="-smallmodal">
                        <a href="#" class="modalclose" rel="modal:close">
                            <svg class="icon icon--modal-close" viewBox="0 0 20 22">
                                <use xlink:href="#modal-close"></use>
                            </svg>
                        </a>
                        <div class="modaltitle">Filters</div>
                                        <?php
                                            //$categories= wp_list_categories(); 
                                            //$categories = get_categories( array(
                                              //  'post_type' => 'post',
                                               // 'order'   => 'ASC'
                                            //) );
                                        $categories = get_terms( 
                                           'category', 
                                           array('parent' => 0)
                                        );
                                       // print_r($categories);
                                        ?>
                        <form action="#">
                            <div class="wrapper-select">
                                <div class="d-select -default -pristine cat_ducati" >
                                    <span class="switch">
                                        <span class="switchwrap">
                                            <span class="switchtext" title=" Category " style="width: 104px;"> Category </span>
                                            <span class="switchreset">
                                                <svg class="icon" viewBox="0 0 20 22">
                                                  <use xlink:href="#cross"></use>
                                                </svg>
                                            </span>
                                            <span class="switcharrow">
                                                <svg class="icon" viewBox="0 0 28 14">
                                                  <use xlink:href="#arrow-small-down"></use>
                                                </svg>
                                            </span>
                                        </span>
                                    </span>
                                    <ul class="options" style="width: 100%;">
                                        <?php
                                            foreach ($categories as $key => $value) {
                                               ?>
                                                <li data-value="<?php echo $value->term_id; ?>" title=" Category ">
                                                       <?php echo $value->name; ?>
                                                </li>
                                                <?php
                                            }
                                        ?>
                                    </ul>
                                    <select name="categories">
                                        <option value=""> category </option>
                                        <?php
                                            foreach ($categories as $key => $value) {
                                               ?>
                                               <option value="<?php echo $value->term_id; ?>"> <?php echo $value->name; ?> </option>
                                                     <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="d-select -default -pristine" data-js-select data-js-quickreset>
                                    <select name="subcategories" disabled>
                                        <option value=""> Subcategory </option>
                                        
                                    </select>
                                </div>
                                <div class="d-select -default -pristine" data-js-select data-js-quickreset>
                                    <select name="year">
                                        <option value=""> Year </option>
                                    </select>
                                </div>
                                <div class="d-select -default -pristine" data-js-select data-js-quickreset>
                                    <select name="month" disabled="">
                                        <option value="">
                                                Month
                                            </option>
                                        </select>
                                </div>
                                <div class="cta">
                                    <button class="d-button -ghost-grey" type="reset"> <span class="txt">Reset</span> </button>
                                    <button class="d-button" type="submit"> <span class="txt">Apply</span> </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-grid-news">
    <div class="body">
        <!-- <div class="d-loader -negative">
            <div class="spinner"></div>
        </div> -->
        <?php
        $args = array(
        'post_type'=> 'post',
        'orderby'    => 'ID',
        'post_status' => 'publish',
        'order'    => 'DESC',
        'posts_per_page' => 2,
        'paged' => 1
        );
        $result = new WP_Query( $args );
        //print_r($result);
        if ( $result-> have_posts() ) : ?>
        <div class="content blog-posts">
           
        <?php 
        while ( $result->have_posts() ) : $result->the_post();
        if ( $post ) {
            $categories = get_the_category( $post->ID );
        }
        include 'post_card.php';
        $i++;
        ?>
        <?php
         endwhile; 
         ?>

        </div>
        <div class="cta-wrap loadmore">
            <a class="d-button" id="load-more-news"> <span class="txt">Load more</span> </a>
        </div>
        <?php
                endif; wp_reset_postdata();
           ?>
    </div>
</div>
<script type="text/javascript">
    jQuery('.cat_ducati').click(function(){
        if(jQuery(this).hasClass('-opened')){
            jQuery(this).removeClass('-opened');    
        }else{
            jQuery(this).addClass('-opened');
            jQuery(this).removeClass('-pristine');
        }
    });
    jQuery('.cat_ducati ul li').click(function(){
        jQuery('.cat_ducati ul li').removeClass('selected');
        jQuery(this).addClass('selected');
        jQuery('.cat_ducati .switchtext').text(jQuery(this).text());
        jQuery('.cat_ducati .switchreset').css({'opacity':1});  
        console.log(jQuery(this).attr('data-value')); 
            var id_post = jQuery(this).attr('data-value');
            jQuery.ajax({
                type: 'POST',
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                data: {
                    'post_id': id_post,
                    'action': 'f711_get_post_content' //this is the name of the AJAX method called in WordPress
                }, success: function (result) {

                  // alert(result);
                   jQuery('.cat_ducati').next().children('select').append(result);
                },
                error: function () {
                    alert("error");
                }
            });
        jQuery('.cat_ducati').next().children('select').prop('disabled',false);
        //Category_id=jQuery(this).attr('data-value');
        
    });
    //jQuery('.cat_ducati .switchreset').click(function(){
       // jQuery('.cat_ducati ul li').removeClass('selected');
     //   jQuery('.cat_ducati .switchtext').text('Category');
   // });
</script>
<?php 
get_footer();
?>