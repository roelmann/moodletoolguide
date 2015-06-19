		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='chat';
			$title='Chat';
			$text='Hold real-time text chat discussions with class';
			$software='';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy to set up, requires some effort to manage.';
			// Information Transfer
			$styleIT='warning';
			$textIT='Use for invited speakers. High speed message volume. Risk of non-interaction.';
			// Assess Learning
			$styleAL='warning';
			$textAL='Chat is versatile. Can use in formative assessment activities.';
			// Communication & Interaction
			$styleCI='success';
			$textCI='Yes. Hold debates, small group review sessions and hold drop-in session for Q&A.';
			// Co-Creation of Content
			$styleCC='success';
			$textCC='Yes. Students can collaborate & explore topics, discuss them & write together.';
			// Blooms
			$styleB='success';
			$textB='5/6 Understand, Apply, Analyse, Evaluate, Create';

			// Additional info
			$additional="<h3>Additional Information</h3><a href='https://docs.moodle.org/en/Chat_module'>https://docs.moodle.org/en/Chat_module</a>";

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