		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='title';
			$title='<p><strong>What do you want to achieve (pedagogy)?</strong><i class="fa fa-arrow-right fa-2x" style="float:right;"></i></p><p><br /></p><p><strong>What do you want to use (technology)?</strong><i class="fa fa-arrow-down fa-2x"></i></p>';
			$text='Click on the tool title for additional info.';
			$software='';

			// Ease of Use
			$styleEU='';
			$textEU='<strong>Ease of Use</strong><br /> How easily can this be set up by you';
			// Information Transfer
			$styleIT='';
			$textIT='<strong>Info Xfer</strong><br /> Is it a tool for disseminating information from you to your students?';
			// Assess Learning
			$styleAL='';
			$textAL='<strong>Assess</strong><br /> Will this tool allow you to assess your students learning?';
			// Communication & Interaction
			$styleCI='';
			$textCI='<strong>Comms</strong><br /> Can this tool be used for comms & interaction among participants (you & your students)';
			// Co-Creation of Content
			$styleCC='';
			$textCC='<strong>Co-create</strong><br /> Can you & your students collaborate and create content together?';
			// Blooms
			$styleB='';
			$textB='<strong>Bloom</strong><br /> Remember, Understand, Apply, Analyse, Evaluate, Create';

			// Additional info
			$additional="";

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
