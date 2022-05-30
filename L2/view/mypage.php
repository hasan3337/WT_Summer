<html>
<body>

<h1> Lab Task </h1>

<form action="../control/process.php" method="post" >


<table>

<tr>
<td>Number 1: </td> <td> <input type="text" name="fnum" placeholder="first number"> </td>
</tr>
<tr>
<td>Number 2: </td> <td> <input type="text" name="lnum" placeholder="last number"> </td>
</tr>
<tr>
<td></td> 
<td>
<input type="radio" name="operation" value="+">+ 
<input type="radio" name="operation" value="-">- 
<input type="radio" name="operation" value="*">* 
<input type="radio" name="operation" value="/">/
</td>
</tr>

<tr>
<td><input type="submit" name="Submit" value="Result"></td>
</tr>

</table>
</form>
</body>
</html>



