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

        <title><?php echo $website_title?></title>

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
		<link href="/js/jquery-ui.css" rel="stylesheet">
		<link rel="stylesheet" href="/css/reset.css"> <!-- CSS reset -->
		<link rel="stylesheet" href="/css/style.css"> <!-- Resource style -->
		<script src="/js/modernizr.js"></script> <!-- Modernizr -->
		
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

                                <div class="col-md-3 widget-profil">
                                    <div class="row">

    <!-- Profile Image -->
    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-12 ">
    	 
		 
                                
         <div class="image-holder one" id="pic_prof_1" style="display:block">
        
                <img class="head-image up circle" src="/upload/img/students/<?php echo $student['Student']['image_small']?>" width="150" height="150" alt="" />
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
   		<div class="circle-img" id="pic_prof_2" style="display:none"></div>
       
    
    </div>
    <!-- End Profile Image -->
  
    <div class="col-lg-12 col-md-12 col-sm-9 col-xs-12">
    
    
        <!-- Profile info -->
        <div id="profile_info">
            <h1 id="name" class="transition-02"><?php echo $student['Student']['name']?></h1>
            <h4 class="line"><?php echo $student['School']['name']?></h4>
            <h6><span class="fa fa-map-marker"></span> <?php echo $student['Country']['name']?></h6>
        </div>
        <!-- End Profile info -->  
        <!-- Name -->
        
        <!-- End Name -->  
    </div>
    
    <?php if($student['School']['logo'] && $student['School']['logo'] != ''):?>
     <div id="profile_social" style="position: absolute; bottom: 0px">
             <div class="school_logo" style="background-color:white; padding:10px; padding-top:20px; padding-bottom:20px;">
             	
    				<img src="/upload/img/schools/<?php echo $student['School']['logo']?>" style="width: 100%; cursor:pointer" border="0" onclick="window.open('<?php echo $student['School']['homepage']?>')"/>
    			
    			
    		</div>
     </div>
     <?php endif ?>
</div>                                </div>

                                <div class="col-md-9 flexy_content" style="padding-left: 0;padding-right: 0;">

                                    <!-- verticalTab menu -->
                                    <div id="verticalTab">

                                        <ul class="resp-tabs-list">
                                            <li class="tabs-profile hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a profile" data-tab-name="profile" title="Thông tin học viên">			
                                                <span class="tite-list">thông tin học viên</span>
                                                <i class="fa fa-user icon_menu icon_menu_active"></i>
                                            </li>

                                            <li class="tabs-resume hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" data-tab-name="document_info" title="Tình trạng hồ sơ"> 
                                                <span class="tite-list">tình trạng hồ sơ</span>
                                                <i class="fa fa-tasks icon_menu"></i>
                                            </li>

                                            <li class="tabs-portfolio hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" data-tab-name="document_download" title="Tài liệu học tập"> 
                                                <span class="tite-list">tải xuống</span>
                                                <i class="fa fa-download icon_menu"></i>
                                            </li>
											
											<li class="tabs-portfolio hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" data-tab-name="document_download" title="Thời khóa biểu"> 
                                                <span class="tite-list">thời khóa biểu</span>
                                                <i class="fa fa-calendar icon_menu"></i>
                                            </li>
											
                                            <li class="tabs-contact hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" data-tab-name="contact" title="Liên hệ"> 
                                                <span class="tite-list">liên hệ</span>
                                                <i class="fa fa-envelope icon_menu"></i> 
                                            </li>
                                            
                                            <li class="tabs-contact hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" data-tab-name="logout" title="Thoát"> 
                                                <span class="tite-list">thoát</span>
                                                <i class="fa fa-sign-out icon_menu"></i> 
                                            </li>
                                            
                                            
                                            <a href="#" id="print" style="margin-top:48px"><i class="fa fa-print icon_print"></i> </a>
                                            
                                        </ul>
                                        <!-- /resp-tabs-list -->



                                        <!-- resp-tabs-container --> 
                                        <div class="resp-tabs-container">

                                            <!-- profile -->
                                            <div id="profile" class="content_2">
                                                <!-- .title -->
<h1 class="h-bloc">Thông tin học viên</h1>

