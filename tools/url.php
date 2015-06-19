		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='url';
			$title='Add a URL';
			$text='Link to a web page';
			$software='';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy, find the web address (aka url – the bit that starts with http://), copy it, paste it.';
			// Information Transfer
			$styleIT='success';
			$textIT='Very easy way of directing students to information outside of Moodle.';
			// Assess Learning
			$styleAL='danger';
			$textAL='Not directly. Option is to link to external activities such as student e- portfolios & blogs.';
			// Communication & Interaction
			$styleCI='warning';
			$textCI='Maybe. Link to external tools eg Google Calendar, groups, blogs or wikis.';
			// Co-Creation of Content
			$styleCC='warning';
			$textCC='Maybe. Use to give a task. Student files can be collected through forums or assignments.';
			// Blooms
			$styleB='warning';
			$textB='6/6
Can do all of the above, depending on where you link to.';

			// Additional info
			$additional="<h3>Additional Information</h3><a href='https://docs.moodle.org/en/URL_resource'>https://docs.moodle.org/en/URL_resource</a>";

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