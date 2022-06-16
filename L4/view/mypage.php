<?php
include("../control/process.php");
?>


<html>
<body>

<h1>  </h1>
<table>
<form action="" method="post" enctype="multipart/form-data">




<tr>

<?php

echo"<h1>Registration Form</h1>"

?>


<td>First Name: </td> <td> <input type="text" name="fname"> </td><td> <!--<?php echo $fnameErr ?> --> </td>
</tr>

<tr>
<td>Last Name: </td> <td> <input type="text" name="lname" > </td>
</tr>
<tr>
<td>Age: </td> <td> <input type="text" name="age"> </td>
</tr>
<tr>
<td>Designation: </td> 
<td>
<input type="radio" name="desig" value="Junior Programmer ">Junior Programmer 
<input type="radio" name="desig" value="Senior Programmer">Senior Programmer
<input type="radio" name="desig" value="Project Lead ">Project Lead 
</td>
</tr>
<tr>
<td>Preferred Language: </td> 
<td>
<input type="checkbox" name="pl[]" value="Java">Java
<input type="checkbox" name="pl[]" value="PHP">PHP
<input type="checkbox" name="pl[]" value="C++">C++
</td>
</tr>
<tr>
<td>E-mail:  </td><td><input type="email" name="email"></td> 
</tr>
<!--
<tr>
<td>Date:  </td><td><input type="date"></td>
</tr>
-->
<tr>
<td>Password:  </td><td><input type="password" name="pword"></td>
</tr>
<tr>
<td>Please choose a file </td><td><input type="file" name="myfile"></td>
</tr>
<tr>
<td><input type="submit" name="Submit" value="Submit"></td>
<td><input type="reset" name="reset" value="Reset"></td>
</tr>



</form>
</table>
</body>

</html>


