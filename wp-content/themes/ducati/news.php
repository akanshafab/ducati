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
                        <form action="#">
                            <div class="wrapper-select">
                                <div class="d-select -default -pristine" data-js-select data-js-quickreset>
                                    <select name="categories">
                                        <option value=""> Category </option>
                                    </select>
                                </div>
                                <div class="d-select -default -pristine" data-js-select data-js-quickreset>
                                    <select name="subcategories">
                                        <option value=""> Subcategory </option>
                                    </select>
                                </div>
                                <div class="d-select -default -pristine" data-js-select data-js-quickreset>
                                    <select name="year">
                                        <option value=""> Year </option>
                                    </select>
                                </div>
                                <div class="d-select -default -pristine" data-js-select data-js-quickreset>
                                    <select name="month">
                                        <option value=""> Month </option>
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
        <div class="d-loader -negative">
            <div class="spinner"></div>
        </div>
        <div class="content">
            <div class="column">
                <div class="d-card-imgtext">
                    <a href="/au/en/news/private-test-at-jerez-de-la-frontera-spain-cancelled-due-to-rain" class='picturewrap'>
                        <picture class="picture">
                            <source data-srcset="images/web_432_230.jpg" media="(min-width: 739px)">
                            <source data-srcset="images/web_300_300.jpg" media="(min-width: 0px)"> <img class="lazyload" data-srcset="images/web_300_300.jpg" data-object-fit="cover"> </picture>
                    </a>
                    <div class="content"> <a href="/au/en/news/private-test-at-jerez-de-la-frontera-spain-cancelled-due-to-rain" class="title">Racing, Superbike</a> <a href="/au/en/news/private-test-at-jerez-de-la-frontera-spain-cancelled-due-to-rain" class="text">Private test at Jerez de la Frontera (Spain) cancelled due to rain </a>
                        <div class="footer">
                            <div class="date">21 Jan 2021</div>
                            <div class="icons"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="d-card-imgtext">
                    <a href="/au/en/news/production-of-the-new-supersport-950-gets-underway-in-borgo-panigale" class='picturewrap'>
                        <picture class="picture">
                            <source data-srcset="images/SOP-SS-950-thumb-img-medium-432x230.png" media="(min-width: 739px)">
                            <source data-srcset="images/SOP-SS-950-grid-imgtext-300x300.png" media="(min-width: 0px)"> <img class="lazyload" data-srcset="images/SOP-SS-950-grid-imgtext-300x300.png" data-object-fit="cover"> </picture>
                    </a>
                    <div class="content"> <a href="/au/en/news/production-of-the-new-supersport-950-gets-underway-in-borgo-panigale" class="title">Bikes, SuperSport</a> <a href="/au/en/news/production-of-the-new-supersport-950-gets-underway-in-borgo-panigale" class="text">Production of the new SuperSport 950 gets underway in Borgo Panigale </a>
                        <div class="footer">
                            <div class="date">21 Jan 2021</div>
                            <div class="icons"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="d-card-imgtext">
                    <a href="/au/en/news/ducati-in-motogp-until-2026" class='picturewrap'>
                        <picture class="picture">
                            <source data-srcset="images/CDCE-432x230.jpg" media="(min-width: 739px)">
                            <source data-srcset="images/CDCE-300x300.jpg" media="(min-width: 0px)"> <img class="lazyload" data-srcset="images/CDCE-300x300.jpg" data-object-fit="cover"> </picture>
                    </a>
                    <div class="content"> <a href="/au/en/news/ducati-in-motogp-until-2026" class="title">Racing, MotoGP, Racing</a> <a href="/au/en/news/ducati-in-motogp-until-2026" class="text">Ducati in MotoGP until 2026 </a>
                        <div class="footer">
                            <div class="date">20 Jan 2021</div>
                            <div class="icons"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="d-card-imgtext">
                    <a href="/au/en/news/ducati-team-2021-presentation" class='picturewrap'>
                        <picture class="picture">
                            <source data-srcset="images/Save-the-date-MGP21-thumb-img-medium-432x230.png" media="(min-width: 739px)">
                            <source data-srcset="images/Save-the-date-MGP21-grid-imgtext-300x300.png" media="(min-width: 0px)"> <img class="lazyload" data-srcset="images/Save-the-date-MGP21-grid-imgtext-300x300.png" data-object-fit="cover"> </picture>
                    </a>
                    <div class="content"> <a href="/au/en/news/ducati-team-2021-presentation" class="title">Racing, Racing</a> <a href="/au/en/news/ducati-team-2021-presentation" class="text">Ducati Team 2021 Presentation</a>
                        <div class="footer">
                            <div class="date">18 Jan 2021</div>
                            <div class="icons"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="d-card-imgtext">
                    <a href="/au/en/news/350-000-times-monster" class='picturewrap'>
                        <picture class="picture">
                            <source data-srcset="https://images.ctfassets.net/x7j9qwvpvr5s/3MxlCzNcXezEGDGNpG625M/f3b1f672c86e0e745f624c4f9ab264c5/350Kesima-Monster-thumb-img-medium-432x230.png" media="(min-width: 739px)">
                            <source data-srcset="images/350Kesima-Monster-grid-imgtext-300x300.png" media="(min-width: 0px)"> <img class="lazyload" data-srcset="images/350Kesima-Monster-grid-imgtext-300x300.png" data-object-fit="cover"> </picture>
                    </a>
                    <div class="content"> <a href="/au/en/news/350-000-times-monster" class="title">Bikes, Monster</a> <a href="/au/en/news/350-000-times-monster" class="text">350,000 times Monster</a>
                        <div class="footer">
                            <div class="date">15 Jan 2021</div>
                            <div class="icons"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="d-card-imgtext">
                    <a href="/au/en/news/ducati-ends-2020-in-strong-recovery-crowned-by-the-motogp-constructors-world-title" class='picturewrap'>
                        <picture class="picture">
                            <source data-srcset="images/Top-Employee-01-Thumb-img-Medium-432x230.jpg" media="(min-width: 739px)">
                            <source data-srcset="images/Top-Employee-01-Grid-imgtext-300x300.jpg" media="(min-width: 0px)"> <img class="lazyload" data-srcset="images/Top-Employee-01-Grid-imgtext-300x300.jpg" data-object-fit="cover"> </picture>
                    </a>
                    <div class="content"> <a href="/au/en/news/ducati-ends-2020-in-strong-recovery-crowned-by-the-motogp-constructors-world-title" class="title">Company, Corporate</a> <a href="/au/en/news/ducati-ends-2020-in-strong-recovery-crowned-by-the-motogp-constructors-world-title" class="text">Ducati ends 2020 in strong recovery, crowned by the MotoGP Constructors&#39; World Title </a>
                        <div class="footer">
                            <div class="date">13 Jan 2021</div>
                            <div class="icons"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="d-card-imgtext">
                    <a href="/au/en/news/the-multistrada-v4-unleashes-its-sporty-character-with-akrapovic-accessories" class='picturewrap'>
                        <picture class="picture">
                            <source data-srcset="images/Pacchetto_news_432x230.jpg" media="(min-width: 739px)">
                            <source data-srcset="images/Pacchetto_news_300x300.jpg" media="(min-width: 0px)"> <img class="lazyload" data-srcset="images/Pacchetto_news_300x300.jpg" data-object-fit="cover"> </picture>
                    </a>
                    <div class="content"> <a href="/au/en/news/the-multistrada-v4-unleashes-its-sporty-character-with-akrapovic-accessories" class="title">Equipment, Bikes, Accessories, Multistrada</a> <a href="/au/en/news/the-multistrada-v4-unleashes-its-sporty-character-with-akrapovic-accessories" class="text">The Multistrada V4 unleashes its sporty character with Akrapovic accessories</a>
                        <div class="footer">
                            <div class="date">18 Dec 2020</div>
                            <div class="icons"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="d-card-imgtext">
                    <a href="/au/en/news/the-new-2021-ducati-apparel-collection-is-now-available" class='picturewrap'>
                        <picture class="picture">
                            <source data-srcset="images/shooting-apparel-racing-performance-wear_AP11925-news-432-x-230-px.jpg" media="(min-width: 739px)">
                            <source data-srcset="images/shooting-apparel-racing-performance-wear_AP11925-news-300-x-300-px.jpg" media="(min-width: 0px)"> <img class="lazyload" data-srcset="images/shooting-apparel-racing-performance-wear_AP11925-news-300-x-300-px.jpg" data-object-fit="cover"> </picture>
                    </a>
                    <div class="content"> <a href="/au/en/news/the-new-2021-ducati-apparel-collection-is-now-available" class="title">Equipment, Apparel</a> <a href="/au/en/news/the-new-2021-ducati-apparel-collection-is-now-available" class="text">The new 2021 Ducati Apparel collection is now available</a>
                        <div class="footer">
                            <div class="date">15 Dec 2020</div>
                            <div class="icons"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="d-card-imgtext">
                    <a href="/au/en/news/light-compact-essential-and-fun-ducati-presents-the-new-monster" class='picturewrap'>
                        <picture class="picture">
                            <source data-srcset="images/NewMon_432x230.jpg" media="(min-width: 739px)">
                            <source data-srcset="images/NewMon_300x300.jpg" media="(min-width: 0px)"> <img class="lazyload" data-srcset="images/NewMon_300x300.jpg" data-object-fit="cover"> </picture>
                    </a>
                    <div class="content"> <a href="/au/en/news/light-compact-essential-and-fun-ducati-presents-the-new-monster" class="title">Bikes, Monster</a> <a href="/au/en/news/light-compact-essential-and-fun-ducati-presents-the-new-monster" class="text">Light, compact, essential and fun: Ducati presents the new Monster </a>
                        <div class="footer">
                            <div class="date">02 Dec 2020</div>
                            <div class="icons"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="d-card-imgtext">
                    <a href="/au/en/news/andrea-saveri-finishes-second-on-the-podium-in-race-1-at-silverstone-in-the-final-round-of-the-2020-motogp-esport-championship-while-he-is-fifth-in-race-2-at-valencia" class='picturewrap'>
                        <picture class="picture">
                            <source data-srcset="images/round-4-motogp-e-sport-1920x960.jpg" media="(min-width: 739px)">
                            <source data-srcset="images/round-4-motogp-e-sports-300x300.jpg" media="(min-width: 0px)"> <img class="lazyload" data-srcset="images/round-4-motogp-e-sports-300x300.jpg" data-object-fit="cover"> </picture>
                    </a>
                    <div class="content"> <a href="/au/en/news/andrea-saveri-finishes-second-on-the-podium-in-race-1-at-silverstone-in-the-final-round-of-the-2020-motogp-esport-championship-while-he-is-fifth-in-race-2-at-valencia" class="title">Racing</a> <a href="/au/en/news/andrea-saveri-finishes-second-on-the-podium-in-race-1-at-silverstone-in-the-final-round-of-the-2020-motogp-esport-championship-while-he-is-fifth-in-race-2-at-valencia" class="text">Andrea Saveri finishes second on the podium in Race 1 at Silverstone in the final round of the 2020 MotoGP eSport Championship, while he is fifth in Race 2 at Valencia</a>
                        <div class="footer">
                            <div class="date">27 Nov 2020</div>
                            <div class="icons"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="d-card-imgtext">
                    <a href="/au/en/news/ducati-corse-teams-up-with-amaro-montenegro-as-official-partner-for-motogp" class='picturewrap'>
                        <picture class="picture">
                            <source data-srcset="images/ducati-amaro-montenegro-432x230.jpg" media="(min-width: 739px)">
                            <source data-srcset="images/ducati-amaro-montenegro-300x300.jpg" media="(min-width: 0px)"> <img class="lazyload" data-srcset="images/ducati-amaro-montenegro-300x300.jpg" data-object-fit="cover"> </picture>
                    </a>
                    <div class="content"> <a href="/au/en/news/ducati-corse-teams-up-with-amaro-montenegro-as-official-partner-for-motogp" class="title">Company, Sponsor &amp; Partners</a> <a href="/au/en/news/ducati-corse-teams-up-with-amaro-montenegro-as-official-partner-for-motogp" class="text">Ducati Corse teams up with Amaro Montenegro as Official Partner for MotoGP </a>
                        <div class="footer">
                            <div class="date">26 Nov 2020</div>
                            <div class="icons"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="d-card-imgtext">
                    <a href="/au/en/news/ducati-presents-the-diavel-1260-lamborghini" class='picturewrap'>
                        <picture class="picture">
                            <source data-srcset="images/DiavLambo_432x230.jpg" media="(min-width: 739px)">
                            <source data-srcset="images/DiavLambo_300x300.jpg" media="(min-width: 0px)"> <img class="lazyload" data-srcset="images/DiavLambo_300x300.jpg" data-object-fit="cover"> </picture>
                    </a>
                    <div class="content"> <a href="/au/en/news/ducati-presents-the-diavel-1260-lamborghini" class="title">Bikes, Diavel</a> <a href="/au/en/news/ducati-presents-the-diavel-1260-lamborghini" class="text">Ducati presents the Diavel 1260 Lamborghini </a>
                        <div class="footer">
                            <div class="date">25 Nov 2020</div>
                            <div class="icons"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="d-card-imgtext">
                    <a href="/au/en/news/ducati-win-the-2020-motogp-constructors-world-championship" class='picturewrap'>
                        <picture class="picture">
                            <source data-srcset="images/662b968bf860ebab54148dcd2e9f2fe7/432x230.jpg" media="(min-width: 739px)">
                            <source data-srcset="images/300x300.jpg" media="(min-width: 0px)"> <img class="lazyload" data-srcset="images/300x300.jpg" data-object-fit="cover"> </picture>
                    </a>
                    <div class="content"> <a href="/au/en/news/ducati-win-the-2020-motogp-constructors-world-championship" class="title">Racing, MotoGP</a> <a href="/au/en/news/ducati-win-the-2020-motogp-constructors-world-championship" class="text">Ducati win the 2020 MotoGP Constructors World Championship</a>
                        <div class="footer">
                            <div class="date">22 Nov 2020</div>
                            <div class="icons"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="d-card-imgtext">
                    <a href="/au/en/news/portuguese-gp-qualifying" class='picturewrap'>
                        <picture class="picture">
                            <source data-srcset="images/01_dovizioso_R28_432x230.jpg" media="(min-width: 739px)">
                            <source data-srcset="images/01_dovizioso_R28_300x300.jpg" media="(min-width: 0px)"> <img class="lazyload" data-srcset="images/01_dovizioso_R28_300x300.jpg" data-object-fit="cover"> </picture>
                    </a>
                    <div class="content"> <a href="/au/en/news/portuguese-gp-qualifying" class="title">Racing, MotoGP</a> <a href="/au/en/news/portuguese-gp-qualifying" class="text">Fourth-row start for Andrea Dovizioso it the Portuguese GP after qualifying at Portimão in twelfth. Danilo Petrucci, in eighteenth, to start from the sixth row.</a>
                        <div class="footer">
                            <div class="date">21 Nov 2020</div>
                            <div class="icons"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="d-card-imgtext">
                    <a href="/au/en/news/ducati-global-dealer-conference-2020-held-digitally" class='picturewrap'>
                        <picture class="picture">
                            <source data-srcset="images/Dati-finanziari-03-thumb-img-medium-432x230.jpg" media="(min-width: 739px)">
                            <source data-srcset="images/Dati-finanziari-03-grid-imgtext-300x300.jpg" media="(min-width: 0px)"> <img class="lazyload" data-srcset="images/Dati-finanziari-03-grid-imgtext-300x300.jpg" data-object-fit="cover"> </picture>
                    </a>
                    <div class="content"> <a href="/au/en/news/ducati-global-dealer-conference-2020-held-digitally" class="title">Company, Corporate</a> <a href="/au/en/news/ducati-global-dealer-conference-2020-held-digitally" class="text">Ducati Global Dealer Conference 2020 held digitally </a>
                        <div class="footer">
                            <div class="date">20 Nov 2020</div>
                            <div class="icons"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta-wrap">
            <a class="d-button -hidden" id="load-more"> <span class="txt">Load more</span> </a>
        </div>
    </div>
</div>
<?php 
get_footer();
?>