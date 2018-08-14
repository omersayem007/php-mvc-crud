<?php

require "../model/updateUser.php" ;

if ( isset($_POST['update']) ){

$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$userName= $_POST['userName'];

  $conn= updateUser( $name, $password ,$contact ,$userName,$id);

  if($conn){
      
    header('location: ../view/html/update.php');
    //echo "success";
  }else{
      echo "failed";
  }

}else{

    echo "invalid Request";
}


?>