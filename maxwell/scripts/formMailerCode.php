<?php

$EmailFrom = "maxwell@maxwellfashions.com";
$EmailTo = "maxwell.cunanan@gmail.com";
$Subject = "Inquiry from Maxwell website.";
$Name = Trim(stripslashes($_POST['name'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Message = Trim(stripslashes($_POST['question'])); 


// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=../error.html\">";
  exit;
}
if ( ereg( "[\r\n]", $Name ) || ereg( "[\r\n]", $Email ) ) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=../error.html\">";
  exit;
}

if(empty($Message) ) {
echo print "<meta http-equiv=\"refresh\" content=\"0;URL=../error.html\">";
die ("Thank You");
}

if(empty($Email) ) {
echo print "<meta http-equiv=\"refresh\" content=\"0;URL=../error.html\">";
die ("Thank You");
}

if(empty($Name) ) {
echo print "<meta http-equiv=\"refresh\" content=\"0;URL=../error.html\">";
die ("Thank You");
}
// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";


// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=../thankyou.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=../error.html\">";
}
?>