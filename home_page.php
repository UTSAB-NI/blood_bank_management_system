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
<link href="https://fonts.googleapis.com/css2?family=Alata&family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
          theme: {
            fontFamily: {
                sans:['Josefin Sans','sans-serif'],
                alata:['Alata'],
            },
          },
        }
      </script>
    <title>Blood Donation Management</title>

</head>
<body>
<?php
 $finaluser=$_SESSION['username'];
if(!$finaluser){
    header("Location:index.php");
}
?>

<!--nav bar-->
<?php
include 'nav_bar.php';
?>

<!--dashboard-->


<div class="max-w-6xl mx-auto grid gap-6 md:grid-cols-4 mt-16">

    <div class="flex flex-col w-full bg-red-500 h-56 w-40  rounded-lg p-4 shadow-2xl">
      hello
    </div>
    <div class="flex flex-col w-full  bg-red-500 h-56 w-40 rounded-lg p-4">
      hello
    </div>
    <div class="flex flex-col w-full  bg-red-500 h-56 w-40 rounded-lg p-4">
      hello
    </div>
    <div class="flex flex-col w-full bg-red-500 h-56 w-40 rounded-lg p-4">
      hello
    </div>
    <div class="flex flex-col w-full  bg-red-500 h-56 w-40 rounded-lg p-4">
      hello
    </div>
    <div class="flex flex-col w-full  bg-red-500 h-56 w-40 rounded-lg p-4">
      hello
    </div>
    <div class="flex flex-col w-full  bg-red-500 h-56 w-40 rounded-lg p-4">
      hello
    </div>
    <div class="flex flex-col w-full  bg-red-500 h-56 w-40 rounded-lg p-4">
      hello
    </div>

</div>





</body>
</html>