<div class="row top-p">
    <div class="col-md-6 profile-l">
 		
        <!--About me-->
        <div class="title_content">
            <div class="text_content"><?php echo $student['Student']['name']?></div>
            <div class="clear"></div>
        </div>

		   <ul class="about">
            <li>
                <i class="glyphicon glyphicon-user"></i>
                <label style="width:60px">Họ và tên</label>
                <span class="value"><?php echo $student['Student']['name']?></span>
                <div class="clear"></div>
            </li>
            <li>
                <i class="glyphicon glyphicon-barcode"></i>
                <label>Mã số</label>
                <span class="value"><?php echo $student['Student']['code']?></span>
                <div class="clear"></div>
            </li>
            <li>
                <i class="glyphicon glyphicon-barcode"></i>
                <label>Trường học</label>
                <span class="value"><?php echo $student['School']['name']?> - <?php echo $student['Country']['name']?></span>
                <div class="clear"></div>
            </li>
            <li>
                <i class="glyphicon glyphicon-calendar"></i>
                <label>Ngày sinh</label>
                <span class="value">               	
                	<?php $date = date_create($student['Student']['birthday']);
					$result = $date -> format('d/m/Y');
					echo $result;
                	?>
                </span>
                <div class="clear"></div>
            </li>
            <li> 
                <i class="glyphicon glyphicon-map-marker"></i>
                <label>Địa chỉ</label>
                <span class="value"><?php echo $student['Student']['address']?></span>
                <div class="clear"></div>
            </li>

            <li>
                <i class="glyphicon glyphicon-envelope"></i>
                <label>Email</label>
                <span class="value"><?php echo $student['Student']['email']?></span>
                <div class="clear"></div>
            </li>

            <li>
                <i class="glyphicon glyphicon-phone"></i>
                <label>Số điện thoại</label>
                <span class="value"><?php echo $student['Student']['phone']?></span>
                <div class="clear"></div>
            </li>
            
            <?php foreach ($student['StudentInfo'] as $key => $item):?>
            <li>
                <i class="glyphicon glyphicon-cloud"></i>
                <label><?php echo $item['name']?></label>
                <span class="value"><?php echo $item['value']?></span>
                <div class="clear"></div>
            </li>    
            <?php endforeach ?>
        </ul>
        <p style="margin-bottom:20px">
                 
            <?php echo $student['Student']['description']?>
        </p>
    </div>
    <!-- End left-wrap -->

    <div class="col-md-6 profile-r">
        <div class="cycle-slideshow">
        	<!--
        	<?php if($student['Student']['image_large'] != ""):?>
            <img src="/upload/img/students/<?php echo $student['Student']['image_large']?>" alt="<?php echo $student['Student']['name']?>" />
            <?php endif?>
           -->
        </div>
    </div>

</div>

    <div class="clear"></div>
                                            </div>
                                            <!-- End .profile -->

                                            <!-- .resume -->
                                            <div id="document_info" class="content_2">
                                                <!-- .title -->
<h1 class="h-bloc">Trạng thái hồ sơ</h1> 

<div class="row">

   <!-- .resume-right -->
    <div class="col-md-12">

       <!-- /.title_content -->
        <div class="document_list">
        	<table class="table">
        		<thead>
        			<tr>
        				<th style="width:50px">STT</th>
        				<th>Hồ sơ</th>
        				<th>Trạng thái</th>
        				<th></th>
        			</tr>
        		</thead>
        		<tbody>
        			<?php 
        			$index = 0;
        			foreach ($student['Document'] as $key => $item):
						if($item['doc_type']!='1') continue;
        				$index++;
        				$link_download = ($item['url']==null || $item['url']=='')?"#":'/upload/documents/'.$item['url'];
        				?>						
        			<tr>
        				<td><?php echo $index?></td>
        				<td><?php echo $item['name']?></td>
        				<td><?php echo ($item['url']==null || $item['url']=='')?'Chưa nộp':'Đã nộp'?></td>
        				<td>
        					<?php if($link_download == "#"):?>
        					<span style="color:gray">Tải về</span>
        					<?php else: ?>
        						<a href="<?php echo $link_download?>" target="_blank">Tải về</a>
        					<?php endif ?>
        				</td>
        			</tr>
        			<?php endforeach ?>
        		</tbody>
        	</table>
        </div>
        <div class="skills">
            <!-- .skillbar -->
            <div class="skillbar clearfix" data-percent="<?php echo $student['Student']['profile_process']?>%">
                <div class="skillbar-title"><span>Hoàn thành</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent"><?php echo $student['Student']['profile_process']?>%</div>
            </div>
    
            <!-- /.skillbar -->
        </div>
    </div>
     <!-- /.resume-right -->
     
     
     
     <!-- .resume-left -->    
    <!-- /.resume-left -->
