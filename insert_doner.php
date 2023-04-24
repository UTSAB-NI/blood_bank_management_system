<!DOCTYPE html>
<html>

<head>Insert data page</head>

<body>

    <?php
    session_start();
    include('connection.php');

    //check connection
    if ($conn === false) {
        die("ERROR: could not connect" . mysqli_connect_error());
    }

    $first_name =  $_REQUEST['fname'];
    $last_name = $_REQUEST['lname'];
    $address = $_REQUEST['address'];
    $contact = $_REQUEST['contact'];
    $email = $_REQUEST['email'];
    $blood_group = $_REQUEST['bgroup'];
    $gender =  $_REQUEST['gender'];


    $sql = "INSERT INTO donor_registration VALUES(NULL,'$first_name','$last_name','$address','$contact','$email',
'$blood_group','$gender')";

if(mysqli_query($conn, $sql)){
    header(("Location:donor_registration_form.php"));

} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);













    ?>

</body>