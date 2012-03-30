<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<?php
		
		// Register favicon.
//		$cs = Yii::app()->clientScript;
//		$favicon_url = Yii::app()->assetManager->publish(Yii::getPathOfAlias("application.assets.img")."/favicon.png");
//		$logo_url = Yii::app()->assetManager->publish(Yii::getPathOfAlias("application.assets.img")."/logo.png");
//		$cs->registerLinkTag('shortcut icon', 'image/x-icon', $favicon_url);	
	?>
	
	<style> 
		body {
			padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
		}
	</style> 
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<?php $this->widget('bootstrap.widgets.BootNavbar', array(
	'fixed'=>true,
	'brand'=>'Kevin Higgins',
	'brandUrl'=>'/',
	'collapse'=>true, // requires bootstrap-responsive.css
	'items'=>array(
		array(
			'class'=>'bootstrap.widgets.BootMenu',
			'items'=>array(
				array('label'=>'About', 'url'=>'#'),
				array('label'=>'Projects', 'url'=>'/project'),
				/*
				array('label'=>'Configure', 'url'=>'#', 'items'=>array(
					array('label'=>'Default Settings', 'url'=>'#'),
					array('label'=>'Update Live PBX', 'url'=>'#'),
					array('label'=>'View License Info', 'url'=>'#'),
//                    '---',
 //                   array('label'=>'Separated link', 'url'=>'#'),
				)),
				*/
			),
		),
	),
)); ?>

<div class="container">
	<?php echo $content; ?>
</div><!-- page -->

</body>
</html>
