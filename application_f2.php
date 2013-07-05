<!DOCTYPE html5>

<?php 
    session_start();
	date_default_timezone_set('UCT');
    $errFlag = 0;
    
    /*      DEBUGGING
    echo $_SESSION['fullName'];
    echo $_SESSION['emailAddress'];
    echo $_SESSION['cwid'];
    echo $_SESSION['livingOption'];
    echo $_SESSION['phoneNumber'];
    echo $_SESSION['mailingAddress'];
    echo $_SESSION['actsat'];
    echo $_SESSION['gpa'] = $gpa;
    echo $_SESSION['transferCredit'];
    echo $_SESSION['majorsMinors'];
   */
   
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        
        if (isset($_POST['back'])) {
            header('Location:application_f1.php');
        }
        
        if (empty($_POST["short1"])) {
            $short1Err = "Please answer this question.";
            $errFlag = 1;
        }
        else {
            $short1 = $_POST["short1"];
        }
        
        if (empty($_POST["short2"])) {
            $short2Err = "Please answer this question.";
            $errFlag = 1;
        }
        else {
            $short2 = $_POST["short2"];
        }
        
        if (empty($_POST["short3"])) {
            $short3Err = "Please answer this question.";
            $errFlag = 1;
        }
        else {
            $short3 = $_POST["short3"];
        }
        
        if ($errFlag == 0) {
            $_SESSION['short1'] = $short1;
            $_SESSION['short2'] = $short2;
            $_SESSION['short3'] = $short3;
            header('Location:application_f3.php');
        }
    }    
    
?>

<html>
    <body>
		<h1><?php echo $_SESSION['fullName'] . "'s";?> Application For The Mallet Assembly</h1>
        <h2>Short Answer</h2>
			<form name="admissionsApp2" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <p>
					Please answer all questions that apply to you.  If a particular question does not apply to you or you do not wish to answer it, please enter "N/A."
				</p>
            
				<p>
					<textarea cols="80" rows= "10" name="short1" placeholder="Tell us about one of your hobbies or talents, and why it does (or does not!) interest you." value="<?php echo htmlspecialchars($short1);?>"></textarea>
                    <span class="error"><?php echo $short1Err;?></span>       <!--the error class is a hook for CSS error formatting-->
				</p>

				<p>
					<textarea cols="80" rows= "10" name="short2" placeholder="What are some of your noteworthy achievements?" value="<?php echo htmlspecialchars($short2);?>"></textarea>
                    <span class="error"><?php echo $short2Err;?></span>
				</p>
                
				<p>
					<textarea cols="80" rows= "10" name="short2" placeholder="What type of roommate are you?  What type of roommate would you like to live with?" value="<?php echo htmlspecialchars($short3);?>"></textarea>
				    <span class="error"><?php echo $short3Err;?></span>
                </p>

				<p>
                    <input type="submit" name="back" value="<< Back" /><input type="submit" value= "Continue >>" />
					<input type="hidden" name='submit' />                       <!--Not used, included in case we rework the submission mechanism-->
				</p>
			</form>
	</body>
</html>
