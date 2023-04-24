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

    ?>
    <!-- HTML code to display data in tabular format -->
    <!DOCTYPE html>
    <html lang="en">

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


        <section>
            <h1>Blood List</h1>
            <!-- TABLE CONSTRUCTION -->
            <table>
                <tr>

                    <th>Name</th>
                    <th>Quantity</th>

                </tr>
                <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                <tr>
                    <!-- FETCHING DATA FROM EACH
                        ROW OF EVERY COLUMN -->
                    <td>A+</td>
                    <td>
                        <?php
                        $sql = "SELECT * FROM donor_registration where BloodGroup='A+' ";
                        $result = mysqli_query($conn, $sql);
                        echo (mysqli_num_rows($result));
                        ?>
                    </td>
                </tr>
                <tr>
                    <!-- FETCHING DATA FROM EACH
                        ROW OF EVERY COLUMN -->
                    <td>A-</td>
                    <td>
                        <?php
                        $sql = "SELECT * FROM donor_registration where BloodGroup='A-' ";
                        $result = mysqli_query($conn, $sql);
                        echo (mysqli_num_rows($result));
                        ?>
                    </td>
                </tr>
                <tr>
                    <!-- FETCHING DATA FROM EACH
                        ROW OF EVERY COLUMN -->
                    <td>B+</td>
                    <td>
                        <?php
                        $sql = "SELECT * FROM donor_registration where BloodGroup='B+' ";
                        $result = mysqli_query($conn, $sql);
                        echo (mysqli_num_rows($result));
                        ?>
                    </td>
                </tr>
                <tr>
                    <!-- FETCHING DATA FROM EACH
                        ROW OF EVERY COLUMN -->
                    <td>B-</td>
                    <td>
                        <?php
                        $sql = "SELECT * FROM donor_registration where BloodGroup='B-' ";
                        $result = mysqli_query($conn, $sql);
                        echo (mysqli_num_rows($result));
                        ?>
                    </td>
                </tr>

                <tr>
                    <!-- FETCHING DATA FROM EACH
                        ROW OF EVERY COLUMN -->
                    <td>O+</td>
                    <td>
                        <?php
                        $sql = "SELECT * FROM donor_registration where BloodGroup='O+' ";
                        $result = mysqli_query($conn, $sql);
                        echo (mysqli_num_rows($result));
                        ?>
                    </td>
                </tr>
                <tr>
                    <!-- FETCHING DATA FROM EACH
                        ROW OF EVERY COLUMN -->
                    <td>O-</td>
                    <td>
                        <?php
                        $sql = "SELECT * FROM donor_registration where BloodGroup='O-' ";
                        $result = mysqli_query($conn, $sql);
                        echo (mysqli_num_rows($result));
                        ?>
                    </td>
                </tr>

                <tr>
                    <!-- FETCHING DATA FROM EACH
                        ROW OF EVERY COLUMN -->
                    <td>AB+</td>
                    <td>
                        <?php
                        $sql = "SELECT * FROM donor_registration where BloodGroup='AB+' ";
                        $result = mysqli_query($conn, $sql);
                        echo (mysqli_num_rows($result));
                        ?>
                    </td>
                </tr>

                <tr>
                    <!-- FETCHING DATA FROM EACH
                        ROW OF EVERY COLUMN -->
                    <td>AB-</td>
                    <td>
                        <?php
                        $sql = "SELECT * FROM donor_registration where BloodGroup='AB-' ";
                        $result = mysqli_query($conn, $sql);
                        echo (mysqli_num_rows($result));
                        ?>
                    </td>
                </tr>



                <?php

                ?>
            </table>
        </section>
        <?php

        ?>



        ?>
    </body>