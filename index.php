<!DOCTYPE html5>

<?php 
	session_start();
	date_default_timezone_set('UCT');
?>

<html>
	<body>
		<h1>Application For The Mallet Assembly</h1>
			<form name="admissionsApp" method="POST" action="index.php">
				<p>
					Fields marked with an * are required.
				</p>

				<p>
					<input type= "text" name= "fullName" size="35" placeholder="Full Name"/>*  
				</p>

				<p>
					<input type= "text" name= "emailAddress" size="35" placeholder="Email Address">* 
				</p>

				<p>
					<input type= "text" name= "cwid" size="35" placeholder="CWID">*  
				</p>

				<p>
					<b>Are you interested in living with us?</b>* <br/>
					<input type= "radio" name= "livingOption" value = "Yes" checked> Yes<br>
					<input type= "radio" name= "livingOption" value = "No"> No<br>
					<input type= "radio" name= "livingOption" value = "Maybe"> Maybe; I need more information.<br>
				</p>

				<p>
					<input type= "tel" name= "phoneNumber" size="35" placeholder="Phone Number">* 
				</p>

				<p>
					<textarea cols="40" rows= "5" name="mailingAddress" placeholder="Mailing Address"></textarea>*  
				</p>

				<p>
					<input type= "text" name= "aCTSAT" size="35" placeholder="ACT/SAT Score (out of 36/2400)">*  
				</p>

				<p>
					<textarea cols="40" rows= "5" name="otherTests" placeholder="Any other test scores (ASVAB, LSAT, GRE, etc.)"></textarea>
				</p>

				<p>
					<input type= "text" name= "gpa" size="35" placeholder="College GPA Earned">
				</p>

				<p>
					<textarea cols="40" rows= "5" name="transferCredit" placeholder="Transfer credit and/or AP/IB credits earned"></textarea>
				</p>

				<p>
					<input type= "text" name= "majorsMinors" size="35" placeholder="Likely Major(s)/Minor(s)">
				</p>

				<p>
					Before you continue, you should note that admittance to the Assembly is noncompetitive. We have no admissions cap, and your application does not have to be better than any other. We encourage you to answer questions as completely and honestly as possible, but these questions are primarily for us to get to know you. Feel free to skip any question that you feel uncomfortable or unprepared to answer.
				</p>

				<p>
					<input type="submit" value= "Continue >>" />
					<input type="hidden" name='submit' />
				</p>
			</form>
		</body>
	</html>
