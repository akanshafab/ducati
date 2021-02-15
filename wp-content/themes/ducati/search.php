<?php get_header(); ?>
	<div class="page-wrapper">
		<div class="page-internal-wrapper">
			<div class="d-header-editoriale">
			    <div class="body">
			        <div class="content">
						<div class="d-utility-bar"></div>
						<h1 class="title">Post page</h1>
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
					              // the_content();
					               get_template_part('template-parts/content','archive');
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
