		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='feedback';
			$title='Feedback';
			$text='Use to gather data from students on any topic.';
			$software='';

			// Ease of Use
			$styleEU='warning';
			$textEU='Easy but takes time. Configure and then add questions.';
			// Information Transfer
			$styleIT='danger';
			$textIT='No. The Feedback tool is not a distribution channel.';
			// Assess Learning
			$styleAL='success';
			$textAL='Yes. Use to have students self- assess their understanding before and after.';
			// Communication & Interaction
			$styleCI='danger';
			$textCI='No. Only allows one way communication from student to teacher.';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='No this is an individual activity, not a group activity.';
			// Blooms
			$styleB='warning';
			$textB='6/6 Candoall6but this requires you to be creative in your approach.';

			// Additional info
			$additional="<h3>Additional Information</h3><a href='https://docs.moodle.org/en/Feedback_module'>https://docs.moodle.org/en/Feedback_module</a>";

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