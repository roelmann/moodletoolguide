		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='choice';
			$title='Choice';
			$text='Use for student decision making, voting and topic selection.';
			$software='';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy. Define the options and whether you want to limit numbers per choice or not.';
			// Information Transfer
			$styleIT='danger';
			$textIT='No. The Choice is best assessing and querying the students on a topic.';
			// Assess Learning
			$styleAL='success';
			$textAL='Use choice to quickly test understanding, like mulitple choice questions.';
			// Communication & Interaction
			$styleCI='danger';
			$textCI='No. Tip: Use the forum or chat instead.';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='No. Tip: Use forums, glossaries or wikis instead.';
			// Blooms
			$styleB='warning';
			$textB='5/6 Can do 5 but this requires you to be creative in your usage.';

			// Additional info
			$additional="<h3>Additional Information</h3><a href='https://docs.moodle.org/en/Choice_module'>https://docs.moodle.org/en/Choice_module</a>";

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