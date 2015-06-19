		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='workshop';
			$title='Workshop';
			$text='Use to collect, assess & generate peer review of student work';
			$software='';

			// Ease of Use
			$styleEU='danger';
			$textEU='Tricky and takes planning & time. 4 stages to follow for setting it up.';
			// Information Transfer
			$styleIT='danger';
			$textIT='No. Better to use another tool for this.';
			// Assess Learning
			$styleAL='success';
			$textAL='Yes. Students can be assessed on their contribution and on their review of others.';
			// Communication & Interaction
			$styleCI='danger';
			$textCI='No. Allows for feedback but overall limited interaction.';
			// Co-Creation of Content
			$styleCC='warning';
			$textCC='No. Currently it does not allow group assignments. Use forum or wiki.';
			// Blooms
			$styleB='warning';
			$textB='6/6 Indirectly. Depends on your assessment design.';

			// Additional info
			$additional="<h3>Additional Information</h3><a href='https://docs.moodle.org/en/Workshop_module'>https://docs.moodle.org/en/Workshop_module</a>";

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