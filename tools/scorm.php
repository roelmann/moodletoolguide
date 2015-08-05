		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='scorm';
			$title='SCORM';
			$text='Use to present content, media and assess retention.';
			$software='';

			// Ease of Use
			$styleEU='warning';
			$textEU='Can be tricky to make before adding to Moodle, uses 3rd party application.';
			// Information Transfer
			$styleIT='success';
			$textIT='Yes. Great for presenting multimedia content and animations.';
			// Assess Learning
			$styleAL='success';
			$textAL='Yes, allows grading. Can embed questions and interactive challenges.';
			// Communication & Interaction
			$styleCI='danger';
			$textCI='No. this is an individual activity, not a group activity.';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='No this is an individual activity, not a group activity.';
			// Blooms
			$styleB='warning';
			$textB='6/6 Can do all 6 but requires you to creatively design a learning object.';

			// Additional info
			$additional="<h3>Additional Information</h3><a href='https://docs.moodle.org/en/SCORM_module'>https://docs.moodle.org/en/SCORM_module</a>";

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