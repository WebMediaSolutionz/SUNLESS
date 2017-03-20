<?php include( 'partials/header.php' ); ?>

<!-- CONTENT SECTION -->
<div id="page">
	<!-- start content -->
	<div id="content">
		
            <table style="width: 100%; padding: 0px; margin: 0px; border-collapse: collapse" class="layout_2-column-right sys_layout">
    
        <tbody><tr id="layout_row1">
            <td id="sys_region_2" style="margin:0px; padding:5px; vertical-align:top; line-height:normal; min-width:100px" class="zone_left" width="30%"><div id="I41" style="display:block;clear: both;text-align:center;" class="Image_Default"><img id="I41_img" src="<?php echo bloginfo('stylesheet_directory'); ?>/img/leftBar2.jpg" style="width:; border:none;"></div></td>
            <td><div style="font-size:0px; width:5px"></div></td>
            <td id="sys_region_1" style="margin:0px; padding:5px; vertical-align:top; line-height:normal; min-width:100px" class="zone_right" width="70%">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; endif; ?>

</div><div id="I156" style="display:block;clear: both;margin:10px 10px 10px 10px;" class="Horizontal_Line_Default">    <div style="border-bottom-width:2px;border-bottom-style:solid;border-bottom-color:#660000;font-size:0;padding:0;margin:0;height:0;line-height:0;"></div>
</div><div id="I225" style="display:block;clear: both;margin:10px 10px 10px 10px;" class="Panel_Default">
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