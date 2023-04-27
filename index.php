<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          fontFamily: {
            sans: ['Mulish', 'sans-serif'],
            mono: ['Rokkitt', 'monospace'],
          },
        },
      }
    </script>
    <title>Login Modal</title>
  </head>
  <body>
      <!--Main outer container-->
    <div class="flex items-center justify-center bg-rose-100 h-screen ">
        <!--login from container-->
        <div class="flex flex-col bg-white shadow-2xl rounded-md md:flex-row"> 
           <!--left side--> 
           <div class="p-6 md:p-12">
            <h2 class="text-4xl font-mono font-bold">Login</h2>
            <p class="mt-4 font-sans font-light font-grey-600">Login to access your admin panel</p>
            <form action="login_validate.php" method="post">
            <input type="text" placeholder="Enter name" name="username" class="mt-6 p-4 border-2 border-grey-300 rounded-md focus:outline-none focus:border-red-200">
            <br>
            <input type="text" placeholder="Enter password" name="password" class="mt-4 p-4 border-2 border-grey-300 rounded-md focus:outline-none focus:border-red-200">
             <br> 
            <input type="submit" class="p-4 mt-6 bg-red-700 shadow-cyan-100 text-white font-sans rounded-md w-full hover:bg-opacity-90 shadow-sm hover:shadow-lg hover:translate-y-0.5 duration-150"></input>
            </form>
           </div>

          <!--right side-->

              <img src="./images/img2.jpg" alt=""  class="w-[300px] hidden md:block rounded-r-md hover:scale-105 duration-500">
        </div>

        </div>
      
    </div>
   
  </body>
</html>
