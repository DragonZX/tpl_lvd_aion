<?php
defined( '_JEXEC' ) or die( 'Access to this location is RESTRICTED.' );
echo '<?xml version="1.0" encoding="utf-8"?'.'>'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<?php
	// inserting mootools
		JHTML::_('behavior.mootools');
?>
<meta name="designer" content="Juergen Koller - http://www.lernvid.com" />
<meta name="licence" content="Creative Commons ShareAlike 3.0" />
<link href="templates/<?php echo $this->template ?>/css/reset.css" rel="stylesheet" type="text/css" media="all" />
<link href="templates/<?php echo $this->template ?>/css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/hover.js"></script>
   <!--[if lt IE 7]>
	  <link href="templates/<?php echo $this->template ?>/css/ie5x6x.css" rel="stylesheet" type="text/css" media="all" />
   <![endif]-->
	<?php
		if($this->countModules("left")&&!$this->countModules("right")){ $contentwidth="left";}
		if($this->countModules("right")&&!$this->countModules("left")){ $contentwidth="right";}
		if($this->countModules("left")&&$this->countModules("right")) {$contentwidth="middle"; }
	?>
</head>

<body>
	<!-- Begin Masthead -->
<div id="masthead_container">
	<div id="masthead">
        <div class="sitetitle">
        	<?php echo $mainframe->getCfg('sitename');?>
        </div>
		<div id="search">
			<?php if($this->countModules('user4')) : ?>
	             <jdoc:include type="modules" name="user4" style="xhtml" />
			<?php endif; ?>		
		</div>
	</div>
</div>
<!-- End Masthead -->
<div id="container">
<!-- Begin Container -->
	<div id="navigation">
			<?php if($this->countModules('user3')) : ?>
	             <jdoc:include type="modules" name="user3" style="xhtml" />
			<?php endif; ?>		
	</div>
	<div id="top">
			<?php if($this->countModules('top')) : ?>
	             <jdoc:include type="modules" name="top" style="xhtml" />
			<?php endif; ?>		
	</div>
	<!-- Begin Page Content -->
	<div id="page_content">
		<!-- Begin Content Upside -->
		<div id="content_up">
			<div id="content_up_left">
				<div id="content_up_right">
				</div>
			</div>
		</div>
		<!-- End Content Upside -->
			<div id="sidebar_left">
				<?php if($this->countModules('left')) : ?>
		             <jdoc:include type="modules" name="left" style="xhtml" />
				<?php endif; ?>		
			</div>
			<div id="sidebar_right">
				<?php if($this->countModules('right')) : ?>
		             <jdoc:include type="modules" name="right" style="xhtml" />
				<?php endif; ?>		
			</div>
		    <div id="content_out<?php echo $contentwidth; ?>">
				<div id="content">
					<div id="breadcrumbs">
		            	<jdoc:include type="module" name="breadcrumbs" />
				    </div>
					 <jdoc:include type="component" />
				</div>
			</div>
		</div>	
		<!-- Begin Content Downside -->
		<div id="content_down">
			<div id="content_down_left">
				<div id="content_down_right">
				</div>
			</div>
		</div>	
		<!-- End Content Downside -->
	</div>
<div class="clr"></div>
<div id="container2">
	<!-- End Page Content -->
	<div id="user_modules1">
				<?php if($this->countModules('user1')) : ?>
					<div id="user1">
				           <jdoc:include type="modules" name="user1" style="xhtml" />
					</div>
				<?php endif; ?>			
				<?php if($this->countModules('user2')) : ?>
					<div id="user2">
					           <jdoc:include type="modules" name="user2" style="xhtml" />
					</div>
				<?php endif; ?>			
	</div>					
	<div id="user_modules2">
			<?php if($this->countModules('user5')) : ?>
				<div id="user5">
					<jdoc:include type="modules" name="user5" style="xhtml" />
				</div>
			<?php endif; ?>				
			<?php if($this->countModules('user6')) : ?>
				<div id="user6">
					<jdoc:include type="modules" name="user6" style="xhtml" />
				</div>
			<?php endif; ?>				
	</div>
	<div id="footer">
		<jdoc:include type="modules" name="footer" />
	</div>
</div>
<div class="clr"></div>
<div id="designer">
	<div id="copywright">
		<p>Copywright <strong><?php echo $mainframe->getCfg('sitename');?></strong></p>
		<p>Designed by <a href="http://www.lernvid.com" target="_blank">LernVid.com</a><strong> | </strong> Valid <a href="http://validator.w3.org/check?uri=referer" target="_blank">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check?uri=templates/counterstrike_lernvid.com/css/template.css" target="_blank">CSS</a></p>
	</div>
</div>
<div id="bottom">
	<div id="go_top"><p><a href="#masthead">Top</a></p></div>
	<div id="syndicate">
		<?php if($this->countModules('syndicate')) : ?>
			<jdoc:include type="modules" name="syndicate" />
		<?php endif; ?>				
	</div>
	<div id="date"><?php echo JHTML::Date($this->date_field, "%A, %d. %B %Y"); ?><a href="http://www.lernvid.com" target="_blank">.</a></div>
	<p>Aion, NCsoft, the interlocking NC logo and all associated logos and designs are trademarks or registered trademarks of NCsoft Corporation.</p>
</div>
<jdoc:include type="modules" name="debug" style="xhtml" />
</body>
</html>