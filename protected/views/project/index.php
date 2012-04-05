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
	swfobject.embedSWF("<?php echo $pathfinderSwfUrl; ?>", "a_star_pathfinder", "400", "224", "9.0.0",null,null,{"wmode":"opaque"});
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
	<h1>This Website</h1>
	<p>
	A website to keep track of things about me! I've hosted it on Git, since it's nice to keep everything under version control.
	</p>
	<p>
	It's created in PHP, Yii, JQuery and other fun technologies I come across.
	</p>
	<p>
	<?php echo KHtml::quickLink("https://github.com/kevhiggins/kevin-higgins.com"); ?>
	</p>
</div>

<div class="well">
	<h1>A* Pathfinder Demo</h1>
	<p>
	This was a game I began working on for fun. I abstracted some of the earlier work into a package to showcase the A* implementation.
	</p>
	<p>
	It was created early 2011, so it's probably one of the better examples of how I structure my code now.
	</p>
	<p>
	If you click a square, the program will use the A* search algorithm to find the shortest path.
	</p>
	<p>Actionscript3</p>
	<p>http://en.wikipedia.org/wiki/A*_search_algorithm</p>
	<p>
	<?php echo KHtml::quickLink("https://github.com/kevhiggins/a-star_pathfinder"); ?>
	</p>
	<div style="z-index:0">
		<div id="a_star_pathfinder">
		</div>
	</div>
</div>

<div class="well">
	<h1>Professor Alder</h1>
	<p>
	Professor Alder is a chat bot who likes to talk about pokemon.
	He will use <a href="http://en.wikipedia.org/wiki/ELIZA">Eliza</a> like <?php echo CHtml::link("natural language processing", "http://en.wikipedia.org/wiki/Natural_language_processing"); ?> transformations, and web scraping to try and come up with interesting and topical responses.
	</p>
	<p>
	This project was created to learn more about Perl modules and natural language processing.
	It's pretty old, so structure wise it's a little lacking, but it does a good job of demonstrating familiarity with web scraping, NLP and regex.
	</p>
	
	<p>
	<?php echo KHtml::quickLink("https://github.com/kevhiggins/Bot-ProfAlder"); ?>
	</p>
	<?php echo CHtml::image($oakImg); ?>
</div>

<div class="well">
	<h1>Go Board Game - Team Project</h1>
	<p>
	This project allows two users to play the board game <?php echo CHtml::link("Go", "http://en.wikipedia.org/wiki/Go_(game)"); ?> (a favorite of mine) over a network.
	</p>
	<p>
	It was a fun team project, since we split it into three main components: UI, Game logic, and Networking.
	After taking some time to design how the three components would interact, we each implemented our parts, and integrated them together with very little pain.
	</p>
	<p>
	<?php echo KHtml::quickLink("https://github.com/kevhiggins/go_java_game"); ?>
	</p>
</div>
