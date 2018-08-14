<?php

require "../model/saveUser.php" ;

if ( isset($_POST['submit']) ){

$name = $_POST['name'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$userName= $_POST['userName'];

  $conn= saveUser( $name, $password ,$contact ,$userName);

  if($conn){
      
    header('location: ../view/html/registration.html');
    //echo "success";
  }else{
      echo "failed";
  }

}else{

    echo "invalid Request";
}


?>