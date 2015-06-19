		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='glossary';
			$title='Glossary';
			$text='Use for learning activities that gather resources or present information.';
			$software='';

			// Ease of Use
			$styleEU='success';
			$textEU='Default settings are good. Try to set it so the author’s name is shown.';
			// Information Transfer
			$styleIT='success';
			$textIT='Use glossary to define terms or present info. Better yet, let the students add to it.';
			// Assess Learning
			$styleAL='warning';
			$textAL='Glossary is versatile & allows this. But you need to design the right learning activity.';
			// Communication & Interaction
			$styleCI='warning';
			$textCI='Not suited for discussions. Students can read other entries & comment or rate.';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='Although original author can edit an entry, class can collect reviews, resources, etc.';
			// Blooms
			$styleB='success';
			$textB='5/6 Understand, Apply, Analyse, Evaluate, Create';

			// Additional info
			$additional="<h3>Additional Information</h3><a href='https://docs.moodle.org/en/Glossary_module'>https://docs.moodle.org/en/Glossary_module</a>";

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
