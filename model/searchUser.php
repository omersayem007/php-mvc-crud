<?php

    require "db.php";

    $conn=dbConnection();

    $name= $_POST['key'];
    
	$sql = "select name ,contact,userName,password from userinfo where name like '".$name."%'";
	$result = mysqli_query($conn,$sql);
	
	$row = mysqli_fetch_assoc($result);
	
	echo "<table>
	<td> ".$row['name']."</td>
	<td> ".$row['contact']."</td>
	<td> ".$row['userName']."</td>
	<td> ".$row['password']."</td>
	</table>";

?>