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

$cakeDescription = __d('cake_dev', 'Examination Management Tools');
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
	<link id="bs-css" href="/css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	
	<?php
		echo $this->Html->css('bootstrap-responsive');
		echo $this->Html->css('charisma-app');
		echo $this->Html->css('jquery-ui-1.8.21.custom');
		echo $this->Html->css('fullcalendar');
		echo $this->Html->css('fullcalendar.print');
		echo $this->Html->css('chosen');
		echo $this->Html->css('uniform.default');
		echo $this->Html->css('colorbox');
		echo $this->Html->css('jquery.cleditor');
		echo $this->Html->css('jquery.noty');
		echo $this->Html->css('noty_theme_default');
		echo $this->Html->css('elfinder.min');
		echo $this->Html->css('elfinder.theme');
		echo $this->Html->css('jquery.iphone.toggle');
		echo $this->Html->css('opa-icons');
		echo $this->Html->css('uploadify');
		echo $this->Html->css('survey');		
		echo $this->Html->script('survey');
	?>
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
					<span>Ecomtree</span></a>
				
				<!-- theme selector starts -->
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
				<!-- theme selector ends -->
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> admin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Profile</a></li>
						<li class="divider"></li>
						<li><a href="/administrators/logout/">Logout</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
				
				<div class="top-nav nav-collapse">
					<ul class="nav">
						<!-- <li><a href="#">Visit Site</a></li> -->
						<li>
							<form class="navbar-search pull-left">
								<input placeholder="Search" class="search-query span2" name="query" type="text">
							</form>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
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
						<li class="nav-header hidden-tablet">Main</li>
						<li><a class="ajax-link" href="/"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
						<li><a class="ajax-link" href="/categories/"><i class="icon-th"></i><span class="hidden-tablet"> Categories</span></a></li>
						<li><a class="ajax-link" href="/questions/"><i class="icon-edit"></i><span class="hidden-tablet"> Question Bank</span></a></li>
						<li><a class="ajax-link" href="/examination_rules/"><i class="icon-list-alt"></i><span class="hidden-tablet"> Examination Rules</span></a></li>
						<li><a class="ajax-link" href="/members/"><i class="icon-calendar"></i><span class="hidden-tablet"> Members</span></a></li>
						<li class="nav-header hidden-tablet">Other settings</li>
						<li><a class="ajax-link" href="/grades/"><i class="icon-align-justify"></i><span class="hidden-tablet"> Grades</span></a></li>
						<li><a class="ajax-link" href="/levels/"><i class="icon-align-justify"></i><span class="hidden-tablet"> Levels</span></a></li>
						<li><a class="ajax-link" href="/administrators/"><i class="icon-calendar"></i><span class="hidden-tablet"> Administrators</span></a></li>
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
			<p class="pull-left">&copy; <a href="http://ecomtree" target="_blank">EcomTree</a> 2014</p>
			<p class="pull-right">Powered by: <a href="http://ecomtree.com">EcomTree</a></p>
		</footer>
		
	</div>
	<!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	
	<!-- transition / effect library -->
	<script src="/js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="/js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="/js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="/js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="/js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="/js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="/js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="/js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="/js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="/js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="/js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="/js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="/js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="/js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='/js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='/js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="/js/excanvas.js"></script>
	<script src="/js/jquery.flot.min.js"></script>
	<script src="/js/jquery.flot.pie.min.js"></script>
	<script src="/js/jquery.flot.stack.js"></script>
	<script src="/js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="/js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="/js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="/js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="/js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="/js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="/js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="/js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="/js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="/js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="/js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="/js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="/js/charisma.js"></script>
		
	<?php if($_SERVER['SERVER_NAME'] == 'localhost') echo $this->element('sql_dump'); ?>
</body>
</html>
