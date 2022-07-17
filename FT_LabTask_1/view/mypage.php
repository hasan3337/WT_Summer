<?php

include ("../control/process.php");

?>

<html>
<body>

<h1>Registration Form</h1>

<table>

<form action="" method="post" enctype="multipart/form-data">
    
<tr>  
<td>    
    First Name:  
    </td> 
    <td>
    <input type="text" name="fname">
    <?php 
    echo $ne1; 
    echo $ne2;
    ?>
</td>

</tr>
    <tr>
    <td>    
    Last Name:  
    </td> 
    <td>
    <input type="text" name="lname">
    <?php 
    echo $ne1; 
    echo $ne3;
    ?>
    </td>
</tr>    
<tr>     
<td>    
    Age:  
    </td>
     <td>
    <input type="text" name="age">
</td>
</tr>
    <tr>   
    <td> 
    Designation:  
    </td><td>  
    <input type="radio" name="designation" value="Junior Programmer"> Junior Programmer 
    <input type="radio" name="designation" value="Senior Programmer"> Senior Programmer
    <input type="radio" name="designation" value="Project Lead"> Project Lead
    <?php echo $dese; ?>
</td>
</tr>
<tr>   
<td>     
Preferred languages:  
    </td>
    <td>
    <input type="checkbox"  name="java" value="JAVA"> JAVA
    <input type="checkbox"  name="php" value="PHP"> PHP
    <input type="checkbox"  name="c" value="C++"> C++
    <?php echo $lansel; ?>
</td>
</tr>
<tr>  
    <td> 
    Email:  
    </td>
    <td> 
        <input type="email" name="email">
        <?php echo $ee; ?> 
    </td>
</tr>

    <tr>   
    <td> 
    Password: 
    </td>
    <td>  
        <input type="text" name="password">
        <?php 
        echo $pe; 
        echo $ps; 
        ?>
    </td>
</tr>

<tr>
    <td> 
    Please choose a file: 
    </td>
    <td>  
        <input type="file"  name="myfile">
    </td>
</tr>
    <tr> 
    <td> 
        <input type="submit" value="Submit" name="submit">
        <input type="reset" value="Reset" name="reset">
    </td>
    <td>   
    </td>
</tr>

</form>
</table>
</body>
</html>

