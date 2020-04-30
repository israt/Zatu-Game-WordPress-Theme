<?php
/************
 * Template Name:Default
 ***********/
get_header(); ?>

<section class="inner-page-heading">
	<div class="container">
    	<div class="col-md-12">
        	<div class="inner-heading">
                <h2><?php the_title();?></h2>
                <ul>
                  <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
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
        	<div class="inner-content height">
                <?php
						// Start the loop.
						while ( have_posts() ) : the_post();
						?>
                
                		<?php the_content(); ?>  
                       
                        <?php
						// End the loop.
						endwhile;
						?>
            </div>
            <!--inner-heading ends....	-->
        </div>
        <!--col-md-12 ends....-->
    </div>	
    <!--container ends....-->
</section>
<!--inner-page-heading ends....-->

<?php get_footer(); ?>