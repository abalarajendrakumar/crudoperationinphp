<?php

include "db.php";

$uname= $_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];

$sql="insert into reg (username,password,email) values ('$uname','$password','$email')";

$result=$con->query($sql);

if($result){

 header("location: view.php");
}
else{
	echo "error";
}


?>