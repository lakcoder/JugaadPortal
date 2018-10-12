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
$password = "Ecellvnit123@";                      //password of this mail id

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
} else {
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
$password = "Ecellvnit123@";                      //password of this mail id

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
        <link rel="stylesheet" href="transactions.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125403862-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-125403862-1');
    </script>


        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1">
	    <meta name="google-site-verification" content="gXeMBX--H7xSFeawu77WYuSIYyuZQdkI4YQQnV0Hf_Y" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Jugaad'18 |E-CELL | VNIT</title>
        <meta name="keywords" content="Ecell, vnit, E-cell VNIT, entreprenuship cell, consortium 18, 2018, consortium'18, vnit consortium" />
        <meta name="description" content="E-Cell VNIT aims to promote and develop entrepreneurship culture amongst the students. Throughout the year, we
                        conduct various events, workshops and speaker
                        sessions sessions for inspiring and assisting young
                        entrepreneurs in their journey in the world of
                        business">
        <meta name="author" content="Sagar Bansal">

        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

        <!-- Vendor Styles -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>


        <!-- Theme Styles -->
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/materialize.css" rel="stylesheet" type="text/css"/>
        <link href="css/overlay.css" rel="stylesheet" type="text/css"/>
        <link href="css/global/global.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/icon.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">-->

    <link rel="stylesheet" href="css/transactions.css">

    </head>
    <!-- End Head -->

    <!-- Body -->
    <body id="main">

        <?php include("header.php");?>

        <!--========== PROMO BLOCK ==========-->
        <div class="g-bg-position--center js__parallax-window" style="background: black 50% 0 no-repeat fixed;">
            <div class="g-container--md g-text-center--xs g-padding-y-100--xs">
                <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">Transaction Details</h1>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
        <div class="container" id="mainpage">
    <div class="container g-padding-y-10--xs g-padding-y-40--sm">
            <div class="col-md-12 g-margin-t-15--xs g-margin-b-60--xs g-margin-b-0--lg">
                    <div class="wow fadeInLeft g-text-center--xs" data-wow-duration=".3" data-wow-delay=".3s">
                        <h2 class="g-font-size-32--xs g-font-size-36--sm g-font-size-36--md ">Transaction Details</h2>
                    </div>
            </div>
    </div>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">



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



        </div>


        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script type="text/javascript" src="vendor/jquery.min.js"></script>
		<script src="js/main.js"></script>
        <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="vendor/swiper/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="vendor/waypoint.min.js"></script>
        <script type="text/javascript" src="vendor/counterup.min.js"></script>
        <script type="text/javascript" src="vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.parallax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U"></script>
        <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>
        <script src="/js/cards.js"></script>
		<script src="/js/materialize.js"></script>


        <!-- General Components and Settings -->
        <script type="text/javascript" src="js/global.min.js"></script>
        <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="js/components/magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/components/swiper.min.js"></script>
        <script type="text/javascript" src="js/components/counter.min.js"></script>
        <script type="text/javascript" src="js/components/portfolio-3-col.min.js"></script>
        <script type="text/javascript" src="js/components/parallax.min.js"></script>
        <script type="text/javascript" src="js/components/google-map.min.js"></script>
        <script type="text/javascript" src="js/components/wow.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>
