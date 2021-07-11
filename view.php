<?php

include "db.php";




$sql="select * from reg " ;

$result=$con->query($sql);
?>
<br><br><br>
<html>
<body>

<table style="width:100%">
	
	<thead>
  <tr>
    <th>Username</th>
    <th>Password</th>
    <th>Email</th>
    <th>Action</th>
  </tr>
</thead>
 <tbody style="text-align:center;">
 	<?php 

 	if($result->num_rows>0)
 	{
 		while($row=$result->fetch_assoc())
 		{
 	?>
  <tr>

    <td><?php echo $row['username'] ?> </td>
    <td><?php echo $row['password'] ?> </td>
    <td> <?php echo $row['email'] ?> </td>
    <td><a href="update.php?id=<?php echo $row['id'] ?>"> Update</a><a href=""> Delete </a> </td>

   

  </tr>
  <?php
}
  }

  ?>
</tbody>

</table>

</body>

</html>

