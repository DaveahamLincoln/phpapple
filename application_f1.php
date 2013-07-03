<!DOCTYPE html5>

<?php 
	session_start();
	date_default_timezone_set('UCT');
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        if (empty($_POST["fullName"])) {
            $fullNameErr = "Please enter your name.";
        }
        else {
            $fullName = $_POST["fullName"];
        }
        
        if (empty($_POST["emailAddress"])) {
            $emailAddressErr = "Please enter your email.";
            $errFlag = 1;
        }
        else {
            $emailAddress = $_POST["emailAddress"];
        }
        
        if (empty($_POST["cwid"])) {
            $cwidErr = "Please enter your CWID.";
            $errFlag = 1;
        }
        else {
            $cwid = $_POST["cwid"];
        }
        
        if (empty($_POST["phoneNumber"])) {
            $phoneNumberErr = "Please enter your phone number.";
            $errFlag = 1;
        }
        else {
            $phoneNumber = $_POST["phoneNumber"];
        }
        
        if (empty($_POST["mailingAddress"])) {
            $mailingAddressErr = "Please enter your mailing address.";
            $errFlag = 1;
        }
        else {
            $mailingAddress = $_POST["mailingAddress"];
        }
        
        if (empty($_POST["actsat"])) {
            $actsatErr = "Please enter your ACT/SAT score.";
            $errFlag = 1;
        }
        else {
            $actsat = $_POST["actsat"];
        }
        
        if ($errFlag == 0) {
            $_SESSION['fullName'] = $fullName;
            $_SESSION['emailAddress'] = $emailAddress;
            $_SESSION['cwid'] = $cwid;
            $_SESSION['livingOption'] = $livingOption;
            $_SESSION['phoneNumber'] = $phoneNumber;
            $_SESSION['mailingAddress'] = $mailingAddress;
            $_SESSION['actsat'] = $actsat;
            $_SESSION['gpa'] = $gpa;
            $_SESSION['transferCredit'] = $transferCredit;
            $_SESSION['majorsMinors'] = $majorsMinors;        
            header('Location:application_f2.php');
        }
    }    
    
?>

<html>
	<body>
		<h1>Application For The Mallet Assembly</h1>
			<form name="admissionsApp1" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<p>
					Fields marked with an * are required.
				</p>

				<p>
					<input type= "text" name= "fullName" size="35" placeholder="Full Name" value="<?php echo htmlspecialchars($fullName);?>">*  
                    <span class="error"><?php echo $fullNameErr;?></span>       <!--the error class is a hook for CSS error formatting-->
				</p>

				<p>
					<input type= "text" name= "emailAddress" size="35" placeholder="Email Address" value="<?php echo htmlspecialchars($emailAddress);?>">*  
                    <span class="error"><?php echo $emailAddressErr;?></span>
				</p>

				<p>
					<input type= "text" name= "cwid" size="35" placeholder="CWID" value="<?php echo htmlspecialchars($cwid);?>">*  
                    <span class="error"><?php echo $cwidErr;?></span>  
				</p>

				<p>
					<b>Are you interested in living with us?</b>* <br/>
					<input type= "radio" name= "livingOption" value = "Yes" checked> Yes<br>
					<input type= "radio" name= "livingOption" value = "No"> No<br>
					<input type= "radio" name= "livingOption" value = "Maybe"> Maybe; I need more information.<br>
				</p>

				<p>
					<input type= "tel" name= "phoneNumber" size="35" placeholder="Phone Number"value="<?php echo htmlspecialchars($phoneNumber);?>">*  
                    <span class="error"><?php echo $phoneNumberErr;?></span> 
				</p>

				<p>
					<textarea cols="40" rows= "5" name="mailingAddress" placeholder="Mailing Address" value="<?php echo htmlspecialchars($mailingAddress);?>"></textarea>*  
                    <span class="error"><?php echo $mailingAddressErr;?></span> 
				</p>

				<p>
					<input type= "text" name= "actsat" size="35" placeholder="ACT/SAT Score (out of 36/2400)" value="<?php echo htmlspecialchars($actsat);?>">*  
                    <span class="error"><?php echo $actsatErr;?></span>  
				</p>

				<p>
					<textarea cols="40" rows= "5" name="otherTests" placeholder="Any other test scores (ASVAB, LSAT, GRE, etc.)" value="<?php echo htmlspecialchars($otherTests);?>"></textarea>
				</p>

				<p>
					<input type= "text" name= "gpa" size="35" placeholder="College GPA Earned" value="<?php echo htmlspecialchars($gpa);?>">
				</p>

				<p>
					<textarea cols="40" rows= "5" name="transferCredit" placeholder="Transfer credit and/or AP/IB credits earned" value="<?php echo htmlspecialchars($transferCredit);?>"></textarea>
				</p>

				<p>
					<input type= "text" name= "majorsMinors" size="35" placeholder="Likely Major(s)/Minor(s)" value="<?php echo htmlspecialchars($majorsMinors);?>">
				</p>

				<p>
					Before you continue, you should note that admittance to the Assembly is noncompetitive. We have no admissions cap, and your application does not have to be better than any other. We encourage you to answer questions as completely and honestly as possible, but these questions are primarily for us to get to know you. Feel free to skip any question that you feel uncomfortable or unprepared to answer.
				</p>

				<p>
					<input type="submit" value= "Continue >>" />
					<input type="hidden" name='submit' />                       <!--Not used, included in case we rework the submission mechanism-->
				</p>
			</form>
		</body>
	</html>
