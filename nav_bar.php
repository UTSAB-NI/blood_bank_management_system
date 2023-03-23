
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

<!--nav bar-->

<nav class="max-w-6xl mx-auto p-4">
    <div class="flex flex-col md:flex-row items-center justify-center md:justify-between font-alata">
        <!--logo and name-->
        <div class="flex flex-col md:flex-row items-center space-x-4 font-bold">
        <img src="./images/logo2.jpg" alt="life bank" class="h-16 md:h-20 hover:scale-105 duration-300">
        <span class="hidden md:block hover:text-red-500 duration-500">Life bank</span>
        </div>   

        <!--nav links-->
        <div class="mt-6 flex flex-col space-y-4 md:flex-row  md:space-x-10 text-center  md:space-y-0 font-alata">
            <div class="group ">
                <a href="home_page.php" class="text-gray-500 hover:text-red-500 duration-500">Home</a>
                <div class="hidden border-b border-red-500 group-hover:block duration-500 "></div>
            </div>
            <div class="group ">
                <a href="donor_registration_form.php" class="text-gray-500 hover:text-red-500 duration-500">Donor Registration</a>
                <div class="hidden border-b border-red-500 group-hover:block duration-500 text-center"></div>
            </div>
            <div class="group ">
                <a href="donor_list.php" class="text-gray-500 hover:text-red-500 duration-500">Donor List</a>
                <div class="hidden border-b border-red-500 group-hover:block duration-500 text-center"></div>
            </div>
            <div class="group ">
                <a href="blood_stock.php" class="text-gray-500 hover:text-red-500 duration-500">Blood Stock</a>
                <div class="hidden border-b border-red-500 group-hover:block duration-500 text-center"></div>
            </div>
            <div class="group ">
                <a href="logout.php" class="text-gray-500 hover:text-red-500 duration-500">Log Out</a>
                <div class="hidden border-b border-red-500 group-hover:block duration-500 text-center"></div>
            </div>
            
           
           
          
        </div>


    </div>
    







</nav>

  

</body>
</html>