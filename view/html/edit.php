<?php
	require "../../model/db.php";

	$conn = dbConnection();

	
	
		$id = $_GET['id'];

		$sql= "select  * from userinfo where id=".$id;
		$result = mysqli_query($conn, $sql);

		while($row= mysqli_fetch_assoc($result)){
			echo "<form action='../../controller/updateController.php' method='POST'>
					<input type='text' name='id' value=".$row['id']." >
                    <input type='text' name='name' value=".$row['name'].">
                    <input type='text' name='contact' value=".$row['contact']."  >
                    <input type='text'  name='userName' value=".$row['userName']." >
                    <input type='text' name='password' value=".$row['password'].">
					<input type='submit' name='update' value='update'/>   
					</form>";

		}
				
		echo "</table>";

		mysqli_close($conn);
?>