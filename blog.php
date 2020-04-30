<?php
/************
 *  This is Blog page main Template file *
 *  Template Name: Blog Template
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
    

<!--inner-page-heading ends....-->
<section class="inner-page-content">
	<div class="container">
    	<div class="col-md-12">
        	<div class="inner-content height">
            	 <?php
					$args = array(
					  'post_type' => 'post',
					  'orderby' => 'name',
					  'order' => 'DESC',	
					  );					  
					  $query = new WP_Query($args);
						if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
					     
			      ?>
                  <?php
     $feat_image3 = '';
                if (has_post_thumbnail( $post->ID ) ){ 
                $feat_image3 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
    }
    ?>
            
                        <div class="event-area-inner">
                        	<div class="col-md-4 col-sm-4">
                            	<div class="row">
                                    <div class="event-image-inner">
                                        <img src="<?php echo $feat_image3; ?>" alt="<?php the_title();?>">
                                    </div>
                                    <!--event-image-inner ends....-->
                                </div>
                                <!--row ends....-->
                            </div>
                            <!--col-md-4 ends....-->
                            
                            <div class="col-md-8 col-sm-8">
                            	<div class="row">
                                	<div class="event-left">
                                        <div class="event-title-inner">
                                            <a href="<?php the_permalink(); ?>"><h3><?php the_title();  ?></h3></a>
                                            <a href="<?php the_permalink(); ?>"><?php the_time('F jS, Y'); ?>/ Posted by <span><?php the_author(); ?></span></a>
                                        </div>
                                        <!--event-title-inner ends....-->
                                        
                                        <div class="event-content-inner">
                                            <p><?php echo substr(strip_tags($post->post_content), 0,400); ?></p>
                                        </div>
                                        <!--event-content-inner ends....-->
                                        
                                        <div class="event-link-inner">
                                            <a href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        </div>
                                        <!--event-link-inner ends....-->
                                        </div>
                                    <!--event-left ends....-->
                                </div>
                            <!--row ends....-->
                            </div>
                            <!--col-md-4 ends....-->
                        </div>
                        <!--event-area-inner ends.....-->
                        <?php endwhile; 
						 		wp_reset_postdata();?>	
					 		  <?php endif; ?> 
                       
                        
            </div>
            <!--inner-heading ends....	-->
        </div>
        <!--col-md-12 ends....-->
    </div>	
    <!--container ends....-->
</section>
<!--inner-page-heading ends....-->
        
        
        
<?php get_footer(); ?>