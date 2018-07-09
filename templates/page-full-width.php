<?php
/*
Template Name: Page - Full-width
*/
?>
<?php get_header();?>
<div class="grid-container page-left-sidebar-wrap">
	<div class="grid-x grid-margin-x align-top"> 
        <div class="cell small-12">
        	<?php get_template_part('includes/content'); ?>
        	<?php get_template_part('includes/content-type-flex'); ?>
        </div>
    </div>
</div>
<?php get_footer();?>