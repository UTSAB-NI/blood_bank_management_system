<?php
include("./connection.php");

    $id= $_GET['ID'];
    $delete=("DELETE FROM donor_registration WHERE ID = $id");
    $run=mysqli_query($conn, $delete);
    header('location:donor_list.php');

?>

