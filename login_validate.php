<?php
include('connection.php');
session_start();

//username
$usertrim = trim(($_POST['username']));
$userstrip = stripcslashes($usertrim);
$finaluser = htmlspecialchars($userstrip);
//password

$passtrim = trim(($_POST['password']));
$passstrip = stripcslashes($passtrim);
$finalpass = htmlspecialchars($passstrip);

//connection

$sql = "SELECT * FROM admin_table
       where Username='$finaluser' AND
       Password='$finalpass'
        ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) >= 1) {

    $_SESSION['username'] = $finaluser;
    header(("Location:home_page.php"));
    

} else {
    $_SESSION['error'] = "you are not valid user ";
    header(("Location:index.php"));
    
    exit();
    

}


?>
