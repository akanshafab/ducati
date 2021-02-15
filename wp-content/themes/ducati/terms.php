<?php
/* Template Name: Terms*/
?>

<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" class="no-js">
	<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Terms</title>
<meta name="description" content="Terms">
<link rel="canonical" href="https://www.ducati.com/ww/en/home/terms">
<link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri()."/style.css";?>"/>
<link rel="alternate" hreflang="en" href="https://www.ducati.com/ww/en/home/terms">


<meta property="og:title" content="Terms">
<meta property="og:description" content="Terms">
<meta property="og:type" content="article">
<meta property="og:url" content="https://www.ducati.com/ww/en/home/terms">
<meta property="og:image" content="">
<meta property="og:image:width" content="">
<meta property="og:image:height" content="">
<meta property="og:locale" content="ww_EN">
<meta property="og:site_name" content="">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@DucatiMotor">
<meta name="twitter:title" content="Terms">
<meta name="twitter:description" content="Terms">
<meta name="twitter:image" content="">
<meta name="twitter:url" content="https://www.ducati.com/ww/en/home/terms">
</head>
<body>
	<div class="page-wrapper">
		<div class="page-internal-wrapper">
			<div class="d-header-editoriale">
			    <div class="body">
			        <div class="content">
						<div class="d-utility-bar"></div>
						<h1 class="title">Use of the site - terms and conditions</h1>
						<div class="subtitle"></div>
					</div>
    			</div>
			</div>
			<div class="d-editor-text -wide _module-space-bottom">
    			<div class="body">
    				<div class="content">
		                <?php
				      		if(have_posts()){
					           while(have_posts()){
					               the_post();
					               the_content();
					           }
					       }
					    ?>
        			</div>
    			</div>
			</div>
		</div>
	</div>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		
</body>
</html>
