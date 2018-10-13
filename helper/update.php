<?php

    function updateprofit($filename, $name){

            $con=mysqli_connect("localhost:3306", "jugaad","VNIT@123","Jugaad18");

            if (isset($_POST['details'])) {
                $details = $_POST['details'];
            }

            if (isset($_POST['inflow'])) {
                $inflow = $_POST['inflow'];
            }
            if (isset($_POST['outflow'])) {
                $outflow = $_POST['outflow'];
            }

            //Storing values in database
            $con = mysqli_connect("localhost:3306", "jugaad", "VNIT@123", "Jugaad18");

            // Check connection
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $query = mysqli_query($con, "INSERT into $filename (DETAILS, INFLOW, OUTFLOW ) values('$details','$inflow','$outflow')");
            if ($query) {
                echo '<h3 style="text-align: center"><span id="success">Form Submitted Successfully</span></h3>';
                header('Location: '.$name);
            }
            else {
                echo("Error description: " . mysqli_error($con));
                echo '<h3><span>Form Submission Failed</span></h3>';
            }

        //   $sqlprofit ="UPDATE profit SET PROFIT='$PROFIT' WHERE id='$name'";

        //     if (mysqli_query($con, $sqlprofit)) {
        //         echo "Record updated successfully";
        //     } else {
        //         echo "Error updating record: " . mysqli_error($con);
        //     }

            mysqli_close($con);


    }


?>