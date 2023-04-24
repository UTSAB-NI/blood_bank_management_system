<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Alata&family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        fontFamily: {
          sans: ['Josefin Sans', 'sans-serif'],
          alata: ['Alata'],
        },
      },
    }
  </script>
  <title>Blood Donation Management</title>

</head>

<body>
  <?php
  $finaluser = $_SESSION['username'];
  if (!$finaluser) {
    header("Location:index.php");
  }
  ?>

  <!--nav bar-->
  <?php
  include 'nav_bar.php';
  ?>
  <?php
    include('connection.php');

    //check connection
    if ($conn === false) {
        die("ERROR: could not connect" . mysqli_connect_error());
    }

    ?>

<style>
.fa-tint {
  color: #b81616;
}


</style>
  <!--dashboard-->


  <div class="max-w-6xl mx-auto flex flex-col items-center space-y-4 mt-16 ">
    <!--container 1-->
    <div class="flex flex-col space-y-6 md:flex-row md:space-y-0 md:space-x-10">
      <!--card 1-->
      <div class="flex flex-col h-52 w-56 space-y-6  rounded-lg p-4 shadow-2xl p-4 hover:scale-110 duration-300">
        <!--top logo + blood group-->
        <div class="flex space-x-12 justify-around px-4 py-2">
          <h1 class="text-5xl font-bold text-center mt-6">A+</h1>
          <i class="fa fa-tint fa-5x fa-red" aria-hidden="true"></i>
        
        </div>
        <!--text part-->
        <div class="ml-4 ">
          <h1 class="">Blood Available</h1>
          <h3>Total unit: <span class="text-red-500 font-bold">
          <?php
                        $sql = "SELECT * FROM donor_registration where BloodGroup='A+' ";
                        $result = mysqli_query($conn, $sql);
                        echo (mysqli_num_rows($result));
                        ?>
          </span></h3>
        </div> 
      </div>
      
      <!--card 1-->
      <div class="flex flex-col h-52 w-56 space-y-6  rounded-lg p-4 shadow-2xl p-4 hover:scale-110 duration-300">
        <!--top logo + blood group-->
        <div class="flex space-x-12 justify-around px-4 py-2">
          <h1 class="text-5xl font-bold text-center mt-6">B+</h1>
          <i class="fa fa-tint fa-5x fa-red" aria-hidden="true"></i>
        
        </div>
        <!--text part-->
        <div class="ml-4 ">
          <h1 class="">Blood Available</h1>
          <h3>Total unit: <span class="text-red-500 font-bold"><?php
                        $sql = "SELECT * FROM donor_registration where BloodGroup='B+' ";
                        $result = mysqli_query($conn, $sql);
                        echo (mysqli_num_rows($result));
                        ?></span></h3>
        </div> 
      </div>
      <!--card 1-->
      <div class="flex flex-col h-52 w-56 space-y-6  rounded-lg p-4 shadow-2xl p-4 hover:scale-110 duration-300">
        <!--top logo + blood group-->
        <div class="flex space-x-12 justify-around px-4 py-2">
          <h1 class="text-5xl font-bold text-center mt-6">O+</h1>
          <i class="fa fa-tint fa-5x fa-red" aria-hidden="true"></i>
        
        </div>
        <!--text part-->
        <div class="ml-4 ">
          <h1 class="">Blood Available</h1>
          <h3>Total unit: <span class="text-red-500 font-bold"><?php
                        $sql = "SELECT * FROM donor_registration where BloodGroup='O+' ";
                        $result = mysqli_query($conn, $sql);
                        echo (mysqli_num_rows($result));
                        ?></span></h3>
        </div> 
      </div>
      <!--card 1-->
      <div class="flex flex-col h-52 w-56 space-y-6  rounded-lg p-4 shadow-2xl p-4 hover:scale-110 duration-300">
        <!--top logo + blood group-->
        <div class="flex space-x-12 justify-around px-4 py-2">
          <h1 class="text-5xl font-bold text-center mt-6">AB+</h1>
          <i class="fa fa-tint fa-5x fa-red" aria-hidden="true"></i>
        
        </div>
        <!--text part-->
        <div class="ml-4 ">
          <h1 class="">Blood Available</h1>
          <h3>Total unit: <span class="text-red-500 font-bold"><?php
                        $sql = "SELECT * FROM donor_registration where BloodGroup='AB+' ";
                        $result = mysqli_query($conn, $sql);
                        echo (mysqli_num_rows($result));
                        ?></span></h3>
        </div> 
      </div>
    </div>

    <!--container 2 -->
    <div class="flex flex-col space-y-6 md:flex-row md:space-y-0 md:space-x-10">
      <!--card 1-->
      <div class="flex flex-col h-52 w-56 space-y-6  rounded-lg p-4 shadow-2xl p-4 hover:scale-110 duration-300">
        <!--top logo + blood group-->
        <div class="flex space-x-12 justify-around px-4 py-2">
          <h1 class="text-5xl font-bold text-center mt-6">A-</h1>
          <i class="fa fa-tint fa-5x fa-red" aria-hidden="true"></i>
        
        </div>
        <!--text part-->
        <div class="ml-4 ">
          <h1 class="">Blood Available</h1>
          <h3>Total unit: <span class="text-red-500 font-bold"><?php
                        $sql = "SELECT * FROM donor_registration where BloodGroup='A-' ";
                        $result = mysqli_query($conn, $sql);
                        echo (mysqli_num_rows($result));
                        ?></span></h3>
        </div> 
      </div>
      
      <!--card 1-->
      <div class="flex flex-col h-52 w-56 space-y-6  rounded-lg p-4 shadow-2xl p-4 hover:scale-110 duration-300">
        <!--top logo + blood group-->
        <div class="flex space-x-12 justify-around px-4 py-2">
          <h1 class="text-5xl font-bold text-center mt-6">B-</h1>
          <i class="fa fa-tint fa-5x fa-red" aria-hidden="true"></i>
        
        </div>
        <!--text part-->
        <div class="ml-4 ">
          <h1 class="">Blood Available</h1>
          <h3>Total unit: <span class="text-red-500 font-bold"><?php
                        $sql = "SELECT * FROM donor_registration where BloodGroup='B-' ";
                        $result = mysqli_query($conn, $sql);
                        echo (mysqli_num_rows($result));
                        ?></span></h3>
        </div> 
      </div>
      <!--card 1-->
      <div class="flex flex-col h-52 w-56 space-y-6  rounded-lg p-4 shadow-2xl p-4 hover:scale-110 duration-300">
        <!--top logo + blood group-->
        <div class="flex space-x-12 justify-around px-4 py-2">
          <h1 class="text-5xl font-bold text-center mt-6">O-</h1>
          <i class="fa fa-tint fa-5x fa-red" aria-hidden="true"></i>
        
        </div>
        <!--text part-->
        <div class="ml-4 ">
          <h1 class="">Blood Available</h1>
          <h3>Total unit: <span class="text-red-500 font-bold"><?php
                        $sql = "SELECT * FROM donor_registration where BloodGroup='O-' ";
                        $result = mysqli_query($conn, $sql);
                        echo (mysqli_num_rows($result));
                        ?></span></h3>
        </div> 
      </div>
      <!--card 1-->
      <div class="flex flex-col h-52 w-56 space-y-6  rounded-lg p-4 shadow-2xl p-4 hover:scale-110 duration-300">
        <!--top logo + blood group-->
        <div class="flex space-x-12 justify-around px-4 py-2">
          <h1 class="text-5xl font-bold text-center mt-6">AB-</h1>
          <i class="fa fa-tint fa-5x fa-red" aria-hidden="true"></i>
        
        </div>
        <!--text part-->
        <div class="ml-4 ">
          <h1 class="">Blood Available</h1>
          <h3>Total unit: <span class="text-red-500 font-bold"><?php
                        $sql = "SELECT * FROM donor_registration where BloodGroup='AB-' ";
                        $result = mysqli_query($conn, $sql);
                        echo (mysqli_num_rows($result));
                        ?></span></h3>
        </div> 
      </div>
    </div>

  </div>





</body>

</html>