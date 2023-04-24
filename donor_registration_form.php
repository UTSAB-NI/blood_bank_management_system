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





</form>

</div>






  


    
</body>
</html>