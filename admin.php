<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Blood Donation Management</title>

</head>
<body>
<?php
 $finaluser=$_SESSION['username'];
if(!$finaluser){
    header("Location:index.php");
}
?>
    <div class="flex  flex-col h-screen bg-red-200">

            <div class=" bg-red-500 h-[50px] ">Header</div>
            <div class="flex-1">body</div>
            <div class="bg-red-500 h-[80px]">

            <a href="logout.php">logout</a>
            </div>


    </div>
    
</body>
</html>