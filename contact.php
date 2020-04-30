<?php
/************
 * Template Name: Contact Us
 ***********/
get_header(); ?>



<section class="inner-page-heading">
	<div class="container">
    	<div class="col-md-12">
        	<div class="inner-heading">
                <h2><?php the_title();?></h2>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li class="divide">|</li>
                  <li><a href="#"><?php the_title();?></a></li>
                </ul>
            </div>
            <!--inner-heading ends....	-->
        </div>
        <!--col-md-12 ends....-->
    </div>	
    <!--container ends....-->
</section>
<!--inner-page-heading ends....-->


<section class="inner-page-content">
	<div class="container">
    	<div class="col-md-12">
                	<!--contact starts.....-->
                    <!--contact starts...--> 
                        <div class="contact2">
                            <div class="col-md-6 col-sm-6">
                            	<div class="row">
                                <div class="contact-book">
                                	<?php echo of_get_option('c2-c','no entry');?>
                                </div>
                                <div class="contact_map">
                                	<?php echo of_get_option('map','no entry');?>
                                </div>
                                </div>
                                <!--row ends....-->
                            </div>
                            <!--col-md-6 ends...-->
                            <div class="col-md-6 col-sm-6">
                              <div class="form_area_inner">
                                <h2><b>Your Enquiry</b></h2>
                              	<?php echo do_shortcode('[contact-form-7 id="9" title="Contact form 1"]');?>
                       
                            </div>
                         </div>
                         <!--col-md-6 ends...-->
                        </div>
                        <!--contact ends...-->
                </div>
                <!--col-md-12 ends....-->
        </div>
</section>

<!--inner page content ends........-->


<?php get_footer(); ?>











                               <
