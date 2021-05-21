<?php
  $lastname = $_POST['lastname'];
  $firstname = $_POST['firstname'];
  $dob = $_POST['dob'];
  $birthday = $_POST['birthday'];
  $sex = $_POST['sex'];
  $address = $_POST['address'];
  $mail = $_POST['mail'];
  $phone = $_POST['phone'];
  $ocupation = $_POST['ocupation'];
  $employer = $_POST['employer'];
  $plcVac = $_POST['plcVac'];
  $fever = $_POST['fever'];
  $CCImpairedImmunity = $_POST['CCImpairedImmunity'];
  $CCdiabetes = $_POST['CCdiabetes'];
  $CCcancer = $_POST['CCcancer'];
  $CClungs = $_POST['CClungs'];
  $CCliver = $_POST['CCliver'];
  $CCheart = $_POST['CCheart'];
  $CCsickleCells = $_POST['CCsickleCells'];
  $CCrenal = $_POST['CCrenal'];
  $CCobese = $_POST['CCobese'];
  $CCaspirinTherapy = $_POST['CCaspirinTherapy'];
  $CCother = $_POST['CCother'];
  $CCnone = $_POST['CCnone'];
  $pregnant = $_POST['pregnant'];
  $hcare = $_POST['hcare'];
  $allergicReact = $_POST['allergicReact'];
  $lAllergies = $_POST['lAllergies'];
  $vacInfluenza = $_POST['vacInfluenza'];
  $guardian = $_POST['guardian'];
  $frmDateReg = $_POST['frmDateReg'];
  
  $to = 'jalog100@gmail.com';
  $headers = "From: $mail \r\n";
  $email_subject = "New Form submission $firstname.";
  $email_body = "You have received a new message from the user $firstname.\n".
                            "Here is the message: $lastname $firstname".
							

function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
               
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}
	mail($to,$email_subject,$email_body,$headers);
?>
