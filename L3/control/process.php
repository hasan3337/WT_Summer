<?php


$fnameX=$_REQUEST['fname'];
$lnameX=$_REQUEST['lname'];
$emailX=$_POST["email"];
$passwordX=$_POST['pword'];


if(is_numeric($fnameX))
{
    echo "<br> First name should not contain numeric value, enter only alphabets! <br>";
}

if (is_numeric($lnameX))
{
    echo "<br> Last name should not contain numeric value, enter only alphabets! <br>";
}

if(isset($_REQUEST["desig"]))
{
    echo "";
}
else{
    echo "<br>Designation must be selected<br>";
}

if(isset($_REQUEST["pl"]))
{
    echo "";
}
else
{
    echo "<br>Select at least one preferred language<br>";
}


if(strlen($emailX)==0)
{
    echo "<br>Please provide an E-Mail<br>";
}
else
{
    echo ""; 
}

if(strlen($passwordX)<='6')
{
    echo "<br>Password should be more than 6 characters<br>";
}



?>