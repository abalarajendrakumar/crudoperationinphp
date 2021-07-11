<?php

include "db.php";

if(isset($_POST['update']))
	{
		$userid=$_POST['userid'];
		$username=$_POST['username'];
		
		$password=$_POST['password'];
		$email=$_POST['email'];

		$sql="update reg set username='$username',$password='password',$email='email',id='$userid'";

		$result=$con->query($sql);
		if($result){
         
         echo "record updated successfully";

		}
		else{

			 echo "record not updated";		
			}

	}


if(isset($_GET['id']))

{
	$userid= $_GET['id'];
	
	$sql="select * from reg where id='$userid'";

	$result=$con->query($sql);

	if($result->num_rows >0){
		while($row = $result->fetch_assoc())
		{
            $id=$row['id'];
			$username=$row['username'];
			
			$password=$row['password'];
			$email=$row['email'];
			
	

}

 


?>


<form action="" method="POST" style=" width:300px; margin:auto; " >
		<label style="text-align:left;">Name</label>
		<br>
		<input type ="text" name="username" value=" <?php  echo $username ?> ">
		<input type ="hidden" name="userid" >
		<br>
		<br>
		<label>Password</label>
		<br>
		<input type ="password" name="password" value=" <?php  echo $password ?> ">
		<br>
		<br>
		<label>E-mail</label>
		<br>
		<input type ="email" name="email" value=" <?php  echo $email ?> ">
		<br>
		<br>
		<input type="submit" name="update" value="update">
	</form>


<?php 


	}
	}


?>
