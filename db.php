<?php 

$con=mysqli_connect('localhost','root','','work');

if($con)
{
	echo "Db Connected";
}
else{
	echo "error";
}


?>