</div>

  <div style="clear: both"></div>  


                                            </div>
                                            <!-- End .resume -->

                                            <!-- .portfolio -->
                                            <div id="document_download" class="content_2">
                                                
                                                <!-- .title -->
                                                <h1 class="h-bloc">Tải xuống</h1>

                                                <div class="document_list">
            
        	<table class="table">
        		<thead>
        			<tr>
        				<th style="width:50px">STT</th>
        				<th>Tài liệu</th>        				
        				<th></th>
        			</tr>
        		</thead>
        		<tbody>
        			<?php 
        			$index = 0;
        			foreach ($student['Document'] as $key => $item):
						if($item['doc_type']!='2') continue;
        				$index++;
						$link_download = ($item['url']==null || $item['url']=='')?"#":'/upload/documents/'.$item['url'];
        				?>						
        			<tr>
        				<td><?php echo $index?></td>
        				<td><?php echo $item['name']?></td>
        				<td>
        					<?php if($link_download == "#"):?>
        					<span style="color:gray">Tải về</span>
        					<?php else: ?>
        						<a href="<?php echo $link_download?>" target="_blank">Tải về</a>
        					<?php endif ?>
        				</td>
        			</tr>
        			<?php endforeach ?>
        		</tbody>
        	</table>
        	
        </div>
                                                                                       </div>
                                                                                       
                                            <!-- End .portfolio -->
                                            
                                            
                                            
                                             <div id="calendar_download" class="content_2">
                                                
                                                <!-- .title -->
                                                <h1 class="h-bloc">Thời khóa biểu</h1>

                                                <div class="document_list">

<!-- START OF THOI KHOA BIEU -->

<div class="cd-tabs">
	<nav>
		<ul class="cd-tabs-navigation" >
			<?php foreach($calendars as $key => $item) :?>
			<li style="background-color:#FF4343; color:white;"><a data-content="content_<?php echo $item['StudentCalendarYear']['id']?>" <?php if($key==0) {?> class="selected"  <?php } ?>href="#0" style="font-size: 10pt; height:30px"><?php echo $item['StudentCalendarYear']['name']?></a></li>
			<?php endforeach ?>
		</ul> <!-- cd-tabs-navigation -->
	</nav>

	<ul class="cd-tabs-content" style="height:420px">
		<?php foreach($calendars as $key => $item) :?>		
		<li data-content="content_<?php echo $item['StudentCalendarYear']['id']?>" <?php if($key==0) {?> class="selected"  <?php } ?>>
			<div class="accordion">
				<?php foreach($item['StudentCalendarSem'] as $key1 => $item1):?>				
				<h3><?php echo $item1['name']?></h3>
				<div style="height:300px !important;">
					<?php echo $item1['content']?>					
				</div>						
				<?php endforeach ?>
			</div>
		</li>			
		<?php endforeach ?>
	</ul> <!-- cd-tabs-content -->
</div> <!-- cd-tabs -->

<!-- END OF THOI KHOA BIEU -->
	
	
	


        </div>
                                                                                       </div>

