<?php include( 'partials/header.php' ); ?>

<!-- CONTENT SECTION -->
<div id="page">
	<!-- start content -->
	<div id="content">
		<table style="width: 100%; padding: 0px; margin: 0px; border-collapse: collapse" class="layout_2-column-right sys_layout">
			<tbody>
				<tr id="layout_row1">
    				<td id="sys_region_2" style="margin:0px; padding:5px; vertical-align:top; line-height:normal; min-width:100px" class="zone_left" width="30%">
    					<div id="I122" style="display:block;clear: both;" class="Text_Default">
        					<div id="I122_sys_txt" class="sys_txt" style="margin:0px; padding:0px; color:; font:; background-color:;">
                                <p>
                                    <a href="<?php echo yelp_link; ?>">
                                        <img src="<?php echo bloginfo('stylesheet_directory'); ?>/img/yelp42f7.png" style="margin: 4px; padding: 0px; ">&nbsp;
                                    </a>
                                    <a href="<?php echo fb_link; ?>">
                                        <img src="<?php echo bloginfo('stylesheet_directory'); ?>/img/facebook-icon-_01d37a.jpg" style="margin: 4px; padding: 0px; ">
                                    </a>
                                    <a href="<?php echo linked_in_link; ?>">
                                        &nbsp;<img src="<?php echo bloginfo('stylesheet_directory'); ?>/img/thb4a8.jpg" style="margin: 4px; padding: 0px; ">
                                    </a>
                                </p>
                                <p>
                                    <b>
                                        <font size="4" color="#330022">Sunless Tanning and Spa</font>
                                    </b>
                                </p>
                                <p>
                                    <b>
                                        <font size="4" color="#330022">Toronto, ON</font>
                                    </b>
                                </p>
                                <p>
                                    <font size="4" color="#330022">
                                        <b>
                                            <span style="font-family: arial, 'Lucida Grande', 'Bitstream Vera Sans', verdana, sans-serif; line-height: 18px; text-align: left; "><?php echo phone; ?></span>&nbsp;
                                        </b>
                                    </font>
                                </p>
                                <p>
                                    <font size="4" color="#330022">
                                        <b><a href="mailto:<?php echo email; ?>"><?php echo email; ?></a></b>
                                    </font>
                                </p>
                                <p>
                                    <b>
                                        <font size="4">
                                            <br>
                                        </font>
                                    </b>
                                </p>
                            </div>
        				</div>
                        <div id="I14" style="display:block;clear: both;text-align:left;margin:0 0 0 0;" class="Image_Default">
                            <a href="<?php echo get_page_link(8); ?>">
                                <!-- TODO: find real picture -->
                                <img id="I14_img" src="<?php echo bloginfo('stylesheet_directory'); ?>/img/kelly.htm" style="width:236px; border:none;">
                            </a>
                        </div>
                        <div id="I100" style="display:block;clear: both;" class="Text_Default">
    					   <div id="I100_sys_txt" class="sys_txt" style="margin:0px; padding:0px; color:; font:; background-color:;">
                                <p>
                                    <br>
                                </p>
                            </div>
    					</div>
                        <div id="I98" style="display:block;clear: both;text-align:left;margin:0 0 0 0;" class="Image_Default">
                            <a href="<?php echo get_page_link(12); ?>">
                                <!-- TODO: find real picture -->
                                <img id="I98_img" src="<?php echo bloginfo('stylesheet_directory'); ?>/img/Picture%25201.htm" style="width:234px; border:none;">
                            </a>
                        </div>
                        <div id="I113" style="display:block;clear: both;" class="Text_Default">
    					   <div id="I113_sys_txt" class="sys_txt" style="margin:0px; padding:0px; color:; font:; background-color:;">
                                <p style="text-align: left;">
                                    <font size="3" color="#330000" face="Comic Sans MS, Comic Sans">
                                        Best of Toronto: Sunless Tanning and Spa delivers "smooth, streak-free color in less than 15 minutes"&nbsp;
                                    </font>
                                </p>
                                <p style="text-align: left;"></p>
                            </div>
    					</div>
    				</td>
    				<td>
    					<div style="font-size:0px; width:5px"></div>
    				</td>
    				<td id="sys_region_1" style="margin:0px; padding:5px; vertical-align:top; line-height:normal; min-width:100px" class="zone_right" width="70%">

                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <?php the_content(); ?>
                            </article>
                        <?php endwhile; endif; ?>

                        <div id="I218" style="display:block;clear: both;margin:15px 15px 15px 15px;" class="Horizontal_Line_Default">
                            <div style="border-bottom-width:3px;border-bottom-style:solid;border-bottom-color:#660000;font-size:0;padding:0;margin:0;height:0;line-height:0;"></div>
        				</div>
                        <div id="I227" style="display:block;clear: both;margin:10px 10px 10px 10px;" class="Panel_Default"></div>
        				<?php include( 'partials/bottom_section.php' ); ?>
                    </td>
				</tr>
			</tbody>
		</table>
	</div>
	<!-- end content -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- END CONTENT SECTION -->

<?php include( 'partials/footer.php' ); ?>