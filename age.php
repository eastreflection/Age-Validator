<?php
function check($age)
{
if($age>=18)
echo"<br><br><h1 style=color:green;>ELIGIBLE</h1>";
else
echo"<br><br><h1  style=color:red;> NOT ELIGIBLE</h1>";
}
$age=$_POST["t1"];
check($age);
?>