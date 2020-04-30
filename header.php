<?php

/**

 * The template for displaying the header

 *

 * @package WordPress

 * @subpackage Dynasty3

 * @since Dynasty3 1.0

 */

?>

<!doctype html>
<html lang="en-US">
<head>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta charset="utf-8">



<!-- Responsive View  -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo of_get_option('fav','no entry');?>">

<!-- Google fonts-->
<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

<link href='https://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>


<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- FONT awesome STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css" type="text/css" />
<!-- BOOTSTRAP STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css" type="text/css" />

<!-- CSS STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/template.css" type="text/css" />

<!-- Menu CSS -->

<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/sc-menu.css" media="all" />

<!--bxslider-->
<link rel="stylesheet" media="all" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.bxslider.css" type="text/css">

<!-- Responsive Devices Styles -->
<link rel="stylesheet" media="screen" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/responsive-leyouts.css" type="text/css" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div class="man-bg1">
    <div class="man-bg2">
	<div class="wrapper">
	<header>
    	<div class="container">
        	<div class="col-md-4 col-sm-4">
                <div class="logo-area">
                    <a href="<?php bloginfo('url'); ?>" title="<?php echo of_get_option('sitename','no entry');?>"><img src="<?php echo of_get_option('logo','no entry');?>" alt="">	</a>
                </div>
                <!--logo-area ends....	-->
            </div>
            <!--col-md-2 ends.....-->
            
            <div class="col-md-8 col-sm-8">
                <div class="login-area">
                    <div class="login-area-top">
                        <div class="top-left">
                           <ul>
                         <?php
									  if ( is_user_logged_in() ) {
										  ?>
										  <li><a href="<?php echo bloginfo('url'); ?>/my-account/">My Account</a></li>
                                          <li><a href="<?php echo bloginfo('url'); ?>/my-account/customer-logout/">Logout</a></li>
                                          <?php
									  } else {
										?>
										<li><a href="<?php echo bloginfo('url'); ?>/my-account/">Login</a></li> 
									    <li><a href="<?php echo bloginfo('url'); ?>/my-account/">Register</a></li>
										<?php
									  }
									  ?>

                            </ul>	
                        </div>
                        <!--top-left ends....-->
                        <div class="top-right">
                         	<p><?php echo of_get_option('cus','no entry');?></p>   	
                        </div>
                        <!--top-right ends....-->
                    </div>
                    <!--login-area-top ends.....-->	
                    
                    <div class="login-area-bottom">
                        <div class="bottom-left">
                        	<?php /*?><?php dynamic_sidebar("sidebar-2")?><?php */?>
                         	<form role="form">
                              <div class="form-group">
                                <input type="email" class="form-control" placeholder="Search Our Website">
                              </div>
                              <input type="submit" class="btn btn-default"/>
                            </form>  	
                        </div>
                        <!--bottom-left ends....-->
                        <div class="bottom-right">
                        	<div class="view-btn">
                         		<a href="<?php bloginfo('url'); ?>/cart/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/cart.png" alt="cart">View Cart</a> 
                            </div>
                            <!--view-btn ends....	-->
                        </div>
                        <!--bottom-right ends....-->
                    </div>
                    <!--login-area-bottom ends.....-->	
                    	
                </div>
                <!--logo-area ends....-->
            </div>
            <!--col-md-10 ends....-->
        </div>
        <!--container ends...	-->
    </header>
    <!--header ends.....-->
    
     <section class="menu-area">
    	<div class="container">
        	<div class="col-md-12">
            <div id='scmenu'>
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_id' => '','container'=> '',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => '', ) ); ?>



          <?php /*?>  <?php
							  $url=get_post_permalink();
								 $pageid = url_to_postid( $url );
							?>  
            	<div id='scmenu'>
                    <ul>
                       <li class='active'><a href='index.html'>Home</a></li>
                       <li><a href="<?php bloginfo('url');?>/best-sellers/" <?php echo $pageid== '7'?'class="active"':'';?>>Board Games</a>
                       		    <ul>
                                   <li><a href='default.php'>Fantasy & RPG</a></li>
                                   <li><a href='default.php'>Strategy</a></li>
                                   <li><a href='default.php'>Miniature Board Games</a></li>
                                   <li><a href='default.php'>Card Games</a></li>
                                   <li><a href='default.php'>Dice Games</a></li>
                                   <li><a href='default.php'>Party & Family Games</a></li>
                                   <li><a href='default.php'>Puzzle & Trivia</a></li>
                                </ul>
                       </li>
                       <li><a href='#'>PS4</a>
                       		     <ul>
                                   <li><a href='default.php'>Games</a></li>
                                   <li><a href='shop.php'>Pre-Order</a></li>
                                </ul>
                       </li>
                       <li><a href='#'>Xbox One</a>
                                <ul>
                                   <li><a href='#'>Games</a></li>
                                   <li><a href='#'>Pre-Order</a></li>
                                </ul>
                       </li>
                       <li><a href='#'>Collectables</a>
                                <ul>
                                   <li><a href='#'>Pokémon</a></li>
                                   <li><a href='#'>Funko Pop</a></li>
                                </ul>
                       </li>
                       <li><a href="<?php bloginfo('url');?>/blog/" <?php echo $pageid== '7'?'class="active"':'';?>>Blog</a>
                       		<ul>
                                   <li><a href='#'>PlayStation</a></li>
                                   <li><a href='#'>Xbox</a></li>
                                   <li><a href='#'>Board Games</a></li>
                                </ul>
                       </li>
                       <li><a href="<?php bloginfo('url');?>/contact-us/" <?php echo $pageid== '7'?'class="active"':'';?>>Contact</a></li>
                    </ul><?php */?>
                </div>
                <!--scmenu ends....-->
            </div>
            <!--col-md-12 ends.....-->
        </div>
        <!--container ends....	-->
    </section>
    <!--menu-area ends....-->
    
    