<?php


   
$fnameErr="";

if(isset($_POST["Submit"]))
{
$fnameX=$_POST['fname'];
$lnameX=$_REQUEST['lname'];
$emailX=$_POST["email"];
$passwordX=$_POST['pword'];
$desX=$_REQUEST["desig"];
$plX=$_REQUEST["pl"];



if(!empty($fnameX))
{
    //echo "Please enter your name <br>";


if(is_numeric($fnameX))
{
    echo "<br> First name should not contain numeric value, enter only alphabets! <br>";
}

}
else
{
    $fnameErr = "Empty";
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

echo $_FILES["myfile"]["name"];
if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "../uploads/myfile.pdf"))
{
    echo "<br>file uploaded";
}
else
{
    echo "uploading error";
}



//Get form data
$formdata = array(
    'fname'=> $_POST["fname"],
    'lname'=> $_POST["lname"],
    'age'=> $_POST["age"],
    'desig'=> $_POST["desig"],
    'pl'=> $_POST["pl"],
    'email'=>$_POST["email"],
    'pword'=> $_POST["pword"],
    
 );



 $existingdata = file_get_contents('../data/data.json');
 $tempJSONdata = json_decode($existingdata);
 $tempJSONdata[] =$formdata;
 //Convert updated array to JSON
 $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
 
 //write json data into data.json file
 if(file_put_contents("../data/data.json", $jsondata)) {
      echo "<br><br>Data successfully saved <br>";
  }
 else 
      echo "no data saved";

$data = file_get_contents("../data/data.json");
$mydata = json_decode($data);


}


?>