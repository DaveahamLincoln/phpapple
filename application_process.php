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
    echo $_SESSION['short3];
    echo $_SESSION['free1'];
    echo $_SESSION['free2'];
    echo $_SESSION['free3'];
    echo $_SESSION['free4'];    
   */
    
    function hex() {
        #'''Preps and sends ad chair version.'''

        $to = foo@bar.baz;       #Insert ad chair email here
        
        $subject = "APPLICATION FOR ADMISSION- " . $_SESSION["fullName"];
        
        $message = "Applicant:" . $_SESSION["fullName"] . "\r\n\r\nEmail Address: " . $_SESSION["emailAddress"] . "\r\nCWID: " . $_SESSION["cwid"] .
        "\r\nLiving Option Selected: " . $_SESSION["livingOption"] . "\r\nPhone Number: " . $_SESSION["phoneNumber"] . "\r\nMailing Address: " .
        $_SESSION["mailingAddress"] . "\r\nACT/SAT: " . $_SESSION["actsat"] . "\r\nGPA: " . $_SESSION["gpa"] . "\r\nTransfer Credit: " . 
        $_SESSION["transferCredit"] . "\r\nMajors/Minors: " . $_SESSION['majorsMinors'] . "\r\n\r\nQ: Tell us about one of your hobbies or 
        talents, and why it does (or does not!) interest you.\r\nA: " .  $_SESSION["short1"] . "\r\n\r\nQ: What are some of your noteworthy 
        achievements?\r\nA: " . $_SESSION["short2"] . "\r\n\r\nQ: What type of roommate are you?  What type of roommate would you like to 
        live with?\r\nA: " . $_SESSION["short3"] . "\r\n\r\nQ: Mallet is not only an academic organization, we also appreciate your unique 
        talents and abilities.  Show or describe to us something that you’ve made or achieved.  Whether it’s a block of code, artwork, or 
        writing, we’d like to see the fruits of your labors." . $_SESSION["free1"] . "\r\n\r\nQ: Mallet prides itself on being a self-
        governing, democratic organization.  How do you see yourself participating as a Malleteer?\r\nA: " . $_SESSION["free2"] . 
        "\r\n\r\nQ: Write about a current event that is important, or about a current event that others find important that you do not.  
        Tell us about it, and why you think it is or is not important.\r\nA: " . $_SESSION["free3"] . "\r\n\r\nQ: Don’t like any of our 
        topics? Write whatever you want here.  We’re not picky.\r\nA: " $_SESSION["free4"];
        
        $message = wordwrap($message, 70, "\r\n");
        
        $headers = 'From: marvin_daemon@mallet-assembly.org'

        mail($to, $subject, $message, $headers);
    }

    function wex() {
        #'''Preps and sends redacted app to the Ad List'''
        
        $to = foolist@barlist.bazlist;       #Insert ad list email here
        
        $subject = "APPLICATION FOR ADMISSION- " . $_SESSION["fullName"];
        
        $actsat = $_SESSION["actsat"];
        $actsat = $actsat + 0;
        if (($actsat >= 28) and ($actsat <=36)) {
            $actsat = "MEETS REQUIREMENTS";
        }
        elseif (($actsat>=1260) and ($actsat <=2400)) {
            $actsat = "MEETS REQUIREMENTS";
        }
        else {
            $actsat = "DOES NOT MEET REQUIREMENTS"
        }
        
        $gpa = $_SESSION["gpa"];
        $gpa = $gpa + 0;
        if (($gpa >= 3.3) and ($gpa <= 5.0)) {
            $gpa = "MEETS REQUIREMENTS"
        }
        else {
            $gpa = "DOES NOT MEET REQUIREMENTS"
        }
        
        $message = "Applicant:" . $_SESSION["fullName"] . "\r\n\r\nEmail Address: XXXXX\r\nCWID: XXXXX\r\nLiving Option Selected: "
        . $_SESSION["livingOption"] . "\r\nPhone Number: XXXXX\r\nMailing Address: XXXXX\r\nACT/SAT: " . $actsat . "\r\nGPA: " . $gpa . "\r\nTransfer Credit: " . 
        $_SESSION["transferCredit"] . "\r\nMajors/Minors: " . $_SESSION['majorsMinors'] . "\r\n\r\nQ: Tell us about one of your hobbies or 
        talents, and why it does (or does not!) interest you.\r\nA: " .  $_SESSION["short1"] . "\r\n\r\nQ: What are some of your noteworthy 
        achievements?\r\nA: " . $_SESSION["short2"] . "\r\n\r\nQ: What type of roommate are you?  What type of roommate would you like to 
        live with?\r\nA: " . $_SESSION["short3"] . "\r\n\r\nQ: Mallet is not only an academic organization, we also appreciate your unique 
        talents and abilities.  Show or describe to us something that you’ve made or achieved.  Whether it’s a block of code, artwork, or 
        writing, we’d like to see the fruits of your labors." . $_SESSION["free1"] . "\r\n\r\nQ: Mallet prides itself on being a self-
        governing, democratic organization.  How do you see yourself participating as a Malleteer?\r\nA: " . $_SESSION["free2"] . 
        "\r\n\r\nQ: Write about a current event that is important, or about a current event that others find important that you do not.  
        Tell us about it, and why you think it is or is not important.\r\nA: " . $_SESSION["free3"] . "\r\n\r\nQ: Don’t like any of our 
        topics? Write whatever you want here.  We’re not picky.\r\nA: " $_SESSION["free4"];
        
        $message = wordwrap($message, 70, "\r\n");
        
        $headers = 'From: marvin_daemon@mallet-assembly.org'

        mail($to, $subject, $message, $headers);
    }
    
    function exort() {
        '''Preps confirmation email.'''
        
        $to = $_SESSION["emailAddress"];
        
        $subject = "Application Receipt";
        
        $message = "Dear " . $_SESSION["fullName"] . ",\r\n\r\nThis is an email acknowledging receipt of your application to join the
        Mallet Assembly.  Your application is currently being processed by a lot of complicated computer scripts and accountaints wearing
        green eyeshade visor things.  It's all rather exciting and top secret.\r\n\r\nWe'll do our best to get back to you within 5-7 business days,
        if you haven't heard from one of our representatives in that time, or if you have any further questions regarding your application, the application process,
        life, the universe, and/or everything, please don't hesitate to contact us at themalletassembly@gmail.com.  Below is a copy of your application
        for your records.\r\n\r\n\r\nHave a splendiferous day!\r\n\r\n-Marvin the Mail Daemon\r\n\r\n-----------------------------------------------------------------------\r\n\r\n
        Applicant:" . $_SESSION["fullName"] . "\r\n\r\nEmail Address: " . $_SESSION["emailAddress"] . "\r\nCWID: " . $_SESSION["cwid"] .
        "\r\nLiving Option Selected: " . $_SESSION["livingOption"] . "\r\nPhone Number: " . $_SESSION["phoneNumber"] . "\r\nMailing Address: " .
        $_SESSION["mailingAddress"] . "\r\nACT/SAT: " . $_SESSION["actsat"] . "\r\nGPA: " . $_SESSION["gpa"] . "\r\nTransfer Credit: " . 
        $_SESSION["transferCredit"] . "\r\nMajors/Minors: " . $_SESSION['majorsMinors'] . "\r\n\r\nQ: Tell us about one of your hobbies or 
        talents, and why it does (or does not!) interest you.\r\nA: " .  $_SESSION["short1"] . "\r\n\r\nQ: What are some of your noteworthy 
        achievements?\r\nA: " . $_SESSION["short2"] . "\r\n\r\nQ: What type of roommate are you?  What type of roommate would you like to 
        live with?\r\nA: " . $_SESSION["short3"] . "\r\n\r\nQ: Mallet is not only an academic organization, we also appreciate your unique 
        talents and abilities.  Show or describe to us something that you’ve made or achieved.  Whether it’s a block of code, artwork, or 
        writing, we’d like to see the fruits of your labors." . $_SESSION["free1"] . "\r\n\r\nQ: Mallet prides itself on being a self-
        governing, democratic organization.  How do you see yourself participating as a Malleteer?\r\nA: " . $_SESSION["free2"] . 
        "\r\n\r\nQ: Write about a current event that is important, or about a current event that others find important that you do not.  
        Tell us about it, and why you think it is or is not important.\r\nA: " . $_SESSION["free3"] . "\r\n\r\nQ: Don’t like any of our 
        topics? Write whatever you want here.  We’re not picky.\r\nA: " $_SESSION["free4"];
        
        $message = wordwrap($message, 70, "\r\n");
        
        $headers = 'From: marvin_daemon@mallet-assembly.org'

        mail($to, $subject, $message, $headers);
    }

    function invoke_daemon() {
        '''Sends mail and destroys the session.'''
        hex();
        wex();
        exort();
        session_destroy();
    }
    
    invoke_daemon();
    #@invoke_daemon();      #Might work better if mail() ends up throwing fatal errors on bad emails.
    header('Location:application_completed.php');
        
?>