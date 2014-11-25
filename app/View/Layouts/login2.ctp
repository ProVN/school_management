<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>

        <title>Login - G'Connect Education</title>

        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

        <meta name="description" content="FlexyCodes - FlexyCard vCard Template. Creating my personal page!"/>

        <!-- CSS | bootstrap -->
        <!-- Credits: http://getbootstrap.com/ -->
        <link  rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />

        <!-- CSS | font-awesome -->
        <!-- Credits: http://fortawesome.github.io/Font-Awesome/icons/ -->
        <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css" />

        <!-- CSS | animate -->
        <!-- Credits: http://daneden.github.io/animate.css/ -->
        <link rel="stylesheet" type="text/css" href="/css/animate.min.css" />

        <!-- CSS | Normalize -->
        <!-- Credits: http://manos.malihu.gr/jquery-custom-content-scroller -->
        <link rel="stylesheet" type="text/css" href="/css/jquery.mCustomScrollbar.css" />
       	
        <!-- CSS | Colors -->
        <link rel="stylesheet" type="text/css" href="/css/colors/orange.css" id="colors-style" />
        <link rel="stylesheet" type="text/css" href="/css/switcher.css" />
        
        <!-- CSS | Style -->
        <!-- Credits: http://themeforest.net/user/FlexyCodes -->
        <link rel="stylesheet" type="text/css" href="/css/main.css" />

        <!-- CSS | prettyPhoto -->
        <!-- Credits: http://www.no-margin-for-errors.com/ -->
        <link rel="stylesheet" type="text/css" href="/css/prettyPhoto.css"/> 

		<!-- CSS | Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon/favicon.ico">

        <!--[if IE 7]>
                <link rel="stylesheet" type="text/css" href="/css/icons/font-awesome-ie7.min.css"/>
        <![endif]-->

        <style>
			@media only screen and (max-width: 991px) {
				.resp-vtabs .resp-tabs-container {
					margin-left: 13px;
				}
			}

			@media only screen and (min-width: 800px) and (max-width: 991px) {
				.resp-vtabs .resp-tabs-container {
					margin-left: 13px;
					width: 89%;
				}
			}

        </style>

    </head>

    <body>

        <!--[if lt IE 7]>
                <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Laoding page -->
        <div id="preloader"><div id="spinner"></div></div>

        <!-- .slideshow -->
        <ul class="cb-slideshow" id="cb_slideshow" style="display:none">
            <li><span>Image 01</span><div></div></li>
            <li><span>Image 02</span><div></div></li>
            <li><span>Image 03</span><div></div></li>
            <li><span>Image 04</span><div></div></li>
            <li><span>Image 05</span><div></div></li>
            <li><span>Image 06</span><div></div></li>
        </ul> 
        <!-- /.slideshow --> 

        <!-- .wrapper --> 
        <div class="wrapper">

            <!--- .Content --> 
            <section class="tab-content">
                <div class="container">

                    <div class="row">

                        <div class="col-md-12">

                            <div class="row">   

                                <div class="col-md-3 widget-profil" style="background-color: #F4F4F4">
                                    <div class="row">

    <!-- Profile Image -->
    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-12 " style="padding-top:20px;">
         <div class="image-holder one" id="pic_prof_1" style="display:none">
                <img class="head-image up circle" src="/upload/img/<?php echo $student['Student']['image_small']?>" width="150" height="150" alt="" />
                <!--
                <img class="head-image up-left circle" src="images/img/upleft.png" width="150" height="150" alt="" />
                <img class="head-image left circle" src="images/img/left.png" width="150" height="150" alt="" />
                <img class="head-image down-left circle" src="images/img/downleft.png" width="150" height="150" alt="" />
                <img class="head-image down circle" src="images/img/down.png" width="150" height="150" alt="" />
                <img class="head-image down-right circle" src="images/img/downright.png" width="150" height="150" alt="" />
                <img class="head-image right circle" src="images/img/right.png" width="150" height="150" alt="" />
                <img class="head-image up-right circle" src="images/img/upright.png" width="150" height="150" alt="" />
                <img class="head-image front circle" src="images/img/front.png" width="150" height="150" alt="" />
                -->
                
        </div>        
        <!-- style for simple image profile -->
        <!--
        <a href="http://glion.edu/" target="_blank"><img src="/img/LHE/1.png" style="width: 100%; margin-top: 15px; margin-bottom: 15px"/></a>
        <a href="http://www.lesroches.edu/" target="_blank"><img src="/img/LHE/2.png" style="width: 100%; margin-top: 15px; margin-bottom: 15px"/></a>
        <a href="http://www.bluemountains.edu.au/" target="_blank"><img src="/img/LHE/3.png" style="width: 100%; margin-top: 15px; margin-bottom: 15px"/></a>
        <a href="http://www.kendall.edu/" target="_blank"><img src="/img/LHE/4.png" style="width: 100%; margin-top: 15px; margin-bottom: 15px"/></a>
        -->
        
        <div style="padding-left:70px; padding-right:70px;">
        	<a href="http://www.ihtti.com/en/" target="_blank"><img src="/img/SEG/1.png" style="width: 100%; margin-top: 15px; margin-bottom: 15px"/></a>
        </div>
        <div style="padding-left:70px; padding-right:70px;">
        	<a href="http://www.hotelinstitutemontreux.com/en/" target="_blank"><img src="/img/SEG/2.jpg" style="width: 100%; margin-top: 15px; margin-bottom: 15px"/></a>
        </div>
        <div style="padding-left:70px; padding-right:70px;">
        	<a href="http://www.ritz.edu/en/" target="_blank"><img src="/img/SEG/3.png" style="width: 100%; margin-top: 15px; margin-bottom: 15px"/></a>
        </div>
		<div style="padding-left:70px; padding-right:70px;">        	
        	<a href="http://www.shms.com/en/" target="_blank"><img src="/img/SEG/5.png" style="width: 100%; margin-top: 15px; margin-bottom: 15px"/></a>
        </div>

		<div style="clear: both"></div>
    </div>
    <!-- End Profile Image -->
       
