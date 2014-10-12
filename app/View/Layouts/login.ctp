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

        <title><?php $website_title?></title>

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

        <style type="text/css">
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
			
		body {
			
		}
		#wrapper {
			position:absolute;
			bottom:20px;
			top:20px;
			right:20px;
			left:20px;
			background-color:#F4F4F4;
			text-align: center;			
			padding-top:20px;			
		}
        </style>

    </head>

    <body>
    	<div id="wrapper">
	    	<img src="/img/logo.jpg" style="max-width: 400px; width: 100%" />	    	
	    	<div id="form" style="padding:30px;">
				<?php echo $this -> fetch('content'); ?>	    		
	    	</div>
		</div>
    </body>
</html>
