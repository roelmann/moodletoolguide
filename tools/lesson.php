		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='lesson';
			$title='Lesson';
			$text='Use for presenting branched info or testing';
			$software='';

			// Ease of Use
			$styleEU='warning';
			$textEU='It can be tricky to set up, make sure you plan the lesson first. Worth the effort.';
			// Information Transfer
			$styleIT='success';
			$textIT='Great to present information in a branched, guided way. Implement adaptive learning.';
			// Assess Learning
			$styleAL='success';
			$textAL='Yes, allows grading. Use as branched quiz, scenario, case study, role play.';
			// Communication & Interaction
			$styleCI='danger';
			$textCI='No this is an individual activity, not a group activity.';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='No this is an individual activity, not a group activity.';
			// Blooms
			$styleB='warning';
			$textB='6/6 Can do all 6 but this requires you to be creative in your assessment.';

			// Additional info
			$additional="<h3>Additional Information</h3><a href='https://docs.moodle.org/en/Lesson_module'>https://docs.moodle.org/en/Lesson_module</a>";

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