</div>                                </div>

                                <div class="col-md-9 flexy_content" style="padding-left: 0;padding-right: 0;">

                                    <!-- verticalTab menu -->
                                    <div id="verticalTab">

                                        <ul class="resp-tabs-list">
                                            <li class="tabs-profile hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a profile" data-tab-name="profile">			
                                                <span class="tite-list">Đăng nhập</span>
                                                <i class="fa fa-sign-in icon_menu icon_menu_active"></i>
                                            </li>
                                            <a href="http://google.com">
                                            <li class="tabs-resume " data-tab-name="document_info" onclick="window.open('https://www.facebook.com/GConnect.Education')"> 
                                                <span class="tite-list">tình trạng hồ sơ</span>
                                                <i class="fa fa-facebook icon_menu"></i>
                                            </li>
                                            </a>
                                            <li class="tabs-portfolio hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" data-tab-name="document_download" onclick="window.open('http://www.gconnect.edu.vn/')"> 
                                                <span class="tite-list">tài liệu học tập</span>
                                                <i class="fa fa-globe icon_menu"></i>
                                            </li>
                                        </ul>
                                        <!-- /resp-tabs-list -->



                                        <!-- resp-tabs-container --> 
                                        <div class="resp-tabs-container">

                                            <!-- profile -->
                                            <div id="profile" class="content_2" style="text-align: center;">
    <div style="text-align: center; margin-top: 50px">                                            <!-- .title -->
	<img src="/img/logo.jpg" style="max-width: 300px; width: 100%; margin-bottom: 30px">

	<?php echo $this->fetch('content')?>
	</div>
    <div class="clear"></div>
                                            </div>
                                             <div id="profile" class="content_2" style="text-align: center;">
    <div style="text-align: center; margin-top: 50px">                                            <!-- .title -->
	<img src="/img/logo.jpg" style="max-width: 300px; width: 100%; margin-bottom: 30px">

	<?php echo $this->fetch('content')?>
	</div>
    <div class="clear"></div>
                                            </div>
                                             <div id="profile" class="content_2" style="text-align: center;">
    <div style="text-align: center; margin-top: 50px">                                            <!-- .title -->
	<img src="/img/logo.jpg" style="max-width: 300px; width: 100%; margin-bottom: 30px">

	<?php echo $this->fetch('content')?>
	</div>
    <div class="clear"></div>
                                            </div>
                                            <!-- End .profile -->

                                            <!-- .resume -->
                                            

                                            <!-- .portfolio -->
                                            
                                            <!-- End .portfolio -->


                                            
                                            


                            </div><!-- End row -->

                        </div><!-- End col-md-12 -->

                    </div><!-- End row -->

                </div><!-- End container -->

            </section>
            <!-- End Content -->

        </div>
        <!-- End wrapper -->

 
        <!-- jquery | jQuery 1.11.0 -->
        <!-- Credits: http://jquery.com -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 		
        <!-- Js | bootstrap -->
        <!-- Credits: http://getbootstrap.com/ -->
        <script type="text/javascript" src="/js/bootstrap.min.js"></script> 
        
        <!-- Js | jquery.cycle -->
        <!-- Credits: https://github.com/malsup/cycle2 -->
        <script type="text/javascript" src="/js/jquery.cycle2.min.js"></script>
        
        <!-- jquery | rotate and portfolio -->
        <!-- Credits: http://jquery.com -->
        <script type="text/javascript" src="/js/jquery.mixitup.min.js"></script> 
        <script type="text/javascript" src="/js/HeadImage.js"></script>

        <!-- Js | easyResponsiveTabs -->
        <!-- Credits: http://webtrendset.com/demo/easy-responsive-tabs/Index.html -->
        <script type="text/javascript" src="/js/easyResponsiveTabs.min.js"></script> 

        <!-- Js | jquery.cookie -->
        <!-- Credits: https://github.com/carhartl/jquery-cookie --> 
        <script type="text/javascript" src="/js/jsSwitcher/jquery.cookie.js"></script>	

        <!-- Js | switcher -->
        <!-- Credits: http://themeforest.net/user/FlexyCodes -->
        <!--<script type="text/javascript" src="/js/jsSwitcher/switcher.js"></script>-->	

        <!-- Js | mCustomScrollbar -->
        <!-- Credits: http://manos.malihu.gr/jquery-custom-content-scroller -->
        <script type="text/javascript" src="/js/jquery.mCustomScrollbar.concat.min.js"></script>		

        <!-- jquery | prettyPhoto -->
        <!-- Credits: http://www.no-margin-for-errors.com/ -->
        <script type="text/javascript" src="/js/jquery.prettyPhoto.js"></script>
        
        <!-- Js | gmaps -->
        <!-- Credits: http://maps.google.com/maps/api/js?sensor=true-->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="/js/gmaps.min.js"></script>

 		<!-- Js | Js -->
        <!-- Credits: http://themeforest.net/user/FlexyCodes -->
        <script type="text/javascript" src="/js/main.js"></script>
        
        <!-- code js for image rotate -->
        <script type="text/javascript">
			var mouseX;
			var mouseY;
			var imageOne;

			/* Calling the initialization function */
			$(init);

			/* The images need to re-initialize on load and on resize, or else the areas
			 * where each image is displayed will be wrong. */
			$(window).load(init);
			$(window).resize(init);

			/* Setting the mousemove event caller */
			$(window).mousemove(getMousePosition);

			/* This function is called on document ready, on load and on resize
			 * and initiallizes all the images */
			function init() {

				/* Instanciate the mouse position variables */
				mouseX = 0;
				mouseY = 0;

				/* Instanciate a HeadImage class for every image */
				imageOne = new HeadImage("one");

			}

			/* This function is called on mouse move and gets the mouse position.
			 * It also calls the HeadImage function to display the correct image*/
			function getMousePosition(event) {

				/* Setting the mouse position variables */
				mouseX = event.pageX;
				mouseY = event.pageY;

				/*Calling the setImageDirection function of the HeadImage class
				 * to display the correct image*/
				imageOne.setImageDirection();

			}

        </script>


        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </body>
</html>
