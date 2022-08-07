

<html>

<body>

<h1>  </h1>
<table>

<p id="mytext"></p>

<form action="" method="post" enctype="multipart/form-data" onsubmit="return checkformtrue()>

<tr>

<?php

echo"<h1>Registration Form</h1>"

?>


<td>First Name: </td> <td> <input type="text" id="fname" name="fname" onkeyup="validfname()> </td><td> <!--<?php echo $fnameErr ?> --> </td>
</tr>

<tr>
<td>Last Name: </td> <td> <input type="text" id="lname" name="lname" onkeyup="validlname()"> </td>
</tr>
<tr>
<td>Age: </td> <td> <input type="text" id="age" name="age" onkeyup="validage()> </td>
</tr>
<tr>
<td>Designation: </td> 
<td>
<input type="radio" id="jp" name="desig" value="Junior Programmer " onclick="validradio()>Junior Programmer 
<input type="radio" id="sp" name="desig" value="Senior Programmer" onclick="validradio()>Senior Programmer
<input type="radio" id="pld" name="desig" value="Project Lead " onclick="validradio()>Project Lead 
</td>
<p id="des">Please select a radio Button.</p>
</tr>
<tr>
<td>Preferred Language: </td> 
<td>
<input type="checkbox" id="pl1" name="pl[]" value="Java" onclick="validbox()>Java
<input type="checkbox" id="pl2" name="pl[]" value="PHP" onclick="validbox()>PHP
<input type="checkbox" id="pl3" name="pl[]" value="C++" onclick="validbox()>C++
</td>
<p id="prl">Please select a checkbox.</p>
</tr>
<tr>
<td>E-mail:  </td><td><input type="email" id="email" name="email" onkeyup="validemail()></td> 
</tr>
<!--
<tr>
<td>Date:  </td><td><input type="date"></td>
</tr>
-->
<tr>
<td>Password:  </td><td><input type="password" id="pword" name="pword" onkeyup="validpass()></td>
</tr>
<tr>
<td>Please choose a file </td><td><input type="file" id="myfile" name="myfile" onclick="validfile()></td>
<p id="fe">Upload a file.</p>
</tr>
<tr>
<td><input type="submit" name="Submit" value="Submit"></td>
<td><input type="reset" name="reset" value="Reset"></td>
<p id="sm"></p>
</tr>



</form>
</table>

<script src="../js/myjs.js"></script>

</body>

</html>


