<?php 
include("connections.php");
$username = $password = $firstname = $surname =$address = "";

$incorrect="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $user = mysqli_real_escape_string($mysqli, $_REQUEST['username']);
    $password = mysqli_real_escape_string($mysqli, $_REQUEST['password']);

$sql = "SELECT * FROM tbl_informations WHERE username='$user' AND password='$password'";
    if($result = $mysqli->query($sql)){
        if($result->num_rows > 0){
            header("location: index.html");
            exit();
        } else{
                $incorrect= '<div class="alert alert-danger"><em>Incorrect credentials!</em></div>';
            }
    } else{
        echo "Oops! Something went wrong. Please try again later.";
    }
}
    $mysqli->close();
?>
