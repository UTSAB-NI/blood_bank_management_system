
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

    $sql="SELECT * FROM donor_registration where BloodGroup='O+' ";

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
    
        <section>
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
                        <button  class="open-button bg-blue-600 rounded-lg px-4 py-2" onclick="openForm()" >Edit</button>
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
                ?> 
                <section>
            <h1 class="text-red-500">Donor List </h1>
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
               
                
                    <td colspan="8" class="bg-red-400 text-white"><?php echo "Blood out of stock"?></td>    
                    
                       
                        
                    </td>


                </tr>
                <?php
                    }
                ?>
            </table>
        </section>

            
        