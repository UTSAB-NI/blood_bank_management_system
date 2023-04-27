
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    

  </head>
  <body>


<div class="flex items-center justify-center flex-column" id="myForm" >
<form method="post" action="donor_edit.php"  >

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
<input type="submit" value="Update">
<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
</form>

</div>














    </body>























