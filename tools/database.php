		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='database';
			$title='Database';
			$text='Allow students to collect, share & search created artifacts';
			$software='';

			// Ease of Use
			$styleEU='danger';
			$textEU='Tricky to set up. Know what you want before you build. Get some training.';
			// Information Transfer
			$styleIT='warning';
			$textIT='Can be used for teacher to present info, but better to let the students add to it.';
			// Assess Learning
			$styleAL='warning';
			$textAL='Database is versatile & allows this. But you need to design the right learning activity.';
			// Communication & Interaction
			$styleCI='warning';
			$textCI='Not suited for discussions. Students can read other entries & comment or rate.';
			// Co-Creation of Content
			$styleCC='success';
			$textCC='Students can share info & files in searchable way. Create joint collections.';
			// Blooms
			$styleB='success';
			$textB='5/6 Understand, Apply, Analyse, Evaluate, Create';

			// Additional info
			$additional="<h3>Additional Information</h3><a href='https://docs.moodle.org/en/Database_activity_module'>https://docs.moodle.org/en/Database_activity_module</a>";

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