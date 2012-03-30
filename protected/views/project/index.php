<?php
$this->breadcrumbs=array(
	'Project',
);?>

<?php 
$cs = Yii::app()->clientScript;
$pathfinderSwfUrl = Yii::app()->assetManager->publish(Yii::getPathOfAlias("application.assets.embed")."/PFDemo.swf");
?>

<script type="text/javascript">
	swfobject.embedSWF("<?php echo $pathfinderSwfUrl; ?>", "a_star_pathfinder", "400", "224", "9.0.0");
</script>

<h1>A* Pathfinder Demo</h1>
<p>
<a href="https://github.com/kevhiggins/a-star_pathfinder">https://github.com/kevhiggins/a-star_pathfinder</a>
</p>
<div id="a_star_pathfinder">
	<p>A* Pathfinder SWF</p>
</div>
