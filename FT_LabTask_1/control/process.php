<?php include ("../model/db.php"); ?>


<?php

$ne1="";
$ne2="";
$ne3="";
$dese="";
$lansel ="";
$ee="";
$ps="";
$pe="";
$pl1="";
$pl2="";


if(isset($_POST["submit"]))
{
$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];


if($fname=""||$lname=="")
{ $ne1="Please enter First Name and Last Name"; }

else
{

if(is_numeric($_REQUEST["fname"]))
{
    $ne2="There can't be any numeric value in First name";

    if(is_numeric($_REQUEST["lname"]))
    { $ne3="There can't be any numeric value in Last name"; }

    else
    { echo "Last Name: ", $lname ,"" ; }
}



else
{
    $fname=$_REQUEST["fname"];
    $lname=$_REQUEST["lname"];

    echo "First Name: ", $fname ,"" ;

    if(is_numeric($_REQUEST["lname"]))
    { $ne3= "There can't be any numeric value in Last name"; }

    else
    { echo "Last Name: ", $lname ,"" ; }
}
}

if(isset($_REQUEST["designation"]))
{
    $designation=$_REQUEST["designation"];
    echo "Designation:", $designation, "";
}

else
{ $dese="Select a designation"; }



if(!isset($_REQUEST["java"]) && !isset($_REQUEST["php"]) && !isset($_REQUEST["c"]))
{ $lansel="Select a preferred language"; }


else
{
    echo "Preferred language:  ";
    
    if(isset($_REQUEST["java"]))

    { $plang= $_REQUEST["java"];
        echo $plang, " ";}

    if(isset($_REQUEST["php"]))
    { $pl1= $_REQUEST["php"];
        echo $pl1, "";}

    if(isset($_REQUEST["c"]))
    { $pl2 = $_REQUEST["c"];
        echo $pl2, "";}
        echo "";
}


$email=$_REQUEST["email"];

if($email=="")
{ $ee= "Enter a valid email address"; }

else
{ echo "Email:", $email , ""; }


if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "../uploads/".$_FILES["myfile"]["name"]))
{ echo "File Uploaded successfully!"; }

else
{ echo "File not uploaded"; }

$password=$_REQUEST["password"];

if(strlen($password)<6)
{ $pe="Password length must be more than 6 characters"; }

else
{ $ps=""; }


$location="../uploads/";
$comma=",";
}


{
    if(isset($_POST["submit"]))
    {   $age=$_POST["age"];
        $plang= $plang."".$pl1."".$pl2;
        $mydb=new db();
        $myconn=$mydb->openCon();
        $mydb->insertUser($fname,$lname,$age,$designation,$plang,$email,$password,$location,"employee",$myconn); }
}



?>
