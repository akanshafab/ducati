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
                            </svg> <span><?php echo get_bloginfo();?></span> </a>
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
                                    
                                    ?>
                                    <ul class="links">
                                        <li class="link">
                                           <a href="javascript:void(0)" data-js-shortcutnav id="models" class="models">MODELS 
                                                <span class="triangle">
                                                    <svg class="icon icon--triangle" viewBox="0 0 8 8">
                                                      <use xlink:href="#triangle"></use>
                                                    </svg>
                                                </span>
                                            </a>
                                            <section data-js-shortcutnav-wrap>
                                                <div class="menu-models">
                                                    <div class="grid" data-js-shortcutnav-grid>
                                                        <div class="gridscroll">
                                                            <a href="javascript:void(0)" class="block" data-js-shortcutnav-gridblock=0> <img class="thumb lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/4YwSoOWf0SkOa6EqTegXw6/1e8750c41331d759da8ca62047903a0c/Thumb-menu-Diavel-1260-S-MY20-Ducati-Red.png" alt="">Diavel<span class="new">new</span></a>
                                                            <a href="javascript:void(0)" class="block" data-js-shortcutnav-gridblock=1> <img class="thumb lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/3EZ5XKVF47vJ3MZbLWc0eo/77b6d2ef6cdd1b70d7ecdcd30b477af6/Thumb-menu-XDiavel-Black-Star-MY21.png" alt="">XDiavel<span class="new">new</span></a>
                                                            <a href="javascript:void(0)" class="block" data-js-shortcutnav-gridblock=2> <img class="thumb lazyload" data-src="<?php echo $img_url.'/assets/images/HYM-950-RVE-01-model-menu-120x60.png';?>" alt="">Hypermotard<span class="new">new</span></a>
                                                            <a href="javascript:void(0)" class="block" data-js-shortcutnav-gridblock=3> <img class="thumb lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/2vZH8MyApiYqk2OYiCciyM/ffc389067d48e544ecc3efe93edfddb7/Thumb-menu-Monster-1200-S-Red-MY20.png" alt="">Monster<span class="new">new</span></a>
                                                            <a href="javascript:void(0)" class="block" data-js-shortcutnav-gridblock=4> <img class="thumb lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/6KBckmvAfe09Ym8KomwVov/5414f7a0aad18fed8c969b373f6820bf/Thumb-menu-Streetfighter-V4-S-Red.png" alt="">Streetfighter<span class="new">new</span></a>
                                                            <a href="javascript:void(0)" class="block" data-js-shortcutnav-gridblock=5> <img class="thumb lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/2fatkAarFiUEs0amAC0wsa/2f5bb0437ae19907e593f0dd764e4b13/Thumb-menu-Multistrada-1260-S-MY20-Red.png" alt="">Multistrada<span class="new">new</span></a>
                                                            <a href="javascript:void(0)" class="block" data-js-shortcutnav-gridblock=6> <img class="thumb lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/6mnX3OkFkA0sEMc6uueM6S/2f4092ab52b0909b9c7300ffee3b7f9a/Thumb-menu-Panigale-V4-S-Red.png" alt="">Panigale<span class="new">new</span></a>
                                                            <a href="javascript:void(0)" class="block" data-js-shortcutnav-gridblock=7> <img class="thumb lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/7wbSmr2NHG89TvN2OcNiO3/683d0079c0ee616cff09c1a92dbb959e/Thumb-menu-SuperSport-950S-Ducati-Red-MY21.png" alt="">Supersport<span class="new">new</span></a>
                                                            <a href="javascript:void(0)" class="block" data-js-shortcutnav-gridblock=8> <img class="thumb lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/2cYT40vb5PMxCAyjIWB6W9/354ae7331e9746e021c51ad109cbda43/Thumb-menu-Superleggera-V4-S.png" alt="">Superleggera V4 <span class="new">new</span></a>
                                                            <a href="javascript:void(0)" class="block" data-js-shortcutnav-gridblock=9> <img class="thumb lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/54kv6iMpyHuG4UZEtYUOSH/894a745897279fe0cb9d7b7dcdc8d922/Thumb-menu-SCR-1100-SportPro.png" alt="">
                                                                <svg class="icon icon--logo-scrambler" viewBox="0 0 80 29">
                                                                    <use xlink:href="#logo-scrambler"></use>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="links -hidden" data-js-shortcutnav-lv1>
                                                        <li class="link">
                                                            <a href="javascript:void(0)">
                                                                <div class="family">Diavel</div>
                                                                <div class="wrapper-thumb"> <img class="thumb lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/4YwSoOWf0SkOa6EqTegXw6/1e8750c41331d759da8ca62047903a0c/Thumb-menu-Diavel-1260-S-MY20-Ducati-Red.png" alt=""> </div>
                                                            </a>
                                                            <div class="menu-models_lv2">
                                                                <ul class="links" data-js-shortcutnav-lv2>
                                                                    <div class="mobileclose" data-js-mobileclose>
                                                                        <div>
                                                                            <svg class="icon icon--arrow-small-left" viewBox="0 0 12 22">
                                                                                <use xlink:href="#arrow-small-left"></use>
                                                                            </svg>
                                                                        </div> <span>Diavel</span> </div>
                                                                    <li class="link -active "> <a href="/au/en/bikes/diavel/diavel-1260" class="">Diavel 1260
                            </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/3N5NKyLeGiaFedYuiTBTiW/c4da4355fe7eada80cbc85a99849e1da/Model-Menu-MY20-Diavel-1260-Sandsone-Grey.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">1260</div>
                                                                                    <div class="txt "></div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                        159 hp
                                                    </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                        129 Nm
                                                    </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                        223 kg
                                                    </strong> <span>Dry weight</span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price $30,290 AUD <br /> Suggested Retail Price $32,200 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta " href="https://configurator.ducati.com/bikes/au/en/diavel/diavel" rel=""><span class="txt">Configure</span></a> <a class="d-button cta " href="/au/en/bikes/diavel/diavel-1260" rel=""><span class="txt">DISCOVER MORE</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="/au/en/bikes/diavel/diavel-1260" class="">Diavel 1260 S</a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/3ePyWwkdfMrzN7dqShC6Z9/93fe54b27b3669f263f6469ace82ede2/Model-Menu-MY20-Diavel-1260-S-Ducati-Red.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">1260 S</div>
                                                                                    <div class="txt "></div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                    159 hp
                                                </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                    129 Nm
                                                </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                    221 kg
                                                </strong> <span>Dry Weight</span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price $35,890 AUD<br />Suggested Retail Price $38,295 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta " href="https://configurator.ducati.com/bikes/au/en/diavel/diavel" rel=""><span class="txt">Configure </span></a> <a class="d-button cta " href="/au/en/bikes/diavel/diavel-1260" rel=""><span class="txt">discover more</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="https://www.ducati.com/au/en/bikes/diavel/diavel-1260-lamborghini" class=""><span class="new">new</span> 1260 Lamborghini
                            </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/5TUhXsmfKnXMhccPdMWIwW/d76427262f7fa4b6207ec67b2149349d/Model-Menu-MY21-Diavel-1260-Lamborghini.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">Diavel 1260 Lamborghini</div>
                                                                                    <div class="txt "></div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                                    159 hp
                                                                </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    129 Nm
                                                                </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    220 kg
                                                                </strong> <span>Dry Weight</span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price $48,600 AUD<br />Suggested Retail Price $53,015 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button cta " href="https://www.ducati.com/au/en/bikes/diavel/diavel-1260-lamborghini" rel=""><span class="txt">Discover More</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="link">
                                                            <a href="javascript:void(0)">
                                                                <div class="family"> XDiavel</div>
                                                                <div class="wrapper-thumb"> <img class="thumb lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/3EZ5XKVF47vJ3MZbLWc0eo/77b6d2ef6cdd1b70d7ecdcd30b477af6/Thumb-menu-XDiavel-Black-Star-MY21.png" alt=""> </div>
                                                            </a>
                                                            <div class="menu-models_lv2">
                                                                <ul class="links" data-js-shortcutnav-lv2>
                                                                    <div class="mobileclose" data-js-mobileclose>
                                                                        <div>
                                                                            <svg class="icon icon--arrow-small-left" viewBox="0 0 12 22">
                                                                                <use xlink:href="#arrow-small-left"></use>
                                                                            </svg>
                                                                        </div> <span>XDiavel</span> </div>
                                                                    <li class="link -active "> <a href="https://www.ducati.com/au/en/bikes/xdiavel/xdiavel" class=""><span class="new">new</span> Dark
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/zx9H7FDmx8PxIvx6jxq0x/14681c6978fd5ee345ab83212e8a0b46/Model-Menu-MY21-XDiavel-Dark.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">XDiavel </div>
                                                                                    <div class="txt ">*Only for countries where Euro 5 standard applies</div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                                    160 hp*
                                                                </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    93,7 lb-ft*
                                                                </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    221 kg
                                                                </strong> <span>Dry Weight</span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price From $29,390 AUD<br /> Suggested Retail Price From $31,165 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta " href="https://configurator.ducati.com/bikes/au/en/xdiavel/xdiavel-dark?_ga&#61;2.245455041.471379978.1604920797-296148449.1571751202" rel=""><span class="txt">Configure</span></a> <a class="d-button cta " href="https://www.ducati.com/au/en/bikes/xdiavel/xdiavel" rel=""><span class="txt">Discover More</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="https://www.ducati.com/au/en/bikes/xdiavel/xdiavel" class=""><span class="new">new</span> S
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/72YYJtZIXMJQSz9g2Pa8nC/2575b6ad1a7efc15eacaba73226c3bc2/Model-Menu-MY20-XDiavel-S-Thrilling-Black.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">XDiavel S</div>
                                                                                    <div class="txt ">* Only for countries where Euro 5 standard applies.</div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                                    160 hp*
                                                                </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    93,7 lb-ft*
                                                                </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    223 kg
                                                                </strong> <span>Dry Weight</span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price From $36,100 AUD<br />Suggested Retail Price From $38,870 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta " href="https://configurator.ducati.com/bikes/au/en/xdiavel/xdiavel-s" rel=""><span class="txt">Configure</span></a> <a class="d-button cta " href="https://www.ducati.com/au/en/bikes/xdiavel/xdiavel" rel=""><span class="txt">Discover more</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="https://www.ducati.com/au/en/bikes/xdiavel/xdiavel" class=""><span class="new">new</span> Black Star
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/2Q4RdAaymUHdezGxllOe4s/87441c31a464de3524daf505f4c9d186/Model-Menu-MY21-XDiavel-Black-Star.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">XDiavel Black Star</div>
                                                                                    <div class="txt ">* Only for countries where Euro 5 standard applies.</div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                                    160 hp*
                                                                </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    93,7 lb-ft* 
                                                                </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    221 kg
                                                                </strong> <span>Dry Weight</span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price From $37,590 AUD <br />Suggested Retail Price From $40,020 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta " href="https://configurator.ducati.com/bikes/au/en/xdiavel/xdiavel-top?_ga&#61;2.15480819.471379978.1604920797-296148449.1571751202" rel=""><span class="txt">Configure</span></a> <a class="d-button cta " href="https://www.ducati.com/au/en/bikes/xdiavel/xdiavel" rel=""><span class="txt">Discover More</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="link">
                                                            <a href="javascript:void(0)">
                                                                <div class="family"> Hypermotard</div>
                                                                <div class="wrapper-thumb"> <img class="thumb lazyload" data-src="<?php echo $img_url.'/assets/images/HYM-950-RVE-01-model-menu-120x60.png';?>" alt=""> </div>
                                                            </a>
                                                            <div class="menu-models_lv2">
                                                                <ul class="links" data-js-shortcutnav-lv2>
                                                                    <div class="mobileclose" data-js-mobileclose>
                                                                        <div>
                                                                            <svg class="icon icon--arrow-small-left" viewBox="0 0 12 22">
                                                                                <use xlink:href="#arrow-small-left"></use>
                                                                            </svg>
                                                                        </div> <span>Hypermotard</span> </div>
                                                                    <li class="link -active "> <a href="/au/en/bikes/hypermotard/hypermotard-950" class=""><span class="new">new</span> 950 RVE
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/7csSSDj4VYRk8XKWRDQLsQ/aef759a86336384a684ca3cb477c886b/Model-Menu-MY20-Hypermotard-950-RVE.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">950 RVE</div>
                                                                                    <div class="txt "></div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                                    114 hp
                                                                </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    71 lb-ft
                                                                </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    392 lb 
                                                                </strong> <span>Dry Weight </span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price From $23,000 AUD <br />Suggested Retail Price From $24,150 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta " href="https://configurator.ducati.com/bikes/au/en/hypermotard/hym-rve" rel=""><span class="txt">Configure</span></a> <a class="d-button cta " href="/au/en/bikes/hypermotard/hypermotard-950" rel=""><span class="txt">Discover More </span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="/au/en/bikes/hypermotard/hypermotard-950" class="">950
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/3HRkTmZ1iuXi3qbuliRu1V/1308a110bfc850b6546ff27ba719fae7/Model-Menu-MY20-Hypermotard-Red.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">950</div>
                                                                                    <div class="txt "></div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                                    114 hp
                                                                </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    71 lb-ft
                                                                </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    392 lb
                                                                </strong> <span>Dry weight </span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price From $21,590 AUD<br />Suggested Retail Price From $22,655 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta " href="https://configurator.ducati.com/bikes/au/en/hypermotard/" rel=""><span class="txt">Configure </span></a> <a class="d-button cta " href="/au/en/bikes/hypermotard/hypermotard-950" rel=""><span class="txt">Discover More</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="/au/en/bikes/hypermotard/hypermotard-950" class="">950 SP
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/2d8BX6eRbaaZVgMDiJHL9J/b8d2b46c040ae8e306200f5173cefd53/Model-Menu-MY20-Hypermotard-SP-livery.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">950 SP</div>
                                                                                    <div class="txt "></div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                                    114 hp
                                                                </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    71 lb-ft
                                                                </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    388 lb
                                                                </strong> <span>Dry weight</span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price From $26,900 AUD<br />Suggested Retail Price From $28,635 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta " href="https://configurator.ducati.com/bikes/au/en/hypermotard/" rel=""><span class="txt">Configure </span></a> <a class="d-button cta " href="/au/en/bikes/hypermotard/hypermotard-950" rel=""><span class="txt">DISCOVER MORE</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="link">
                                                            <a href="javascript:void(0)">
                                                                <div class="family"> Monster</div>
                                                                <div class="wrapper-thumb"> <img class="thumb lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/2vZH8MyApiYqk2OYiCciyM/ffc389067d48e544ecc3efe93edfddb7/Thumb-menu-Monster-1200-S-Red-MY20.png" alt=""> </div>
                                                            </a>
                                                            <div class="menu-models_lv2">
                                                                <ul class="links" data-js-shortcutnav-lv2>
                                                                    <div class="mobileclose" data-js-mobileclose>
                                                                        <div>
                                                                            <svg class="icon icon--arrow-small-left" viewBox="0 0 12 22">
                                                                                <use xlink:href="#arrow-small-left"></use>
                                                                            </svg>
                                                                        </div> <span>Monster</span> </div>
                                                                    <li class="link -active "> <a href="https://www.ducati.com/au/en/bikes/monster/monster" class=""><span class="new">new</span> Monster
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/5TKWHrgWoQ6g5dVKJ9Wuky/c74218bd7c751d0c865cbecc627bc4b5/Model-Menu-MY21-Monster-937-Red.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">Monster</div>
                                                                                    <div class="txt "></div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                                    111 hp
                                                                </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    93 Nm
                                                                </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    166 kg
                                                                </strong> <span>Dry Weight</span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price From $18,200 AUD<br />Suggested Retail Price $18,860 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta " href="https://configurator.ducati.com/bikes/au/en/monster/monster-937?_ga&#61;2.153922044.57835829.1606734188-296148449.1571751202" rel=""><span class="txt">Configure</span></a> <a class="d-button cta " href="https://www.ducati.com/au/en/bikes/monster/monster" rel=""><span class="txt">Discover It</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="https://www.ducati.com/au/en/bikes/monster/monster" class=""><span class="new">new</span> Monster &#43;
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/4df26sNCO1hcLG29esK9EY/f1d72bcd81870cc314518693e2c59ae2/Model-Menu-MY21-Monster-937-plus-AG.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">Monster &#43;</div>
                                                                                    <div class="txt "></div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                                    111 hp
                                                                </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    93 Nm
                                                                </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    166 kg
                                                                </strong> <span>Dry Weight</span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price From $18,850 AUD<br />Suggested Retail Price $19,550 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta " href="https://configurator.ducati.com/bikes/au/en/monster/monster-937-plus?_ga&#61;2.52002857.1445996953.1606732977-296148449.1571751202" rel=""><span class="txt">Configure</span></a> <a class="d-button cta " href="https://www.ducati.com/au/en/bikes/monster/monster" rel=""><span class="txt">Discover It</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="/au/en/bikes/monster/monster-1200" class="">1200
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/Kqw7k94BmSGlebeoNpPSf/87330c42148819391acd4bbf01eae482/Model-Menu-MY20-Monster-1200-Red.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">1200</div>
                                                                                    <div class="txt "></div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                                    147 hp
                                                                </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    91 lb-ft
                                                                </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    412 lb
                                                                </strong> <span>Dry Weight</span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price From $23,800 AUD<br />Suggested Retail Price From $25,070 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta " href="https://configurator.ducati.com/bikes/au/en/monster/" rel=""><span class="txt">Configure</span></a> <a class="d-button cta " href="/au/en/bikes/monster/monster-1200" rel=""><span class="txt">Discover more</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="/au/en/bikes/monster/monster-1200" class="">1200 S
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/7rA3TnPK5BRGugwzxG4FL5/1dce8ca3db5d6cc1d401c11705d53a6d/Model-Menu-MY20-Monster-1200-S-Black-on-black.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">1200 S</div>
                                                                                    <div class="txt "></div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                                    147 hp
                                                                </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    91 lb-ft
                                                                </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    408 lb
                                                                </strong> <span>Dry Weight</span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price From $27,200 AUD<br />Suggested Retail Price From $28,750 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta " href="https://configurator.ducati.com/bikes/au/en/monster/" rel=""><span class="txt">Configure</span></a> <a class="d-button cta " href="/au/en/bikes/monster/monster-1200" rel=""><span class="txt">Discover more</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="/au/en/bikes/monster/monster-659-learner-legal" class="">659 (Learner Legal)
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/1dy4T4LlAXtQIwkTUDOXfm/7b8d53c2cf018b71685bfca8b2b1ee1e/Model-Menu-MY20-Monster-797-Red.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">659 (learner legal)</div>
                                                                                    <div class="txt "></div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                                    50 hp 
                                                                </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    386 lb
                                                                </strong> <span>Dry weight</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    32.4 lb-ft (44 Nm) @ 5500 rpm
                                                                </strong> <span>Torque</span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price From $13,500 AUD<br />Suggested Retail Price From $13,690 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta " href="https://configurator.ducati.com/bikes/au/en/monster/" rel=""><span class="txt">Configure </span></a> <a class="d-button cta " href="/au/en/bikes/monster/monster-659-learner-legal" rel=""><span class="txt">Discover more</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="link">
                                                            <a href="javascript:void(0)">
                                                                <div class="family"> Streetfighter</div>
                                                                <div class="wrapper-thumb"> <img class="thumb lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/6KBckmvAfe09Ym8KomwVov/5414f7a0aad18fed8c969b373f6820bf/Thumb-menu-Streetfighter-V4-S-Red.png" alt=""> </div>
                                                            </a>
                                                            <div class="menu-models_lv2">
                                                                <ul class="links" data-js-shortcutnav-lv2>
                                                                    <div class="mobileclose" data-js-mobileclose>
                                                                        <div>
                                                                            <svg class="icon icon--arrow-small-left" viewBox="0 0 12 22">
                                                                                <use xlink:href="#arrow-small-left"></use>
                                                                            </svg>
                                                                        </div> <span>Streetfighter</span> </div>
                                                                    <li class="link -active "> <a href="/au/en/bikes/streetfighter/streetfighter-v4" class=""><span class="new">new</span> V4 
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/1Q4wNd3l69Hupe4bEumxgB/b0c59ab172042fd70b7aaf59df996b10/Model-Menu-MY20-Streetfighter-V4-02-Red.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">V4 </div>
                                                                                    <div class="txt "></div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                                    208 hp
                                                                </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    90.4 lb-ft
                                                                </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    180 kg
                                                                </strong> <span>Dry Weight</span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price From $29,800 AUD<br />Suggested Retail Price From $31,970 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta " href="https://configurator.ducati.com/bikes/au/en/streetfighter" rel=""><span class="txt">Configure </span></a> <a class="d-button cta " href="/au/en/bikes/streetfighter/streetfighter-v4" rel=""><span class="txt">Discover More</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="/au/en/bikes/streetfighter/streetfighter-v4" class=""><span class="new">new</span> V4 S 
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/4MX1OoMxm4oIKdIHvG9wft/dd0627a238f8d7feaab1d55e96345a65/Model-Menu-MY20-Streetfighter-V4-S-E4-Black.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">V4 S </div>
                                                                                    <div class="txt "></div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                                    208 hp
                                                                </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    90.4 lb-ft
                                                                </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    180 kg
                                                                </strong> <span>Dry Weight</span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price From $34,200 AUD <br />Suggested Retail Price From $36,800 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta " href="https://configurator.ducati.com/bikes/au/en/streetfighter/streetfighter-v4s" rel=""><span class="txt">Configure </span></a> <a class="d-button cta " href="/au/en/bikes/streetfighter/streetfighter-v4" rel=""><span class="txt">Discover More</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="link">
                                                            <a href="javascript:void(0)">
                                                                <div class="family"> Multistrada</div>
                                                                <div class="wrapper-thumb"> <img class="thumb lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/2fatkAarFiUEs0amAC0wsa/2f5bb0437ae19907e593f0dd764e4b13/Thumb-menu-Multistrada-1260-S-MY20-Red.png" alt=""> </div>
                                                            </a>
                                                            <div class="menu-models_lv2">
                                                                <ul class="links" data-js-shortcutnav-lv2>
                                                                    <div class="mobileclose" data-js-mobileclose>
                                                                        <div>
                                                                            <svg class="icon icon--arrow-small-left" viewBox="0 0 12 22">
                                                                                <use xlink:href="#arrow-small-left"></use>
                                                                            </svg>
                                                                        </div> <span>Multistrada</span> </div>
                                                                    <li class="link -active "> <a href="/au/en/bikes/multistrada/multistrada-950" class="">950
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/5LqgMvvKy0ncOhdUAmadkH/2f4fc87474247563310edb7544b5e72b/Model-Menu-MY20-Multistrada-950-Red.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">950</div>
                                                                                    <div class="txt "></div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                                    113 hp
                                                                </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    71 lb-ft
                                                                </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    204 kg
                                                                </strong> <span>Dry Weight</span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price From $21,500 AUD<br />Suggested Retail Price From $22,425 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta " href="https://configurator.ducati.com/bikes/au/en/monster/" rel=""><span class="txt">CONFIGURE</span></a> <a class="d-button cta " href="/au/en/bikes/multistrada/multistrada-950" rel=""><span class="txt">Discover more</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="/au/en/bikes/multistrada/multistrada-950" class="">950 S
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/6IK022RpBlCAecpo7VQUTP/3e22bc6a83dd66800a6bd5bac0bb46d5/Model-Menu-MY20-Multistrada-950-S-Red.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">950 S</div>
                                                                                    <div class="txt "></div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                                    113 hp
                                                                </strong> <span>POWER</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    71 lb-ft
                                                                </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    456 lb
                                                                </strong> <span>Dry weight</span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price From $24,000 AUD<br />Suggested Retail Price From $25,300 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta " href="https://configurator.ducati.com/bikes/au/en/multistrada" rel=""><span class="txt">Configure </span></a> <a class="d-button cta " href="/au/en/bikes/multistrada/multistrada-950" rel=""><span class="txt">Discover More</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="https://www.ducati.com/au/en/bikes/multistrada/multistrada-v4" class=""><span class="new">new</span> V4
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/2bjONRSqaLbubgDYtfeM2y/d4b7bd672a443034c162d6628bac5317/Model-Menu-MY21-Multistrada-V4-Red.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">Multistrada V4</div>
                                                                                    <div class="txt "></div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                                    170 hp
                                                                </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    92 lb-ft
                                                                </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    478 lb
                                                                </strong> <span>Dry Weight</span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price From $28,990 AUD<br /> Suggested Retail Price From $30,360 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta " href="https://configurator.ducati.com/bikes/au/en/multistrada/multistrada-v4" rel=""><span class="txt">Configure</span></a> <a class="d-button cta " href="https://www.ducati.com/au/en/bikes/multistrada/multistrada-v4" rel=""><span class="txt">Discover it</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="https://www.ducati.com/au/en/bikes/multistrada/multistrada-v4" class=""><span class="new">new</span> V4 S 
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/5KcthMf26eBxx2rWtjTvVh/47b41ff4c1550dbb87caf2a51b9b222c/Model-Menu-MY21-Multistrada-V4-S-Red-SW.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">Multistrada V4 S </div>
                                                                                    <div class="txt "></div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                                    170 hp
                                                                </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    92 lb-ft
                                                                </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    480 lb
                                                                </strong> <span>Dry Weight</span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price From $33,490 AUD<br />Suggested Retail Price From $35,075 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta " href="https://configurator.ducati.com/bikes/au/en/multistrada/multistrada-v4-s" rel=""><span class="txt">Configure</span></a> <a class="d-button cta " href="https://www.ducati.com/au/en/bikes/multistrada/multistrada-v4" rel=""><span class="txt">Discover it</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="https://www.ducati.com/au/en/bikes/multistrada/multistrada-v4" class=""><span class="new">new</span> V4 S Sport
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/6onQsUGZAOZJVm1NS4NOhg/fe66d47a21ac5cb4ad991d80b23919bc/Model-Menu-MY21-Multistrada-V4-S-SP.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">V4 S Sport</div>
                                                                                    <div class="txt "></div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                                    170 hp
                                                                </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    92 lb ft
                                                                </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    217 kg
                                                                </strong> <span>Dry Weight</span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price From $36,790 AUD<br />Suggested Retail Price From $38,468 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="/au/en/bikes/multistrada/multistrada-1260-enduro" class="">1260 Enduro
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/2L14ak1hq4Uj4F2Bxc6kOR/2dadfe7ff4f9a14563d99d9e8c17e053/Model-Menu-MY20-Multistrada-1260-Enduro-Red.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">1260 Enduro</div>
                                                                                    <div class="txt "></div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                                    158 hp
                                                                </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    94 lb-ft
                                                                </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    496 lb
                                                                </strong> <span>Dry Weight</span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price From $32,400 AUD<br />Suggested Retail Price From $34,730 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta " href="https://configurator.ducati.com/bikes/au/en/multistrada" rel=""><span class="txt">Configure </span></a> <a class="d-button cta " href="/au/en/bikes/multistrada/multistrada-1260-enduro" rel=""><span class="txt">Discover more</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="link">
                                                            <a href="javascript:void(0)">
                                                                <div class="family"> Panigale</div>
                                                                <div class="wrapper-thumb"> <img class="thumb lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/6mnX3OkFkA0sEMc6uueM6S/2f4092ab52b0909b9c7300ffee3b7f9a/Thumb-menu-Panigale-V4-S-Red.png" alt=""> </div>
                                                            </a>
                                                            <div class="menu-models_lv2">
                                                                <ul class="links" data-js-shortcutnav-lv2>
                                                                    <div class="mobileclose" data-js-mobileclose>
                                                                        <div>
                                                                            <svg class="icon icon--arrow-small-left" viewBox="0 0 12 22">
                                                                                <use xlink:href="#arrow-small-left"></use>
                                                                            </svg>
                                                                        </div> <span>Panigale</span> </div>
                                                                    <li class="link -active "> <a href="/au/en/bikes/panigale/panigale-v2" class=""><span class="new">new</span> V2
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/7zHH2usTp5o3opX2zqMnG2/aee1efdc3c8e36f0f288645a1fe5cad8/Model-Menu-MY20-Panigale-V2-White.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">V2</div>
                                                                                    <div class="txt "></div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                                    155hp
                                                                </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    10.6 Kgm
                                                                </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    176 kg
                                                                </strong> <span>Dry Weight</span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price From $23,000 AUD<br />Suggested Retail Price From $24,150 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta " href="https://configurator.ducati.com/bikes/au/en/superbike" rel=""><span class="txt">Configure</span></a> <a class="d-button cta " href="/au/en/bikes/panigale/panigale-v2" rel=""><span class="txt">Discover More</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="/au/en/bikes/panigale/panigale-v4" class="">V4
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/6ijjwnyfDKL0uT7CIYwRqs/63c5eaba99cd91f318b3a109979854b7/Model-Menu-MY20-Panigale-V4-Red.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">V4</div>
                                                                                    <div class="txt "></div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                                    214 hp
                                                                </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    91.5 lb-ft
                                                                </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    386 lb
                                                                </strong> <span>Dry weight</span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price From $31,690 AUD<br />Suggested Retail Price From $34,155 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta " href="https://configurator.ducati.com/bikes/au/en/superbike" rel=""><span class="txt">Configure </span></a> <a class="d-button cta " href="/au/en/bikes/panigale/panigale-v4" rel=""><span class="txt">Discover More</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="/au/en/bikes/panigale/panigale-v4" class="">V4 S
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/120HhsJvxLyy4OseVa3ewI/ab5a46c69b58c45f6536e8d08f8514ea/Model-Menu-MY20-Panigale-V4-S-Red.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">V4 S</div>
                                                                                    <div class="txt "></div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                                    214 hp
                                                                </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    91.5 lb-ft
                                                                </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    384 lb
                                                                </strong> <span>Dry weight</span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price From $40,890 AUD<br />Suggested Retail Price From $44,045 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta " href="https://configurator.ducati.com/bikes/au/en/monster/" rel=""><span class="txt">CONFIGURE</span></a> <a class="d-button cta " href="/au/en/bikes/panigale/panigale-v4" rel=""><span class="txt">Discover more</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="https://www.ducati.com/au/en/bikes/panigale/panigale-v4-sp" class=""><span class="new">new</span> V4 SP
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/4ESLmFvFD744IdxvGYq3uN/92a4853aa4452686f34b4003fbb8863b/Model-Menu-MY21-Panigale-V4-SP.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">Panigale V4 SP</div>
                                                                                    <div class="txt "></div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                                    214 hp
                                                                </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    124.0 Nm
                                                                </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    173 kg
                                                                </strong> <span>Dry Weight</span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price From $51,890 AUD<br />Suggested Retail Price From $56,005 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta " href="https://configurator.ducati.com/bikes/au/en/superbike/panigale-v4sp?_ga&#61;2.162912188.1618801984.1606131394-296148449.1571751202" rel=""><span class="txt">Configure </span></a> <a class="d-button cta " href="https://www.ducati.com/au/en/bikes/panigale/panigale-v4-sp" rel=""><span class="txt">Discover More</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="https://www.ducati.com/au/en/bikes/panigale/panigale-v4-r" class="">V4 R
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/4UOomM6V9hOHEj37ly7bpx/736b1480ddf17ee944f3f111ed206d88/Model-Menu-MY20-Panigale-V4-R-Red.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">Panigale V4 R</div>
                                                                                    <div class="txt "></div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                                    221 hp
                                                                </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    112 Nm
                                                                </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    172 kg
                                                                </strong> <span>Dry Weight</span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price From $63,995 AUD<br />Suggested Retail Price From $69,104 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="link">
                                                            <a href="javascript:void(0)">
                                                                <div class="family"> Supersport</div>
                                                                <div class="wrapper-thumb"> <img class="thumb lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/7wbSmr2NHG89TvN2OcNiO3/683d0079c0ee616cff09c1a92dbb959e/Thumb-menu-SuperSport-950S-Ducati-Red-MY21.png" alt=""> </div>
                                                            </a>
                                                            <div class="menu-models_lv2">
                                                                <ul class="links" data-js-shortcutnav-lv2>
                                                                    <div class="mobileclose" data-js-mobileclose>
                                                                        <div>
                                                                            <svg class="icon icon--arrow-small-left" viewBox="0 0 12 22">
                                                                                <use xlink:href="#arrow-small-left"></use>
                                                                            </svg>
                                                                        </div> <span>Supersport</span> </div>
                                                                    <li class="link -active "> <a href="https://www.ducati.com/au/en/bikes/supersport/supersport-950" class=""><span class="new">new</span> 950
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/VX5ylyIcdNU8mAkEgi3i9/ec91184846c53fd5da0f40d891112963/Model-Menu-MY21-SuperSport-950-Ducati-Red.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">SuperSport 950</div>
                                                                                    <div class="txt "></div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                                    110 hp
                                                                </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    93 Nm
                                                                </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    184 kg
                                                                </strong> <span>Dry weight</span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price From $19,390 AUD<br />Suggested Retail Price From $20,229 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta " href="https://configurator.ducati.com/bikes/au/en/supersport/supersport-950?_ga&#61;2.125238154.1618801984.1606131394-296148449.1571751202" rel=""><span class="txt">Configure</span></a> <a class="d-button cta " href="https://www.ducati.com/au/en/bikes/supersport/supersport-950" rel=""><span class="txt">Discover more</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="https://www.ducati.com/au/en/bikes/supersport/supersport-950" class=""><span class="new">new</span> 950 S
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/6xHmWGo24HLoZAEwrl2uxZ/d4c5e4099cec644d6c7feb10350c1dc4/Model-Menu-MY21-SuperSport-950S-Artic-White.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">Supersport 950 S</div>
                                                                                    <div class="txt "></div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                                    110 hp
                                                                </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    93 Nm
                                                                </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    184 kg 
                                                                </strong> <span>Dry weight</span> </li>
                                                                                    </ul>
                                                                                    <div class="price"> <strong>Suggested Ride Away Price From $21,850  AUD<br />Suggested Retail Price From $22,644 NZD</strong> <a href="#price-info" rel="modal:open" class="_infocircle">i</a> </div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta " href="https://configurator.ducati.com/bikes/au/en/supersport/supersport-950-s?_ga&#61;2.199606190.1618801984.1606131394-296148449.1571751202" rel=""><span class="txt">Configure </span></a> <a class="d-button cta " href="https://www.ducati.com/au/en/bikes/supersport/supersport-950" rel=""><span class="txt">Discover more</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="link">
                                                            <a href="javascript:void(0)">
                                                                <div class="family"> Superleggera V4 </div>
                                                                <div class="wrapper-thumb"> <img class="thumb lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/2cYT40vb5PMxCAyjIWB6W9/354ae7331e9746e021c51ad109cbda43/Thumb-menu-Superleggera-V4-S.png" alt=""> </div>
                                                            </a>
                                                            <div class="menu-models_lv2">
                                                                <ul class="links" data-js-shortcutnav-lv2>
                                                                    <div class="mobileclose" data-js-mobileclose>
                                                                        <div>
                                                                            <svg class="icon icon--arrow-small-left" viewBox="0 0 12 22">
                                                                                <use xlink:href="#arrow-small-left"></use>
                                                                            </svg>
                                                                        </div> <span>Superleggera V4 </span> </div>
                                                                    <li class="link -active "> <a href="/au/en/bikes/panigale/superleggera-v4" class=""><span class="new">new</span> Superleggera V4 
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/44VVijspCKvE6idM0PKlyi/6f095c98e8c66b4d27d2c56d2fdce0f5/Model-Menu-MY20-Superleggera-V4.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title ">Superleggera V4</div>
                                                                                    <div class="txt "></div>
                                                                                    <ul class="table">
                                                                                        <li class="cell"> <strong>
                                                                    234 hp with full racing exhaust
                                                                </strong> <span>Power</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    87.7 lb-ft with full racing exhaust
                                                                </strong> <span>Torque</span> </li>
                                                                                        <li class="cell"> <strong>
                                                                    152.2 kg with racing kit
                                                                </strong> <span>Dry Weight</span> </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button cta " href="/au/en/bikes/panigale/superleggera-v4" rel=""><span class="txt">Discover More</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="link -scrambler ">
                                                            <a href="javascript:void(0)">
                                                                <svg class="icon icon--logo-scrambler" viewBox="0 0 80 29">
                                                                    <use xlink:href="#logo-scrambler"></use>
                                                                </svg>
                                                                <div class="wrapper-thumb"> <img class="thumb lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/54kv6iMpyHuG4UZEtYUOSH/894a745897279fe0cb9d7b7dcdc8d922/Thumb-menu-SCR-1100-SportPro.png" alt=""> </div>
                                                            </a>
                                                            <div class="menu-models_lv2">
                                                                <ul class="links" data-js-shortcutnav-lv2>
                                                                    <div class="mobileclose" data-js-mobileclose>
                                                                        <div>
                                                                            <svg class="icon icon--arrow-small-left" viewBox="0 0 12 22">
                                                                                <use xlink:href="#arrow-small-left"></use>
                                                                            </svg>
                                                                        </div> <span>SCRAMBLER</span> </div>
                                                                    <li class="link -active "> <a href="https://scramblerducati.com/en/bike/1100-sport-pro" class="">1100 Sport Pro
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/3fMfypAewSUttp4MuC792u/0b45842ee45f7074bec06de0859d86ef/Model-Menu-MY20-1100-SportPro.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title  -scrambler ">1100 Sport Pro</div>
                                                                                    <div class="txt  -scrambler "></div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button cta  -scrambler-yellow " href="https://scramblerducati.com/en/bike/1100-sport-pro" rel=""><span class="txt">Discover</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="https://scramblerducati.com/en/bike/1100-pro" class="">1100 Pro
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/67nehJ8ZxGFWM0lCyyAmPE/04e6f5c3d5a377667c862b5a97023c01/Model-Menu-MY20-1100-Pro-01.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title  -scrambler ">1100 Pro</div>
                                                                                    <div class="txt  -scrambler "></div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button cta  -scrambler-yellow " href="https://scramblerducati.com/en/bike/1100-pro" rel=""><span class="txt">Discover</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="https://scramblerducati.com/bike/1100-dark-pro" class=""><span class="new">new</span> 1100 Dark Pro
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/1rygWxPWHjKYUwbNEzN0CH/83ea1c53ff71c0cc487a80e6d1743c4b/SCR-1100-Dark-Pro-01-model-menu-780x430.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title  -scrambler "></div>
                                                                                    <div class="txt  -scrambler "></div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button cta  -scrambler-yellow " href="https://scramblerducati.com/bike/1100-dark-pro" rel=""><span class="txt">Discover</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="https://scramblerducati.com/bike/nightshift/?_ga&#61;2.260543051.731440834.1605085206-296148449.1571751202" class=""><span class="new">new</span> Nightshift
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/t9HADJlHCAaPYU3aV8ejJ/fe748d21aaf3169d6c3235bea1795ee3/Model-Menu-MY21-Nightshift.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title  -scrambler ">Nightshift</div>
                                                                                    <div class="txt  -scrambler "></div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button cta  -scrambler-yellow " href="https://scramblerducati.com/bike/nightshift/?_ga&#61;2.260543051.731440834.1605085206-296148449.1571751202" rel=""><span class="txt">Discover</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="https://scramblerducati.com/bike/fullthrottle" class="">Full Throttle
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/5zGnrDv1FPLoLe1aZfk3dk/652e03129ff9f2e2a8f597c2ec7aaadb/Model-Menu-MY20-Full-Throttle.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title  -scrambler ">Full Throttle</div>
                                                                                    <div class="txt  -scrambler "></div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta  -scrambler-black " href="https://configurator.scramblerducati.com/bikes/au/en/scrambler/full-throttle/3297621" rel=""><span class="txt">Configure</span></a> <a class="d-button cta  -scrambler-yellow " href="https://scramblerducati.com/bike/fullthrottle" rel=""><span class="txt">Discover</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="https://scramblerducati.com/bike/caferacer" class="">Café Racer
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/7ofGKdMuaLYcv3iHo7zyvc/77975ecac9d7e7b920cd5faa530ae166/Model-Menu-MY20-Cafe-Racer.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title  -scrambler ">Café Racer</div>
                                                                                    <div class="txt  -scrambler "></div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta  -scrambler-black " href="https://configurator.scramblerducati.com/bikes/au/en/scrambler/cafe-racer/3295821" rel=""><span class="txt">Configure</span></a> <a class="d-button cta  -scrambler-yellow " href="https://scramblerducati.com/bike/caferacer" rel=""><span class="txt">Discover</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="https://scramblerducati.com/bike/desertsled" class=""><span class="new">new</span> Desert Sled
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/4mVEMBXXJc1FFSfQAFMzKK/443da1cd4e819ae1c26f511333557f47/Model-Menu-MY21-Desert-Sled-Blue.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title  -scrambler ">Desert Sled</div>
                                                                                    <div class="txt  -scrambler "></div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta  -scrambler-black " href="http://configurator.scramblerducati.com/bikes/it/it/scrambler/desert-sled" rel=""><span class="txt">Configure</span></a> <a class="d-button cta  -scrambler-yellow " href="https://scramblerducati.com/bike/desertsled" rel=""><span class="txt">Discover</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="https://scramblerducati.com/ww/bike/icon" class=""><span class="new">new</span> Icon
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/3a5pZBm9NWFcyZigYrkZ5e/40ff70803ed511200c6de46814ab875a/Model-Menu-MY21-Icon-Red.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title  -scrambler ">Icon</div>
                                                                                    <div class="txt  -scrambler "></div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button -ghost-grey cta  -scrambler-black " href="https://configurator.scramblerducati.com/bikes/au/en/scrambler/icon/3295834" rel=""><span class="txt">Configure</span></a> <a class="d-button cta  -scrambler-yellow " href="https://scramblerducati.com/ww/bike/icon" rel=""><span class="txt">Discover</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="link"> <a href="https://scramblerducati.com/en/bike/icondark" class=""> Icon Dark
                                    </a>
                                                                        <div class="model-sheet">
                                                                            <div class="imgwrap"> <img class="img lazyload" data-src="https://images.ctfassets.net/x7j9qwvpvr5s/4NwUpGxVzeMtcjoY8pzsX/159f8a87802c23c09265868c32a4a44e/Model-Menu-MY20-Icon-Black.png" alt=""> </div>
                                                                            <div class="content">
                                                                                <div class="wrap">
                                                                                    <div class="title  -scrambler "> Icon Dark</div>
                                                                                    <div class="txt  -scrambler "></div>
                                                                                </div>
                                                                                <div class="ctas"> <a class="d-button cta  -scrambler-yellow " href="https://scramblerducati.com/en/bike/icondark" rel=""><span class="txt">Discover</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <!-- Add Scroll Bar -->
                                                        <div class="swiper-scrollbar"></div>
                                                    </ul>
                                                </div>
                                            </section>
                                        </li>
                                        <li class="link "> <a href="javascript:void(0)" data-js-shortcutnav class="models">EXPERIENCE <span class="triangle">
    <svg class="icon icon--triangle" viewBox="0 0 8 8">
      <use xlink:href="#triangle"></use>
    </svg></span></a>
                                            <div class="level-two" data-js-shortcutnav-wrap>
                                                <div class="scroll"> <a href="javascript:void(0)" class="back-navmobile" data-js-backnavmobile><span class="triangle">
    <svg class="icon icon--triangle" viewBox="0 0 8 8">
      <use xlink:href="#triangle"></use>
    </svg></span></a>
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
                                        </li>
                                        <li class="link  -mobilewasteful "> <a href="https://www.ducati.com/au/en/motorcycle-promotions">Special Offers </a> </li>
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
                                        <li class="link  -mobilewasteful "><a href="https://www.ducati.com/au/en/news">News</a></li>
                                        <li class="link "><a href="https://contact.ducati.com/au/en/light/contact/test-ride" target="_blank">Test Ride</a></li>
                                        <li class="link "><a href="https://www.ducati.com/au/en/dealers" target="_blank">Dealer Locator</a></li>
                                        <li class="link shortcutmobile"><a href="javascript:void(0)" data-js-shortcutnav data-js-shortcutnav-target="0"><span class="open">MODELS </span><span class="close">MODELS </span></a></li>
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