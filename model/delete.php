<?php
	require "db.php";
	
		$id = $_GET['id'];
		$conn = DBconnection();
		$sql= "delete from userinfo where id=".$id;
		
		if(mysqli_query($conn, $sql)){
			header("location: ../view/html/update.php");
		}else{
			header("location: ../view/html/update.php?error=true");
		}
		mysqli_close($conn);
?>