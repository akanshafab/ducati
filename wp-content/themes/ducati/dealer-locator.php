<?php 
   /* Template Name: Dealer Locator Template */ 
    get_header();
?>
<div class="dealer-search-page" data-js-dealer-locator>
	<div class="d-dealerlocator-search">
		<div class="d-loader">
			<div class="spinner"></div>
		</div>
		<div class="body">
			<div class="search">
				<div class="scroller">
					<div class="form">
						<div class="d-utility-bar">
							<ul class="breadcrumbs">
								<li class=""> <span>Search Dealers</span> </li>
							</ul>
						</div>
						<div class="d-title-full">
							<h1 class="title -with-subtext">Insert the name of the location or the dealer you are looking for</h1>
							<p class="subtitle"> </p>
						</div>
						<div class="d-input-search" data-js-quicksearch>
							<input type="text" name="quicksearch" value="" placeholder="Search" autocomplete="off">
							<div class="quickresults">
								<ul class="resultlist"> </ul>
							</div>
						</div>
						<div class="filterswrap">
							<label class="label"></label>
							<ul class="filters">
								<li> <span class="d-input-checkbox">
    <input type="checkbox" id="APPAREL"  name="APPAREL"  value="ducati_store" >
    <label class="label" for="APPAREL">
        <span class="checkbox-icon">
    <svg class="icon icon--check" viewBox="0 0 14 11">
      <use xlink:href="#check"></use>
    </svg></span> <span class="label-text">Apparel and merchandise</span> </label>
									</span>
									</a>
								</li>
								<li> <span class="d-input-checkbox">
    <input type="checkbox" id="SCRRANGE"  name="SCRRANGE"  value="ducati_store" >
    <label class="label" for="SCRRANGE">
        <span class="checkbox-icon">
    <svg class="icon icon--check" viewBox="0 0 14 11">
      <use xlink:href="#check"></use>
    </svg></span> <span class="label-text">Scrambler Range</span> </label>
									</span>
									</a>
								</li>
								<li> <span class="d-input-checkbox">
    <input type="checkbox" id="MKT_SRV"  name="MKT_SRV"  value="ducati_store" >
    <label class="label" for="MKT_SRV">
        <span class="checkbox-icon">
    <svg class="icon icon--check" viewBox="0 0 14 11">
      <use xlink:href="#check"></use>
    </svg></span> <span class="label-text">Master Tech Service</span> </label>
									</span>
									</a>
								</li>
								<li> <span class="d-input-checkbox">
    <input type="checkbox" id="SERVICE"  name="SERVICE"  value="ducati_store" >
    <label class="label" for="SERVICE">
        <span class="checkbox-icon">
    <svg class="icon icon--check" viewBox="0 0 14 11">
      <use xlink:href="#check"></use>
    </svg></span> <span class="label-text">Service Authorized</span> </label>
									</span>
									</a>
								</li>
								<li> <span class="d-input-checkbox">
    <input type="checkbox" id="ACCESSORIES"  name="ACCESSORIES"  value="ducati_store" >
    <label class="label" for="ACCESSORIES">
        <span class="checkbox-icon">
    <svg class="icon icon--check" viewBox="0 0 14 11">
      <use xlink:href="#check"></use>
    </svg></span> <span class="label-text">Accessories</span> </label>
									</span>
									</a>
								</li>
								<li> <span class="d-input-checkbox">
    <input type="checkbox" id="DEMO"  name="DEMO"  value="ducati_store" >
    <label class="label" for="DEMO">
        <span class="checkbox-icon">
    <svg class="icon icon--check" viewBox="0 0 14 11">
      <use xlink:href="#check"></use>
    </svg></span> <span class="label-text">Demo Bikes Available</span> </label>
									</span>
									</a>
								</li>
								<li> <span class="d-input-checkbox">
    <input type="checkbox" id="AUTHORIZED"  name="AUTHORIZED"  value="ducati_store" >
    <label class="label" for="AUTHORIZED">
        <span class="checkbox-icon">
    <svg class="icon icon--check" viewBox="0 0 14 11">
      <use xlink:href="#check"></use>
    </svg></span> <span class="label-text">Bike Sales</span> </label>
									</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="resultswrap">
						<div class="results"></div>
					</div>
					<div class="loadmore">
						<button class="d-button" type="submit"> <span class="txt">Load more</span> </button>
					</div>
				</div>
			</div>
			<div class="map"></div>
		</div>
	</div>
	<div id="dealerlocator-searchwrap" style="display: none;"></div>
</div>
<?php 
	get_footer();
?>