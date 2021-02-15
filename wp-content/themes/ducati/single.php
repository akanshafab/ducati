<?php get_header(); ?>
	<div class="page-wrapper">
		<div class="page-internal-wrapper">

			<div class="d-editor-text -wide _module-space-bottom">
    			<div class="body">
    				<div class="content">
		                <?php
				      		if(have_posts()){
					           while(have_posts()){
					               the_post();
					              // the_content();
					               get_template_part('template-parts/content','article');
					           }
					       }
					    ?>
        			</div>
    			</div>
			</div>
		</div>
	</div>
<?php 
get_footer();
?>
