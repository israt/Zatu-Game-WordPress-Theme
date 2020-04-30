<?php
/************
 * Template Name:profile
 
 ***********/
get_header(); ?>

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/tabModule.css" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700" rel="stylesheet">

<style type="text/css">
	.container {
       width: 1200px;
	   background:#fff;
     }
	 .wrapper {
    background-color: #ffffff;
    box-shadow: 0px 0px 60px #fff;
    width: 100%;
    }
	header {
    	background-color: #ffffff;
    }
	.menu-area {
		background-color: #ffffff;
	}
	.inner-page-heading {
		background-color: #ffffff;
	}
	.inner-page-content {
    background-color: #ffffff;
}


/*custom styles.............*/


</style>



<section class="inner-page-content">
	<div class="container">
    	<div class="col-md-12">
        	<div class="inner-content height">
            		
                <!--content starts...........................................-->
                
                
                
         <section class="tab-3d m-side">
    	<div class="container">
        
        	<div class="col-md-4 col-sm-4">
            	<div class="sidenav-3d">
                
                    <!--menu starts.......-->
                        <div class="nav-side-menu">
                            <div class="brand rel">
                            	<!--<img src="images/side.png" alt="">-->
                                
                                <div class="side-logo">
                                	 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/cont/man-head.png" alt="" class="two">
                                	 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/cont/cl-lock.png" alt="" class="one">
                                </div>
                                <!--side-logo ends...-->
                                
                                <div class="side-logo-text">
                                	<h4>Welcome</h4>
                                    <p>Harold Crawford</p>
                                </div>
                                <!--side-logo-text ends...-->
                            </div>
                            <!--brand ends...-->
                            
                           
                          <!-- menu with drop down...............-->
                          
                          <div class="menu-drop">
                          	 <?php wp_nav_menu( array( 'theme_location' => 'side-menu', 'menu_id' => '','container'=> '',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => '', ) ); ?>
                         	<!--<ul>
                            	<li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/cont/eye.png" alt="">TO View</a></li>
                                <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/cont/h.png" alt="">Home</a></li>
                                <li>
                                    <a href="#0"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/cont/p.png">Profile</a>
                                    <ul>
                                        <li><a href="#0">My profile</a></li>
                                        <li><a href="#0">My preferences</a></li>
                                        <li><a href="#0">My team</a></li>
                                        <li><a href="#0">My catalog</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/cont/u.png">USers</a>
                                    <ul>
                                        <li><a href="#0">My profile</a></li>
                                        <li><a href="#0">My preferences</a></li>
                                        <li><a href="#0">My team</a></li>
                                        <li><a href="#0">My catalog</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/cont/d.png">Data Catalog</a>
                                    <ul>
                                        <li><a href="#0">My profile</a></li>
                                        <li><a href="#0">My preferences</a></li>
                                        <li><a href="#0">My team</a></li>
                                        <li><a href="#0">My catalog</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/cont/a.png">ACCOUNT</a>
                                    <ul>
                                        <li><a href="#0">My profile</a></li>
                                        <li><a href="#0">My preferences</a></li>
                                        <li><a href="#0">My team</a></li>
                                        <li><a href="#0">My catalog</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/cont/m.png">More</a>
                                    <ul>
                                        <li><a href="#0">My profile</a></li>
                                        <li><a href="#0">My preferences</a></li>
                                        <li><a href="#0">My team</a></li>
                                        <li><a href="#0">My catalog</a></li>
                                    </ul>
                                </li>
                            </ul> -->	  	
                          </div>
                          <!--menu-drop ends...-->
                          
                       </div>
                      <!--menu ends.............-->
                </div>
                <!--3d-sidenav ends...	-->
            </div>
            <!--col-md-4 col-sm-4 ends...-->
            
            
            
            
            <div class="col-md-8 col-sm-8">
            	<div class="tb-3d">
                	<!--tab starts....-->
               		<div class="tab tab-horiz">
                        <ul class="tab-legend">
                            <li class="active">My Profile</li>
                            <li>My Preferences</li>
                            <li>My Team</li>
                            <li>My Catalog</li>
                        </ul>
                        <ul class="tab-content">
                            <li>
                                <!--TAB CONTENT-->
                                <h2>MY PRofile</h2>
                                <div class="tab-form">
                                	<form>
                                      <div class="form-container m-bot">
                                      <div class="col-md-6">
                                      		  <div class="form-group">
                                                <label for="email">Title </label>
                                                <input type="text" class="form-control" id="email" placeholder="Mr.">
                                                <span><a href="#">edit</a></span>
                                              </div>
                                              <div class="form-group">
                                                <label for="email">First Name</label>
                                                <input type="text" class="form-control" id="email" placeholder="John">
                                              </div>
                                              <div class="form-group">
                                                <label for="email">Middle</label>
                                                <input type="text" class="form-control" id="email" placeholder="D.">
                                              </div>
                                              <div class="form-group">
                                                <label for="email">Last Name</label>
                                                <input type="text" class="form-control" id="email" placeholder="Doe">
                                              </div>	
                                      </div>
                                      <!--col-md-6 ends...-->
                                      
                                      <div class="col-md-6">
                                      	&nbsp;
                                      </div>
                                      <!--col-md-6 ends...-->
                                      </div>
                                      <!--form-container ends...-->
                                      
                                      <div class="form-container m-bot">
                                      <div class="col-md-6">
                                      	  <div class="form-group">
                                                <label for="email">Login Email </label>
                                                <input type="email" class="form-control" id="email" placeholder="Doe">
                                                <span><a href="#">edit</a></span>
                                           </div>
                                      </div>
                                      <!--col-md-6 ends...-->
                                      
                                      <div class="col-md-6">
                                      	  <div class="form-group pad-left">
                                                <input type="email" class="form-control" id="email" placeholder="Doe">
                                                <label for="email"><span>Change Password</span></label>
                                           </div>
                                      </div>
                                      <!--col-md-6 ends...-->
                                      
                                      <div class="col-md-6">
                                      	  <div class="form-group">
                                          		<label for="email">User Name</label>
                                                <input type="email" class="form-control" id="email" placeholder="Doe">
                                                <span><a href="#">edit</a></span>
                                           </div>
                                      </div>
                                      <!--col-md-6 ends...-->
                                       </div>
                                      <!--form-container ends...-->
                                      
                                      <div class="form-container read-only">
                                          <div class="col-md-6">
                                                  <div class="form-group">
                                                    <label for="email">Data Uploaded </label>
                                                    <input type="text" class="form-control" id="email" placeholder="XX TB, Y Datasets 27">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="email">Data Accessible </label>
                                                    <input type="text" class="form-control" id="email" placeholder="Datasets">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="email"># Spaces</label>
                                                    <input type="text" class="form-control" id="email" placeholder="4">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="email"># Publications </label>
                                                    <input type="text" class="form-control" id="email" placeholder="0">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="email">Last Access</label>
                                                    <input type="text" class="form-control" id="email" placeholder="Today">
                                                  </div>	
                                          </div>
                                          <!--col-md-6 ends...-->
                                          
                                          <div class="col-md-6">
                                            &nbsp;
                                          </div>
                                          <!--col-md-6 ends...-->
                                      </div>
                                      <!--form-container ends...-->
                                      
                                      
                                      
                                      <input type="submit" class="btn btn-default" value="Save Details">
                                    </form>
                                </div>
                                <!--tab-form ends...-->
                            </li>
                            <li>
                                <!--TAB CONTENT-->
                                <h4>Content 2</h4>
                            </li>
                            <li>
                                <!--TAB CONTENT-->
                                <h4>Content 3</h4>
                            </li>
                            <li>
                                <!--TAB CONTENT-->
                                <h4>Content 4</h4>
                            </li>
                        </ul>
                    </div>
                    <!--tab ends...-->
                </div>
                <!--tb-3d ends...	-->
            </div>
            <!--col-md-8 col-sm-8 ends...-->
            
        </div>
        <!--container ends....-->
    </section>
    <!--section.tab-3d ends...-->
    
               
  <!--content ends...........................................-->               
               
               
               
               
               
               
               
               
               
               
               
               
               
               
               
               
            </div>
            <!--inner-heading ends....	-->
        </div>
        <!--col-md-12 ends....-->
    </div>	
    <!--container ends....-->
</section>
<!--inner-page-heading ends....-->


<span class="tog">
<img src="images/cont/op-ar.png" />
<img style="display:none;" src="images/cont/cl-ar.png" />
</span>

<?php get_footer(); ?>


<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/tabModule.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			 tabModule.init();
		});
	</script>
    
<script type="text/javascript">
    $('.menu-drop li:has(ul)').addClass('k2');
	$('.menu-drop li:has(ul)').on('click', function() {
		
		$(this).find('ul').toggle(function() {
			  //if ($(this).css('display') == 'none') {
//				$(this).css('color','black');
//			  } else {
//				$(this).css('color','blue');
//			  }
			  
		}); 
			  
			  
			  
			  
			  
			  
			  
			  
		
			 
			// $(this).addClass('k');
		
	});
	
	
		
</script>