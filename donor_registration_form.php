<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  
<?php
include 'nav_bar.php';
?>
<!-- 
<div class="flex items-center justify-center flex-column">
<form method="post" action="insert_doner.php" >

  <label>First name</label>
  <input type="text" class="border border-black" name="fname">
  <label>Last name</label>
  <input type="text" class="border border-black" name="lname">
  <label>Address</label>
  <input type="text" class="border border-black" name="address">
  <label>Contact</label>
  <input type="number" class="border border-black" name="contact">
  <label>Email</label>
  <input type="email" class="border border-black" name="email">
  <label>Blood Group</label>
  <input type="text" class="border border-black" name="bgroup">
  <label>Gender:</label>
  <select name="gender">
    <option>Male</option>
    <option>Female</option>
    <option>Other</option>
  </select>
<input type="submit"/>





</form> -->



<div class="flex ">
<form class="w-1/2   p-4 rounded-lg shadow-2xl ml-10 mt-6" form method="post" action="insert_doner.php" >
  <div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name" name="fname">
        First Name
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Enter Firstname" name="fname">
    
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name" name="lname">
        Last Name
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Enter Lastname" name="lname">
    </div>
  </div>


  <div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name" >
        Address
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Enter Address" name="address">
     
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Contact
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Enter Number" name="contact">
    </div>
  </div>


  <div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name" >
       Email
      </label>
      <input name="email" type="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Enter Email">
     
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name" >
       Blood Group
      </label>
      <input name="bgroup" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Enter BloodGroup">
    </div>
  </div>

    <div class="w-full md:w-1/3 px-3 mb-3 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
        Gender
      </label>
      <div class="relative">
        <select name="gender" class="block appearance-none w-full bg-gray-200 border border-gray-500 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
          <option>Male</option>
          <option>Female</option>
          <option>Other</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
    <input class="text-white bg-blue-600 rounded-lg px-4 py-2 mt-6  w-full" type="submit"/>
 
</form>

<div class="w-1/2 ">
  <img src="./images/donate.jpg" class="w-100 "></img>
</div>


</div>






  


    
</body>
</html>