<div id="contact" class="content_2">
                                                
                                        <h1 class="h-bloc">G'Connect Education</h1>


                                        <div class="row">

                                            <div class="col-lg-12">
                                                <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&msid=210470313728098197170.0004c68fdd76ab45d555f&ie=UTF8&t=m&ll=10.782342,106.687653&spn=0.007378,0.00912&z=16&output=embed"></iframe>
                                            </div>  

                                            <div class="col-lg-12">
                                                <div class="row" id="contact-user">
                                                    <div class="col-md-5">
                                                        <div class="contact-info">
                                                            <!--<h3 class="main-heading"><span>Contact info</span></h3>-->

                                                            <div class="title_content" style="float: none;">
                                                                <div class="text_content">Thông tin liên hệ</div>
                                                                <div class="clear"></div>
                                                            </div>

                                                            <ul>
                                                                <li><span class="span-info"><i class="glyphicon glyphicon-map-marker"></i> Địa chỉ:</span> <?php echo $contact['Contact']['address']?><br /><br /></li>
                                                                <li><span class="span-info"><i class="glyphicon glyphicon-envelope"></i> Email:</span> <?php echo $contact['Contact']['email']?></li>
                                                                <li><span class="span-info"><i class="glyphicon glyphicon-phone"></i> Số điện thoại:</span> <?php echo $contact['Contact']['phone']?></li>
                                                                <li><span class="span-info"><i class="glyphicon glyphicon-globe"></i> Website:</span> <?php echo $contact['Contact']['website']?></li>                                                                
                                                            </ul>
                                                        </div>
                                                        <!-- /Contact Info -->
                                                        <div class="clear"></div>

                                                        <!--<h3 class="main-heading" style="margin-left: 22px;"><span>Follow me</span></h3>-->

                                                        <div class="title_content tiltle_contacts" style="float: none;">
                                                            <div class="text_content">Kết nối</div>
                                                            <div class="clear"></div>
                                                        </div>

                                                    

                                                            <div id="profile_social">
                                                                <a href="https://www.facebook.com/GConnect.Education" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                                <!--
                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                <a href="#"><i class="fa fa fa-dribbble"></i></a>
                                                                <a href="#"><i class="fa fa-foursquare"></i></a>
                                                                -->
                                                                <div class="clear"></div>
                                                            </div>
                                              


                                                    </div>

                                                    <div class="col-md-7">
                                                        <!-- Contact Form -->
                                                        <div class="title_content" style="float: none;">
                                                            <div class="text_content">Gửi phản hồi</div>
                                                            <div class="clear"></div>
                                                        </div>

                                                        <div class="contact-form">
                                                            <!--<h3 class="main-heading"><span>Let's keep in touch</span></h3>-->



                                                            <div id="contact-status"></div>
															<?php echo $this->Form->create('FeedBack2', array('id'=>'contactform'))?>
                                                            	<?php echo $this->Form->input('student_id', array('value'=>$student['Student']['id'],'type'=>'hidden'))?>
                                                            	
                                                                <p class="form-group" id="contact-name">
                                                                    <label for="name">Tiêu đề</label>
                                                                    <input type="text" required="true" name="title" class="form-control name-contact" id="inputSuccess" />
                                                                </p>

                                                                <p class="form-group" id="contact-message">
                                                                    <label for="message">Nội dung phản hồi</label>
                                                                    <textarea name="comment" cols="88" rows="6" class="form-control message-contact" id="inputError" placeholder="Xin mời bạn viết nội dung tại đây..."></textarea>
                                                                </p>
                                                                <!--
                                                                <input type="reset" name="reset" value="XÓA" class="reset">
                                                                -->
                                                                <input type="submit" name="submit" value="GỬI PHẢN HỒI" class="submit" style="margin-left:0px;float:left">
                                                                <div id="loading" style="float:left; margin-top: 10px; margin-left: 10px; display:none">Sending, Please wait....</div>
                                                            <?php echo $this->Form->end()?>
                                                        </div>
                                                        
                                                        <!-- /Contact Form -->
                                                    </div>
                                                </div>
                                            </div>  



                                        </div>                                            </div>

