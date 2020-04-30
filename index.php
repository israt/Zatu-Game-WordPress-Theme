<?php



/************



 *  This is Home page main Template file *



 *  Template Name: HomePage



 ***********/



get_header(); ?>

<!--section.banner-area starts...-->
        <section class="banner-area">
        	<div class="container">
            	<div class="col-md-12">
                    <!--carousel starts here.......-->
                    <ul class="bxslider">
                         <?php

					$args = array(

					'post_type' => 'slider',

					  'orderby' => 'name',

					  'order' => 'ASC',	

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
            	 <li>
                    <img src="<?php echo $feat_image3; ?>" alt="<?php the_title();  ?>">
                </li>
                
                <?php endwhile; 

						 wp_reset_postdata();?>	

					    <?php endif; ?>  
                     </ul>
                    <!--carousel ends here.......-->
                </div>
                <!--col-md-12 ends....-->
            </div>
            <!--container ends....-->
        </section>
        <!--section.banner-area ends...-->
        
        <section class="banner-bottom">
        	<div class="container">
            	<div class="col-md-6 col-sm-6">
                    <a href="<?php echo of_get_option('cl','no entry');?>">
						<?php echo of_get_option('cash','no entry');?>
                    </a>
                    <!--banner-left ends.....-->
                </div>
                <!--col-md-6 ends....-->
                
                <div class="col-md-6 col-sm-6">
                    <div class="banner-right">
                        <a href="#"><h2>Game Sale Store <i class="fa fa-arrow-right" aria-hidden="true"></i></h2></a>
                    </div>
                    <!--banner-right ends.....-->
                    <div class="client-logo">
                    	<?php
					$args = array(
					'post_type' => 'testi',
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
                        <div class="single-logo">
                        	<a href="#"><img src="<?php echo $feat_image3; ?>" alt="">	</a>
                        </div>
                        <!--single-logo ends....-->
                         <?php endwhile; 
						 		wp_reset_postdata();?>	
					 		  <?php endif; ?> 
                    </div>
                    <!--client-logo ends....-->
                </div>
                <!--col-md-6 ends....-->
            </div>
            <!--container ends...-->	
        </section>
        <!--banner-bottom ends.....-->
        
        <section class="games">
        	<div class="container">
            	<ul class="nav nav-tabs" id="myTab">
                  <li class="active"><a data-target="#home" data-toggle="tab">Best Seller</a></li>
                  <li><a data-target="#profile" data-toggle="tab">Feature Product</a></li>
                  <li><a data-target="#messages" data-toggle="tab">New Arrival</a></li>
                  <li><a data-target="#settings" data-toggle="tab">Clearance</a></li>
                </ul>
    
                <div class="tab-content">
                  <div class="tab-pane active" id="home">
                  	<div class="col-md-4 col-sm-4">
                        <div class="single-game-details">
                                <div class="single-game">
                                    <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/g1.jpg" alt=""></a>
                                </div>
                                <!--single-game ends....-->	
                                <div class="game-datails">
                                    <div class="game-title">
                                        <a href="#"><h2>Rossi</h2></a>	
                                    </div>
                                    <!--game-title ends...-->
                                    <div class="game-price">
                                        <p>$32.29</p>	
                                    </div>
                                    <!--game-price ends...-->
                                    
                                    <div class="game-buy">
                                        <ul>
                                          <li><a href="#">Buy Now</a></li>
                                          <li><a href="#">View Details <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                        </ul>	
                                    </div>
                                    <!--game-buy ends...-->
                                </div>
                                <!--game-datails ends....-->
                            </div>	
                            <!--single-game-datails ends....-->
                    </div>
                    <!--col-md-4 ends....-->
                    
                    <div class="col-md-4 col-sm-4">
                        <div class="single-game-details">
                                <div class="single-game">
                                    <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/g2.jpg" alt=""></a>
                                </div>
                                <!--single-game ends....-->	
                                <div class="game-datails">
                                    <div class="game-title">
                                        <a href="#"><h2>Rossi</h2></a>	
                                    </div>
                                    <!--game-title ends...-->
                                    <div class="game-price">
                                        <p>$32.29</p>	
                                    </div>
                                    <!--game-price ends...-->
                                    
                                    <div class="game-buy">
                                        <ul>
                                          <li><a href="#">Buy Now</a></li>
                                          <li><a href="#">View Details <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                        </ul>	
                                    </div>
                                    <!--game-buy ends...-->
                                </div>
                                <!--game-datails ends....-->
                            </div>	
                            <!--single-game-datails ends....-->
                    </div>
                    <!--col-md-4 ends....-->
                    
                    <div class="col-md-4 col-sm-4">
                        <div class="single-game-details">
                                <div class="single-game">
                                    <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/g3.jpg" alt=""></a>
                                </div>
                                <!--single-game ends....-->	
                                <div class="game-datails">
                                    <div class="game-title">
                                        <a href="#"><h2>Rossi</h2></a>	
                                    </div>
                                    <!--game-title ends...-->
                                    <div class="game-price">
                                        <p>$32.29</p>	
                                    </div>
                                    <!--game-price ends...-->
                                    
                                    <div class="game-buy">
                                        <ul>
                                          <li><a href="#">Buy Now</a></li>
                                          <li><a href="#">View Details <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                        </ul>	
                                    </div>
                                    <!--game-buy ends...-->
                                </div>
                                <!--game-datails ends....-->
                            </div>	
                            <!--single-game-datails ends....-->
                    </div>
                    <!--col-md-4 ends....-->
                    
                    <div class="col-md-4 col-sm-4">
                        <div class="single-game-details">
                                <div class="single-game">
                                    <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/g4.jpg" alt=""></a>
                                </div>
                                <!--single-game ends....-->	
                                <div class="game-datails">
                                    <div class="game-title">
                                        <a href="#"><h2>Rossi</h2></a>	
                                    </div>
                                    <!--game-title ends...-->
                                    <div class="game-price">
                                        <p>$32.29</p>	
                                    </div>
                                    <!--game-price ends...-->
                                    
                                    <div class="game-buy">
                                        <ul>
                                          <li><a href="#">Buy Now</a></li>
                                          <li><a href="#">View Details <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                        </ul>	
                                    </div>
                                    <!--game-buy ends...-->
                                </div>
                                <!--game-datails ends....-->
                            </div>	
                            <!--single-game-datails ends....-->
                    </div>
                    <!--col-md-4 ends....-->
                    
                    <div class="col-md-4 col-sm-4">
                        <div class="single-game-details">
                                <div class="single-game">
                                    <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/g5.jpg" alt=""></a>
                                </div>
                                <!--single-game ends....-->	
                                <div class="game-datails">
                                    <div class="game-title">
                                        <a href="#"><h2>Rossi</h2></a>	
                                    </div>
                                    <!--game-title ends...-->
                                    <div class="game-price">
                                        <p>$32.29</p>	
                                    </div>
                                    <!--game-price ends...-->
                                    
                                    <div class="game-buy">
                                        <ul>
                                          <li><a href="#">Buy Now</a></li>
                                          <li><a href="#">View Details <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                        </ul>	
                                    </div>
                                    <!--game-buy ends...-->
                                </div>
                                <!--game-datails ends....-->
                            </div>	
                            <!--single-game-datails ends....-->
                    </div>
                    <!--col-md-4 ends....-->
                    
                    <div class="col-md-4 col-sm-4">
                        <div class="single-game-details">
                                <div class="single-game">
                                    <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/g2.jpg" alt=""></a>
                                </div>
                                <!--single-game ends....-->	
                                <div class="game-datails">
                                    <div class="game-title">
                                        <a href="#"><h2>Rossi</h2></a>	
                                    </div>
                                    <!--game-title ends...-->
                                    <div class="game-price">
                                        <p>$32.29</p>	
                                    </div>
                                    <!--game-price ends...-->
                                    
                                    <div class="game-buy">
                                        <ul>
                                          <li><a href="#">Buy Now</a></li>
                                          <li><a href="#">View Details <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                        </ul>	
                                    </div>
                                    <!--game-buy ends...-->
                                </div>
                                <!--game-datails ends....-->
                            </div>	
                            <!--single-game-datails ends....-->
                    </div>
                    <!--col-md-4 ends....-->
                  </div>
                  <div class="tab-pane" id="profile">
                  	 <div class="col-md-4 col-sm-4">
                        <div class="single-game-details">
                                <div class="single-game">
                                    <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/g3.jpg" alt=""></a>
                                </div>
                                <!--single-game ends....-->	
                                <div class="game-datails">
                                    <div class="game-title">
                                        <a href="#"><h2>Rossi</h2></a>	
                                    </div>
                                    <!--game-title ends...-->
                                    <div class="game-price">
                                        <p>$32.29</p>	
                                    </div>
                                    <!--game-price ends...-->
                                    
                                    <div class="game-buy">
                                        <ul>
                                          <li><a href="#">Buy Now</a></li>
                                          <li><a href="#">View Details <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                        </ul>	
                                    </div>
                                    <!--game-buy ends...-->
                                </div>
                                <!--game-datails ends....-->
                            </div>	
                            <!--single-game-datails ends....-->
                    </div>
                    <!--col-md-4 ends....-->
                    
                    <div class="col-md-4 col-sm-4">
                        <div class="single-game-details">
                                <div class="single-game">
                                    <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/g4.jpg" alt=""></a>
                                </div>
                                <!--single-game ends....-->	
                                <div class="game-datails">
                                    <div class="game-title">
                                        <a href="#"><h2>Rossi</h2></a>	
                                    </div>
                                    <!--game-title ends...-->
                                    <div class="game-price">
                                        <p>$32.29</p>	
                                    </div>
                                    <!--game-price ends...-->
                                    
                                    <div class="game-buy">
                                        <ul>
                                          <li><a href="#">Buy Now</a></li>
                                          <li><a href="#">View Details <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                        </ul>	
                                    </div>
                                    <!--game-buy ends...-->
                                </div>
                                <!--game-datails ends....-->
                            </div>	
                            <!--single-game-datails ends....-->
                    </div>
                    <!--col-md-4 ends....-->
                    
                    <div class="col-md-4 col-sm-4">
                        <div class="single-game-details">
                                <div class="single-game">
                                    <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/g5.jpg" alt=""></a>
                                </div>
                                <!--single-game ends....-->	
                                <div class="game-datails">
                                    <div class="game-title">
                                        <a href="#"><h2>Rossi</h2></a>	
                                    </div>
                                    <!--game-title ends...-->
                                    <div class="game-price">
                                        <p>$32.29</p>	
                                    </div>
                                    <!--game-price ends...-->
                                    
                                    <div class="game-buy">
                                        <ul>
                                          <li><a href="#">Buy Now</a></li>
                                          <li><a href="#">View Details <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                        </ul>	
                                    </div>
                                    <!--game-buy ends...-->
                                </div>
                                <!--game-datails ends....-->
                            </div>	
                            <!--single-game-datails ends....-->
                    </div>
                    <!--col-md-4 ends....-->
                    
                    <div class="col-md-4 col-sm-4">
                        <div class="single-game-details">
                                <div class="single-game">
                                    <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/g1.jpg" alt=""></a>
                                </div>
                                <!--single-game ends....-->	
                                <div class="game-datails">
                                    <div class="game-title">
                                        <a href="#"><h2>Rossi</h2></a>	
                                    </div>
                                    <!--game-title ends...-->
                                    <div class="game-price">
                                        <p>$32.29</p>	
                                    </div>
                                    <!--game-price ends...-->
                                    
                                    <div class="game-buy">
                                        <ul>
                                          <li><a href="#">Buy Now</a></li>
                                          <li><a href="#">View Details <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                        </ul>	
                                    </div>
                                    <!--game-buy ends...-->
                                </div>
                                <!--game-datails ends....-->
                            </div>	
                            <!--single-game-datails ends....-->
                    </div>
                    <!--col-md-4 ends....-->
                    
                    <div class="col-md-4 col-sm-4">
                        <div class="single-game-details">
                                <div class="single-game">
                                    <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/g5.jpg" alt=""></a>
                                </div>
                                <!--single-game ends....-->	
                                <div class="game-datails">
                                    <div class="game-title">
                                        <a href="#"><h2>Rossi</h2></a>	
                                    </div>
                                    <!--game-title ends...-->
                                    <div class="game-price">
                                        <p>$32.29</p>	
                                    </div>
                                    <!--game-price ends...-->
                                    
                                    <div class="game-buy">
                                        <ul>
                                          <li><a href="#">Buy Now</a></li>
                                          <li><a href="#">View Details <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                        </ul>	
                                    </div>
                                    <!--game-buy ends...-->
                                </div>
                                <!--game-datails ends....-->
                            </div>	
                            <!--single-game-datails ends....-->
                    </div>
                    <!--col-md-4 ends....-->
                    
                    <div class="col-md-4 col-sm-4">
                        <div class="single-game-details">
                                <div class="single-game">
                                    <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/g4.jpg" alt=""></a>
                                </div>
                                <!--single-game ends....-->	
                                <div class="game-datails">
                                    <div class="game-title">
                                        <a href="#"><h2>Rossi</h2></a>	
                                    </div>
                                    <!--game-title ends...-->
                                    <div class="game-price">
                                        <p>$32.29</p>	
                                    </div>
                                    <!--game-price ends...-->
                                    
                                    <div class="game-buy">
                                        <ul>
                                          <li><a href="#">Buy Now</a></li>
                                          <li><a href="#">View Details <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                        </ul>	
                                    </div>
                                    <!--game-buy ends...-->
                                </div>
                                <!--game-datails ends....-->
                            </div>	
                            <!--single-game-datails ends....-->
                    </div>
                    <!--col-md-4 ends....-->
                  </div>
                  <div class="tab-pane" id="messages">
                  	  <div class="col-md-4 col-sm-4">
                        <div class="single-game-details">
                                <div class="single-game">
                                    <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/g3.jpg" alt=""></a>
                                </div>
                                <!--single-game ends....-->	
                                <div class="game-datails">
                                    <div class="game-title">
                                        <a href="#"><h2>Rossi</h2></a>	
                                    </div>
                                    <!--game-title ends...-->
                                    <div class="game-price">
                                        <p>$32.29</p>	
                                    </div>
                                    <!--game-price ends...-->
                                    
                                    <div class="game-buy">
                                        <ul>
                                          <li><a href="#">Buy Now</a></li>
                                          <li><a href="#">View Details <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                        </ul>	
                                    </div>
                                    <!--game-buy ends...-->
                                </div>
                                <!--game-datails ends....-->
                            </div>	
                            <!--single-game-datails ends....-->
                    </div>
                    <!--col-md-4 ends....-->
                    
                    <div class="col-md-4 col-sm-4">
                        <div class="single-game-details">
                                <div class="single-game">
                                    <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/g2.jpg" alt=""></a>
                                </div>
                                <!--single-game ends....-->	
                                <div class="game-datails">
                                    <div class="game-title">
                                        <a href="#"><h2>Rossi</h2></a>	
                                    </div>
                                    <!--game-title ends...-->
                                    <div class="game-price">
                                        <p>$32.29</p>	
                                    </div>
                                    <!--game-price ends...-->
                                    
                                    <div class="game-buy">
                                        <ul>
                                          <li><a href="#">Buy Now</a></li>
                                          <li><a href="#">View Details <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                        </ul>	
                                    </div>
                                    <!--game-buy ends...-->
                                </div>
                                <!--game-datails ends....-->
                            </div>	
                            <!--single-game-datails ends....-->
                    </div>
                    <!--col-md-4 ends....-->
                    
                    <div class="col-md-4 col-sm-4">
                        <div class="single-game-details">
                                <div class="single-game">
                                    <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/g5.jpg" alt=""></a>
                                </div>
                                <!--single-game ends....-->	
                                <div class="game-datails">
                                    <div class="game-title">
                                        <a href="#"><h2>Rossi</h2></a>	
                                    </div>
                                    <!--game-title ends...-->
                                    <div class="game-price">
                                        <p>$32.29</p>	
                                    </div>
                                    <!--game-price ends...-->
                                    
                                    <div class="game-buy">
                                        <ul>
                                          <li><a href="#">Buy Now</a></li>
                                          <li><a href="#">View Details <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                        </ul>	
                                    </div>
                                    <!--game-buy ends...-->
                                </div>
                                <!--game-datails ends....-->
                            </div>	
                            <!--single-game-datails ends....-->
                    </div>
                    <!--col-md-4 ends....-->
                    
                    <div class="col-md-4 col-sm-4">
                        <div class="single-game-details">
                                <div class="single-game">
                                    <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/g3.jpg" alt=""></a>
                                </div>
                                <!--single-game ends....-->	
                                <div class="game-datails">
                                    <div class="game-title">
                                        <a href="#"><h2>Rossi</h2></a>	
                                    </div>
                                    <!--game-title ends...-->
                                    <div class="game-price">
                                        <p>$32.29</p>	
                                    </div>
                                    <!--game-price ends...-->
                                    
                                    <div class="game-buy">
                                        <ul>
                                          <li><a href="#">Buy Now</a></li>
                                          <li><a href="#">View Details <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                        </ul>	
                                    </div>
                                    <!--game-buy ends...-->
                                </div>
                                <!--game-datails ends....-->
                            </div>	
                            <!--single-game-datails ends....-->
                    </div>
                    <!--col-md-4 ends....-->
                    
                    <div class="col-md-4 col-sm-4">
                        <div class="single-game-details">
                                <div class="single-game">
                                    <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/g4.jpg" alt=""></a>
                                </div>
                                <!--single-game ends....-->	
                                <div class="game-datails">
                                    <div class="game-title">
                                        <a href="#"><h2>Rossi</h2></a>	
                                    </div>
                                    <!--game-title ends...-->
                                    <div class="game-price">
                                        <p>$32.29</p>	
                                    </div>
                                    <!--game-price ends...-->
                                    
                                    <div class="game-buy">
                                        <ul>
                                          <li><a href="#">Buy Now</a></li>
                                          <li><a href="#">View Details <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                        </ul>	
                                    </div>
                                    <!--game-buy ends...-->
                                </div>
                                <!--game-datails ends....-->
                            </div>	
                            <!--single-game-datails ends....-->
                    </div>
                    <!--col-md-4 ends....-->
                    
                    <div class="col-md-4 col-sm-4">
                        <div class="single-game-details">
                                <div class="single-game">
                                    <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/g5.jpg" alt=""></a>
                                </div>
                                <!--single-game ends....-->	
                                <div class="game-datails">
                                    <div class="game-title">
                                        <a href="#"><h2>Rossi</h2></a>	
                                    </div>
                                    <!--game-title ends...-->
                                    <div class="game-price">
                                        <p>$32.29</p>	
                                    </div>
                                    <!--game-price ends...-->
                                    
                                    <div class="game-buy">
                                        <ul>
                                          <li><a href="#">Buy Now</a></li>
                                          <li><a href="#">View Details <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                        </ul>	
                                    </div>
                                    <!--game-buy ends...-->
                                </div>
                                <!--game-datails ends....-->
                            </div>	
                            <!--single-game-datails ends....-->
                    </div>
                    <!--col-md-4 ends....-->
                  </div>
                  <div class="tab-pane" id="settings">
                  	 <div class="col-md-4 col-sm-4">
                        <div class="single-game-details">
                                <div class="single-game">
                                    <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/g3.jpg" alt=""></a>
                                </div>
                                <!--single-game ends....-->	
                                <div class="game-datails">
                                    <div class="game-title">
                                        <a href="#"><h2>Rossi</h2></a>	
                                    </div>
                                    <!--game-title ends...-->
                                    <div class="game-price">
                                        <p>$32.29</p>	
                                    </div>
                                    <!--game-price ends...-->
                                    
                                    <div class="game-buy">
                                        <ul>
                                          <li><a href="#">Buy Now</a></li>
                                          <li><a href="#">View Details <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                        </ul>	
                                    </div>
                                    <!--game-buy ends...-->
                                </div>
                                <!--game-datails ends....-->
                            </div>	
                            <!--single-game-datails ends....-->
                    </div>
                    <!--col-md-4 ends....-->
                    
                    <div class="col-md-4 col-sm-4">
                        <div class="single-game-details">
                                <div class="single-game">
                                    <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/g4.jpg" alt=""></a>
                                </div>
                                <!--single-game ends....-->	
                                <div class="game-datails">
                                    <div class="game-title">
                                        <a href="#"><h2>Rossi</h2></a>	
                                    </div>
                                    <!--game-title ends...-->
                                    <div class="game-price">
                                        <p>$32.29</p>	
                                    </div>
                                    <!--game-price ends...-->
                                    
                                    <div class="game-buy">
                                        <ul>
                                          <li><a href="#">Buy Now</a></li>
                                          <li><a href="#">View Details <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                        </ul>	
                                    </div>
                                    <!--game-buy ends...-->
                                </div>
                                <!--game-datails ends....-->
                            </div>	
                            <!--single-game-datails ends....-->
                    </div>
                    <!--col-md-4 ends....-->
                    
                    <div class="col-md-4 col-sm-4">
                        <div class="single-game-details">
                                <div class="single-game">
                                    <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/g3.jpg" alt=""></a>
                                </div>
                                <!--single-game ends....-->	
                                <div class="game-datails">
                                    <div class="game-title">
                                        <a href="#"><h2>Rossi</h2></a>	
                                    </div>
                                    <!--game-title ends...-->
                                    <div class="game-price">
                                        <p>$32.29</p>	
                                    </div>
                                    <!--game-price ends...-->
                                    
                                    <div class="game-buy">
                                        <ul>
                                          <li><a href="#">Buy Now</a></li>
                                          <li><a href="#">View Details <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                        </ul>	
                                    </div>
                                    <!--game-buy ends...-->
                                </div>
                                <!--game-datails ends....-->
                            </div>	
                            <!--single-game-datails ends....-->
                    </div>
                    <!--col-md-4 ends....-->
                    
                    <div class="col-md-4 col-sm-4">
                        <div class="single-game-details">
                                <div class="single-game">
                                    <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/g2.jpg" alt=""></a>
                                </div>
                                <!--single-game ends....-->	
                                <div class="game-datails">
                                    <div class="game-title">
                                        <a href="#"><h2>Rossi</h2></a>	
                                    </div>
                                    <!--game-title ends...-->
                                    <div class="game-price">
                                        <p>$32.29</p>	
                                    </div>
                                    <!--game-price ends...-->
                                    
                                    <div class="game-buy">
                                        <ul>
                                          <li><a href="#">Buy Now</a></li>
                                          <li><a href="#">View Details <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                        </ul>	
                                    </div>
                                    <!--game-buy ends...-->
                                </div>
                                <!--game-datails ends....-->
                            </div>	
                            <!--single-game-datails ends....-->
                    </div>
                    <!--col-md-4 ends....-->
                    
                    <div class="col-md-4 col-sm-4">
                        <div class="single-game-details">
                                <div class="single-game">
                                    <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/g5.jpg" alt=""></a>
                                </div>
                                <!--single-game ends....-->	
                                <div class="game-datails">
                                    <div class="game-title">
                                        <a href="#"><h2>Rossi</h2></a>	
                                    </div>
                                    <!--game-title ends...-->
                                    <div class="game-price">
                                        <p>$32.29</p>	
                                    </div>
                                    <!--game-price ends...-->
                                    
                                    <div class="game-buy">
                                        <ul>
                                          <li><a href="#">Buy Now</a></li>
                                          <li><a href="#">View Details <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                        </ul>	
                                    </div>
                                    <!--game-buy ends...-->
                                </div>
                                <!--game-datails ends....-->
                            </div>	
                            <!--single-game-datails ends....-->
                    </div>
                    <!--col-md-4 ends....-->
                    
                    <div class="col-md-4 col-sm-4">
                        <div class="single-game-details">
                                <div class="single-game">
                                    <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/g4.jpg" alt=""></a>
                                </div>
                                <!--single-game ends....-->	
                                <div class="game-datails">
                                    <div class="game-title">
                                        <a href="#"><h2>Rossi</h2></a>	
                                    </div>
                                    <!--game-title ends...-->
                                    <div class="game-price">
                                        <p>$32.29</p>	
                                    </div>
                                    <!--game-price ends...-->
                                    
                                    <div class="game-buy">
                                        <ul>
                                          <li><a href="#">Buy Now</a></li>
                                          <li><a href="#">View Details <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                        </ul>	
                                    </div>
                                    <!--game-buy ends...-->
                                </div>
                                <!--game-datails ends....-->
                            </div>	
                            <!--single-game-datails ends....-->
                    </div>
                    <!--col-md-4 ends....-->  
                  </div>
                </div>
                <!--nav-tabs ends....-->
            </div>
            <!--container ends....-->
        </section>
        <!--games ends......-->
        
        <section class="hotspot">
        	<div class="container">
            	<div class="col-md-4 col-sm-4">
                	<div class="single-hotspot bg1">
                		<a href="<?php echo of_get_option('hl1','no entry');?>">
                            <?php echo of_get_option('hp1','no entry');?>
                        </a>
                    </div>	
                    <!--single-hotspot ends....-->
                </div>
                <!--col-md-4 ends...-->	
                <div class="col-md-4 col-sm-4 pad-0">
                	<div class="single-hotspot bg2">
                		<a href="<?php echo of_get_option('hl2','no entry');?>">
                        	<?php echo of_get_option('hp2','no entry');?>
                        </a>
                    </div>	
                    <!--single-hotspot ends....-->
                </div>
                <!--col-md-4 ends...-->	
                <div class="col-md-4 col-sm-4">
                	<div class="single-hotspot bg1">
                		<a href="#"><h2>Great Savings<br/>Via RRP</h2></a>
                    </div>	
                    <!--single-hotspot ends....-->
                </div>
                <!--col-md-4 ends...-->	
            </div>
            <!--container ends....-->
        </section>
        <!--hotspot ends.....-->
        
        
        <section class="social-area">
        	<div class="container">
            	<div class="col-md-4 col-sm-4">
                	<div class="social-bookmarks">
                    	<h1>Join The</h1>	
                        <p><?php echo of_get_option('web','no entry');?></p>
                        <p><span>Comunity On Social media</span></p>
                        <ul>
                          <li><a href="<?php echo of_get_option('fb','no entry');?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/fb.png" alt=""></a></li>
                          <li><a href="<?php echo of_get_option('gog','no entry');?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/google.png" alt=""></a></li>
                          <li><a href="<?php echo of_get_option('twt','no entry');?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/twt.png" alt=""></a></li>
                        </ul>
                    </div>
                    <!--social-bookmarks ends....-->	
                </div>
                <!--col-md-4 ends....	-->
                
                <div class="col-md-8 col-sm-8">
                	<div class="newsletter">
                    	<h1>Welcome To <br/>Zatu Games</h1>
                        <p>Get The best Offers and deals via out newsletter</p>
                        
                        <?php dynamic_sidebar('sidebar-3') ?>
                       <!-- <form role="form">
                              <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter Your Email">
                              </div>
                              <input type="submit" class="btn btn-default"/>
                            </form> -->
                    </div>
                    <!--social-bookmarks ends....-->	
                </div>
                <!--col-md-8 ends....	-->
            </div>
            <!--container ends....-->
        </section>
        <!--social-area ends...-->
<?php get_footer(); ?>          
        
        
        



    
   <?php /*?> <section class="product">
    	<div class="container">
       		<div class="col-md-4 col-sm-4">
            	<a href="<?php bloginfo('url');?>/product-category/special-occasion-cakes/"><div class="single-product-p">
                	<div class="color-overlay"></div>
                	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/p1.jpg" class="image2" alt="">	
                     <div class="border"></div>
                     <div class="content">
                    	<h3>Special<br/>Occasion Cakes</h3>
                    </div>
                    
                </div></a>
                <!--single-product ends....	-->
            </div>
            <!--col-md-4 ends.....-->
            
            <div class="col-md-4 col-sm-4">
            	<a href="<?php bloginfo('url');?>/product-category/christmas/"><div class="single-product-p">
                	<div class="color-overlay"></div>
                	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/p3.jpg" class="image2" alt="">
                    <div class="border2"></div>
                    <div class="content2">
                    	<h3>Christmas</h3>
                    </div>	
                </div></a>
                <!--single-product ends....	-->
                <a href="<?php bloginfo('url');?>/product-category/weddings/"><div class="single-product-p">
                	<div class="color-overlay"></div>
                	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/p2.jpg" alt="" class="image2">
                    <div class="border2"></div>	
                    <div class="content2">
                    	<h3>weddings</h3>
                    </div>
                </div></a>
                <!--single-product ends....	-->
            </div>
            <!--col-md-4 ends.....-->
            
            <div class="col-md-4 col-sm-4">
            	<a href="<?php bloginfo('url');?>/product-category/corporate/"><div class="single-product-p">
                	<div class="color-overlay"></div>
                	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/p4.jpg" alt="" class="image2">	
                    <div class="border"></div>
                    <div class="content">
                    	<h3>Corporate</h3>
                    </div>
                </div></a>
                <!--single-product ends....	-->
            </div>
            <!--col-md-4 ends.....-->
        </div>
        <!--container ends....-->
    </section>
    <!--section.product ends.....-->
    
    
    <section class="featured-product">
    	<div class="container">
        	<div class="col-md-12 col-sm-12">
                <div class="heading">
                    <h1>Featured Product</h1>	
                </div>
                <!--heading ends....-->	
                
                <div class="product-gallery">
                <ul id="flexiselDemo1"> 
                <?php

    $meta_query   = WC()->query->get_meta_query();
$meta_query[] = array(
    'key'   => '_featured',
    'value' => 'yes'
);
$args = array(
    'post_type'   =>  'product',
    'stock'       =>  1,
    'showposts'   =>  6,
    'orderby'     =>  'date',
    'order'       =>  'DESC',
    'meta_query'  =>  $meta_query
);

    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                        <li>  
                        <div class="single-gallery">
                            <a href="<?php the_permalink() ?>"> <?php 
									if ( has_post_thumbnail( $loop->post->ID ) ) 
										echo get_the_post_thumbnail( $loop->post->ID, 'shop_catalog' ); 
									else 
										echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" width="65px" height="115px" />'; 
								?></a>
                                <div class="single-title">
                                	<a href="<?php the_permalink() ?>" style="text-decoration:none;"><h3><?php the_title(); ?></h3></a>
                                    <h2> <?php 
										echo $product->get_price_html(); 
										woocommerce_template_loop_add_to_cart( $loop->post, $product );
									?> </h2>
                                   
                                </div>	
                            </div> 
              
                       </li>
                    
                    <?php 
                        endwhile;
                        wp_reset_query(); 
                    ?>
                   
                    </ul>
                </div>
                <!--product-gallery ends.....-->
            </div>
            <!--col-md-12 ends....-->
        </div>
        <!--container ends....-->
    </section>
    <!--featured-product ends....-->
    
    
    
    
    
    
        
  <?php */?>
    
  