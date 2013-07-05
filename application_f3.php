<!DOCTYPE html5>

<!---Ok, so since c9 doesn't support the $_SESSIONS array at this point, I'm going 
to have to do a lot of this without debugging it and then test it on a live server 
once it's prototyped.--->

<?php 
    session_start();
    date_default_timezone_set('UCT');
    $errFlag = 0;
    
    /*      $_SESSION DEBUGGING
    echo $_SESSION['fullName'];
    echo $_SESSION['emailAddress'];
    echo $_SESSION['cwid'];
    echo $_SESSION['livingOption'];
    echo $_SESSION['phoneNumber'];
    echo $_SESSION['mailingAddress'];
    echo $_SESSION['actsat'];
    echo $_SESSION['gpa'];
    echo $_SESSION['transferCredit'];
    echo $_SESSION['majorsMinors'];
    echo $_SESSION['short1'];
    echo $_SESSION['short2'];
    echo $_SESSION['short3'];
   */
   
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        
        if (isset($_POST['back'])) {
            header('Location:application_f2.php');
        }
        
        if (empty($_POST["free1"])) {
            if(empty($_POST["free2"])) {
                if(empty($_POST["free3"])) {
                    if(empty($_POST["free4"])) {
                        $freeErr = "Please answer at least one question.";
                        $errFlag = 1;
                    }
                }
            }
        }
        else {
            if ($_POST["legalAgreementTick[]"] == 'on') {
                $free1 = $_POST["free1"];
                $free2 = $_POST["free2"];
                $free3 = $_POST["free3"];
                $free4 = $_POST["free4"];
            }
            else {
                $freeErr = "Please accept the Terms and Conditions.";
                $errFlag = 1;
            }
        }
        
        if ($errFlag == 0) {
            $_SESSION['free1'] = $free1;
            $_SESSION['free2'] = $free2;
            $_SESSION['free3'] = $free3;
            $_SESSION['free4'] = $free4;
            header('Location:application_process.php');
        }
    }    
    
?>

<html>
    <body>
		<h1><?php echo $_SESSION['fullName'] . "'s";?> Application For The Mallet Assembly</h1>
        <h2>Free Response</h2>
			<form name="admissionsApp3" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <p>
					Fill out as many as you’d like, but please answer at least one.  There are no minimum or maximum limits to length, but a short paragraph should suffice.
				</p>
            
				<p>
                    <b>Mallet is not only an academic organization, we also appreciate your unique talents and abilities.  Show or describe to us something that you’ve made or achieved.  Whether it’s a block of code, artwork, or writing, we’d like to see the fruits of your labors.</b><br>
					<textarea cols="80" rows= "10" name="free1" value="<?php echo htmlspecialchars($free1);?>"></textarea>
				</p>

				<p>
                    <b>Mallet prides itself on being a self-governing, democratic organization.  How do you see yourself participating as a Malleteer?</b><br>
					<textarea cols="80" rows= "10" name="free2" value="<?php echo htmlspecialchars($free2);?>"></textarea>
				</p>
                
				<p>
                    <b>Write about a current event that is important, or about a current event that others find important that you do not.  Tell us about it, and why you think it is or is not important.</b><br>
					<textarea cols="80" rows= "10" name="free3" value="<?php echo htmlspecialchars($free3);?>"></textarea>
                </p>
                
    			<p>
                    <b>Don’t like any of our topics? Write whatever you want here.  We’re not picky.</b><br>
					<textarea cols="80" rows= "10" name="free4" value="<?php echo htmlspecialchars($free4);?>"></textarea>
                </p>
                
				<p>
                    <b>Terms and conditions:</b><br>
                    I hereby authorize The University of Alabama to disclose my educational record to the Mallet Assembly Officers, Advisors and Board of Governors. I understand that this release will be in effect only for one academic year. I also understand that I may revoke this authorization at any time, in writing, with the Office of Academic Records and University Registrar, Room 206 Student Services Center. Further I understand that the Grade Point Average (GPA) listed on my file with The University of Alabama will be the official GPA used by the Assembly. I further agree to abide by all decisions of the Tribunal, the Assembly's judiciary body.<br>
                    <input type="checkbox" name="legalAgreementTick[]" value = 'on' />  I have read and agree to the terms and conditions.<br><br>
                    <input type="submit" name="back" value="<< Back" /><input type="submit" value= "Submit" />  <span class="error"><?php echo $freeErr;?></span>
					<input type="hidden" name='submit' />                       <!--Not used, included in case we rework the submission mechanism-->
				</p>
			</form>
	</body>
</html>
