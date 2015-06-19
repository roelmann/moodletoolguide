		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='quiz';
			$title='Quiz';
			$text='Use to assess learning, formative or summative.';
			$software='';

			// Ease of Use
			$styleEU='danger';
			$textEU='Tricky & takes time. Set up quiz, then questions. Consider your categories.';
			// Information Transfer
			$styleIT='danger';
			$textIT='The quiz is aimed at assessment, not as distribution channel. Tip: use as self-diagnostic.';
			// Assess Learning
			$styleAL='success';
			$textAL='Quiz can be timed & secure. Has essay, mc, true/ false, matching, & other questions.';
			// Communication & Interaction
			$styleCI='danger';
			$textCI='No. Tip: Use forums instead.';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='No. Tip: Use forums or wikis instead.';
			// Blooms
			$styleB='warning';
			$textB='6/6 Can do all 6 but this requires you to be creative in your assessment.';

			// Additional info
			$additional="<h3>Additional Information</h3><a href='https://docs.moodle.org/en/Quiz_module'>https://docs.moodle.org/en/Quiz_module</a>";

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