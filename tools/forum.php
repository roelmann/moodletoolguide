		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='forum';
			$title='Forum';
			$text='Use for many types of learning activities';
			$software='';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy. Forum has usable default settings. A name & description is enough.';
			// Information Transfer
			$styleIT='warning';
			$textIT='Share resources as links or files. High message volume? Risk of losing info.';
			// Assess Learning
			$styleAL='warning';
			$textAL='Forum is versatile & allows this, e.g. design a formative assessment activity.';
			// Communication & Interaction
			$styleCI='success';
			$textCI='Yes. Students communicate with you & peers. Interact as a class or in groups.';
			// Co-Creation of Content
			$styleCC='success';
			$textCC='Yes. Students can collaborate & explore topics, discuss them & write together.';
			// Blooms
			$styleB='success';
			$textB='5/6 Understand, Apply, Analyse, Evaluate, Create';

			// Additional info
			$additional="<h3>Additional Information</h3><a href='https://docs.moodle.org/en/Forum_module'>https://docs.moodle.org/en/Forum_module</a>";

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