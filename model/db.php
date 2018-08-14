<?php

function dbConnection(){

    $conn = mysqli_connect('localhost', 'root', '', 'saraha');
	if(!$conn){
		return "Connection error !" ;
	}else{
		return $conn ;
    }
    
}


?>