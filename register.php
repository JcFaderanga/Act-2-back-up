<?php 
include("connections.php");
$username = $password = $firstname = $surname =$address = "";
	
if($_SERVER["REQUEST_METHOD"]=="POST"){

$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$address = $_POST['address'];
}
if($username && $password && $firstname && $surname && $address){
  $query = mysqli_query($connections, "INSERT INTO tbl_informations(username,password,firstname,surname,address) VALUES ('$username', '$password', '$firstname', '$surname', '$address')");
}


?>