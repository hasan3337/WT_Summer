<?php

$num1=$_POST["fnum"];
$num2=$_POST["lnum"];

$n1=(float)$num1;
$n2=(float)$num2;

$op=$_POST["operation"];

if ($op=="+") 
{
    echo $n1+$n2;
}
else if($op=="-")
{
    echo $n1-$n2;
}
else if($op=="*")
{
    echo $n1*$n2;
}
else if($op=="/")
{
    echo $n1/$n2;
}


?>