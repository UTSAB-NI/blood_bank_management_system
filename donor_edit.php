<?php
    session_start();
    include('connection.php');


    $id=$_GET['ID'];
    $first_name =  $_REQUEST['fname'];
    $last_name = $_REQUEST['lname'];
    $address = $_REQUEST['address'];
    $contact = $_REQUEST['contact'];
    $email = $_REQUEST['email'];
    $blood_group = $_REQUEST['bgroup'];
    $gender =  $_REQUEST['gender'];


    $sql = "UPDATE donor_registration SET FirstName =  '$first_name', LastName = '$last_name', Address = '$address ', Contact = '$contact', Email = '$email ', BloodGroup = '$blood_group', Gender = '$gender' WHERE ID = $id";

if(mysqli_query($conn, $sql)){
    header(("Location:donor_list.php"));

} else{
       

     echo "ERROR: Hush! Sorry $sql. "
         . mysqli_error($conn);
}
 
// Close connection

mysqli_close($conn);
