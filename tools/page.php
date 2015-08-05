		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='page';
			$title='Add a Page';
			$text='Create a webpage in Moodle';
			$software='';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy, just create the page using the HTML editor, adding multi- media if needed.';
			// Information Transfer
			$styleIT='success';
			$textIT='Yes. Only teachers can create the page. So definitely a push-tool.';
			// Assess Learning
			$styleAL='warning';
			$textAL='Maybe. Use to give task. Collect student files through Forum or Assignment.';
			// Communication & Interaction
			$styleCI='warning';
			$textCI='Maybe. Embed or link to interactive web2.0 widgets into the page eg Voicethread.';
			// Co-Creation of Content
			$styleCC='warning';
			$textCC='Maybe. Use to give a task. Student files can be collected through forums or assignments.';
			// Blooms
			$styleB='danger';
			$textB='None. This is not a learning activity, but information transfer.';

			// Additional info
			$additional="<h3>Additional Information</h3><a href='https://docs.moodle.org/en/Page_resource'>https://docs.moodle.org/en/Page_resource</a>";

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