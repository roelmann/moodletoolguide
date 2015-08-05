		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='book';
			$title='Add a Book';
			$text='Create a series of linked chapters as webpages';
			$software='';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy, just create a set of pages using the editor. Embed media if required.';
			// Information Transfer
			$styleIT='success';
			$textIT='A way to present information to students. Can be printed by chapter or as full book.';
			// Assess Learning
			$styleAL='warning';
			$textAL='Maybe. Use to give a task. Student files can be collected through forums or assignments.';
			// Communication & Interaction
			$styleCI='warning';
			$textCI='Maybe. Embed or link to interactive web2.0 widgets into the page eg Voicethread.';
			// Co-Creation of Content
			$styleCC='warning';
			$textCC='Maybe. You can link to external collaborative sites e.g. GoogleDocs, or wikis and blogs.';
			// Blooms
			$styleB='danger';
			$textB='None. This is not a learning activity, but information transfer.';

			// Additional info
			$additional="<h3>Additional Information</h3><a href='https://docs.moodle.org/en/Book_resource'>https://docs.moodle.org/en/Book_resource</a>";

			// Display panels
			toolname($name,$title,$text,$software,$additional);
			toolpanel('Ease of Use',$styleEU,$textEU);
			toolpanel('Information Transfer',$styleIT,$textIT);
			toolpanel('Assess Learning',$styleAL,$textAL);
			toolpanel('Communication & Interaction',$styleCI,$textCI);
			toolpanel('Co-Create Content',$styleCC,$textCC);
			toolpanel('Blooms',$styleB,$textB);
			?>

		</div><!-- Row -->