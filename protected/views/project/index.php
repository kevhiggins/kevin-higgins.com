<?php
$this->breadcrumbs=array(
	'Project',
);?>

<?php 
$cs = Yii::app()->clientScript;
$pathfinderSwfUrl = Yii::app()->assetManager->publish(Yii::getPathOfAlias("application.assets.embed")."/PFDemo.swf");

$oakImg = Yii::app()->assetManager->publish(Yii::getPathOfAlias("application.assets.img")."/oak.jpg");
?>



<script type="text/javascript">
	swfobject.embedSWF("<?php echo $pathfinderSwfUrl; ?>", "a_star_pathfinder", "400", "224", "9.0.0");
</script>

<div class="well">
<h1>
Nice to meet you.
</h1>
<p>
This is a residence for the various projects I've been working on. You'll find the most recent projects towards the top.
</p>

</div>

<div class="well">
	<h1>A* Pathfinder Demo</h1>
	<p>
	This was a game I began working on for fun. I abstracted some of the earlier work into a package to showcase the A* implementation.
	</p>
	<p>
	If you click a square, the program will use the A* search algorithm to find the shortest path.
	</p>
	<p>Actionscript3</p>
	<p>http://en.wikipedia.org/wiki/A*_search_algorithm</p>
	<p>
	<a href="https://github.com/kevhiggins/a-star_pathfinder">https://github.com/kevhiggins/a-star_pathfinder</a>
	</p>
	<div id="a_star_pathfinder">
	</div>
</div>

<div class="well">
	<h1>Professor Alder</h1>
	<p>
	Professor Alder is a chat bot who likes to talk about pokemon.
	He will use Eliza <a href="http://en.wikipedia.org/wiki/ELIZA">http://en.wikipedia.org/wiki/ELIZA</a> like NLP transformations, and web scraping to try and come up with interesting and topical responses.
	This project was created to learn more about Perl modules and natural language programming.

	</p>
	<p>
	<a href="https://github.com/kevhiggins/Bot-ProfAlder">https://github.com/kevhiggins/Bot-ProfAlder</a>
	</p>
	<?php echo CHtml::image($oakImg); ?>
</div>

<div class="well">
	<h1>Ad Astra</h1>
	<p>
	This incomplete program is based a board game I enjoy called <?php echo CHtml::link("Ad Astra", "http://boardgamegeek.com/boardgame/38343/ad-astra"); ?>
	</p>
</div>
