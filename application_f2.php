<!DOCTYPE html5>
<html>
    <body>
		<h1>Application For The Mallet Assembly</h1>
        <h2>Short Answer</h2>
			<form name="admissionsApp2" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                
				<p>
					<textarea cols="80" rows= "10" name="essay1" placeholder="Tell us about one of your hobbies or talents, and why it does (or does not!) interest you." value="<?php echo htmlspecialchars($otherTests);?>"></textarea>
				</p>

				<p>
					<textarea cols="80" rows= "10" name="essay2" placeholder="What are some of your noteworthy achievements?" value="<?php echo htmlspecialchars($otherTests);?>"></textarea>
				</p>
                
				<p>
					<textarea cols="80" rows= "10" name="essay3" placeholder="What type of roommate are you?  What type of roommate would you like to live with?" value="<?php echo htmlspecialchars($transferCredit);?>"></textarea>
				</p>

				<p>
					<input type="submit" value= "Continue >>" />
					<input type="hidden" name='submit' />                       <!--Not used, included in case we rework the submission mechanism-->
				</p>
			</form>
		</body>
	</html>
