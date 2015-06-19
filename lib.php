<?php
function toolpanel ($title,$style, $text) {
	if ($style=='success') {
		$icon='check-square-o';
	}
	if ($style=='warning') {
		$icon='exclamation-triangle';
	}
	if ($style=='danger') {
		$icon='times-circle';
	}
	if ($style=='') {
		$style='default';
		$icon='circle';
	}

?>

			<div class=<?php echo '"panel panel-'.$style.' flex-item flex-container"'; ?>>

				<div class="panel-heading flex-inner">
					<h3 class="toolpanel-title panel-title"><?php echo $title;?></h3>
					<i class=<?php echo '"fa fa-3x fa-'.$icon.'"'; ?> data-toggle="popover" data-content="<?php echo $text?>"></i>
					<p class="comment"><?php echo $text;?></p>
				</div>
			</div>
<?php
}

function toolname ($name, $title, $text, $software, $additional) {
?>
		<form class="flex-item row-header flexrowheader" action="detail.php" method="post" >
			<input type="hidden" name="tooltype" value="<?php echo $name;?>" >
			<input type="hidden" name="additional" value="<?php echo $additional;?>" > 

			<button type="submit" class="panel panel-default flex-item row-header flexrowheader">
				<div class="panel-heading flexpanelheading">
					<h3 class="panel-title"><?php echo $title;?></h3>
				</div>
				<div class="panel-body flexpanelbody">
					<p class="tool-description"><?php echo $text;?></p>
					<p class="tool-software"><?php echo $software;?></p>
				</div>
			</button>
		</form>

<?php
}

function tooldetail ($name, $additional) {
	$filename='tools/'.$name.'.php'
?>
	<div class="main-container">

		<div class="main-content detail">
			<a href="index.php">
				<i class="fa fa-2x fa-reply">Return to Main Page</i>
			</a>
			<p><br /></p>
			<?php require ($filename); ?>

			<div class='additional panel panel-default'>
				<div class="panel-body">
					<?php echo $additional; ?>
				</div>
			</div>

		</div><!-- Main-Content -->
	</div><!-- Main-Container -->

<?php require ('includes/foot.php');
}
?>
