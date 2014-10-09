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

$cakeDescription = __d('cake_dev', 'School Management');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Survey - Ecomtree">
	<meta name="author" content="Tran Ba Loc">
	
	<!-- The styles -->
	<link id="bs-css" href="/cms/css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="/cms/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="/cms/css/charisma-app.css" rel="stylesheet">
	<link href="/cms/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='/cms/css/fullcalendar.css' rel='stylesheet'>
	<link href='/cms/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='/cms/css/chosen.css' rel='stylesheet'>
	<link href='/cms/css/uniform.default.css' rel='stylesheet'>
	<link href='/cms/css/colorbox.css' rel='stylesheet'>
	<link href='/cms/css/jquery.cleditor.css' rel='stylesheet'>
	<link href='/cms/css/jquery.noty.css' rel='stylesheet'>
	<link href='/cms/css/noty_theme_default.css' rel='stylesheet'>
	<link href='/cms/css/elfinder.min.css' rel='stylesheet'>
	<link href='/cms/css/elfinder.theme.css' rel='stylesheet'>
	<link href='/cms/css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='/cms/css/opa-icons.css' rel='stylesheet'>
	<link href='/cms/css/uploadify.css' rel='stylesheet'>
	<link href='/cms/css/survey.css' rel='stylesheet'>
	<!-- jQuery -->
	<script src="/js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="/js/jquery-ui-1.8.21.custom.min.js"></script>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
</head>
<body>
	<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"> 
					<?php echo $this->Html->image('logo20.png')?>
					<span>School</span></a>
				
				<!-- theme selector starts -->
				<!--
				<div class="btn-group pull-right theme-container" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-tint"></i><span class="hidden-phone"> Change Theme / Skin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" id="themes">
						<li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>
						<li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>
						<li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
						<li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
						<li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
						<li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
						<li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
						<li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
						<li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
					</ul>
				</div>
				-->
				<!-- theme selector ends -->
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> admin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Thông tin</a></li>
						<li class="divider"></li>
						<li><a href="/cms/administrators/logout/">Thoát</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
				<!--
				<div class="top-nav nav-collapse">
					<ul class="nav">
						
						<li>
							<form class="navbar-search pull-left">
								<input placeholder="Search" class="search-query span2" name="query" type="text">
							</form>
						</li>
					</ul>
				</div>
				-->
				<!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<!-- topbar ends -->
	
	<div class="container-fluid">
		<div class="row-fluid">
				
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Chức năng chính</li>
						<li><a class="ajax-link" href="/cms/"><i class="icon-home"></i><span class="hidden-tablet"> Bảng điều khiển</span></a></li>
						<li><a class="ajax-link" href="/cms/students/"><i class="icon-th"></i><span class="hidden-tablet"> Học viên</span></a></li>
						<li class="nav-header hidden-tablet">Thiết lập khác</li>
						<li><a class="ajax-link" href="/cms/schools/"><i class="icon-edit"></i><span class="hidden-tablet"> Trường học</span></a></li>
						<li><a class="ajax-link" href="/cms/countries/"><i class="icon-list-alt"></i><span class="hidden-tablet"> Quốc gia</span></a></li>
						<li><a class="ajax-link" href="/cms/administrators/"><i class="icon-calendar"></i><span class="hidden-tablet"> Quản trị viên</span></a></li>
					</ul>
					<!--<label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>-->
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#"><?php echo $title_for_layout; ?></a>
					</li>
				</ul>
			</div>
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
			<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
		<hr>

		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>

		<footer>
			<p class="pull-left">&copy; <a href="mailto:htpthao1090@gmail.com" target="_blank">Thao Hoang</a> 2014</p>
			<p class="pull-right">Powered by: <a href="mailto:htpthao1090@gmail.com">Thao Hoang</a></p>
		</footer>
		
	</div>
	<!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	
	<!-- transition / effect library -->
	<script src="/cms/js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="/cms/js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="/cms/js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="/cms/js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="/cms/js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="/cms/js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="/cms/js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="/cms/js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="/cms/js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="/cms/js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="/cms/js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="/cms/js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="/cms/js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="/cms/js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='/cms/js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='/cms/js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="/cms/js/excanvas.js"></script>
	<script src="/cms/js/jquery.flot.min.js"></script>
	<script src="/cms/js/jquery.flot.pie.min.js"></script>
	<script src="/cms/js/jquery.flot.stack.js"></script>
	<script src="/cms/js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="/cms/js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="/cms/js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="/cms/js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="/cms/js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="/cms/js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="/cms/js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="/cms/js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="/cms/js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="/cms/js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="/cms/js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="/cms/js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="/cms/js/charisma.js"></script>
		
	<?php if($_SERVER['SERVER_NAME'] == 'localhost') echo $this->element('sql_dump'); ?>
</body>
</html>
