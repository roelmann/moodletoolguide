		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='external';
			$title='External Tool';
			$text='Use to connect to a 3rd party learning activity';
			$software='';

			// Ease of Use
			$styleEU='warning';
			$textEU='Requires access to the external tool before configuring.';
			// Information Transfer
			$styleIT='warning';
			$textIT='This depends on the tool that it connects to – it could be anything.';
			// Assess Learning
			$styleAL='warning';
			$textAL='Yes, but the Tool must pass back the grades into Moodle to be recorded.';
			// Communication & Interaction
			$styleCI='warning';
			$textCI='Maybe. If the tool provides options for interaction & communication.';
			// Co-Creation of Content
			$styleCC='warning';
			$textCC='Maybe. If the tool is a collaborative environment like Mediawiki or Drupal.';
			// Blooms
			$styleB='warning';
			$textB='6/6 This can be anything – depends on the connected Tool.';

			// Additional info
			$additional="<h3>Additional Information</h3><a href='https://docs.moodle.org/en/External_tool'>https://docs.moodle.org/en/External_tool</a>";

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