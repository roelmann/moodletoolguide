		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='survey';
			$title='Survey';
			$text='Use to gather data from students about teaching of the course';
			$software='';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy. Choose from 3 types to assess Attitudes, Incidents and Constructivism.';
			// Information Transfer
			$styleIT='danger';
			$textIT='No. The survey tool is not a distribution channel.';
			// Assess Learning
			$styleAL='danger';
			$textAL='Not directly. Used for gathering feedback to help improve the course.';
			// Communication & Interaction
			$styleCI='danger';
			$textCI='No. Only allows one way communication from student to teacher.';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='No this is an individual activity, not a group activity.';
			// Blooms
			$styleB='warning';
			$textB='2/6 Indirectly helps student analyse and evaluate the learning.';

			// Additional info
			$additional="<h3>Additional Information</h3><a href='https://docs.moodle.org/en/Survey_module'>https://docs.moodle.org/en/Survey_module</a>";

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