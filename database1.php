<?php
function database_connection($server="localhost" , $username="root" ,$password="" , $database="dbschema_1130764"){

$conn= new mysqli($server,$username,$password,$database);

 if($conn->connect_error){
	 die("connection  field".$conn->connect_error);
	
 }
	 return $conn;
}
?>