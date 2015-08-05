		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='mobile';
			$title='Moodle Mobile';
			$text='Use to have students record video, audio into Moodle';
			$software='';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy to use. Submits directly to the user Private Files in Moodle.';
			// Information Transfer
			$styleIT='warning';
			$textIT='Easy way to add video / audio / imagery to other activities.';
			// Assess Learning
			$styleAL='danger';
			$textAL='No. But yes in conjunction with other activity for student created content project.';
			// Communication & Interaction
			$styleCI='warning';
			$textCI='Able to message participants on course from mobile.';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='No. This tool enables students individually create media / content.';
			// Blooms
			$styleB='warning';
			$textB='2/6 Best used with another tool.';

			// Additional info
			$additional="<h3>Additional Information</h3><a href='https://docs.moodle.org/en/Moodle_for_mobile'>https://docs.moodle.org/en/Moodle_for_mobile</a>";

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