<?php
    if ( isset( $_POST['submitexpo'] ) ) {
        $con = mysqli_connect("localhost:3306", "conso", "Conso123@", "conso");
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        error_reporting(E_ERROR | E_PARSE);

        $email=$_POST['emailexpo'];


        $query = mysqli_query($con, "INSERT into expo (EMAIL) values('$email')");
         mysqli_close($con);
    }
?>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // Check for empty fields
        if(empty($_POST['name'])      ||
           empty($_POST['email'])     ||
           empty($_POST['phone'])     ||
           empty($_POST['message'])   ||
           !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
           {
               echo("
            <script type=\"text/javascript\">
                $('#confirm').append('<br><p class=\"text-uppercase g-font-size-14--xs g-font-weight--400 g-letter-spacing--2 g-margin-b-25--xs\">Plz! Fill the form</p>');
                location.replace(\"#contact\");
            </script>
            ");

               return false;
           }

    $name = strip_tags(htmlspecialchars($_POST['name']));
    $email_address = strip_tags(htmlspecialchars($_POST['email']));
    $phone = strip_tags(htmlspecialchars($_POST['phone']));
    $message = strip_tags(htmlspecialchars($_POST['message']));

    require_once "Mail.php";
    #include("Mail.php");
    $from = "E-CELL VNIT <noreply@ecellvnit.org>";    //your mail id
    $to = "<contact@ecellvnit.org>";
    $subject = "Website Contact Form:  $name";
    $body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
    $host = "ssl://sharedlinux.cloudhostdns.net";
    $port = "465";
    $username = "noreply@ecellvnit.org";          //your mail id
    $password = "VNIT@123";                      //password of this mail id

    $headers = array ('From' => $from,
    'To' => $to,
    'Subject' => $subject);
    $smtp = Mail::factory('smtp',
    array ('host' => $host,
    'port' => $port,
    'auth' => true,
    'username' => $username,
    'password' => $password));

    $mail = $smtp->send($to, $headers, $body);

    if (PEAR::isError($mail)) {
    echo("<p>" . $mail->getMessage() . "</p>");
    }
    else {
       echo("
    <script type=\"text/javascript\">
        $('#confirm').append('<br><p class=\"text-uppercase g-font-size-14--xs g-font-weight--400 g-letter-spacing--2 g-margin-b-25--xs\">Your Message Sent!</p>');
    </script>
    ");
    }

    $from = "E-CELL VNIT <noreply@ecellvnit.org>";    //your mail id
    $to = $email_address;
    $subject = "Thank You For Contacting us";
    $body = "Thank You $name for Contacting us.\n\nWe will surely contact you soon.\n\nFor instant support contact\nName: Meghna Bhave\nEmail: meghna.bhave@gmail.com\nPhone: 8368255076";
    $host = "ssl://sharedlinux.cloudhostdns.net";
    $port = "465";
    $username = "noreply@ecellvnit.org";          //your mail id
    $password = "VNIT@123";                      //password of this mail id

    $headers = array ('From' => $from,
    'To' => $to,
    'Subject' => $subject);
    $smtp = Mail::factory('smtp',
    array ('host' => $host,
    'port' => $port,
    'auth' => true,
    'username' => $username,
    'password' => $password));

    $mail = $smtp->send($to, $headers, $body);

    if (PEAR::isError($mail)) {
    echo("<p>" . $mail->getMessage() . "</p>");
    }
    }
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <!--<link rel="stylesheet" href="transactions.css">-->
        <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/transactions.css">
        <!-- Bootstrap Core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <?php include("head.php"); ?>
    <!-- End Head -->

    <!-- Body -->
    <body id="main">

        <?php include("header.php"); ?>

        <!--========== PROMO BLOCK ==========-->
        <div class="g-bg-position--center js__parallax-window" style="background: black 50% 0 no-repeat fixed;">
            <div class="g-container--md g-text-center--xs g-padding-y-100--xs">
                <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">Transaction Details</h1>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
        <div class="container" id="mainpage">


            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">



                <?php
                     $filename=basename(__FILE__, '.php');
                   $name=basename(__FILE__);
                     $con=mysqli_connect("localhost:3306", "jugaad","VNIT@123","Jugaad18");

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

                $conn=mysqli_connect("localhost:3306", "jugaad","VNIT@123","Jugaad18");
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




                    <?php endwhile; ?>
                </tbody>
            </table>


        </div>


        <section class="form-control s-form-v2__input g-radius--50">
            <div class="col-lg-4">
                <div class="form-group">
                   <input type="text" class="form-control" name="details" placeholder="Details" required>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control"  name="inflow"  placeholder="inflow" required>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control"  name="outflow"  placeholder="outflow" required>
                </div>
            </div>
        </section>



        <div class="right">
            <button type="submit" value="submit" name="form_submit" class="btn btn-primary">Submit</button>
        </div>
        <?php include("footer.php"); ?>



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

        <?php include("scripts.php"); ?>
        <!--========== END JAVASCRIPTS ==========-->
    </body>
</html>