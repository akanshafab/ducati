<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" class="no-js">
 <?php
    global $wp; $current_url = home_url(add_query_arg(array(), $wp->request));    
    $img_url = get_theme_file_uri(); 
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="All information about our different models of bikes, the racing in MotoGP and Superbike, and dealers. Visit Ducati official website.">
    <link rel="shorticon icon" href="/ducati/wp-content/themes/ducati/assets/images/ducati.ico" />
    <?php wp_head();?>
        <script>
        try {
            Typekit.load({
                async: true
            });
        } catch(e) {}
        </script>
        <script>
        var dlabels = {
            fitsOn: "",
            multiFit: "",
            updateDate: "",
            recallsNumber: "",
            contactDealer: "",
            documentDonwload: "",
            noDocumentsFound: "",
            recallStatus: "",
            model: "",
            recallNum: "",
            nhtsaIdNumber: "",
            newsletterServiceError: "Service not available",
            loadMore: "",
            noResults: "",
            safetyRecallsNumber: "",
            updateRecallsNumber: "",
            nhtsaNotificationDate: "",
            viewAll: "",
            doc: {
                subscriptionLabel: "Subscribe now",
                dealerWebsiteText: "Website",
                dealerLinkText: "How to reach us",
                contactCta: "Contact Club",
                apprel: {
                    category: "",
                    subcategory: ""
                }
            },
            specifyAdditionalInfo: "",
            profileSportOtherFollowedRequired: "",
            profileSportOtherPracticedRequired: "",
            profilePersonalInfoHeightInvalid: "",
            invalidDate: "",
            mustBeAdult: "",
            requiredField: "",
            invalidPostalCode: "",
            invalidMobilePhone: "",
            brand: "",
            family: "",
            year: "",
            yearOfPurchase: "",
            removeBike: "",
            verifyingOwnership: "",
            declaredOwnership: "",
            certifiedOwnership: "",
            availableDownloads: "",
            notCertifiedMessage: "",
            waitingCertifiedMessage: "",
            certifyYourBike: "",
            modalMessage: "",
            areYouStillInPossession: "",
            addImage: "",
            askBeforeDelete: "",
            reset: "",
            ducatiCard: "",
            minLengthError: "",
            maxLengthError: "",
            certifiedMessage: "",
            delete: "",
            removeConfigurationAreYouSure: "",
            removeConfiguration: "",
            configurationCreatedByDealer: "",
            shareYourDucatiTweetText: "",
            shareYourDucati: "",
            share: "",
            contactDealer: "",
            dealerInfo: "",
            edit: "",
            view: "",
            price: "",
            modifiedAt: "",
            createdAt: "",
            dealer: "",
            newConfiguration: "",
            cancel: "",
            invalidClub: "",
            profilePersonalinfoLabelAddress: "",
            profilePersonalinfoLabelCity: "",
            status: "",
            profilePersonalinfoLabelEmail: "",
            president: "",
            yourLatestBike: "",
            goToGarage: "",
            subscriptionRequestStatus: {
                active: "",
                lead: ""
            }
        }
        </script>
        <script>
        var dlib = {
            assetsPath: "https://assets.ducati.com/dist/0.3.5/",
            newsArchiveSlug: "news",
            apparelLandingSlug: "apparel",
            accessoryLandingSlug: "accessories",
            country: "au",
            lang: "en",
            noResultsLabel: "",
            categoryName: "",
            gmaps_API_KEY: "",
            apiBasePath: "https://api-public.ducati.com",
            cloudhubBasePath: "/au/en/api",
            productData: null,
            viewAllCodes: "",
            labelCode: "",
            contactDealerUrl: "",
            globalDeltaTime: 1,
            selfUrl: "/au/en/self",
            clientType: "DELIVERY"
        }
        </script>
        <script type="x-tmpl-mustache" id="news-quickresults-template">
            <ul class="resultlist" data-results="news"> {{#articles}}
                <li data-news-id="{{ id }}">
                    <a href="{{ url }}" rel="news:detail" class="resulttext"> <span>{{title}}</span> </a>
                </li> {{/articles}} {{^articles}}{{#noResultsLabel}}
                <li class="resulttext"> {{noResultsLabel}} </li> {{/noResultsLabel}}{{/articles}} </ul>
        </script>
        <script>
        (window.BOOMR_mq = window.BOOMR_mq || []).push(["addVar", {
            "rua.upush": "false",
            "rua.cpush": "false",
            "rua.upre": "false",
            "rua.cpre": "true",
            "rua.uprl": "false",
            "rua.cprl": "false",
            "rua.cprf": "false",
            "rua.trans": "SJ-5ba8a493-8ef6-4e82-9cc2-ce53fa19964b",
            "rua.cook": "true",
            "rua.ims": "false",
            "rua.ufprl": "false",
            "rua.cfprl": "false"
        }]);
        </script>
        <script>
        ! function(a) {
            var e = "https://s.go-mpulse.net/boomerang/",
                t = "addEventListener";
            if("False" == "True") a.BOOMR_config = a.BOOMR_config || {}, a.BOOMR_config.PageParams = a.BOOMR_config.PageParams || {}, a.BOOMR_config.PageParams.pci = !0, e = "https://s2.go-mpulse.net/boomerang/";
            if(window.BOOMR_API_key = "AZ5FE-H3HJP-47V2A-PNG3B-WTF5Z", function() {
                    function n(e) {
                        a.BOOMR_onload = e && e.timeStamp || (new Date).getTime()
                    }
                    if(!a.BOOMR || !a.BOOMR.version && !a.BOOMR.snippetExecuted) {
                        a.BOOMR = a.BOOMR || {}, a.BOOMR.snippetExecuted = !0;
                        var i, _, o, r = document.createElement("iframe");
                        if(a[t]) a[t]("load", n, !1);
                        else if(a.attachEvent) a.attachEvent("onload", n);
                        r.src = "javascript:void(0)", r.title = "", r.role = "presentation", (r.frameElement || r).style.cssText = "width:0;height:0;border:0;display:none;", o = document.getElementsByTagName("script")[0], o.parentNode.insertBefore(r, o);
                        try {
                            _ = r.contentWindow.document
                        } catch(O) {
                            i = document.domain, r.src = "javascript:var d=document.open();d.domain='" + i + "';void(0);", _ = r.contentWindow.document
                        }
                        _.open()._l = function() {
                            var a = this.createElement("script");
                            if(i) this.domain = i;
                            a.id = "boomr-if-as", a.src = e + "AZ5FE-H3HJP-47V2A-PNG3B-WTF5Z", BOOMR_lstart = (new Date).getTime(), this.body.appendChild(a)
                        }, _.write("<bo" + 'dy onload="document._l();">'), _.close()
                    }
                }(), "".length > 0)
                if(a && "performance" in a && a.performance && "function" == typeof a.performance.setResourceTimingBufferSize) a.performance.setResourceTimingBufferSize();
                ! function() {
                if(BOOMR = a.BOOMR || {}, BOOMR.plugins = BOOMR.plugins || {}, !BOOMR.plugins.AK) {
                    var e = "true" == "true" ? 1 : 0,
                        t = "cookiepresent",
                        n = "m5wajuaxhhx52yarjmpq-f-7d98bdd87-clientnsv4-s.akamaihd.net",
                        i = {
                            "ak.v": "30",
                            "ak.cp": "631706",
                            "ak.ai": parseInt("278237", 10),
                            "ak.ol": "0",
                            "ak.cr": 6,
                            "ak.ipv": 4,
                            "ak.proto": "h2",
                            "ak.rid": "5903a6c",
                            "ak.r": 15849,
                            "ak.a2": e,
                            "ak.m": "x",
                            "ak.n": "essl",
                            "ak.bpcip": "103.108.4.0",
                            "ak.cport": 50325,
                            "ak.gh": "23.57.74.78",
                            "ak.quicv": "",
                            "ak.tlsv": "tls1.3",
                            "ak.0rtt": "",
                            "ak.csrc": "-",
                            "ak.acc": "",
                            "ak.t": "1611746079",
                            "ak.ak": "hOBiQwZUYzCg5VSAfCLimQ==YGCLF1V7aJ/m+JKgo0LaozhCxIZ/QkAXB5xGhjyAuELlzbHcYDHzmGo0KC2lBKZjM0RBBvG7R3c0QCwY2xC18wruiSQF93VcRA3DEcYP5XdowN196W+MjqU3IUxJk21/j0LJaLQvxyla8G5Uq+iPUm/8nsaV3EVDxEbWyeX5THr9zamOJSFxQgOuDi24w3bYbuQM0SOWStpQnNqeEmHLTNi7rmvjEH3ILmWkLFGLzP80TizlsrG0+QMr06bCU09bHTHswpfaCl5TQjHBPavGIEcvMO4qeCCFQnLiskvX4yWPMutMVi74q7jn8WNExO5OZig4wE0Vrt40EjW1AW3vg7cYuPNb1aVgQ+7H5Ztl9hT1G4akNVGQVRuHmavHfQMwSZZH3/Ntx2PQZnsVgIV1PZaua7ga+gytLQMIN3f9YTw=",
                            "ak.pv": "86",
                            "ak.dpoabenc": ""
                        };
                    if("" !== t) i["ak.ruds"] = t;
                    var _ = {
                        i: !1,
                        av: function(e) {
                            var t = "http.initiator";
                            if(e && (!e[t] || "spa_hard" === e[t])) i["ak.feo"] = void 0 !== a.aFeoApplied ? 1 : 0, BOOMR.addVar(i)
                        },
                        rv: function() {
                            var a = ["ak.bpcip", "ak.cport", "ak.cr", "ak.csrc", "ak.gh", "ak.ipv", "ak.m", "ak.n", "ak.ol", "ak.proto", "ak.quicv", "ak.tlsv", "ak.0rtt", "ak.r", "ak.acc", "ak.t"];
                            BOOMR.removeVar(a)
                        }
                    };
                    BOOMR.plugins.AK = {
                        akVars: i,
                        akDNSPreFetchDomain: n,
                        init: function() {
                            if(!_.i) {
                                var a = BOOMR.subscribe;
                                a("before_beacon", _.av, null, null), a("onbeacon", _.rv, null, null), _.i = !0
                            }
                            return this
                        },
                        is_complete: function() {
                            return !0
                        }
                    }
                }
            }()
        }(window);
        </script>
</head>

<body>

    <!-- End Google Tag Manager (noscript) -->
    <div class="page-wrapper">
        <div class="page-internal-wrapper">
            <div class="d-cookie-bar" data-js-cookiebar>
                <div class="body">
                    <p class="text">This site uses different types of cookies, including analytics and profiling cookies (its own and from other sites) to send you advertising in line with the preferences you have shown while online. If you want to know click here. In closing this window, by clicking on OK or accessing any feature within this site you are consenting to the use of cookies. </p>
                    <div class="cta" data-js-cookiebar-accept>OK</div>
                    <div class="close" data-js-cookiebar-accept>
                        <svg class="icon icon--modal-close" viewBox="0 0 20 22">
                            <use xlink:href="#modal-close"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="d-topbar-header -gradient">
                <div class="body">
                    <div class="left">
                        <a href="https://scramblerducati.com/?ori&#61;up_li" class="scrambler">
                            <svg class="icon icon--logo-scrambler" viewBox="0 0 80 29">
                                <use xlink:href="#logo-scrambler"></use>
                            </svg> <span><?php echo get_bloginfo('description', 'display');?></span> </a>
                    </div>
                    <div class="right">
                        <div class="country">
                            <a href="#modal-languageswitch" rel="modal:open"> <img src="<?php echo get_theme_file_uri().'/assets/images/au.png'; ?>" /> Australia <span class="ico">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </a>
                        </div>
                        <div class="d-login ">
                            <div class="unlogged">
                                <button class="d-link myducati"> <span class="label">MyDucati</span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </button>
                                <div class="panel">
                                    <ul>
                                        <li> <a class="d-link" id="login-action" href="#" data-url="/au/en/login">Login</a> </li>
                                        <li>
                                            <a class="d-link " href="https://my.ducati.com/au/en/register/ducati" target="_blank"> <span>Sign Up</span> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="logged">
                                <a class="avatar" href="#">
                                    <div class="circle"> <span class="initials"></span> </div>
                                    <div class="name"> Hello, <span class="firstname"></span> </div> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </a>
                                <div class="panel">
                                    <ul>
                                        <li>
                                            <a class="d-link " href="https://my.ducati.com/au/en/home/ducati" target="_blank"> <span>Profile</span> </a>
                                        </li>
                                        <li> <a class="d-link" id="logout-action" href="#" data-url="/logout" data-fallback="/au/en/home">Logout</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-header-main" data-js-headernavigation>
                <div class="sticky">
                    <section class="body">
                        <section class="top-wrap">
                            <div class="hamburger" data-js-navtoggle> <span class="line"></span> </div>
                            <div class="wrap" itemscope itemtype="http://schema.org/Organization">
                                <div class="sx">
                                    <?php
                                       // wp_nav_menu(
                                         //   array(
                                         //       'menu'=>'primary',
                                         ///       'container'=>'',
                                          //      'theme_location'=>'primary',
                                           //     'items_wrap'=>'<ul id="" class="links">%3$s</ul>'
                                         //   )
                                      //  );
                                   // wp_get_menu_array('primary');
                                    ?>
                                    <ul class="links">
                                        <?php 
                                        $items = wp_get_nav_menu_items('primary');
                                        //print_r($items);
                                        if( !empty( $items ) ): ?>

                                        <?php foreach ( $items as $key => $item ):
                                            //echo "hello";
                                            //print_r( $key);
                                            if($key >4)
                                            break;
                                         ?>
                                        <li class="link" <?php if($item->menu_item_parent == 0){ }else{ echo 'style="display:none;"'; } ?>>
                                           <a href="javascript:void(0)"  <?php if($key !== 4){?>data-js-shortcutnav id="models" class="models" <?php }?>><?php echo $item->title;?> 
                                                <span class="triangle" style="<?php if($key == 4){echo 'display:none';}?>">
                                                    <svg class="icon icon--triangle" viewBox="0 0 8 8">
                                                      <use xlink:href="#triangle"></use>
                                                    </svg>
                                                </span>
                                            </a>
                                            <?php if($item->ID == 361){ ?>
                                            <section data-js-shortcutnav-wrap >
                                                <div class="menu-models">
                                                    <div class="grid" data-js-shortcutnav-grid>
                                                        <div class="gridscroll">
                                                            <?php
                                                             // Check rows exists.
                                                               // if( have_rows('model') ):
                                                                    // Loop through rows.
                                                                   // while( have_rows('model') ) : the_row();
                                                                        // Load sub field value.
                                                                      //  $sub_value = get_sub_field('select_model');
                                                                      //  if (has_post_thumbnail( $sub_value->ID ) ): 
                                                                       //    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $//sub_value->ID ), 'single-post-thumbnail' ); ?>
                                                                        <?php //endif; 
                                                                          //   if(get_field('configurator' , $sub_value->ID) == 'Yes'){

                                                                         //    }else{
                                                                        ?>
                                                                        <?php if($item->menu_item_parent !== 0){ 
                                                                            //wp_nav_menu( array(
                                                                          //      'theme_location'=>'primary',
                                                                           //     'container'=>false,
                                                                           //     'walker'=>new Ducati_Walker_Nav_Menu()
                                                                          //   ))
                                                                            ?>
                                                                            <a href="javascript:void(0)" class="block" data-js-shortcutnav-gridblock=0> 
                                                                                <img class="thumb lazyload" data-src="<?php  ?>" alt="">
                                                                                <?php //if(!empty(get_field('image_for_title', $sub_value->ID))){ 
                                                                                ?>
                                                                                <img src="<?php //echo get_field('image_for_title', $sub_value->ID); ?>" style="background: #FFD201">
                                                                                <?php
                                                                                //  }else{  echo $sub_value->post_title;  }?>
                                                                                   <?php //if(get_field('label' , $sub_value->ID)){?>
                                                                                        <span class="new"><?php //echo $sub_value->label; ?></span>
                                                                                        <?php } ?>
                                                                                  
                                                                              </a>
                                                                          <?php //} ?>
                                                                        <?php
                                                                 //   }
                                                                    // End loop.
                                                                    //endwhile;
                                                                // No value.
                                                                //else :
                                                                // Do something...
                                                                   // echo 'Sorry, no posts matched your criteria.';
                                                               // endif;
                                                        ?>
                                                            
                                                        </div>
                                                    </div>
                                                    <ul class="links -hidden" data-js-shortcutnav-lv1>
                                                        <?php
                                                     // Check rows exists.
                                                        if( have_rows('model') ):
                                                            // Loop through rows.
                                                            while( have_rows('model') ) : the_row();
                                                                // Load sub field value.
                                                                $sub_value = get_sub_field('select_model');
                                                                if (has_post_thumbnail( $sub_value->ID ) ): 
                                                                   $image = wp_get_attachment_image_src( get_post_thumbnail_id( $sub_value->ID ), 'single-post-thumbnail' ); ?>
                                                                <?php endif; 
                                                                     if(get_field('configurator' , $sub_value->ID) == 'Yes'){

                                                                     }else{
                                                                ?>
                                                                  <li class="link">  
                                                                    <a href="javascript:void(0)" class="block" data-js-shortcutnav-gridblock=0> 
                                                                        
                                                                        <?php if(!empty(get_field('image_for_title', $sub_value->ID))){ 
                                                                        ?>
                                                                        
                                                                            <img class="thumb lazyload title_img" data-src="<?php echo get_field('image_for_title', $sub_value->ID); ?>" style="background: #FFD201">
                                                                        
                                                                        <?php
                                                                          }else{  echo '<div class="family">'.$sub_value->post_title.'</div>';  }?>
                                                                          <div class="wrapper-thumb">
                                                                            <img class="thumb lazyload" data-src="<?php echo $image[0]; ?>" alt="">
                                                                        </div>
                                                                    </a>
                                                                        <div class="menu-models_lv2">
                                                                            <ul class="links" data-js-shortcutnav-lv2>
                                                                                <div class="mobileclose" data-js-mobileclose>
                                                                                    <div>
                                                                                        <svg class="icon icon--arrow-small-left" viewBox="0 0 12 22">
                                                                                            <use xlink:href="#arrow-small-left"></use>
                                                                                        </svg>
                                                                                    </div> <span>Diavel</span> 
                                                                                </div>
                                                                                <li class="link -active ">
                                                                                    <a href="/au/en/bikes/diavel/diavel-1260" class="">Diavel 1260</a>
                                                                                    <div class="model-sheet">
                                                                                        <div class="imgwrap">
                                                                                            <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/3N5NKyLeGiaFedYuiTBTiW/c4da4355fe7eada80cbc85a99849e1da/Model-Menu-MY20-Diavel-1260-Sandsone-Grey.png" alt="">
                                                                                        </div>
                                                                                        <div class="content">
                                                                                            <div class="wrap">
                                                                                                <div class="title ">1260</div>
                                                                                                <div class="txt "></div>
                                                                                                <ul class="table">
                                                                                                    <li class="cell"> 
                                                                                                        <strong>159 hp </strong> 
                                                                                                        <span>Power</span> 
                                                                                                    </li>
                                                                                                    <li class="cell">
                                                                                                        <strong> 129 Nm </strong> 
                                                                                                        <span>Torque</span> 
                                                                                                    </li>
                                                                                                    <li class="cell">
                                                                                                       <strong> 223 kg </strong> 
                                                                                                       <span>Dry weight</span> 
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <div class="price"> 
                                                                                                    <strong>Suggested Ride Away Price $30,290 AUD <br /> Suggested Retail Price $32,200 NZD</strong> 
                                                                                                    <a href="#price-info" rel="modal:open" class="_infocircle">i</a> 
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="ctas"> 
                                                                                                <a class="d-button -ghost-grey cta " href="https://configurator.ducati.com/bikes/au/en/diavel/diavel" rel="">
                                                                                                    <span class="txt">Configure</span>
                                                                                                </a> 
                                                                                                <a class="d-button cta " href="/au/en/bikes/diavel/diavel-1260" rel="">
                                                                                                    <span class="txt">DISCOVER MORE</span>
                                                                                                </a> 
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="link"> <a href="/au/en/bikes/diavel/diavel-1260" class="">Diavel 1260 S</a>
                                                                                    <div class="model-sheet">
                                                                                        <div class="imgwrap">
                                                                                            <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/3ePyWwkdfMrzN7dqShC6Z9/93fe54b27b3669f263f6469ace82ede2/Model-Menu-MY20-Diavel-1260-S-Ducati-Red.png" alt="">
                                                                                        </div>
                                                                                        <div class="content">
                                                                                            <div class="wrap">
                                                                                                <div class="title ">1260 S</div>
                                                                                                <div class="txt "></div>
                                                                                                <ul class="table">
                                                                                                    <li class="cell"> 
                                                                                                        <strong>159 hp</strong> 
                                                                                                        <span>Power</span> 
                                                                                                    </li>
                                                                                                    <li class="cell">
                                                                                                       <strong> 129 Nm </strong> 
                                                                                                       <span>Torque</span> 
                                                                                                    </li>
                                                                                                    <li class="cell">
                                                                                                       <strong>221 kg </strong> 
                                                                                                       <span>Dry Weight</span> 
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <div class="price"> 
                                                                                                    <strong>Suggested Ride Away Price $35,890 AUD<br />Suggested Retail Price $38,295 NZD</strong> 
                                                                                                    <a href="#price-info" rel="modal:open" class="_infocircle">i</a> 
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="ctas"> 
                                                                                                <a class="d-button -ghost-grey cta " href="https://configurator.ducati.com/bikes/au/en/diavel/diavel" rel="">
                                                                                                    <span class="txt">Configure </span>
                                                                                                </a> 
                                                                                                <a class="d-button cta " href="/au/en/bikes/diavel/diavel-1260" rel="">
                                                                                                    <span class="txt">discover more</span>
                                                                                                </a> 
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="link">
                                                                                    <a href="https://www.ducati.com/au/en/bikes/diavel/diavel-1260-lamborghini" class="">
                                                                                        <span class="new">new</span> 1260 Lamborghini
                                                                                    </a>
                                                                                    <div class="model-sheet">
                                                                                        <div class="imgwrap">
                                                                                            <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/5TUhXsmfKnXMhccPdMWIwW/d76427262f7fa4b6207ec67b2149349d/Model-Menu-MY21-Diavel-1260-Lamborghini.png" alt="">
                                                                                        </div>
                                                                                        <div class="content">
                                                                                            <div class="wrap">
                                                                                                <div class="title ">Diavel 1260 Lamborghini</div>
                                                                                                <div class="txt "></div>
                                                                                                <ul class="table">
                                                                                                    <li class="cell"> 
                                                                                                        <strong>159 hp</strong> 
                                                                                                        <span>Power</span> 
                                                                                                    </li>
                                                                                                    <li class="cell"> 
                                                                                                        <strong> 129 Nm </strong> 
                                                                                                        <span>Torque</span> 
                                                                                                    </li>
                                                                                                    <li class="cell"> 
                                                                                                        <strong>220 kg</strong> 
                                                                                                        <span>Dry Weight</span> 
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <div class="price"> 
                                                                                                    <strong>Suggested Ride Away Price $48,600 AUD<br />Suggested Retail Price $53,015 NZD</strong> 
                                                                                                    <a href="#price-info" rel="modal:open" class="_infocircle">i</a> 
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="ctas"> 
                                                                                                <a class="d-button cta " href="https://www.ducati.com/au/en/bikes/diavel/diavel-1260-lamborghini" rel="">
                                                                                                    <span class="txt">Discover More</span>
                                                                                                </a> 
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>    
                                                                  </li>
                                                                <?php
                                                            }
                                                            // End loop.
                                                            endwhile;
                                                        // No value.
                                                        else :
                                                        // Do something...
                                                            echo 'Sorry, no posts matched your criteria.';
                                                        endif;
                                                        ?>
                                                       
                                                        <div class="swiper-scrollbar"></div>
                                                    </ul>
                                                </div>
                                            </section>
                                            <?php } ?>
                                            <?php if($key == 3){ ?>
                                            <div class="level-two" data-js-shortcutnav-wrap>
                                                <div class="scroll">
                                                    <a href="javascript:void(0)" class="back-navmobile" data-js-backnavmobile>
                                                        <span class="triangle">
                                                            <svg class="icon icon--triangle" viewBox="0 0 8 8">
                                                              <use xlink:href="#triangle"></use>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                    <div class="columns-wrap" data-js-nav-lv3>
                                                        <?php 
                                        $items = wp_get_nav_menu_items('experience');
                                        if( !empty( $items ) ): ?>
                                            <?php foreach ( $items as $key => $item ):
                                            $product_page_args = array(
                                                'post_type' => 'page',
                                                'child_of' => $item->ID,
                                            );
                                            $product_pages = new WP_Query($product_page_args);
                                            $submenu=$product_pages->posts;
                                            print_r($submenu);
                                         ?>
                                                        <div class="column" data-js-navlv3-trigger>
                                                            <div class="title"> <?php echo $item->title; ?>
                                                                <span class="plus">
                                                                    <svg class="icon icon--plus" viewBox="0 0 22 22">
                                                                      <use xlink:href="#plus"></use>
                                                                    </svg>
                                                                </span> 
                                                                <span class="minus">
                                                                    <svg class="icon icon--minus" viewBox="0 0 22 22">
                                                                      <use xlink:href="#minus"></use>
                                                                    </svg>
                                                                </span> 
                                                                <span class="arrow">
                                                                    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
                                                                      <use xlink:href="#arrow-small-right"></use>
                                                                    </svg>
                                                                </span> 
                                                            </div>
                                                            <ul class="list">
                                                                <?php foreach($submenu as $postsub){
                                                                 ?>
                                                                <li class="link">
                                                                    <a href="<?php echo get_the_permalink($postsub->ID); ?>"><?php echo $postsub->post_title; ?></a>
                                                                </li>
                                                                <?php  } ?>
                                                            </ul>
                                                        </div>
                                                        <?php
                                                           // }
                                                            // End loop.
                                                             endforeach; 
                                                        // No value.
                                                        else :
                                                        // Do something...
                                                            echo 'Sorry, no posts matched your criteria.';
                                                        endif;
                                                        ?>
                                                        <div class="column" data-js-navlv3-trigger>
                                                            <div class="title"> Riding Courses
                                                                <span class="plus">
                                                                    <svg class="icon icon--plus" viewBox="0 0 22 22">
                                                                      <use xlink:href="#plus"></use>
                                                                    </svg>
                                                                </span> 
                                                                <span class="minus">
                                                                    <svg class="icon icon--minus" viewBox="0 0 22 22">
                                                                      <use xlink:href="#minus"></use>
                                                                    </svg>
                                                                </span> 
                                                                <span class="arrow">
                                                                    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
                                                                      <use xlink:href="#arrow-small-right"></use>
                                                                    </svg>
                                                                </span> 
                                                            </div>
                                                            <ul class="list">
                                                                <li class="link"><a href="http://dre.ducati.it/en">Ducati Riding Experience</a></li>
                                                                <li class="link"><a href="http://dre.ducati.it/racetrack/en">DRE Track</a></li>
                                                                <li class="link"><a href="http://dre.ducati.it/road/en/" target="_blank">DRE Road</a></li>
                                                                <li class="link"><a href="http://dre.ducati.it/enduro/en">DRE Enduro</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="column" data-js-navlv3-trigger>
                                                            <div class="title"> Ducati Life 
                                                                <span class="plus">
                                                                    <svg class="icon icon--plus" viewBox="0 0 22 22">
                                                                      <use xlink:href="#plus"></use>
                                                                    </svg>
                                                                </span> 
                                                                <span class="minus">
                                                                    <svg class="icon icon--minus" viewBox="0 0 22 22">
                                                                      <use xlink:href="#minus"></use>
                                                                    </svg>
                                                                </span> 
                                                                <span class="arrow">
                                                                    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
                                                                      <use xlink:href="#arrow-small-right"></use>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <ul class="list">
                                                                <li class="link"><a href="https://www.ducati.com/ww/en/editorial/redline-magazine-2018">Redline Magazine</a></li>
                                                                <li class="link"><a href="/au/en/world/myducati-app">MyDucati App</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="column" data-js-navlv3-trigger>
                                                            <div class="title"> Borgo Panigale Experience 
                                                                <span class="plus">
                                                                    <svg class="icon icon--plus" viewBox="0 0 22 22">
                                                                      <use xlink:href="#plus"></use>
                                                                    </svg>
                                                                </span> 
                                                                <span class="minus">
                                                                    <svg class="icon icon--minus" viewBox="0 0 22 22">
                                                                      <use xlink:href="#minus"></use>
                                                                    </svg>
                                                                </span> 
                                                                <span class="arrow">
                                                                    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
                                                                      <use xlink:href="#arrow-small-right"></use>
                                                                    </svg>
                                                                </span> 
                                                            </div>
                                                            <ul class="list">
                                                                <li class="link"><a href="https://www.ducati.com/au/en/borgo-panigale-experience">Visit Ducati</a></li>
                                                                <li class="link"><a href="https://www.ducati.com/au/en/borgo-panigale-experience/ducati-museum">Ducati Museum</a></li>
                                                                <li class="link"><a href="https://www.ducati.com/au/en/borgo-panigale-experience/ducati-factory">Ducati Factory</a></li>
                                                                <li class="link"><a href="https://www.ducati.com/au/en/borgo-panigale-experience/fisica-in-moto">Fisica In Moto</a></li>
                                                                <li class="link"><a href="https://www.ducati.com/au/en/borgo-panigale-experience/schools">Schools</a></li>
                                                                <li class="link"><a href="https://www.ducati.com/au/en/borgo-panigale-experience/how-to-reach">How to reach us </a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="column" data-js-navlv3-trigger>
                                                            <div class="title"> DOC
                                                                <span class="plus">
                                                                    <svg class="icon icon--plus" viewBox="0 0 22 22">
                                                                      <use xlink:href="#plus"></use>
                                                                    </svg>
                                                                </span> 
                                                                <span class="minus">
                                                                    <svg class="icon icon--minus" viewBox="0 0 22 22">
                                                                      <use xlink:href="#minus"></use>
                                                                    </svg>
                                                                </span>
                                                                 <span class="arrow">
                                                                    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
                                                                      <use xlink:href="#arrow-small-right"></use>
                                                                    </svg>
                                                                </span> 
                                                            </div>
                                                            <ul class="list">
                                                                <li class="link"><a href="https://www.ducati.com/ww/en/desmo-owners-club">Home</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             <?php } ?>
                                        </li>
                                        <?php  endforeach; ?>

                                        <?php else: // Otherwise we show a message indicating that the menu has no elements

                                        ?>

                                        <p class="msg msg--error">The menu has no links loaded.</p>

                                        <?php endif; 
                                        ?>
                                    </ul>
                                </div>
                                <a href="<?php echo $current_url; ?>" class="mainlogo" itemprop="url">
                                    <?php if(function_exists('the_custom_logo')){
                                      // the_custom_logo();
                                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                    }?>
                                 <img src="<?php echo $logo[0]; ?>" alt="DUCATI" itemprop="logo"> </a>
                                <div class="dx">
                                    <ul class="links">
                                        <?php 
                                        foreach ($items as $key => $item) {
                                       
                                        
                                        ?>
                                        <?php if($key >4){ ?>
                                        <li class="link  -mobilewasteful "><a href="<?php echo $item->url; ?>"><?php echo $item->post_title;?> </a> </li>
                                        <?php
                                             }
                                        } 
                                        ?>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="go-top -mobile" data-js-scrollpagetop> <span class="icon">
    <svg class="icon icon--arrow-small-up" viewBox="0 0 28 14">
      <use xlink:href="#arrow-small-up"></use>
    </svg></span> </div>
                            <div class="section-menutrigger -keepcurrent " data-js-sectionmenu-mobiletrigger> <span class="link"><span class="label"></span> <span class="triangle">
    <svg class="icon icon--triangle" viewBox="0 0 8 8">
      <use xlink:href="#triangle"></use>
    </svg></span></span>
                            </div>
                            <div class="section-menu" data-js-navsectionmenu>
                                <ul class="links">
                                    <li class="link">
                                        <a href="" class=""> <span class="label"></span> </a>
                                    </li>
                                </ul>
                                <div class="right">
                                    <div class="wrapcta">
                                        <a class="d-button -ghost-grey" href="https://www.ducati.com/au/en/dealers"> <span class="txt">Contact dealer</span> </a>
                                    </div>
                                    <div class="go-top" data-js-scrollpagetop> <span class="icon">
    <svg class="icon icon--arrow-small-up" viewBox="0 0 28 14">
      <use xlink:href="#arrow-small-up"></use>
    </svg></span> </div>
                                </div>
                            </div>
                            <div class="profile-toolbar">
                                <div class="country">
                                    <a href="#modal-languageswitch" rel="modal:open"> <img src="<?php echo get_theme_file_uri().'/assets/images/au.png'; ?>" /> Australia <span class="ico">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </a>
                                </div>
                                <div class="d-login ">
                                    <div class="unlogged">
                                        <button class="d-link myducati"> <span class="label">MyDucati</span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </button>
                                        <div class="panel">
                                            <ul>
                                                <li> <a class="d-link" id="login-action" href="#" data-url="/au/en/login">Login</a> </li>
                                                <li>
                                                    <a class="d-link " href="https://my.ducati.com/au/en/register/ducati" target="_blank"> <span>Sign Up</span> </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="logged">
                                        <a class="avatar" href="#">
                                            <div class="circle"> <span class="initials"></span> </div>
                                            <div class="name"> Hello, <span class="firstname"></span> </div> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </a>
                                        <div class="panel">
                                            <ul>
                                                <li>
                                                    <a class="d-link " href="https://my.ducati.com/au/en/home/ducati" target="_blank"> <span>Profile</span> </a>
                                                </li>
                                                <li> <a class="d-link" id="logout-action" href="#" data-url="/logout" data-fallback="/au/en/home">Logout</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="level-one">
                            <ul class="links" data-js-nav-lv1>
                                <li class="link"> <a href="javascript:void(0)" data-js-navlv2-trigger>Models<span class="triangle">
    <svg class="icon icon--triangle" viewBox="0 0 8 8">
      <use xlink:href="#triangle"></use>
    </svg></span></a> </li>
                                <li class="link"> <a href="javascript:void(0)" data-js-navlv2-trigger>Equipment<span class="triangle">
    <svg class="icon icon--triangle" viewBox="0 0 8 8">
      <use xlink:href="#triangle"></use>
    </svg></span></a> </li>
                                <li class="link"> <a href="javascript:void(0)" data-js-navlv2-trigger>Racing<span class="triangle">
    <svg class="icon icon--triangle" viewBox="0 0 8 8">
      <use xlink:href="#triangle"></use>
    </svg></span></a> </li>
                                <li class="link"> <a href="javascript:void(0)" data-js-navlv2-trigger>EXPERIENCE <span class="triangle">
    <svg class="icon icon--triangle" viewBox="0 0 8 8">
      <use xlink:href="#triangle"></use>
    </svg></span></a> </li>
                                <li class="link"> <a href="javascript:void(0)" data-js-navlv2-trigger>Service and Maintenance <span class="triangle">
    <svg class="icon icon--triangle" viewBox="0 0 8 8">
      <use xlink:href="#triangle"></use>
    </svg></span></a> </li>
                                <li class="link"> <a href="javascript:void(0)" data-js-navlv2-trigger>Company<span class="triangle">
    <svg class="icon icon--triangle" viewBox="0 0 8 8">
      <use xlink:href="#triangle"></use>
    </svg></span></a> </li>
                                <li class="link"> <a href="javascript:void(0)" data-js-navlv2-trigger>SPECIAL OFFERS<span class="triangle">
    <svg class="icon icon--triangle" viewBox="0 0 8 8">
      <use xlink:href="#triangle"></use>
    </svg></span></a> </li>
                            </ul>
                            <div class="country">
                                <a href="#modal-languageswitch" rel="modal:open"> <img src="<?php echo get_theme_file_uri().'/assets/images/au.png'; ?>" /> Australia <span class="ico">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </a>
                            </div>
                        </section>
                        <section data-js-navlv2-wrap>
                            <div class="level-two" data-js-shortcutnav-wrap>
                                <div class="scroll"> <a href="javascript:void(0)" class="back-navmobile" data-js-backnavmobile><span class="triangle">
    <svg class="icon icon--triangle" viewBox="0 0 8 8">
      <use xlink:href="#triangle"></use>
    </svg></span>Models</a>
                                    <div class="columns-wrap" data-js-nav-lv3>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> Diavel <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="/au/en/bikes/diavel/diavel-1260">Diavel 1260</a></li>
                                                <li class="link"><a href="/au/en/bikes/diavel/diavel-1260">Diavel 1260 S</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/bikes/diavel/diavel-1260-lamborghini">Diavel 1260 Lamborghini</a></li>
                                            </ul>
                                        </div>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> XDiavel <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="https://www.ducati.com/au/en/bikes/xdiavel/xdiavel">Dark</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/bikes/xdiavel/xdiavel">S</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/bikes/xdiavel/xdiavel">Black Star</a></li>
                                            </ul>
                                        </div>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> Hypermotard <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="/au/en/bikes/hypermotard/hypermotard-950">Hypermotard 950 RVE </a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/bikes/hypermotard/hypermotard-950">Hypermotard 950</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/bikes/hypermotard/hypermotard-950">Hypermotard 950 SP</a></li>
                                            </ul>
                                        </div>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> Monster <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="https://www.ducati.com/au/en/bikes/monster/monster">Monster</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/bikes/monster/monster">Monster &#43;</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/bikes/monster/monster-1200">Monster 1200</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/bikes/monster/monster-1200">Monster 1200 S</a></li>
                                                <li class="link"><a href="/au/en/bikes/monster/monster-659-learner-legal">Monster 659 (Learner Legal)</a></li>
                                            </ul>
                                        </div>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> Multistrada <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="/au/en/bikes/multistrada/multistrada-950">Multistrada 950</a></li>
                                                <li class="link"><a href="/au/en/bikes/multistrada/multistrada-950">Multistrada 950 S</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/bikes/multistrada/multistrada-v4">V4</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/bikes/multistrada/multistrada-v4">V4 S</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/bikes/multistrada/multistrada-v4">V4 S Sport</a></li>
                                                <li class="link"><a href="/au/en/bikes/multistrada/multistrada-1260-enduro">Multistrada 1260 Enduro</a></li>
                                            </ul>
                                        </div>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> Streetfighter <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="/au/en/bikes/streetfighter/streetfighter-v4">Streetfighter V4</a></li>
                                                <li class="link"><a href="/au/en/bikes/streetfighter/streetfighter-v4">Streetfighter V4 S</a></li>
                                            </ul>
                                        </div>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> SuperSport <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="https://www.ducati.com/au/en/bikes/supersport/supersport-950">950</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/bikes/supersport/supersport-950">950 S</a></li>
                                            </ul>
                                        </div>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> Panigale <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="/au/en/bikes/panigale/panigale-v2">Panigale V2</a></li>
                                                <li class="link"><a href="/au/en/bikes/panigale/panigale-v4">Panigale V4</a></li>
                                                <li class="link"><a href="/au/en/bikes/panigale/panigale-v4">Panigale V4 S</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/bikes/panigale/panigale-v4-sp">Panigale V4 SP</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/bikes/panigale/panigale-v4-r">V4 R</a></li>
                                            </ul>
                                        </div>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> Superleggera V4 <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="/au/en/bikes/panigale/superleggera-v4">Superleggera V4</a></li>
                                            </ul>
                                        </div>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> Ducati Worlds <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="https://scramblerducati.com/ww">Scrambler</a></li>
                                                <li class="link"><a href="/au/en/world/racetrack">Racetrack</a></li>
                                                <li class="link"><a href="/au/en/world/travel">Travel</a></li>
                                                <li class="link"><a href="">Lifestyle</a></li>
                                                <li class="link"><a href="/au/en/world/sport">Sport &amp; Fun</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="level-two" data-js-shortcutnav-wrap>
                                <div class="scroll"> <a href="javascript:void(0)" class="back-navmobile" data-js-backnavmobile><span class="triangle">
    <svg class="icon icon--triangle" viewBox="0 0 8 8">
      <use xlink:href="#triangle"></use>
    </svg></span>Equipment</a>
                                    <div class="columns-wrap" data-js-nav-lv3>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> Magazine <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="https://www.ducati.com/ww/en/editorial/redline-magazine-2019">Redline Magazine</a></li>
                                            </ul>
                                        </div>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> Accessories <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="https://www.ducati.com/au/en/accessories">Home</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/accessories/search?family&#61;MM">Diavel</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/accessories/search?family&#61;HM">Hypermotard</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/accessories/search?family&#61;MR">Monster</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/accessories/search?family&#61;MT">Multistrada</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/accessories/search?family&#61;SB">Panigale</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/accessories/search?family&#61;SS">Supersport</a></li>
                                            </ul>
                                        </div>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> Apparel <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="https://www.ducati.com/au/en/apparel">Home</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/apparel/motorcycle-wear">Motorcycle wear</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/apparel/casual-wear">Casual wear </a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/apparel/accessories">Accessories</a></li>
                                            </ul>
                                        </div>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> Shop Online <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="https://shop.ducati.com/au/en/?utm_source&#61;ducati&amp;utm_medium&#61;interna_header&amp;utm_campaign&#61;header_button" target="_blank">Go to the Shop Online</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="level-two" data-js-shortcutnav-wrap>
                                <div class="scroll"> <a href="javascript:void(0)" class="back-navmobile" data-js-backnavmobile><span class="triangle">
    <svg class="icon icon--triangle" viewBox="0 0 8 8">
      <use xlink:href="#triangle"></use>
    </svg></span>Racing</a>
                                    <div class="columns-wrap" data-js-nav-lv3>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> Racing <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="https://www.ducati.com/ww/en/racing/ducati-corse" target="_blank">Ducati Corse </a></li>
                                                <li class="link"><a href="https://www.ducati.com/ww/en/racing/ducati-corse/history" target="_blank">History</a></li>
                                                <li class="link"><a href="https://www.ducati.com/ww/en/racing/ducati-corse/palmares">Palmares</a></li>
                                            </ul>
                                        </div>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> MotoGP <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="https://www.ducati.com/ww/en/racing/motogp/home" target="_blank">Ducati Team </a></li>
                                                <li class="link"><a href="https://www.ducati.com/ww/en/racing/motogp/ducati-team-rider-andrea-dovizioso">Andrea Dovizioso</a></li>
                                                <li class="link"><a href="https://www.ducati.com/ww/en/racing/motogp/ducati-team-rider-danilo-petrucci">Danilo Petrucci</a></li>
                                                <li class="link"><a href="https://www.ducati.com/ww/en/racing/motogp/ducati-test-team-rider-michele-pirro">Michele Pirro</a></li>
                                                <li class="link"><a href="https://www.ducati.com/ww/en/racing/motogp/ducati-team-bike-desmosedici-gp" target="_blank">Desmosedici GP</a></li>
                                                <li class="link"><a href="https://www.ducati.com/ww/en/racing/motogp/ducati-team-crew" target="_blank">Team</a></li>
                                                <li class="link"><a href="https://www.ducati.com/ww/en/racing/motogp/standings" target="_blank">Standings</a></li>
                                                <li class="link"><a href="https://www.ducati.com/ww/en/racing/motogp/ducati-team-partners-sponsors" target="_blank">Partners and Sponsors</a></li>
                                                <li class="link"><a href="https://www.ducati.com/ww/en/racing/motogp/calendar">Race Calendar</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/news/racing">News</a></li>
                                            </ul>
                                        </div>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> Superbike <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="https://www.ducati.com/ww/en/racing/superbike/home">Aruba.it Racing - Ducati</a></li>
                                                <li class="link"><a href="https://www.ducati.com/ww/en/racing/superbike/aruba-it-ducati-rider-chaz-davies" target="_blank">Chaz Davies</a></li>
                                                <li class="link"><a href="https://www.ducati.com/ww/en/racing/superbike/aruba-it-ducati-rider-scott-redding" target="_blank">Scott Redding </a></li>
                                                <li class="link"><a href="https://www.ducati.com/ww/en/racing/superbike/aruba-it-ducati-bike-panigale-v4r" target="_blank">Panigale V4 R</a></li>
                                                <li class="link"><a href="https://www.ducati.com/ww/en/racing/superbike/aruba-it-ducati-crew">Team</a></li>
                                                <li class="link"><a href="https://www.ducati.com/ww/en/racing/superbike/standings" target="_blank">Standings </a></li>
                                                <li class="link"><a href="https://www.ducati.com/ww/en/racing/superbike/calendar">Race Calendar</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/news/racing/superbike">News</a></li>
                                                <li class="link"><a href="https://www.arubaracing.com/" target="_blank">Arubaracing.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="level-two" data-js-shortcutnav-wrap>
                                <div class="scroll"> <a href="javascript:void(0)" class="back-navmobile" data-js-backnavmobile><span class="triangle">
    <svg class="icon icon--triangle" viewBox="0 0 8 8">
      <use xlink:href="#triangle"></use>
    </svg></span>EXPERIENCE </a>
                                    <div class="columns-wrap" data-js-nav-lv3>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> Events <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="/au/en/events">Agenda</a></li>
                                                <li class="link"><a href="https://www.ducati.com/ww/en/experience/ducati-dream-tour">Ducati Dream Tour</a></li>
                                                <li class="link"><a href="https://www.ducati.com/ww/en/experience/ducati-travel-partner">Ducati Travel</a></li>
                                                <li class="link"><a href="https://www.ducati.com/ww/en/experience/world-ducati-week">World Ducati Week</a></li>
                                            </ul>
                                        </div>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> Riding Courses <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="http://dre.ducati.it/en">Ducati Riding Experience</a></li>
                                                <li class="link"><a href="http://dre.ducati.it/racetrack/en">DRE Track</a></li>
                                                <li class="link"><a href="http://dre.ducati.it/road/en/" target="_blank">DRE Road</a></li>
                                                <li class="link"><a href="http://dre.ducati.it/enduro/en">DRE Enduro</a></li>
                                            </ul>
                                        </div>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> Ducati Life <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="https://www.ducati.com/ww/en/editorial/redline-magazine-2018">Redline Magazine</a></li>
                                                <li class="link"><a href="/au/en/world/myducati-app">MyDucati App</a></li>
                                            </ul>
                                        </div>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> Borgo Panigale Experience <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="https://www.ducati.com/au/en/borgo-panigale-experience">Visit Ducati</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/borgo-panigale-experience/ducati-museum">Ducati Museum</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/borgo-panigale-experience/ducati-factory">Ducati Factory</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/borgo-panigale-experience/fisica-in-moto">Fisica In Moto</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/borgo-panigale-experience/schools">Schools</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/borgo-panigale-experience/how-to-reach">How to reach us </a></li>
                                            </ul>
                                        </div>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> DOC <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="https://www.ducati.com/ww/en/desmo-owners-club">Home</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="level-two" data-js-shortcutnav-wrap>
                                <div class="scroll"> <a href="javascript:void(0)" class="back-navmobile" data-js-backnavmobile><span class="triangle">
    <svg class="icon icon--triangle" viewBox="0 0 8 8">
      <use xlink:href="#triangle"></use>
    </svg></span>Service and Maintenance </a>
                                    <div class="columns-wrap" data-js-nav-lv3>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> Dealer network <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="https://www.ducati.com/au/en/dealers">Dealer locator</a></li>
                                            </ul>
                                        </div>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> Maintenance <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="https://www.ducati.com/au/en/service-maintenance/maintenance" target="_blank">Home</a></li>
                                                <li class="link"><a href="http://www.ducati.com.au/ducati_warranty/warranty.do">Warranty</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/bikes/multistrada/multistrada-v4/tutorial-video">Tutorials Multistrada V4</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/bikes/multistrada/multistrada-v4/ducati-connect-and-mirroring">FAQ - Connectivity</a></li>
                                            </ul>
                                        </div>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> Factory Ever Red <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="/au/en/factory-ever-red">Factory Ever Red</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="level-two" data-js-shortcutnav-wrap>
                                <div class="scroll"> <a href="javascript:void(0)" class="back-navmobile" data-js-backnavmobile><span class="triangle">
    <svg class="icon icon--triangle" viewBox="0 0 8 8">
      <use xlink:href="#triangle"></use>
    </svg></span>Company</a>
                                    <div class="columns-wrap" data-js-nav-lv3>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> Corporate <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="http://www.ducati.com.au/company/profile/index.do" target="_blank">Ducati Australia &amp; New Zealand</a></li>
                                                <li class="link"><a href="http://www.ducati.com.au/jobs.do">Work with us</a></li>
                                                <li class="link"><a href="/au/en/company/customer-service" target="_blank">Customer Service</a></li>
                                                <li class="link"><a href="/au/en/company/sustainability">Sustainability</a></li>
                                                <li class="link"><a href="https://assets.contentful.com/0icl5m35md89/6MxeKB1QiIYOoakw6OMSg8/57789508d55d6864d68fdd6afddbfa68/Ducati-Group-new-Code-of-Conduct-eng.pdf" target="_blank">Code of Ethics</a></li>
                                                <li class="link"><a href="http://www.ducati.com/cms-web/upl/img/1_PDF_documents/DMH_SupplierCode.pdf" target="_blank">Partner Code of Conduct</a></li>
                                                <li class="link"><a href="http://www.ducati.com/cms-web/upl/img/1_PDF_documents/Slavery_and_Human_Trafficking_Statement.pdf">Slavery and Human Trafficking Statement</a></li>
                                                <li class="link"><a href="https://assets.contentful.com/28uk7b0wvnz9/5ahMBQPgSQwmYOYyWK204O/2f115544a8ef36bca8b120c30141acc0/CERTIFICAZIONE_ISO_14001.pdf">ISO 14001:2015 CERTIFICATE</a></li>
                                            </ul>
                                        </div>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> Ducati Museum <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="https://www.ducati.com/au/en/borgo-panigale-experience/ducati-museum">New Ducati Museum</a></li>
                                                <li class="link"><a href="https://www.ducati.com/ww/en/borgo-panigale-experience/ducati-museum">Tours and reservations</a></li>
                                                <li class="link"><a href="https://www.ducati.com/ww/en/borgo-panigale-experience/how-to-reach">How to reach us</a></li>
                                                <li class="link"><a href="https://www.google.it/maps/place/Museo&#43;Ducati/&#64;44.5159635,11.2687776,3a,75y,36.2h,90t/data&#61;!3m7!1e1!3m5!1sc_g2CAaF13UAAAAGOymtyw!2e0!3e2!7i13312!8i6656!4m5!3m4!1s0x0:0x5b3cf87f906c108f!8m2!3d44.5162188!4d11.2681747!6m1!1e1?hl&#61;it">Virtual Tour</a></li>
                                                <li class="link"><a href="https://www.facebook.com/Ducatimuseum/">Ducati Museum on Facebook</a></li>
                                            </ul>
                                        </div>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> Borgo Panigale <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="http://www.ducati.com/company/visit_us/index.do">Visit Ducati</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/borgo-panigale-experience/ducati-museum">Ducati Museum</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/borgo-panigale-experience/ducati-factory">Ducati Factory</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/borgo-panigale-experience/fisica-in-moto">Fisica in moto</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/borgo-panigale-experience/schools">Schools</a></li>
                                                <li class="link"><a href="https://www.ducati.com/au/en/borgo-panigale-experience/how-to-reach">How to reach us </a></li>
                                            </ul>
                                        </div>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> Ducati History <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="http://www.ducati.com/90th_anniversary.do">90th Anniversary</a></li>
                                                <li class="link"><a href="http://www.ducati.com/history/editorials/history_of_desmodromic_timing/index.do">History of Desmodromic Timing</a></li>
                                                <li class="link"><a href="http://www.ducati.com/history/personalities/index.do">Personalities</a></li>
                                                <li class="link"><a href="http://www.ducati.com/history/historical_models/index.do">Historical models</a></li>
                                                <li class="link"><a href="http://ducati.com/history/editorials/riders_on_the_storm/index.do">Riders on the storm</a></li>
                                                <li class="link"><a href="http://www.ducati.com/history/editorials/index.do">Editorials</a></li>
                                            </ul>
                                        </div>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> Partners <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="https://www.ducati.com/ww/en/partners/licensing"> Licensing </a></li>
                                                <li class="link"><a href="https://www.ducati.com/ww/en/partners/official-suppliers">Official Suppliers</a></li>
                                                <li class="link"><a href="http://www.ducati.com/partners/motogp/index.do">Sponsor MotoGP</a></li>
                                                <li class="link"><a href="https://www.ducati.com/ww/en/racing/superbike/home">Sponsor Superbike</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="level-two" data-js-shortcutnav-wrap>
                                <div class="scroll"> <a href="javascript:void(0)" class="back-navmobile" data-js-backnavmobile><span class="triangle">
    <svg class="icon icon--triangle" viewBox="0 0 8 8">
      <use xlink:href="#triangle"></use>
    </svg></span>SPECIAL OFFERS</a>
                                    <div class="columns-wrap" data-js-nav-lv3>
                                        <div class="column" data-js-navlv3-trigger>
                                            <div class="title"> Current Offers <span class="plus">
    <svg class="icon icon--plus" viewBox="0 0 22 22">
      <use xlink:href="#plus"></use>
    </svg></span> <span class="minus">
    <svg class="icon icon--minus" viewBox="0 0 22 22">
      <use xlink:href="#minus"></use>
    </svg></span> <span class="arrow">
    <svg class="icon icon--arrow-small-right" viewBox="0 0 12 22">
      <use xlink:href="#arrow-small-right"></use>
    </svg></span> </div>
                                            <ul class="list">
                                                <li class="link"><a href="https://www.ducati.com/au/en/motorcycle-promotions/christmas-holiday-campaign">Christmas Holiday Campaign</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </section>
                </div>
            </div>