<?php 
   /* Template Name: Privacy Template */ 
?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" class="no-js">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Privacy GDPR</title>
	<meta name="description" content="Privacy GDPR">
	<link rel="canonical" href="https://www.ducati.com/au/en/home/privacy">
	<link rel="alternate" hreflang="en-AU" href="https://www.ducati.com/au/en/home/privacy">
	<meta property="og:title" content="Privacy GDPR">
	<meta property="og:description" content="Privacy GDPR">
	<meta property="og:type" content="article">
	<meta property="og:url" content="https://www.ducati.com/au/en/home/privacy">
	<meta property="og:image" content="">
	<meta property="og:image:width" content="">
	<meta property="og:image:height" content="">
	<meta property="og:locale" content="au_EN">
	<meta property="og:site_name" content="">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@DucatiMotor">
	<meta name="twitter:title" content="Privacy GDPR">
	<meta name="twitter:description" content="Privacy GDPR">
	<meta name="twitter:image" content="">
	<meta name="twitter:url" content="https://www.ducati.com/au/en/home/privacy">
	<link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri()."/style.css";?>"/>
</head>
	<body>
		<div class="page-wrapper">
			<div class="page-internal-wrapper">
				<div class="d-header-editoriale">
				    <div class="body">
				        <div class="content">
							<div class="d-utility-bar">
							</div>
							<h1 class="title">Privacy notice for the processing of personal data</h1>
							<div class="subtitle">
							    In accordance with the provisions of the General Data Protection Regulation no. 679/2016 (&#34;GDPR&#34;) 
							</div>
						</div>
				    </div>
				</div>
				<div class="d-editor-text">
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
