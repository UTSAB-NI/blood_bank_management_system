
<!DOCTYPE html>
<html>

<body>

<?php
include 'nav_bar.php';

?>

    <?php
    session_start();
    include('connection.php');

    //check connection
    if ($conn === false) {
        die("ERROR: could not connect" . mysqli_connect_error());
    }

    $sql="SELECT * FROM donor_registration";

    $result = mysqli_query($conn, $sql)
    ?>


    <!-- HTML code to display data in tabular format -->
    <!DOCTYPE html>
    <html lang="en">
    <link rel="stylesheet" href="./css/style.css">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- CSS FOR STYLING THE PAGE -->
        
        <style>
            table {
                margin: 0 auto;
                font-size: large;
                border: 1px solid black;
            }
     
            h1 {
                text-align: center;
                color: #006600;
                font-size: xx-large;
                font-family: 'Gill Sans', 'Gill Sans MT',
                ' Calibri', 'Trebuchet MS', 'sans-serif';
            }
     
            td {
                background-color: #E4F5D4;
                border: 1px solid black;
            }
     
            th,
            td {
                font-weight: bold;
                border: 1px solid black;
                padding: 10px;
                text-align: center;
            }
     
            td {
                font-weight: lighter;
            }
        </style>
    </head>
     
    <body>
            <?php
            if (mysqli_num_rows($result) > 0) {
                
                

            ?>
    
        <section class="relative">
            <h1>Donor List </h1>
            <!-- TABLE CONSTRUCTION -->
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Blood Group</th>
                    <th>Gender</th>
                    <th>Action</th>

                </tr>
                <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                <?php
                    // LOOP TILL END OF DATA
                    while($row = mysqli_fetch_array($result)) {
                    
                ?>
                <tr>
                    <!-- FETCHING DATA FROM EACH
                        ROW OF EVERY COLUMN -->
                    <td><?php echo $row['ID'];?></td>    
                    <td><?php echo $row['FirstName'];?></td>
                    <td><?php echo $row['Address'];?></td>
                    <td><?php echo $row['Email'];?></td>
                    <td><?php echo $row['Contact'];?></td>
                    <td><?php echo $row['BloodGroup'];?></td>
                    <td><?php echo $row['Gender'];?></td>
                    <td>
                        <div class="flex text-white space-x-2"> 
                      <button type="submit" class="open-button bg-blue-600 rounded-lg px-4 py-2"  onclick="openForm()" >Edit</button>
                        
                        <a href="delete_donor.php?ID=<?php echo $row['ID'];?>" class="bg-red-600 rounded-lg px-4 py-2">Delete</a>
                        </div>
                        
                    </td>


                </tr>
                <?php
                    }
                ?>
            </table>
        </section>
        <?php
            }
            else{
                echo("No records found");
            }
        ?>

<!-- popup -->

<div class="popup flex justify-center items-center absolute top-[20%] left-[40%] z-10 max-h-full" id="popup">

<form class=" bg-white p-4 rounded-lg shadow-2xl w-400 h-400 " form method="post" action="donor_edit.php?ID=<?php echo $row['ID']?>" >
  <div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name" name="fname">
        First Name
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Enter Firstname" name="fname" required>
    
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name" name="lname">
        Last Name
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Enter Lastname" name="lname"  required>
    </div>
  </div>


  <div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name" >
        Address
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Enter Address" name="address"  required>
     
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Contact
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Enter Number" name="contact"  required>
    </div>
  </div>


  <div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name" >
       Email
      </label>
      <input name="email" type="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Enter Email"  required>
     
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name" >
       Blood Group
      </label>
      <input name="bgroup" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Enter BloodGroup"  required>
    </div>
  </div>

    <div class="w-full md:w-1/3 px-3 mb-3 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
        Gender
      </label>
      <div class="relative">
        <select  required name="gender" class="block appearance-none w-full bg-gray-200 border border-gray-500 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
          <option>Male</option>
          <option>Female</option>
          <option>Other</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
    <div class="flex space-x-4">
    <input class="text-white bg-blue-600 rounded-lg px-4 py-2 mt-6 w-1/2" type="submit" value="Update"/>
    <button type="buttom" class="text-black border-2 border-black bg-white rounded-lg px-4 py-2 mt-6 w-1/2" onclick="closeForm()">Close</button>       
        </div>
</form>    
       

       



</div>


 <script>

let popup= document.getElementById("popup");
function openForm() {
    
    popup.classList.add("open-popup");
    

}

function closeForm() {
    
    popup.classList.remove("open-popup");
}



</script> 



</body>