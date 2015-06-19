		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='wiki';
			$title='Wiki';
			$text='Use to enable collaborative page creation';
			$software='';

			// Ease of Use
			$styleEU='warning';
			$textEU='Tricky. Decide on individual & group settings. Can be hard to master. Get some training.';
			// Information Transfer
			$styleIT='success';
			$textIT='Yes. Use as information site. Allow editing only by teachers or by any participant.';
			// Assess Learning
			$styleAL='warning';
			$textAL='Wiki is versatile & allows this with some planning, e.g. design a formative assessment activity.';
			// Communication & Interaction
			$styleCI='warning';
			$textCI='Not suited for discussions. Use in brainstorming, planning, collaborative writing,...';
			// Co-Creation of Content
			$styleCC='success';
			$textCC='Yes. Students can collaborate & explore topics, discuss them & write together.';
			// Blooms
			$styleB='success';
			$textB='5/6 Understand, Apply, Analyse, Evaluate, Create.';

			// Additional info
			$additional="<h3>Additional Information</h3><a href='https://docs.moodle.org/en/Wiki_module'>https://docs.moodle.org/en/Wiki_module</a>";

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