<div id="logout" class="content_2">
                                                
                                        <h1 class="h-bloc">Thoát chương trình</h1>
                                        										
										<p style="text-align: center; margin-top:50px">Bạn có chắc chắn muốn thoát khỏi chương trình?</p>
										<p style="text-align: center; margin-top:20px">
										<a href="/logout/" class="btn btn-primary">Thoát</a>
										</p>			
                                        </div>
                                            
                                            


                            </div><!-- End row -->

                        </div><!-- End col-md-12 -->

                    </div><!-- End row -->

                </div><!-- End container -->

            </section>
            <!-- End Content -->

        </div>
        
        <!-- End wrapper -->

        <!-- Switcher -->
        <!--
        <div id="custumize-style">
            <h2>Style Selector<a href="#" class="switcher"><i class="fa fa-cogs icon-switcher"></i></a></h2>
            <div>
                <h3>Theme Color</h3>
                <ul class="colors-style" id="color1">

                    <li><a href="#" class="gray"></a></li>
                    <li><a href="#" class="green"></a></li>
                    <li><a href="#" class="blue"></a></li>
                    <li><a href="#" class="red"></a></li>
                    <li><a href="#" class="yellow"></a></li>

                    <li><a href="#" class="DarkBlue"></a></li>
                    <li><a href="#" class="orange"></a></li>
                    <li><a href="#" class="rose"></a></li>
                    <li><a href="#" class="lightseagreen"></a></li>
                    <li><a href="#" class="darkolivegreen"></a></li>

                </ul>
            </div>
            <div> 

                <h3 class="layouts">Profile Image</h3>
                <div id="show">

                    <div class="clean-check">

                        <input type="radio" id="r1" name="style_profile" value="style_profile_1" checked="checked" />
                        <label for="r1"><span></span>Rotating image</label>

                        <input type="radio" id="r2" name="style_profile" value="style_profile_2" />
                        <label for="r2"><span></span>Fixed image</label>

                    </div>
                </div>


                
                <h3 class="layouts">Page Builder</h3>
                <div id="show">
                    <div class="clean-check" style="padding-left: 30px;">

                        <input type="radio" id="pb1" name="page_builder" value="http://demo.flexy-codes.com/FlexyVcard"  checked />
                        <label for="pb1"><span></span>Style 1</label>

                        <input type="radio" id="pb2" name="page_builder" value="page-builder-2.html"  />
                        <label for="pb2"><span></span>Style 2</label>

                        <input type="radio" id="pb3" name="page_builder" value="page-builder-3.html"  />
                        <label for="pb3"><span></span>Style 3</label>

                        <input type="radio" id="pb4" name="page_builder" value="page-builder-4.html"  />
                        <label for="pb4"><span></span>Style 4</label>
                    </div>
                </div>      

                <h3 class="layouts">Page Animation</h3>
                <div id="show">

                    <select name="one" class="dropdown-select">
                        <optgroup label="Bouncing Entrances">
                            <option value="bounceIn" selected>bounceIn</option>
                            <option value="bounceInDown">bounceInDown</option>
                            <option value="bounceInLeft">bounceInLeft</option>
                            <option value="bounceInRight">bounceInRight</option>
                            <option value="bounceInUp">bounceInUp</option>
                        </optgroup>

                        <optgroup label="Fading Entrances">
                            <option value="fadeIn">fadeIn</option>
                            <option value="fadeInDown">fadeInDown</option>
                            <option value="fadeInLeft">fadeInLeft</option>
                            <option value="fadeInRight">fadeInRight</option>
                            <option value="fadeInUp">fadeInUp</option>
                        </optgroup>      
                    </select>

                </div>

                <h3 class="layouts" style="padding-top:5px">Background Style</h3>
                <div id="show">

                    <div class="clean-check">

						<input type="radio" id="s1" name="layout" value="bg_color" checked="checked" />
                        <label for="s1"><span></span>Color</label>
                        
                        <input type="radio" id="s2" name="layout" value="bg_slider" />
                        <label for="s2"><span></span>Slider</label>

                    </div>

                </div>

            </div>

            <div> 
                <h3>Background Color</h3>
                <ul class="colors-style bgsolid" id="bgsolid">
                    <li><a href="#" class="gray-bg"></a></li>
                    <li><a href="#" class="green-bg"></a></li>
                    <li><a href="#" class="blue-bg"></a></li>
                    <li><a href="#" class="red-bg"></a></li>
                    <li><a href="#" class="yellow-bg"></a></li>
                </ul>
            </div> 

            <div>  
                <h3>Background Image</h3>
                <ul class="colors-style bg" id="bg">
                    <li><a href="#" class="bg1"></a></li>
                    <li><a href="#" class="bg2"></a></li>
                    <li><a href="#" class="bg3"></a></li>
                    <li><a href="#" class="bg4"></a></li>
                    <li><a href="#" class="bg5"></a></li>
                </ul>
            </div>

            <div id="button-reset"><a href="#" class="button color blue boxed">Reset</a></div>
        </div>
        -->
        <!-- End Switcher -->



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
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <script src="/js/main_tab.js"></script> <!-- Resource jQuery -->
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

			$(function() {
				$(".accordion").accordion({
					heightStyle : "content"
				});
			});
			
        </script>


        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </body>
    
</html>
