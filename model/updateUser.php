<?php

require "db.php";

   function updateUser($name,$password,$contact,$userName,$id){


    $conn = dbConnection();

   $sql = "UPDATE userinfo SET name='$name' ,password='$password' , contact='$contact' , userName='$userName' WHERE id='$id'";

    if(  mysqli_query($conn, $sql) )
    {
        return  true;
    }
    else{
        return false;
    } 

   }

?>