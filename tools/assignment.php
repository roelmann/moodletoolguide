		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='assignment';
			$title='Assignment';
			$text='Use to collect, assess & provide feedback on assignments';
			$software='';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy. Choose from 4 types. Both online & offline assignments are possible.';
			// Information Transfer
			$styleIT='danger';
			$textIT='No. However can include contextual content for the assignment.';
			// Assess Learning
			$styleAL='success';
			$textAL='Yes. Set due dates & maximum grades. Collect assignments and provide feedback.';
			// Communication & Interaction
			$styleCI='danger';
			$textCI='No. Only allows very limited interaction between teacher & student.';
			// Co-Creation of Content
			$styleCC='warning';
			$textCC='No. Currently it does not allow group assignments. Use forum or wiki .';
			// Blooms
			$styleB='warning';
			$textB='6/6 Indirectly. Depends on your assessment design.';

			// Additional info
			$additional="<h3>Additional Information</h3><a href='https://docs.moodle.org/en/Assignment_module'>https://docs.moodle.org/en/Assignment_module</a>";

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