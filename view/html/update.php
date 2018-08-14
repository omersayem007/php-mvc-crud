<?php
 require "../../model/db.php";


echo "<h1>Update Employee Details</h1>";

$conn = DBconnection();
		$sql = "select * from userinfo";
		$result = mysqli_query($conn, $sql);

		echo "<table border='1' >
				<tr align='center'>
					<td>Name</td>
					<td>Contact No</td>
                    <td>User Name </td>
                    <td>Password</td>
				</tr>";

		while($row= mysqli_fetch_assoc($result)){
			echo "<tr>
                    <td>".$row['name']."</td>
                    <td>".$row['contact']."</td>
                    <td>".$row['userName']."</td>
                    <td>".$row['password']."</td>
					<td>
						<a href='../../model/delete.php?id=".$row['id']." '>
							<input type='button' name='delete' value='delete'/>
                        </a>
                        
                        <a href='./edit.php?id=".$row['id']."'>
                          <input type='button' name='edit' value='edit'/>
                        </a>
						
					</td>
				</tr>";

		}
				
		echo "</table>";






?>