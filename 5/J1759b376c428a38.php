<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Transactions">
    <meta name="author" content="Vipul Wairagade">
    <title>Transactions</title>
    <link href="../img/logo%20vnit.png" rel="shortcut icon">
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
</head>

<body>

<div class="container" id="mainpage">

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <div class="well" style="text-align:center">
            <h1 >Transaction Details</h1>
        <?php
        $filename=basename(__FILE__, '.php');
        $name=basename(__FILE__);
        $con=mysqli_connect("localhost:3306", "vipul2","Ecellvnit123@","jugaad");

        $sql = "SELECT SUM(inflow) AS total_inflow FROM $filename";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $inflow =$row['total_inflow'];
                echo "Total inflow  is : " . $row["total_inflow"];
            }
        } else {
            echo "0 results";
        }

        $sql = "SELECT SUM(outflow) AS total_outflow FROM $filename";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $outflow =$row['total_outflow'];
                echo nl2br("\nTotal outflow  is : " . $row["total_outflow"]);
            }
        } else {
            echo "0 results";
        }

        $PROFIT= $inflow-$outflow;
        echo nl2br("\nProfit is $PROFIT");		
		
		$query=mysqli_query($con," UPDATE profit 
                 SET PROFIT = '$PROFIT' 
               WHERE UNIQUE_ID = '$filename'");
        ?>

        </div>
        <section class="well">
            <div class="form-group">

                <input type="text" class="form-control" name="details" placeholder="Details" required>
            </div>
            <div class="form-group">
                <input type="number" class="form-control"  name="inflow"  placeholder="inflow" required>
            </div>
            <div class="form-group">
                <input type="number" class="form-control"  name="outflow"  placeholder="outflow" required>
            </div>
            <button type="submit" value="submit" name="form_submit" class="btn btn-primary">Submit</button>
        </section>
    </form>

</div>

<div class="container">

    <table class="table" id="myTable">
        <thead>
        <tr>
            <th>TIMESTAMP</th>
            <th>ID</th>
            <th>DETAILS</th>
            <th>INFLOW</th>
            <th>OUTFLOW</th>
        </tr>
        </thead>

        <tbody>
        <?php
        $filename=basename(__FILE__, '.php');
        $name=basename(__FILE__);
        if ( isset( $_POST['form_submit'] ) ) {

            /**
             * Created by PhpStorm.
             * User: vipul
             * Date: 1/8/17
             * Time: 6:24 PM
             */

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
            $con = mysqli_connect("localhost:3306", "vipul2", "Ecellvnit123@", "jugaad");

// Check connection
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $query = mysqli_query($con, "INSERT into $filename (DETAILS, INFLOW, OUTFLOW ) values('$details','$inflow','$outflow')");
            if ($query) {
                echo '<h3 style="text-align: center"><span id="success">Form Submitted Successfully</span></h3>';
                header('Location: '.$name);
            } else {
                echo("Error description: " . mysqli_error($con));
                echo '<h3><span>Form Submission Failed</span></h3>';
            }

           /* $sqlprofit ="UPDATE profit SET PROFIT='$PROFIT' WHERE id='$name'";

            if (mysqli_query($con, $sqlprofit)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($con);
            } */

            mysqli_close($con);

        }

        $conn=mysqli_connect("localhost:3306", "vipul2","Ecellvnit123@","jugaad");
        $result=mysqli_query($conn, "SELECT * FROM $filename");

        while ($row = mysqli_fetch_assoc($result)):
            ?>
            <tr>
                <td><?php echo $row['reg_date'];?></td>
                <td><?php echo $row['ID'];?></td>
                <td><?php echo $row['DETAILS'];?></td>
                <td><?php echo $row['INFLOW'];?></td>
                <td><?php echo $row['OUTFLOW'];?></td>
            </tr>




            <?php
        endwhile;
        ?>
        </tbody>
    </table>


</div>


<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../tables/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- DataTables -->

<script src="../tables/jquery.dataTables.js"></script>
<script src="../tables/dataTables.bootstrap.js"></script>

<script language="javascript">
    $(document).ready(function(){
        $('#myTable').dataTable();
    });
</script>
</body>

</html>
