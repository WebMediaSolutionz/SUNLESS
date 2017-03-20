<?php include( 'partials/header.php' ); ?>

<!-- CONTENT SECTION -->
<div id="page">
	<!-- start content -->
	<div id="content">
		
            <table style="width: 100%; padding: 0px; margin: 0px; border-collapse: collapse" class="layout_2-column-right sys_layout">
    
        <tbody><tr id="layout_row1">
            <td id="sys_region_2" style="margin:0px; padding:5px; vertical-align:top; line-height:normal; min-width:100px" class="zone_left" width="30%"><div id="I43" style="display:block;clear: both;text-align:center;" class="Image_Default"><img id="I43_img" src="<?php echo bloginfo('stylesheet_directory'); ?>/img/leftBar.jpg" style="width:; border:none;"></div></td>
            <td><div style="font-size:0px; width:5px"></div></td>
            <td id="sys_region_1" style="margin:0px; padding:5px; vertical-align:top; line-height:normal; min-width:100px" class="zone_right" width="70%">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; endif; ?>
            
    <?php include( 'partials/bottom_section.php' ); ?>
    </td>
        </tr>
    </tbody></table>

		
	</div>
	<!-- end content -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- END CONTENT SECTION -->

<?php include( 'partials/footer.php' ); ?>