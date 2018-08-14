<?php

require "db.php";

   function saveUser($name,$password,$contact,$userName){


    $conn = dbConnection();

   // $sql = "INSERT into userinfo values('','Omer','123','omer_sayem','m')";

   $sql = "INSERT into userinfo values('','$name','$password','$contact','$userName')";

    if(  mysqli_query($conn, $sql) )
    {
        return  true;
    }
    else{
        return false;
    } 

   }

?>