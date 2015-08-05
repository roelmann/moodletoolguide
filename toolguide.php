<!DOCTYPE html>
<?php
require ('includes/head.php');
require ('lib.php');
?>

<body role="document">
<div class="main-container">
	<?php require ('includes/header.php'); ?>

		<div class="main-content">
			<div class="maintitlerow">
				<?php require ('tools/title.php'); ?>
			</div>
			<?php require ('tools/file.php'); ?>
			<?php require ('tools/folder.php'); ?>
			<?php require ('tools/page.php'); ?>
			<?php require ('tools/book.php'); ?>
			<?php require ('tools/url.php'); ?>
			<?php require ('tools/wiki.php'); ?>
			<?php require ('tools/glossary.php'); ?>
			<?php require ('tools/database.php'); ?>
			<?php require ('tools/survey.php'); ?>
			<?php require ('tools/feedback.php'); ?>
			<?php require ('tools/choice.php'); ?>
			<?php require ('tools/quiz.php'); ?>
			<?php require ('tools/lesson.php'); ?>
			<?php require ('tools/assignment.php'); ?>
			<?php require ('tools/workshop.php'); ?>
			<?php require ('tools/scorm.php'); ?>
			<?php require ('tools/chat.php'); ?>
			<?php require ('tools/forum.php'); ?>
			<?php require ('tools/mobile.php'); ?>
			<?php require ('tools/external.php'); ?>

		</div><!-- Main-Content -->
	<?php require ('includes/footer.php');?>
</div><!-- Main-Container -->

<?php require ('includes/foot.php'); ?>
